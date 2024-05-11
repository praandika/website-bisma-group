<form action="{{ route('search') }}" method="post">
    @csrf
    <input type="text" placeholder="Search Products" class="search" name="search" autocomplete="off">
</form>
