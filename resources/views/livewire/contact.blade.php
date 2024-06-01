<div class="content">
    <div class="row contact">
        <div class="col-lg-6 team">
            <h1 class="slide-top">SALES TEAM</h1>
            <span class="head-strip flip-in-ver-right"></span>
            <div class="row">
                @foreach($data as $o)
                <div class="col-lg-6 col-md-6">
                    <a href="https://wa.me/{{ $o['phone2'] }}?text=Hai%20saya%20ingin%20info%20sepeda%20motor%20yamaha%20(https://127.0.0.1:8001)" target="_blank">
                        <div class="card-team slide-left">
                            <img src="http://127.0.0.1:8000/img/dealer/{{ $o['image'] }}" class="img-fluid">
                            <div class="phone-name bg-change-color-2">
                                {{ $o['dealer_name'] }}
                            </div>
                            <div class="phone bg-change-color">
                                +{{ implode('-', str_split($o['phone2'], 5)); }}
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6 maps">
            <h1 class="slide-top">LOCATIONS</h1>
            <span class="head-strip flip-in-ver-right"></span>
            <div class="row iframe-container"><iframe border="0" loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""
                    src="https://www.google.com/maps/d/embed?mid=1v8s4jkMnxQ660jzGPOzedIMhWN47H7w&amp;ehbc=2E312F"></iframe>
            </div>

        </div>
    </div>
</div>
