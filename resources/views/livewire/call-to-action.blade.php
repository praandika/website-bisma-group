<div class="content">
    <div class="search-home">
        <form action="{{ route('search') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-8 search-input">
                    <input type="text" placeholder="Search your motorbike" class="search" name="search" autocomplete="off" style="width: 100%;">
                </div>
                <div class="col-md-4 search-button">
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
                        <img src="{{ asset('img/ic-instagram-color-darken.png') }}" class="img-fluid">
                        <p style="color: #D9DBDB;">
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
                        <img src="{{ asset('img/ic-facebook-color-darken.png') }}" class="img-fluid">
                        <p style="color: #D9DBDB;">
                            Yamaha Bisma
                        </p>
                    </a>
                </div>
                <div class="sosmed">
                    <a href="https://www.youtube.com/@yamaha_bisma" target="_blank">
                        <img src="{{ asset('img/ic-youtube-color-darken.png') }}" class="img-fluid">
                        <p style="color: #D9DBDB;">
                            Yamaha Bisma
                        </p>
                    </a>
                </div>
                <div class="sosmed">
                    <a href="{{ url('contact') }}" target="_blank">
                        <img src="{{ asset('img/ic-whatsapp-color-darken.png') }}" class="img-fluid">
                        <p style="color: #D9DBDB;">
                            Official Whatsapp
                        </p>
                    </a>
                </div>
                <div class="sosmed">
                    <a href="mailto:crm.bismagroup@gmail.com?subject=Buying%20Consultation%20from%20Website" target="_blank">
                        <img src="{{ asset('img/ic-email-color-darken.png') }}" class="img-fluid">
                        <p style="color: #D9DBDB;">
                            E-Mail
                        </p>
                    </a>
                </div>
                <div class="sosmed">
                    <a href="https://www.google.com/maps/d/edit?mid=1v8s4jkMnxQ660jzGPOzedIMhWN47H7w&usp=sharing" target="_blank">
                        <img src="{{ asset('img/ic-location-color-darken.png') }}" class="img-fluid">
                        <p style="color: #D9DBDB;">
                            Our Locations
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
