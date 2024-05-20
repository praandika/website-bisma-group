<div class="content">
    <!-- Header -->
    <div class="header">
        <div class="row">
            <div class="col-lg-4 col-md-12 menu-title">
                {{ strToUpper($title) }}
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
            @forelse($data as $o)
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <a href="{{ route('show',str_replace(' ', '_', $o['model_name'])) }}">
                    <img src="{{ asset('img/motorcycle/'.$o['image'].'') }}" class="img-fluid">
                    <p class="model-name">{{ $o['model_name'] }}</p>
                    <p class="price"><span class="strip"></span>Rp{{ number_format($o['price'], 0, ',','.') }}<span
                            class="strip"></span></p>
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
