<div class="simulation-container">
    <h1>CREDIT SIMULATION</h1>
    
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <span id="setModel"></span>
            </div>

            <div class="col-lg-6 col-md-12">
                <span id="setPriceStr"></span>
                <span style="display: none;" id="angka_motor_menurun"></span>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <label for="bunga">Rate</label>
                <select id="bunga_menurun">
                    <option> Pilih Bunga</option>
                    <option value="0.0240">2.4%</option>
                    <option value="0.0175">1.75%</option>
                </select>
            </div>

            <div class="col-lg-12">
                <label for="dp_menurun">Input Down Payment</label>
                <input type="number" placeholder="Exp: 5120000" id="dp_menurun" onkeyup="hitung_dp_menurun()">
            </div>

            <div class="col-lg-6 col-md-12">
                <span id="dp_motor_menurun"></span>%
                <span style="display: none;" id="angka_dp_menurun"></span>
            </div>
        </div>
        
        <div class="row">
            
        </div>
        
        <div class="col-lg-12">
            <button onclick="kredit_menurun()">Check Credit</button>
        </div>

    <div class="col-lg-12">
        <p id="angsuran_menurun_12"></p>
        <p id="angsuran_menurun_24"></p>
        <p id="angsuran_menurun_36"></p>
        <p id="angsuran_menurun_48"></p>
    </div>
</div>