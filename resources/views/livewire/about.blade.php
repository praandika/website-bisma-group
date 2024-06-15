<div class="content">
    <div class="row contact">
        <div class="col-lg-6 team">
            <h1 class="slide-top">ABOUT US</h1>
            <span class="head-strip flip-in-ver-right"></span>
            <div class="row">
                <div class="col-lg-12 visimisi">
                    <h1>History</h1>
                    <br>
                    <img src="{{ asset('img/bisma69.jpeg') }}" class="img-fluid" style="outline: 5px double #D4AF37; outline-offset: 5px;" width="97%">
                    @foreach ($data as $o)
                    <p>
                        {{ $o['profile'] }}
                    </p>

                    <h1>Visi</h1>
                    <p>
                        {{ $o['visi'] }}
                    </p>
                    <h1>Misi</h1>
                    <p>
                        {{ $o['misi'] }}
                    </p>
                    @endforeach
                    <img src="{{ asset('img/gajahmada.jpg') }}" class="img-fluid" width="50%" style="outline: 5px double #D4AF37; outline-offset: 5px;">
                    <p style="text-align: center;">
                        <span style="font-size: 10px; color: #dedede;">Photo credit National Archives</span> <br>
                        Jalan Gajah Mada Denpasar Tempo Doeloe
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 jingle">
            <h1 class="slide-top">BISMA JINGLE</h1>
            <span class="head-strip flip-in-ver-right"></span>
            <audio controls autoplay style="display: block; margin: auto;" id="audioPlayer">
                <source src="{{ asset('audio/jingle_yamaha_bisma.mp3') }}" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
            <br>
            <div class="iframe-container-about"><iframe border="0" loading="lazy"
                    src="https://www.youtube.com/embed/uZSEghyk-l8?si=L3bXln1TCK_DNcSZ"></iframe></div>
                    <br>
                <h1>Yamaha Belinya Pasti di Bisma</h1>
                <br>
                <table>
                    <tr>
                        <td>Song Writer</td>
                        <td>: <a href="https://www.instagram.com/ekarock/" target="_blank">Eka Rock (SID) <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                    </tr>
                    <tr>
                        <td>Vocals</td>
                        <td>: <a href="https://www.instagram.com/keishclaudia/" target="_blank">Keish Claudia <i class="fa-solid fa-arrow-up-right-from-square"></i></a> & Eka Rock</td>
                    </tr>
                    <tr>
                        <td>Produced By</td>
                        <td>: <a href="https://www.instagram.com/20meu/" target="_blank">Romeu <i class="fa-solid fa-arrow-up-right-from-square"></i></a> & <a href="https://www.instagram.com/kimlee_mpc/" target="_blank">Monica Petra <i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                    </tr>
                </table>
                <h1>Lyrics</h1>
            <div class="lyrics">
                <h2>VERSE</h2>
                <p>
                    Bersinar selalu terdepan, menemani perjalanan kita <br>
                    Yamaha pertama dan terpercaya di Pulau Dewata <br>
                </p>
                <h2>PRE-CHORUS</h2>
                <p>
                    Sing kene sing keto “sampunang ragu” <br>
                    Pilih ne paling jitu <br>
                    Yamaha belinya pasti di Bisma <br>
                    Dija???aaaa Yamaha Bismaaaaa <br>
                </p>
                <h2>CHORUS</h2>
                <p>
                    Yamaha Bisma <br>
                    Pertama dan terpercaya <br>
                    Yamaha Bisma <br>
                    Jadi pilihan kita semua <br>
                    Yamaha Bisma <br>
                    Servis handal sparepart yang lengkap <br>
                    Yamaha Bisma <br>
                    Yamaha Semakin di Depan
                </p>
            </div>
        </div>
    </div>

    <x-back-to-top />

    @push('after-js')
    <script>
        window.onload = function() {
            let audio = document.getElementById("audioPlayer");
            audio.play();
        }
    </script>
    @endpush
</div>
