<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrapi nupp Tailwindiga</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.css'])
</head>
<body class="bg-white p-8 font-sans text-gray-900">
    <h1 class="mb-6 text-2xl font-bold">Bootstrapi <code>btn btn-primary</code> Tailwindiga</h1>

    {{--
        Bootstrap 5.3 .btn + .btn-primary väärtused → Tailwindi klassid:

        Põhi
          display: inline-block                  → inline-block
          padding: .375rem .75rem (6px 12px)     → px-3 py-1.5
          font-size: 1rem; line-height: 1.5      → text-base leading-normal
          font-weight: 400                       → font-normal
          border: 1px solid #0d6efd              → border border-[#0d6efd]
          border-radius: .375rem (6px)           → rounded-md
          background: #0d6efd; color: #fff       → bg-[#0d6efd] text-white
          text-align: center; vertical-align     → text-center align-middle
          user-select: none; cursor: pointer     → select-none cursor-pointer
          transition: .15s ease-in-out           → transition duration-150 ease-in-out

        Hover:   bg #0b5ed7, border #0a58ca
        Active:  bg #0a58ca, border #0a53be
        Focus:   box-shadow 0 0 0 .25rem rgba(49,132,253,.5) → ring-4 ring-[#3184fd]/50
                 (ainult klaviatuuriga liikudes → focus-visible:)
        Disabled: opacity .65, pointer-events: none
    --}}
    @php
        $btn = 'inline-block cursor-pointer select-none rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 '
             . 'text-center align-middle text-base font-normal leading-normal text-white no-underline '
             . 'transition duration-150 ease-in-out '
             . 'hover:border-[#0a58ca] hover:bg-[#0b5ed7] '
             . 'focus:outline-none focus-visible:border-[#0a58ca] focus-visible:bg-[#0b5ed7] focus-visible:ring-4 focus-visible:ring-[#3184fd]/50 '
             . 'active:border-[#0a53be] active:bg-[#0a58ca] '
             . 'disabled:pointer-events-none disabled:opacity-65 '
             . 'aria-disabled:pointer-events-none aria-disabled:opacity-65';
    @endphp

    <div class="flex flex-wrap items-center gap-2">
        <button type="button" class="{{ $btn }}">
            Primary
        </button>

        <button type="button" class="{{ $btn }}" disabled>
            Disabled
        </button>

        <a href="#" role="button" class="{{ $btn }}">
            Link nupuna
        </a>

        <a href="#" role="button" class="{{ $btn }}" aria-disabled="true" tabindex="-1">
            Disabled link
        </a>
    </div>

    <h2 class="mb-4 mt-10 text-xl font-semibold">Bootstrap 5.3 <code>btn btn-primary</code> (võrdluseks)</h2>

    <div class="flex flex-wrap items-center gap-2">
        <button type="button" class="btn btn-primary">
            Primary
        </button>

        <button type="button" class="btn btn-primary" disabled>
            Disabled
        </button>

        <a href="#" role="button" class="btn btn-primary">
            Link nupuna
        </a>

        <a href="#" role="button" class="btn btn-primary disabled" aria-disabled="true" tabindex="-1">
            Disabled link
        </a>
    </div>
</body>
</html>
