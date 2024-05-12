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
        <div class="product-show">
            <div class="row">
            
                @forelse($data as $o)
                <div class="col-lg-4 col-md-12 model-show">
                    <img src="{{ asset('img/motorcycle/'.$o->image.'') }}" class="img-fluid">
                    <p class="model-name">{{ $o->model_name }}</p>
                    <p class="price">Rp{{ number_format($o->price, 0, ',','.') }}</p>

                </div>
                @empty
                <div class="col-lg-4 col-md-6 model-show">
                    <p>No Data</p>
                </div>
                @endforelse

                <div class="col-lg-8 col-md-12 model-info">
                    Model Info
                </div>
            </div>
        </div>
    </div>

    <x-back-to-top />
</div>
