<div class="col-lg-6 col-md-12 link">
    <span><a href="website/public/spart/all" wire:navigate class="{{ Request::is('spart/all') ? 'active-link' : '' }}">All</a></span>
    @foreach($category as $o)
    <span><a href="website/public/spart/{{ $o['category'] }}" wire:navigate class="{{ Request::is('spart/'.$o['category'].'') ? 'active-link' : '' }}">{{ $o['category'] == "ygp" ? "YAMAHA GENUINE PARTS" : strToupper($o['category']) }}</a></span>
    @endforeach
</div>
