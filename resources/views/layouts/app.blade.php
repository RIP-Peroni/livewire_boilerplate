<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <livewire:styles />
    
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
</head>
<body class="flex flex-wrap content-start justify-center">
    <div class="my-5 w-full flex justify-center">
        {{ $slot }}
    </div>
    <livewire:scripts />
</body>