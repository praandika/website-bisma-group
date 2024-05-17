<div class="content">
    <!-- Header -->
    <div class="header">
        <div class="row">
            <div class="col-lg-6 col-md-12 menu-title">
                Search '{{ $title }}'
            </div>
            <div class="col-lg-6 col-md-12 search">
                <x-search/>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <div class="container-fluid text-center">
        <div class="row">
            @forelse($data as $o)
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                @if(Request::is('product'))
                <a href="/product/{{ str_replace(' ', '_', $o->model_name) }}/show" wire:navigate>
                    <img src="{{ asset('img/motorcycle/'.$o->image.'') }}" class="img-fluid">
                    <p class="model-name">{{ $o->model_name }}</p>
                    <p class="price"><span class="strip"></span>Rp{{ number_format($o->price, 0, ',','.') }}<span
                            class="strip"></span></p>
                </a>
                @elseif
                <a href="#">
                    <img src="{{ asset('img/motorcycle/noimage.jpg') }}" class="img-fluid">
                    <p class="model-name">Parts Name</p>
                    <p class="price"><span class="strip"></span>Rp200.000<span
                            class="strip"></span></p>
                    <button class="order">
                        <img src="{{ asset('img/ic-order.png') }}">Order Parts
                    </button>
                </a>
            </div>
            @empty
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <p>No Data</p>
            </div>
            @endforelse
        </div>
    </div>

    <x-back-to-top/>
</div>
