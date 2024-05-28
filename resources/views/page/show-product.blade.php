<div class="content">
    <!-- Header -->
    <div class="header" style="border: none;">
        <div class="row">
            <div class="col-lg-4 col-md-12 menu-title">
                SHOW PRODUCT
            </div>
            <livewire:links />
            <div class="col-lg-2 col-md-12 search">
                <x-search />
            </div>
        </div>
    </div>
    <!-- END Header -->

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-12 model-container">
                <h1 class="slide-top">CREDIT SIMULATION</h1>
                <span class="head-strip flip-in-ver-right"></span>
                <div class="row">
                    <div class="col-lg-4 col-md-12 model-show">
                        @foreach($image as $o)
                        <div class="image-container">
                            <img src="http://127.0.0.1:8000/img/motorcycle/{{ $o['image'] }}"
                                class="img-fluid slide-in-left img {{ $o['index'] == 0 ? 'show-img' : '' }}"
                                id="{{ $o['color_name'] }}">
                        </div>
                        @endforeach

                        <p class="model-name swing-in-left-bck">{{ $model }}</p>

                        <div class="warna-container">
                            @foreach($color as $o)
                            <button class="warna swing-in-left-bck"
                                onclick="showImg('{{ str_replace(' ', '_', $o['color_name']) }}')"
                                style="background-color: {{ $o['color_code'] }};" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="{{ $o['color_name'] }}"></button>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 model-info">
                        @include('components.credit-simulation')
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 model-call">
                <h1 class="slide-top">AVAILABLE AT :</h1>
                <span class="head-strip flip-in-ver-right"></span>
                <table>
                    <tr>
                        <th>Dealer</th>
                        <th>Address</th>
                        <th>Contact</th>
                    </tr>
                    <tr>
                        <td class="data">Yamaha Bisma Sunset Road</td>
                        <td class="data">Jl. Sunset Road No.162, Legian, Kec. Kuta, Kabupaten Badung</td>
                        <td class="action">
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </td>
                    </tr>
                </table>
                <br>
                <p>*Ketersediaan dapat berubah sewaktu-waktu berdasarkan penjualan yang sedang berlangsung</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 model-spfc">
                <h1 class="slide-top">MODEL SPESIFICATIONS</h1>
                <span class="head-strip flip-in-ver-right"></span>
                <div class="row">
                    <div class="col-lg-12 spec">
                        <table>
                            <tr>
                                <th>
                                    Mesin
                                </th>
                            </tr>
                            @foreach($mesin as $oTitle => $oSpec)
                            <tr>
                                <td>{{ $oTitle }}</td>
                                <td>: {{ $oSpec }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <th>
                                    Rangka
                                </th>
                            </tr>
                            @foreach($rangka as $oTitle => $oSpec)
                            <tr>
                                <td>{{ $oTitle }}</td>
                                <td>: {{ $oSpec }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <th>
                                    Dimesin
                                </th>
                            </tr>
                            @foreach($dimensi as $oTitle => $oSpec)
                            <tr>
                                <td>{{ $oTitle }}</td>
                                <td>: {{ $oSpec }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <th>
                                    Kelistrikan
                                </th>
                            </tr>
                            @foreach($kelistrikan as $oTitle => $oSpec)
                            <tr>
                                <td>{{ $oTitle }}</td>
                                <td>: {{ $oSpec }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-back-to-top />

    @push('after-js')
    <script>
        let showImg = (warna) => {
            let image = document.getElementsByClassName("img");
            for (let i = 0; i < image.length; i++) {
                document.getElementsByClassName("img")[i].classList.remove("show-img");
            }
            document.querySelector("div.image-container img#" + warna + "").classList.add("show-img");
            return;
        }

    </script>

    <script src="{{ asset('js/simul.js') }}"></script>
    @endpush
</div>
