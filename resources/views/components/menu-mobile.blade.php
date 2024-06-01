<nav class="mobile">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/ic-home.png') }}">
                <div>Home</div>
            </a>
            <a href="/product/all" wire:navigate>
                <img src="{{ asset('img/ic-scooter.png') }}">
                <div>Product</div>
            </a>
            <a href="/spart/all" wire:navigate>
                <img src="{{ asset('img/ic-parts.png') }}">
                <div>Parts</div>
            </a>
            <a href="{{ route('simulation') }}">
                <img src="{{ asset('img/ic-calculator.png') }}">
                <div>Credit</div>
            </a>
            <a href="/contact" wire:navigate>
                <img src="{{ asset('img/ic-call.png') }}">
                <div>Contact</div>
            </a>
            <a href="/job/all" wire:navigate>
                <img src="{{ asset('img/ic-vacancy.png') }}">
                <div>Career</div>
            </a>
            <a href="https://yamahabismagroup.com/sosmed" target="_blank">
                <img src="{{ asset('img/ic-socmed.png') }}">
                <div>Social</div>
            </a>
            <a href="/about" wire:navigate>
                <img src="{{ asset('img/ic-about.png') }}">
                <div>About</div>
            </a>
        </div>
    </div>
</nav>