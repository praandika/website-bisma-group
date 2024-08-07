<div class="content">
    <!-- Header -->
    <div class="header">
        <div class="row">
            <div class="col-lg-4 col-md-12 menu-title">
                {{ strToUpper($title) }}
            </div>
            <livewire:link-spareparts />
            <div class="col-lg-2 col-md-12 search">
                <x-search />
            </div>
        </div>
    </div>
    <!-- END Header -->
    <div class="container-fluid text-center">
        <div class="row">
            @forelse($data as $o)
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <a href="https://wa.me/6281237547462?text=Hi%20apakah%20{{ $o['parts_name'] }}%20tersedia?" target="_blank">
                    <img src="http://sibisma.yamahabismagroup.com/public/img/sparepart/{{ $o['image'] }}" class="img-fluid">
                    <p class="model-name">{{ $o['parts_name'] }}</p>
                    <p class="price"><span class="strip"></span>Rp{{ $o['price'] }}<span class="strip"></span></p>

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

    <x-back-to-top />
</div>
