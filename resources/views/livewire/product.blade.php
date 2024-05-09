<div class="content">
    <div class="container-fluid text-center">
        <div class="row justify-content-md-center">
            @forelse($data as $o)
            <div class="col-md-4 item">
                <p>{{ $o->model_name }}</p>
                <p>{{ $o->price }}</p>
            </div>
            @empty
            <div class="col-md-4 item">
                <p>No Data</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
