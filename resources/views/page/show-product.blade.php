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
                        <div class="image-container d-flex justify-content-center">
                            <img src="http://sibisma.yamahabismagroup.com/public/img/motorcycle/{{ $o['image'] }}"
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

        <div class="row model-call-container"
            style="background-image: url('{{ asset('img/featured/parallax3.png') }}');">
            <div class="col-md-12 model-call">
                <h1 class="slide-top">AVAILABLE AT :</h1>
                <span class="head-strip flip-in-ver-right"></span>
                <table>
                    <tr>
                        <th>Dealer</th>
                        <th>Address</th>
                        <th>Stock</th>
                        <th>Contact</th>
                    </tr>
                    @forelse($dealer as $o)
                    <tr>
                        <td class="data">{{ $o['dealer_name'] }}</td>
                        <td class="data">{{ $o['address'] }}</td>
                        <td class="data">Available</td>
                        <td class="action">
                            <a href="https://wa.me/{{ $o['whatsapp'] }}?text=Hi,%20saya%20ingin%20info%20sepeda%20motor%20{{ $model }}%20(https://yamahabismagroup.com)" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" style="text-align: center;">Out of Stocks!</td>
                    </tr>
                    <tr>
                        <a href="{{ url('contact') }}" class="apply" wire:navigate>
                            <i class="fa-brands fa-whatsapp"></i> Contact Us to Book
                        </a>
                    </tr>
                    @endforelse
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
                            @if($mesin == 'No data available')
                            <tr>
                                <td>{{ $mesin }}</td>
                            </tr>
                            @else
                            @foreach($mesin as $oTitle => $oSpec)
                            <tr>
                                <td>{{ $oTitle }}</td>
                                <td>: {{ $oSpec }}</td>
                            </tr>
                            @endforeach
                            @endif

                            <tr>
                                <th>
                                    Rangka
                                </th>
                            </tr>
                            @if($rangka == 'No data available')
                            <tr>
                                <td>{{ $rangka }}</td>
                            </tr>
                            @else
                            @foreach($rangka as $oTitle => $oSpec)
                            <tr>
                                <td>{{ $oTitle }}</td>
                                <td>: {{ $oSpec }}</td>
                            </tr>
                            @endforeach
                            @endif

                            <tr>
                                <th>
                                    Dimensi
                                </th>
                            </tr>
                            @if($dimensi == 'No data available')
                            <tr>
                                <td>{{ $dimensi }}</td>
                            </tr>
                            @else
                            @foreach($dimensi as $oTitle => $oSpec)
                            <tr>
                                <td>{{ $oTitle }}</td>
                                <td>: {{ $oSpec }}</td>
                            </tr>
                            @endforeach
                            @endif

                            <tr>
                                <th>
                                    Kelistrikan
                                </th>
                            </tr>
                            @if($kelistrikan == 'No data available')
                            <tr>
                                <td>{{ $kelistrikan }}</td>
                            </tr>
                            @else
                            @foreach($kelistrikan as $oTitle => $oSpec)
                            <tr>
                                <td>{{ $oTitle }}</td>
                                <td>: {{ $oSpec }}</td>
                            </tr>
                            @endforeach
                            @endif
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

    <script src="{{ asset('js/simul2.js') }}"></script>
    @endpush
</div>
