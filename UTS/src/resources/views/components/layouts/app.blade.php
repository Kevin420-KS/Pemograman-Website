<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.partials.head')
</head>
<body class="bg-black text-white min-h-screen flex flex-col">
    @include('components.partials.nav')

    <main class="flex-grow container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    @include('components.partials.bottom')
    @include('components.partials.script')
</body>
</html>