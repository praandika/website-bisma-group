<x-layouts.app>
    @if(Route::is('search'))
        @include('components.result')
    @else
        <livewire:content/>
    @endif
</x-layouts.app>