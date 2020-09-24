<x-html :title="$attributes->get('title') ?? ''"
    class="text-cool-gray-800 leading-normal lg:px-2 font-sans"
    x-data="AppOffCanvasMenu()">

    <x-slot name="head">
        {{ $head ?? '' }}
        <link rel="stylesheet" href="{{ mix('css/docs.css') }}">
    </x-slot>

    @include('_partials.nav')

    {{ $slot }}

    <x-slot name="footer">
        <script defer src="{{ mix('js/app.js') }}"></script>

        {{ $footer ?? '' }}
        @stack('scripts')
    </x-slot>
</x-html>
