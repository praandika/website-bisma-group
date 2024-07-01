<div class="content">
    <!-- Header -->
    <div class="header" style="border: none;">
        <div class="row">
            <div class="col-lg-4 col-md-12 menu-title">
                SIMULATION
            </div>
            <livewire:links />
            <div class="col-lg-2 col-md-12 search">
                <x-search />
            </div>
        </div>
    </div>
    <!-- END Header -->
    
    <div class="simulation-container simulation-single-page bg-pan-right">
        <form action="{{ route('count') }}" method="post">
            @csrf()
            <div class="row form-group">
                <div class="col-lg-6 col-md-6">
                    <label for="setModel">Model :</label>
                    <input type="text" placeholder="Choose Model" name="model" data-bs-toggle="modal" data-bs-target="#modalUnit" id="modelName" value="{{ old('model') }}" readonly required>
                </div>

                <div class="col-lg-6 col-md-6">
                    <label for="setPriceStr">OTR Price :</label>
                    <input type="text" placeholder="On The Road Price" id="angka_motor_menurun" value="{{ old('price') }}" name="price" readonly>
                    <input type="hidden" id="otr" name="otr" value="{{ old('otr') }}">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6">
                    <label for="bunga">Select Rate</label>
                    <select id="bunga_menurun" name="rate">
                        <option>- Pilih Bunga -</option>
                        <option value="0.0240" @if(session('rate') == 0.0240) selected @endif>2.4%</option>
                        <option value="0.0185" @if(session('rate') == 0.0185) selected @endif>1.85%</option>
                        <option value="0.0175" @if(session('rate') == 0.0175) selected @endif>1.75%</option>
                    </select>
                </div>

                <div class="col-lg-6 col-md-6">
                    <label for="bunga">DP Percentage</label>
                    <span id="dp_motor_menurun">@if(session('dpPercent')) {{ session('dpPercent') }} @else 0 @endif</span><span>%</span>
                    <span style="display: none;" id="angka_dp_menurun"></span>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-12 col-md-12">
                    <label for="dp_menurun">Input Down Payment</label>
                    <input type="number" placeholder="Exp: 5120000" name="dp" id="dp_menurun" onkeyup="hitung_dp_menurun()" value="{{ old('dp') }}">
                </div>
            </div>

            <div class="col-lg-12">
                <button type="submit" class="flip-in-ver-right">Check Credit</button>
            </div>
        </form>

        <div class="row simulation-result" style="margin-top: 20px; font-size: 25px;">
            <div class="col-lg-3 col-md-6">
                <div id="angsuran_menurun_12">
                    <div class="angsuran swing-in-left-bck">
                        <label for="">12 Bulan</label>
                        <p class="angsuran-result">
                            <h2 class="slide-top">@if(session('a12')) Rp{{ number_format(session('a12'), 0, ',','.') }} @else 0 @endif</h2>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div id="angsuran_menurun_24">
                    <div class="angsuran swing-in-left-bck">
                        <label for="">24 Bulan</label>
                        <p class="angsuran-result">
                            <h2 class="slide-top">@if(session('a24')) Rp{{ number_format(session('a24'), 0, ',','.') }} @else 0 @endif</h2>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div id="angsuran_menurun_36">
                    <div class="angsuran swing-in-left-bck">
                        <label for="">36 Bulan</label>
                        <p class="angsuran-result">
                            <h2 class="slide-top">@if(session('a36')) Rp{{ number_format(session('a36'), 0, ',','.') }} @else 0 @endif</h2>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div id="angsuran_menurun_48">
                    <div class="angsuran swing-in-left-bck">
                        <label for="">48 Bulan</label>
                        <p class="angsuran-result">
                            <h2 class="slide-top">@if(session('a48')) Rp{{ number_format(session('a48'), 0, ',','.') }} @else 0 @endif</h2>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <p style="font-size: 12px; margin-top: 15px;">
                *perhitungan angsuran adalah estimasi <br>
                **harga dan angsuran dapat berubah sewaktu-waktu
            </p>
        </div>
    </div>

    <livewire:modal-unit />
</div>

@push('after-js')
<script>
    function hitung_dp_menurun() {
        let dp = document.getElementById("dp_menurun").value;

        if (isNaN(dp)) {
            alert("Please enter Numeric value");
            return false;
        } else {
            dp.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            let harga = document.getElementById("otr").value;
            let uangmuka = ( dp / harga) * 100;

            let persen = uangmuka.toFixed(0);

            if (!isNaN(uangmuka)) {
                document.getElementById("angka_dp_menurun").innerHTML = uangmuka;
                document.getElementById("dp_motor_menurun").innerHTML = persen;
            }
            
            return true;
        }
        
    }
</script>
@endpush