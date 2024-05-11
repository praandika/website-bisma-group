<div class="content">
    <div class="slide-content slide-in-top">
        <img src="{{ asset('img/banner/banner.png') }}" alt="Banner" class="img-fluid">
    </div>
    <div class="slide-content slide-in-top">
        <img src="{{ asset('img/banner/banner-1.png') }}" alt="Banner" class="img-fluid">
    </div>
    <div class="slide-content slide-in-top">
        <img src="{{ asset('img/banner/banner-2.png') }}" alt="Banner" class="img-fluid">
    </div>
</div>

@push('after-js')
<script src="{{ asset('js/slideshow.js') }}"></script>
@endpush