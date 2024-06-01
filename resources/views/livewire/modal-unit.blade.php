<!-- Modal -->
<div class="modal modal-xl fade" id="modalUnit" tabindex="-1" aria-labelledby="modalUnitLabel" aria-hidden="true" style="z-index: 9999999;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalUnitLabel">Model List</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="color: red;"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @forelse($data as $o)
                    <div class="col-lg-4 col-md-4 container">
                        <div class="image">
                            <img src="http://127.0.0.1:8000/img/motorcycle/{{ $o['image'] }}"
                                class="img-fluid pilihUnit" width="200px" data-unit="{{ $o['model_name'] }}"
                                data-price="{{ $o['price'] }}"
                                data-rupiah="Rp{{ number_format($o['price'], 0, ',','.') }}">
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
                    <div class="col-lg-12 col-md-12 container" class="pilihUnit">
                        <div class="model_name">
                            <p>
                                No Data Available
                            </p>
                        </div>
                    </div>
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script>
    $(document).on('click', '.pilihUnit', function (e) {
        $('#otr').val($(this).attr('data-price'));
        $('#angka_motor_menurun').val($(this).attr('data-rupiah'));
        $('#modelName').val($(this).attr('data-unit'));
        $('#modalUnit').modal('hide');
    });

</script>
@endpush
