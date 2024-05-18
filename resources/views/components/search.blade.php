<form action="{{ Request::is('spart/*') ? route('search.spart') : (Request::is('job/*') ? route('search.job') : route('search')) }}" method="post">
    @csrf
    <input type="text" placeholder="Search {{ Request::is('spart/*') ? 'Spare Parts' : (Request::is('job/*') ? 'Jobs' : 'Products') }}" class="search" name="search" autocomplete="off">
</form>
