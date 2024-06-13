<nav class="mobile">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <div class="col-4 logo-menu">
                <img src="{{ asset('img/footer-logo.png') }}" class="img-fluid">
            </div>
            <div class="col-4 contact-menu">
                <a href="{{ url('contact') }}" wire:navigate>
                    <img src="{{ asset('img/ic-call.png') }}">
                    <span>Contact</span>
                </a>
            </div>
            <div class="col-4 simulation-menu">
                <a href="{{ route('simulation') }}">
                    <img src="{{ asset('img/ic-calculator.png') }}">
                    <span>Credit Simulation</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/ic-home.png') }}">
                <div>Home</div>
            </a>
            <a href="{{ url('product/all') }}" wire:navigate>
                <img src="{{ asset('img/ic-scooter.png') }}">
                <div>Product</div>
            </a>
            <a href="{{ url('spart/all') }}" wire:navigate>
                <img src="{{ asset('img/ic-parts.png') }}">
                <div>Parts</div>
            </a>
            <a href="{{ url('job/all') }}" wire:navigate>
                <img src="{{ asset('img/ic-vacancy.png') }}">
                <div>Career</div>
            </a>
            <a href="https://yamahabismagroup.com/sosmed" target="_blank">
                <img src="{{ asset('img/ic-socmed.png') }}">
                <div>Social</div>
            </a>
            <a href="{{ url('about') }}" wire:navigate>
                <img src="{{ asset('img/ic-about.png') }}">
                <div>About</div>
            </a>
        </div>
    </div>
</nav>