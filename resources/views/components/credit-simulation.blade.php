<div class="simulation-container">
    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <label for="setModel">Model :</label>
            <span id="setModel">{{ $title }}</span>
        </div>

        <div class="col-lg-6 col-md-6">
            <label for="setPriceStr">OTR Price :</label>
            <span id="setPriceStr">Rp{{ number_format($price, 0, ',','.') }}</span>
            <span style="display: none;" id="angka_motor_menurun">{{ $price }}</span>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-lg-6 col-md-6">
            <label for="bunga">Select Rate</label>
            <select id="bunga_menurun">
                <option>- Pilih Bunga -</option>
                <option value="0.0240">2.4%</option>
                <option value="0.0175">1.75%</option>
            </select>
        </div>

        <div class="col-lg-6 col-md-6">
            <label for="bunga">DP Percentage</label>
            <span id="dp_motor_menurun">0</span><span>%</span>
            <span style="display: none;" id="angka_dp_menurun"></span>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-lg-12 col-md-12">
            <label for="dp_menurun">Input Down Payment</label>
            <input type="number" placeholder="Exp: 5120000" id="dp_menurun" onkeyup="hitung_dp_menurun()">
        </div>
    </div>

    <div class="col-lg-12">
        <button onclick="kredit_menurun()">Check Credit</button>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div id="angsuran_menurun_12"></div>
        </div>
        <div class="col-lg-3">
            <div id="angsuran_menurun_24"></div>
        </div>
        <div class="col-lg-3">
            <div id="angsuran_menurun_36"></div>
        </div>
        <div class="col-lg-3">
            <div id="angsuran_menurun_48"></div>
        </div>
    </div>

    <div class="row">
        <p style="font-size: 12px; margin-top: 15px;">
            *perhitungan angsuran adalah estimasi <br>
            **harga dan angsuran dapat berubah sewaktu-waktu
        </p>
    </div>
</div>
