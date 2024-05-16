<div class="content">
    <!-- Header -->
    <div class="header" style="border: none;">
        <div class="row">
            <div class="col-lg-4 col-md-12 menu-title">
                SHOW PRODUCT
            </div>
            <div class="col-lg-6 col-md-12 link">
                <span><a href="/product/all" wire:navigate
                        class="{{ Request::is('product/all') ? 'active-link' : '' }}">All</a></span>
                @foreach($category as $o)
                <span><a href="/product/{{ $o->category }}" wire:navigate
                        class="{{ Request::is('product/'.$o->category.'') ? 'active-link' : '' }}">{{ strToupper($o->category) }}</a></span>
                @endforeach
            </div>
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
                        @forelse($data as $o)
                        <img src="{{ asset('img/motorcycle/'.$o->image.'') }}" class="img-fluid slide-in-left img show-img"
                            id="merah">
                        <p class="model-name swing-in-left-bck">{{ $o->model_name }}</p>
                        @empty
                        <p>No Data</p>
                        @endforelse

                        <div class="warna-container">
                            <button class="warna swing-in-left-bck" onclick="showImg('merah')"></button>
                            <button class="warna swing-in-left-bck" onclick="showImg('biru')"></button>
                            <button class="warna swing-in-left-bck" onclick="showImg('kuning')"></button>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 model-info">
                        @include('components.credit-simulation')
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 model-spfc">
                <h1 class="slide-top">MODEL SPESIFICATIONS</h1>
                <span class="head-strip flip-in-ver-right"></span>
                <div class="row">
                    <div class="col-lg-12 spec">
                        <ul>
                            <li>Mesin</li>
                            <table>
                                <tr>
                                    <td>ABC</td>
                                    <td>: DEF</td>
                                </tr>
                                <tr>
                                    <td>ABC</td>
                                    <td>: DEF</td>
                                </tr>
                            </table>
                            <li>Rangka</li>
                            <table>
                                <tr>
                                    <td>ABC</td>
                                    <td>: DEF</td>
                                </tr>
                                <tr>
                                    <td>ABC</td>
                                    <td>: DEF</td>
                                </tr>
                            </table>
                            <li>Dimesin</li>
                            <table>
                                <tr>
                                    <td>ABC</td>
                                    <td>: DEF</td>
                                </tr>
                                <tr>
                                    <td>ABC</td>
                                    <td>: DEF</td>
                                </tr>
                            </table>
                            <li>Kelistrikan</li>
                            <table>
                                <tr>
                                    <td>ABC</td>
                                    <td>: DEF</td>
                                </tr>
                                <tr>
                                    <td>ABC</td>
                                    <td>: DEF</td>
                                </tr>
                            </table>
                        </ul>
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
            document.querySelector("div.test-show img#" + warna + "").classList.add("show-img");
            return;
        }

    </script>

    <script src="{{ asset('js/simul.js') }}"></script>
    @endpush
</div>
