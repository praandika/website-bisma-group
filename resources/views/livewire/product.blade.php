<div class="content">
    <!-- Header -->
    <div class="header">
        <div class="row">
            <div class="col-lg-6 col-md-12 menu-title">
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
        </div>
    </div>
    <!-- END Header -->
    <div class="container-fluid text-center">
        <div class="row">
            @forelse($data as $o)
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <img src="{{ asset('img/motorcycle/'.$o->image.'') }}" class="img-fluid">
                <p class="model-name">{{ $o->model_name }}</p>
                <p class="price"><span class="strip"></span>Rp{{ number_format($o->price, 0, ',','.') }}<span
                        class="strip"></span></p>
            </div>
            @empty
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <p>No Data</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
