<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>POS</title>
    @vite('resources/css/app.css')
    @livewireStyles
    @fluxAppearance
    @fluxScripts
</head>
<body class="bg-gray-50">

    {{ $slot }}

    @livewireScripts
</body>
</html>
