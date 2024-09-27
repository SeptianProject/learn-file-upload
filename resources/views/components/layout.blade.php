<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900 p-10">
        <div class="mx-auto max-w-screen-lg px-4 lg:px-10 relative">
            {{ $slot }}
        </div>
    </section>
</body>

</html>
