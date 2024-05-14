<div class="content">
    <!-- Header -->
    <div class="header">
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
            <div class="col-lg-4 col-md-12 model-show">
                @forelse($data as $o)
                <img src="{{ asset('img/motorcycle/'.$o->image.'') }}" class="img-fluid">
                <p class="model-name" id="getModel">{{ $o->model_name }}</p>
                @empty
                <p>No Data</p>
                @endforelse

                <div class="test-show">
                    <img src="https://images.pexels.com/photos/19598320/pexels-photo-19598320/free-photo-of-cathedral-basilica-in-leon-in-mexico.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        id="merah" class="img show-img">
                    <img src="https://images.pexels.com/photos/23294313/pexels-photo-23294313/free-photo-of-an-aerial-view-of-a-small-house-with-a-red-light.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        id="biru" class="img ">
                    <img src="https://images.pexels.com/photos/20103702/pexels-photo-20103702/free-photo-of-a-beach-with-people-walking-on-the-sand.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        id="kuning" class="img ">
                </div>

                <div class="warna-container">
                    <button class="warna" onclick="showImg('merah')"></button>
                    <button class="warna" onclick="showImg('biru')"></button>
                    <button class="warna" onclick="showImg('kuning')"></button>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 model-info">
                <livewire:credit-simulation/>
                @foreach($data as $o)
                <p class="price">Rp{{ number_format($o->price, 0, ',','.') }}</p>
                <p style="display: none;" id="getPrice">{{ $o->price }}</p>
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 model-spfc">
                Model Spesifications
            </div>
        </div>
    </div>

    <x-back-to-top />

    @push('after-css')
    <style>
        .test-show img {
            width: 300px;
            display: none;
        }

        /* .test-show .hide-img {
            display: none;
        } */
        .test-show .show-img {
            display: block;
        }

    </style>
    @endpush

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

    <script>
        localStorage.setItem("getModel", document.getElementById("getModel").innerHTML);
        localStorage.setItem("getPrice", document.getElementById("getPrice").innerHTML);
    </script>
    @endpush
</div>
