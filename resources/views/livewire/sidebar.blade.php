<nav>
    <div class="logo">
        <div class="sidehover"></div>
        <img src="{{ asset('img/logo-only.png') }}" alt="Bisma Group 1969" class="img-fluid">
    </div>
    <a href="{{ route('home') }}">
        <div class="menu {{ Request::is('/') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            Home
        </div>
    </a>
    <a href="/product/all" wire:navigate>
        <div class="menu {{ Request::is('product/*') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            Product
        </div>
    </a>
    <a href="/simulation" wire:navigate>
        <div class="menu {{ Request::is('simulation') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            Credit Simulation
        </div>
    </a>
    <a href="/contact" wire:navigate>
        <div class="menu {{ Request::is('contact') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            Contact
        </div>
    </a>
    <a href="/about" wire:navigate>
        <div class="menu {{ Request::is('about') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            About Us
        </div>
    </a>
</nav>