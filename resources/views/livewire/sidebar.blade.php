<nav>
    <div class="logo">
        <div class="sidehover"></div>
        <img src="{{ asset('img/logo-only.png') }}" alt="Bisma Group 1969" class="img-fluid">
    </div>
    <a href="{{ route('home') }}">
        <div class="menu {{ Request::is('/') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-home.png') }}"><span>Home</span>
        </div>
    </a>
    <a href="/product/all" wire:navigate>
        <div class="menu {{ Request::is('product/*') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-scooter.png') }}"><span>Product</span>
        </div>
    </a>
    <a href="/simulation" wire:navigate>
        <div class="menu {{ Request::is('simulation') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-calculator.png') }}"><span>Credit Simulation</span>
        </div>
    </a>
    <a href="/contact" wire:navigate>
        <div class="menu {{ Request::is('contact') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-call.png') }}"><span>Contact</span>
        </div>
    </a>
    <a href="/about" wire:navigate>
        <div class="menu {{ Request::is('about') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-about.png') }}"><span>About Us</span>
        </div>
    </a>
</nav>