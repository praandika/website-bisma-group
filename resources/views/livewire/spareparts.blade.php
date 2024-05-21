<div class="content">
    <!-- Header -->
    <div class="header">
        <div class="row">
            <div class="col-lg-4 col-md-12 menu-title">
                {{ strToUpper($title) }}
            </div>
            <livewire:linkspareparts/>
            <div class="col-lg-2 col-md-12 search">
                <x-search/>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <div class="container-fluid text-center">
        <div class="row">
        @forelse($data as $o)
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <a href="#">
                    <img src="{{ asset('img/sparepart/'.$o['image'].'') }}" class="img-fluid">
                    <p class="model-name">{{ $o['parts_name'] }}</p>
                    <p class="price"><span class="strip"></span>Rp$o['price']<span
                            class="strip"></span></p>
                    <button class="order">
                        <img src="{{ asset('img/ic-order.png') }}">Order Parts
                    </button>
                </a>
            </div>
        @empty
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <p>No Data</p>
            </div>
        @endforelse
        </div>
    </div>

    <x-back-to-top/>
</div>
