<!doctype html>

<title>Test LogIn</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-300 border border-gray-700 p-6 rounded-xl">

        {{ $slot }}


    </main>
</section>

<x-flash/>

</body>
