<footer>
    <span class="link">
        <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active-footer' : '' }}">Home</a>
    </span>
    <span class="link">
        <a href="/product/all" class="{{ Request::is('product/*') ? 'active-footer' : '' }}">Product</a>
    </span>
    <span class="link">
        <a href="/spart/all" class="{{ Request::is('spart/*') ? 'active-footer' : '' }}">Spare Parts</a>
    </span>
    <span class="link">
        <a href="/simulation" class="{{ Request::is('simulation') ? 'active-footer' : '' }}">Credit Simulation</a>
    </span>
    <span class="link">
        <a href="/contact" class="{{ Request::is('contact') ? 'active-footer' : '' }}">Contact</a>
    </span>
    <span class="link">
        <a href="/job/all" class="{{ Request::is('job/*') ? 'active-footer' : '' }}">Job Vacancy</a>
    </span>
    <span class="link">
        <a href="https://yamahabismagroup.com/sosmed" class="{{ Request::is('socmed') ? 'active-footer' : '' }}">Social Media</a>
    </span>
    <span class="link">
        <a href="/about" class="{{ Request::is('about') ? 'active-footer' : '' }}">About Us</a>
    </span>
    <div class="credit">
        <p>
            &copy; COPYRIGHT BY <a href="https://www.instagram.com/dikanayoga/" target="_blank">ANDIKA PRANAYOGA</a>
        </p>
        <p>
            <img src="{{ asset('img/footer-logo-2.png') }}" alt="Bisma Pertama Terpercaya" class="img-fluid" style="width: 120px;">
            <img src="{{ asset('img/footer-logo.png') }}" alt="Bisma Pertama Terpercaya" class="img-fluid" style="width: 250px;">
        </p>
    </div>
</footer>
