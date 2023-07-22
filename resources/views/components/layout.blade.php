<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/logokecil.png') }}" type="image/x-icon"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;700&display=swap');
    </style>
    <title>Dapur Panen</title>
</head>
<body>
<!--    Navbar Section -->
<nav class="fixed px-12 py-7 w-full flex justify-between z-50 bg-putih items-center border-b-2 border-[#EAEAEB]">
    <a href="/">
        <img src="images/Logo.png" alt="" class="w-[247px]">
    </a>
    <div class="flex gap-8 text-abu text-base font-poppins">
        <a href="/" class="hover:text-hijauTua hover:font-semibold">Home</a>
        <a href="/product" class="hover:text-hijauTua hover:font-semibold">Product</a>
        <a href="/promo" class="hover:text-hijauTua hover:font-semibold">Promo</a>
        <a href="/" class="hover:text-hijauTua hover:font-semibold">Blog</a>
        <a href="/about" class="hover:text-hijauTua hover:font-semibold">About Us</a>
        <a href="/" class="hover:text-hijauTua hover:font-semibold">Contact Us</a>
    </div>
    <a href="#" class="flex bg-hijau rounded-full w-40 h-11 px-5 py-2.5">
        <span class="text-putih font-poppins font-semibold text-base">Download App</span>
    </a>
</nav>

<main>
    {{ $slot }}
</main>

</body>
</html>
