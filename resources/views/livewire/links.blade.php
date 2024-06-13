<div class="col-lg-6 col-md-12 link">
    <span><a href="website/public/product/all" wire:navigate
            class="{{ Request::is('product/all') ? 'active-link' : '' }}">All</a></span>
    @foreach($category as $o)
    <span><a href="website/public/product/{{ $o['category'] }}" wire:navigate
            class="{{ Request::is('product/'.$o['category'].'') ? 'active-link' : '' }}">{{ strToupper($o['category']) }}</a></span>
    @endforeach
</div>