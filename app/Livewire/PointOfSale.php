<?php
namespace App\Livewire;
use Livewire\Component;

class PointOfSale extends Component
{
    public $activeCategory = 'all';
    public $cart = [];

    public $products = [
        ['id' => 1, 'name' => 'Grilled Chicken', 'category' => 'protein', 'price' => 12.99],
        ['id' => 2, 'name' => 'Fresh Salad Bowl', 'category' => 'protein', 'price' => 8.99],
        ['id' => 3, 'name' => 'Classic Burger', 'category' => 'protein', 'price' => 10.99],
        ['id' => 4, 'name' => 'Grilled Fish', 'category' => 'protein', 'price' => 14.99],
        ['id' => 5, 'name' => 'Fresh Coffee', 'category' => 'beverages', 'price' => 3.99],
        ['id' => 6, 'name' => 'Orange Juice', 'category' => 'beverages', 'price' => 4.99],
        ['id' => 7, 'name' => 'Soda', 'category' => 'beverages', 'price' => 2.99],
        ['id' => 8, 'name' => 'Berry Smoothie', 'category' => 'beverages', 'price' => 5.99],
        ['id' => 9, 'name' => 'Potato Chips', 'category' => 'snacks', 'price' => 2.49],
        ['id' => 10, 'name' => 'French Fries', 'category' => 'snacks', 'price' => 3.99],
        ['id' => 11, 'name' => 'Nachos', 'category' => 'snacks', 'price' => 4.99],
        ['id' => 12, 'name' => 'Cookies', 'category' => 'snacks', 'price' => 2.99],
    ];

    public function setCategory($category) {
        $this->activeCategory = $category;
    }

    public function addToCart($productId) {
        $product = collect($this->products)->firstWhere('id', $productId);
        if (isset($this->cart[$productId])) {
            $this->cart[$productId]['quantity']++;
        } else {
            $this->cart[$productId] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1
            ];
        }
    }

    public function getFilteredProducts() {
        if ($this->activeCategory === 'all') return $this->products;
        return collect($this->products)->filter(fn($p) => $p['category'] === $this->activeCategory)->values()->toArray();
    }

    public function getCartTotal() {
        return collect($this->cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    }

    public function render()
{
    return view('livewire.point-of-sale', [
        'filteredProducts' => $this->getFilteredProducts(),
        'cartTotal' => $this->getCartTotal()
    ])->layout('layouts.app');
}
}
