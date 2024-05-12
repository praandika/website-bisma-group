<div class="content">
    <!-- Header -->
    <div class="product-show">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                {{ strToUpper($title) }}
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
                <x-search/>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <div class="container-fluid text-center">
        <div class="row">
            @forelse($data as $o)
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <a href="/product/{{ str_replace(' ', '_', $o->model_name) }}/show" wire:navigate>
                    <img src="{{ asset('img/motorcycle/'.$o->image.'') }}" class="img-fluid">
                    <p class="model-name">{{ $o->model_name }}</p>
                    <p class="price"><span class="strip"></span>Rp{{ number_format($o->price, 0, ',','.') }}<span
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

    <x-back-to-top/>
</div>
