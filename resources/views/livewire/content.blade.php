<div class="content">
    @forelse($data as $o)
    <div class="slide-content slide-in-top">
        <a href="{{ $o['link'] }}">
            <img src="http://127.0.0.1:8000/img/banner/{{ $o['image'] }}" alt="Banner" class="img-fluid" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $o['title'] }}">
        </a>
    </div>
    @empty
    <div class="slide-content slide-in-top">
        <img src="{{ asset('img/banner/banner.png') }}" alt="Banner" class="img-fluid">
    </div>
    @endforelse

    <livewire:call-to-action/>
    <livewire:featured/>
    <x-back-to-top />
</div>

@push('after-js')
<script src="{{ asset('js/slideshow.js') }}"></script>
@endpush