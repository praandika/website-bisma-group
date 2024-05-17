<div class="content">
    <!-- Header -->
    <div class="header">
        <div class="row">
            <div class="col-lg-4 col-md-12 menu-title">
                Spare Parts
            </div>
            <div class="col-lg-6 col-md-12 link">
                <span><a href="/spart/all" wire:navigate
                        class="{{ Request::is('spart/all') ? 'active-link' : '' }}">All</a></span>
                <span><a href="/spart/ygp" wire:navigate
                        class="{{ Request::is('spart/ygp') ? 'active-link' : '' }}">YAMAHA GENUINE PARTS</a></span>
                <span><a href="/spart/yamalube" wire:navigate
                        class="{{ Request::is('spart/yamalube') ? 'active-link' : '' }}">OLI</a></span>
                <span><a href="/spart/helmet" wire:navigate
                        class="{{ Request::is('spart/helmet') ? 'active-link' : '' }}">HELMET</a></span>
            </div>
            <div class="col-lg-2 col-md-12 search">
                <x-search/>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 item">
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
            <div class="col-lg-4 col-md-6 col-sm-12 item">
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
            <div class="col-lg-4 col-md-6 col-sm-12 item">
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
            <div class="col-lg-4 col-md-6 col-sm-12 item">
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
            <div class="col-lg-4 col-md-6 col-sm-12 item">
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
            <div class="col-lg-4 col-md-6 col-sm-12 item">
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
        </div>
    </div>

    <x-back-to-top/>
</div>
