    @push('after-css')
    <style>
        .featured {
            position: relative;

            /* The image used */
            height: min-content;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .featured-wrap {
            padding-top: 50px;
            position: relative;
            width: 50%;
            margin: auto;
        }

        .featured-wrap img {
            display: block;
            margin: auto;
            z-index: 99;
            position: relative;
        }

        .pulse {
            animation: pulse-animation 0.5s infinite;
        }

        @keyframes pulse-animation {
            0% {
                box-shadow: 0 0 0 0px rgba(255, 0, 0, 0.431);
            }
            100% {
                box-shadow: 0 0 0 20px rgba(0, 0, 0, 0);
            }
        }

        .pulse-btn {
            width: 15px;
            height: 15px;
            position: absolute;
            border-radius: 50%;
            background-color: #d11833;
            outline: 3px solid #f26b7f;
            outline-offset: 3px;
            z-index: 99;
            cursor: pointer;
        }

        #smartKey {
            top: 240px;
            left: 455px;
        }

        #luggage {
            top: 250px;
            left: 255px;
        }

        #smartFrontRefuel {
            top: 270px;
            left: 455px;
        }

        #blueCore {
            top: 385px;
            left: 285px;
        }

        #seat {
            top: 220px;
            left: 355px;
        }

        #led {
            top: 120px;
            left: 515px;
        }

        #footstep {
            top: 350px;
            left: 260px;
        }

        #tire {
            top: 450px;
            left: 645px;
        }

        #speedo {
            top: 105px;
            left: 460px;
        }

        .popup {
            position: absolute;
            width: 250px;
            height: min-content;
            background-color: #101010db;
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 38px -23px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 38px -23px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 38px -23px rgba(0,0,0,0.75);
            color: #ffffff;
            font-size: 10px;
            z-index: 99;
        }

        .popup img {
            width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .popup .description {
            padding: 10px 15px;
        }

        .popup .description p {
            text-justify: inter-word;
        }

        .popup .title {
            font-weight: bold;
            font-size: 15px;
        }

        .hide {
            display: none;
        }

        #smartKeyContent {
            top: 100px;
            left: 485px;
        }

        #luggageContent {
            top: 100px;
            left: -10px;
        }

        #smartFrontRefuelContent {
            top: 170px;
            left: 485px;
        }

        #blueCoreContent {
            top: 250px;
            left: 20px;
        }

        #seatContent {
            top: 10px;
            left: 90px;
        }

        #ledContent {
            top: 5px;
            left: 550px;
        }

        #footstepContent {
            top: 250px;
            left: -10px;
        }

        #tireContent {
            top: 330px;
            left: 680px;
        }

        #speedoContent {
            top: 10px;
            left: 490px;
        }

    </style>
    @endpush

    <!-- ============================================================Featured============================================================ -->
    <div class="featured" style="background-image: url('{{ asset('img/featured/parallax1.png') }}'); margin-top: -5px">
        <div class="featured-wrap featured-desktop">
            <img src="{{ asset('img/featured/filano-lux-silver.png') }}" class="img-fluid">
            <div class="contentFeatured">
                <div class="pulse-btn pulse" id="smartKey" onmouseover="showSmartKey()" onmouseout="hideSmartKey()">
                </div>
                <div class="pulse-btn pulse" id="luggage" onmouseover="showLuggage()" onmouseout="hideLuggage()">
                </div>
                <div class="pulse-btn pulse" id="smartFrontRefuel" onmouseover="showFuel()" onmouseout="hideFuel()">
                </div>
                <div class="pulse-btn pulse" id="blueCore" onmouseover="showBlueCore()" onmouseout="hideBlueCore()">
                </div>
                <div class="pulse-btn pulse" id="seat" onmouseover="showSeat()" onmouseout="hideSeat()"></div>
                <div class="pulse-btn pulse" id="led" onmouseover="showLed()" onmouseout="hideLed()"></div>
                <div class="pulse-btn pulse" id="footstep" onmouseover="showFootStep()" onmouseout="hideFootStep()">
                </div>
                <div class="pulse-btn pulse" id="tire" onmouseover="showTire()" onmouseout="hideTire()"></div>
                <div class="pulse-btn pulse" id="speedo" onmouseover="showSpeedo()" onmouseout="hideSpeedo()"></div>

                <div class="popup hide" id="smartKeyContent">
                    <img src="{{ asset('img/featured/smart-key.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Smart Key System</span>
                        <p>
                            Berkendara semakin praktis dengan sistem kunci canggih tanpa anak kunci (keyless),
                            dilengkapi dengan fitur Answer Back System untuk memudahkan pengendara mencari lokasi
                            parkir
                            motor.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="luggageContent">
                    <img src="{{ asset('img/featured/luggage.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Spacious Luggage 27L with LED Lamp</span>
                        <p>
                            Bagasi luas 27L yang dilengkapi dengan lampu LED untuk memuat berbagai perlengkapan
                            berkendara serta fashion item-mu!
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="smartFrontRefuelContent">
                    <img src="{{ asset('img/featured/smart-front-refuel.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Smart Front Refuel</span>
                        <p>
                            Pengisian bensin lebih praktis tanpa membuka jok.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="blueCoreContent">
                    <img src="{{ asset('img/featured/blue-core.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Blue Core Hybrid 125cc</span>
                        <p>
                            Mesin Blue Core 125cc generasi terbaru yang memberikan pengalaman berkendara lebih
                            bertenaga, ramah lingkungan dan handal. Dilengkapi dengan Electric Power Assist Start
                            yang
                            membuat akselerasi awal lebih bertenaga dan halus khususnya di tanjakan dan saat
                            berboncengan.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="seatContent">
                    <img src="{{ asset('img/featured/premium-seat.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Premium Seat with Embroidery Style</span>
                        <p>
                            Desain jok yang semakin berkelas dengan warna premium dan tekstur bordir yang unik.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="ledContent">
                    <img src="{{ asset('img/featured/led.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">All New LED Lighting System</span>
                        <p>
                            Seluruh sistem pencahayaan sudah menggunakan LED seperti Diamond Shaped LED Headlight,
                            Unique LED Position Light, Front & Rear LED Turn Signals, LED Tailight & LED Lamp pada
                            bagasi.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="footstepContent">
                    <img src="{{ asset('img/featured/footstep.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Convenience Footstep</span>
                        <p>
                            Desain footstep yang lebih luas untuk kenyamanan saat berboncengan.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="tireContent">
                    <img src="{{ asset('img/featured/wide-tire.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Wide Tire & Tubeless</span>
                        <p>
                            Ukuran ban depan dan ban belakang 110/70 - 12" untuk memberikan kenyamanan berkendara.
                        </p>
                    </div>
                </div>

                <div class="popup hide" id="speedoContent">
                    <img src="{{ asset('img/featured/speedo.jpg') }}" class="img-fluid">

                    <div class="description">
                        <span class="title">Digital Speedometer with TFT Sub Display</span>
                        <p>
                            Pertama dikelasnya! Digital speedometer yang semakin informatif dengan tampilan berwarna
                            dan
                            animasi seperti Welcome-Goodbye Message, Odometer, Fuel Consumption, & Power Assist
                            Indicator.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="featured-wrap featured-mobile">
            </div> -->
    </div>

    @push('after-js')
    <script src="{{ asset('js/featured.js') }}"></script>
    @endpush
    <!-- ============================================================END Featured============================================================ -->
