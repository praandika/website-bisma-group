<div class="content">
    <div class="search-home">
        <form action="{{ route('search') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <input type="text" placeholder="Search your motorbike" class="search" name="search" autocomplete="off" style="width: 100%;">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="flip-in-ver-right">Find Your MotorBike!</button>
                </div>
            </div>
        </form>
    </div>
    <div class="cta">
        <h1 class="slide-top">STAY IN TOUCH WITH US</h1>
        <span class="head-strip flip-in-ver-right"></span>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="sosmed">
                    <a href="https://www.instagram.com/yamaha_bisma/" target="_blank">
                        <img src="{{ asset('img/ic-instagram-color.png') }}" class="img-fluid">
                        <p style="color: #B82E5D;">
                            @yamaha_bisma
                        </p>
                    </a>
                </div>
                <div class="sosmed">
                    <a href="https://www.tiktok.com/@yamaha_bisma" target="_blank">
                        <img src="{{ asset('img/ic-tiktok-color.png') }}" class="img-fluid">
                        <p style="color: #D9DBDB;">
                            @yamaha_bisma
                        </p>
                    </a>
                </div>
                <div class="sosmed">
                    <a href="https://www.facebook.com/profile.php?id=61550018206862" target="_blank">
                        <img src="{{ asset('img/ic-facebook-color.png') }}" class="img-fluid">
                        <p style="color: #075DA4;">
                            Yamaha Bisma
                        </p>
                    </a>
                </div>
                <div class="sosmed">
                    <a href="https://www.youtube.com/@yamaha_bisma" target="_blank">
                        <img src="{{ asset('img/ic-youtube-color.png') }}" class="img-fluid">
                        <p style="color: #BA1F1F;">
                            Yamaha Bisma
                        </p>
                    </a>
                </div>
                <div class="sosmed">
                    <a href="/contact" target="_blank">
                        <img src="{{ asset('img/ic-whatsapp-color.png') }}" class="img-fluid">
                        <p style="color: #17881C;">
                            Official Whatsapp
                        </p>
                    </a>
                </div>
                <div class="sosmed">
                    <a href="https://www.google.com/maps/d/edit?mid=1v8s4jkMnxQ660jzGPOzedIMhWN47H7w&usp=sharing" target="_blank">
                        <img src="{{ asset('img/ic-location-color.png') }}" class="img-fluid">
                        <p style="color: #FF3C00;">
                            Our Locations
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
