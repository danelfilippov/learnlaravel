<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <a href="/">Home</a>
    <div class="container mx-auto">
        <button type="button"
            class="inline-block cursor-pointer select-none rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-center align-middle text-base font-normal leading-normal text-white transition-colors duration-150 ease-in-out hover:border-[#0a58ca] hover:bg-[#0b5ed7] active:border-[#0a53be] active:bg-[#0a58ca] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#3184fd]/50 disabled:pointer-events-none disabled:opacity-65">
            Primary
        </button>

        <button type="button" disabled
            class="inline-block cursor-pointer select-none rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-center align-middle text-base font-normal leading-normal text-white transition-colors duration-150 ease-in-out hover:border-[#0a58ca] hover:bg-[#0b5ed7] active:border-[#0a53be] active:bg-[#0a58ca] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#3184fd]/50 disabled:pointer-events-none disabled:opacity-65">
            Disabled
        </button>
    </div>
</body>
</html>
