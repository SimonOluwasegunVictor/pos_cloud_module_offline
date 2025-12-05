<?php

namespace App\Livewire;

use Livewire\Component;

class PointOfSale extends Component
{
    public $activeCategory = 'all';
    public $cart = [];
    public $darkMode = false;

    public function mount()
    {
        $this->cart = [];
        // Load dark mode preference from session
        $this->darkMode = session('darkMode', false);
    }

    public function toggleDarkMode()
    {
        $this->darkMode = !$this->darkMode;
        session(['darkMode' => $this->darkMode]);
    }

    public function setCategory($category)
    {
        $this->activeCategory = $category;
    }

    public function goToLogin()
    {
        return redirect()->route('sales.login');
    }

    public function addToCart($productId)
    {
        $product = $this->getProduct($productId);

        if (!$product) return;

        $existingIndex = collect($this->cart)->search(fn($item) => $item['id'] === $productId);

        if ($existingIndex !== false) {
            $this->cart[$existingIndex]['quantity']++;
        } else {
            $this->cart[] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'category' => $product['category'],
                'quantity' => 1
            ];
        }
    }

    public function updateQuantity($id, $quantity)
    {
        if ($quantity <= 0) {
            $this->removeFromCart($id);
            return;
        }

        foreach ($this->cart as $index => $item) {
            if ($item['id'] === $id) {
                $this->cart[$index]['quantity'] = $quantity;
                break;
            }
        }
    }

    public function removeFromCart($id)
    {
        $this->cart = collect($this->cart)
            ->filter(fn($item) => $item['id'] !== $id)
            ->values()
            ->toArray();
    }

    public function clearCart()
    {
        $this->cart = [];
    }

    public function checkout()
    {
        $total = $this->getTotal();

        session()->flash('message', 'Checkout complete! Total: $' . number_format($total, 2));

        $this->cart = [];
    }

    public function getSubtotal()
    {
        return collect($this->cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    }

    public function getTax()
    {
        return $this->getSubtotal() * 0.1;
    }

    public function getTotal()
    {
        return $this->getSubtotal() + $this->getTax();
    }

    public function getProducts()
    {
        return [
            ['id' => 1, 'name' => 'Chicken Breast', 'price' => 12.99, 'category' => 'protein'],
            ['id' => 2, 'name' => 'Salmon Fillet', 'price' => 18.99, 'category' => 'protein'],
            ['id' => 3, 'name' => 'Ground Beef', 'price' => 9.99, 'category' => 'protein'],
            ['id' => 4, 'name' => 'Pork Chops', 'price' => 11.99, 'category' => 'protein'],
            ['id' => 5, 'name' => 'Turkey Breast', 'price' => 14.99, 'category' => 'protein'],
            ['id' => 6, 'name' => 'Lamb Chops', 'price' => 22.99, 'category' => 'protein'],
            ['id' => 7, 'name' => 'Orange Juice', 'price' => 4.99, 'category' => 'beverages'],
            ['id' => 8, 'name' => 'Coca Cola', 'price' => 2.99, 'category' => 'beverages'],
            ['id' => 9, 'name' => 'Sparkling Water', 'price' => 3.49, 'category' => 'beverages'],
            ['id' => 10, 'name' => 'Green Tea', 'price' => 3.99, 'category' => 'beverages'],
            ['id' => 11, 'name' => 'Energy Drink', 'price' => 4.49, 'category' => 'beverages'],
            ['id' => 12, 'name' => 'Apple Juice', 'price' => 4.49, 'category' => 'beverages'],
            ['id' => 13, 'name' => 'Potato Chips', 'price' => 3.99, 'category' => 'snacks'],
            ['id' => 14, 'name' => 'Chocolate Bar', 'price' => 2.49, 'category' => 'snacks'],
            ['id' => 15, 'name' => 'Granola Bar', 'price' => 3.49, 'category' => 'snacks'],
            ['id' => 16, 'name' => 'Trail Mix', 'price' => 5.99, 'category' => 'snacks'],
            ['id' => 17, 'name' => 'Cookies', 'price' => 4.49, 'category' => 'snacks'],
            ['id' => 18, 'name' => 'Pretzels', 'price' => 3.49, 'category' => 'snacks'],
        ];
    }

    public function getFilteredProducts()
    {
        $products = $this->getProducts();

        if ($this->activeCategory === 'all') {
            return $products;
        }

        return collect($products)
            ->filter(fn($product) => $product['category'] === $this->activeCategory)
            ->values()
            ->toArray();
    }

    private function getProduct($id)
    {
        return collect($this->getProducts())->firstWhere('id', $id);
    }

    public function render()
    {
        return view('livewire.point-of-sale', [
            'products' => $this->getFilteredProducts(),
            'subtotal' => $this->getSubtotal(),
            'tax' => $this->getTax(),
            'total' => $this->getTotal(),
        ])->layout('layouts.app');
    }
}
