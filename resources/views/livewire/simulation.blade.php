<div class="content">
    <!-- Header -->
    <div class="header" style="border: none;">
        <div class="row">
            <div class="col-lg-4 col-md-12 menu-title">
                SHOW PRODUCT
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
                <x-search />
            </div>
        </div>
    </div>
    <!-- END Header -->
    
    <div class="simulation-container simulation-single-page">
        <form wire:submit="count">
            <div class="row form-group">
                <div class="col-lg-6 col-md-12">
                    <label for="setModel">Model :</label>
                    <input type="text" placeholder="Choose Model" wire:model="model">
                </div>

                <div class="col-lg-6 col-md-12">
                    <label for="setPriceStr">OTR Price :</label>
                    <input type="number" placeholder="On The Road Price" id="angka_motor_menurun">
                    <input type="hidden">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-12">
                    <label for="bunga">Select Rate</label>
                    <select id="bunga_menurun" wire:model="rate">
                        <option>- Pilih Bunga -</option>
                        <option value="0.0240">2.4%</option>
                        <option value="0.0175">1.75%</option>
                    </select>
                </div>

                <div class="col-lg-6 col-md-12">
                    <label for="bunga">DP Percentage</label>
                    <span id="dp_motor_menurun">0</span><span>%</span>
                    <span style="display: none;" id="angka_dp_menurun"></span>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-12 col-md-12">
                    <label for="dp_menurun">Input Down Payment</label>
                    <input type="number" placeholder="Exp: 5120000" wire:model="dp" id="dp_menurun" onkeyup="hitung_dp_menurun()">
                </div>
            </div>

            <div class="col-lg-12">
                <button type="submit">Check Credit</button>
            </div>
        </form>

        <div class="row" style="margin-top: 20px; font-size: 25px;">
            <div class="col-lg-3">
                <div id="angsuran_menurun_12">
                    <div class="angsuran swing-in-left-bck">
                        <label for="">12 Bulan</label>
                        <p>
                            <h2>Rp{{ number_format($a12, 0, ',','.') }}</h2>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div id="angsuran_menurun_24">
                    <div class="angsuran swing-in-left-bck">
                        <label for="">24 Bulan</label>
                        <p>
                            <h2>Rp{{ number_format($a24, 0, ',','.') }}</h2>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div id="angsuran_menurun_36">
                    <div class="angsuran swing-in-left-bck">
                        <label for="">36 Bulan</label>
                        <p>
                            <h2>Rp{{ number_format($a36, 0, ',','.') }}</h2>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div id="angsuran_menurun_48">
                    <div class="angsuran swing-in-left-bck">
                        <label for="">48 Bulan</label>
                        <p>
                            <h2>Rp{{ number_format($a48, 0, ',','.') }}</h2>
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
            let harga = document.getElementById("angka_motor_menurun").value;
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