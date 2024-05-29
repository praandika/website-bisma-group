@push('after-css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
@endpush

<!-- Modal -->
<div class="modal modal-xl fade" id="modalUnit" tabindex="-1" aria-labelledby="modalUnitLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalUnitLabel">Model List</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: red;"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @forelse($data as $o)

                    <div class="col-lg-4 col-md-4 container">
                        <div class="image">
                            <img src="http://127.0.0.1:8000/img/motorcycle/{{ $o['image'] }}" class="img-fluid"
                                width="200px">
                        </div>
                        <div class="model_name">
                            <p>
                                {{ $o['model_name'] }} <br>
                                <span class="harga">
                                Rp{{ number_format($o['price'], 0, ',','.') }}
                                </span>
                            </p>
                        </div>

                    </div>

                    @empty
                    @endforelse
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('after-js')
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });

</script>
@endpush
