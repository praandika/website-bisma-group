<nav class="desktop">
    <div class="logo">
        <div class="sidehover"></div>
        <img src="{{ asset('img/logo-only.png') }}" alt="Bisma Group 1969" class="img-fluid">
    </div>
    <a href="{{ route('home') }}">
        <div class="menu {{ Request::is('/') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-home-dark.png') }}"><span>Home</span>
        </div>
    </a>
    <a href="{{ url('product/all') }}" wire:navigate>
        <div class="menu {{ Request::is('product/*') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-scooter-dark.png') }}"><span>Product</span>
        </div>
    </a>
    <a href="{{ url('spart/all') }}" wire:navigate>
        <div class="menu {{ Request::is('spart/*') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-parts-dark.png') }}"><span>Spare Parts</span>
        </div>
    </a>
    <a href="{{ route('simulation') }}">
        <div class="menu {{ Request::is('simulation') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-calculator-dark.png') }}"><span>Credit Simulation</span>
        </div>
    </a>
    <a href="{{ url('contact') }}" wire:navigate>
        <div class="menu {{ Request::is('contact') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-call-dark.png') }}"><span>Contact</span>
        </div>
    </a>
    <a href="{{ url('job/all') }}" wire:navigate>
        <div class="menu {{ Request::is('job/*') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-vacancy-dark.png') }}"><span>Job Vacancy</span>
        </div>
    </a>
    <a href="https://yamahabismagroup.com/sosmed" target="_blank">
        <div class="menu {{ Request::is('socmed') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-socmed-dark.png') }}"><span>Social Media</span>
        </div>
    </a>
    <a href="{{ url('about') }}" wire:navigate>
        <div class="menu {{ Request::is('about') ? 'active' : '' }}">
            <div class="sidehover"></div>    
            <img src="{{ asset('img/ic-about-dark.png') }}"><span>About Us</span>
        </div>
    </a>
</nav>