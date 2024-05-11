<nav>
    <div class="logo">
        <img src="{{ asset('img/logo-only.png') }}" alt="Bisma Group 1969" class="img-fluid">
    </div>
    <a href="{{ route('home') }}">
        <div class="menu {{ Request::is('/') ? 'active' : '' }}">Home</div>
    </a>
    <a href="/product/all" wire:navigate>
        <div class="menu {{ Request::is('product/*') ? 'active' : '' }}">Product</div>
    </a>
    <a href="/simulation" wire:navigate>
        <div class="menu {{ Request::is('simulation') ? 'active' : '' }}">Credit Simulation</div>
    </a>
    <a href="/contact" wire:navigate>
        <div class="menu {{ Request::is('contact') ? 'active' : '' }}">Contact</div>
    </a>
    <a href="/about" wire:navigate>
        <div class="menu {{ Request::is('about') ? 'active' : '' }}">About Us</div>
    </a>
</nav>