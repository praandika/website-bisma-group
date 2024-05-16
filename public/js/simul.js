const formatter = new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR',
    minimumFractionDigits: 0
})

function roundUp(num, precision) {
    precision = Math.pow(10, precision)
    return Math.ceil(num * precision) / precision
}

function hitung_dp_menurun() {
    let dp = document.getElementById("dp_menurun").value;

    if (isNaN(dp)) {
        alert("Please enter Numeric value");
        return false;
    } else {
        dp.replace(/</g, "&lt;").replace(/>/g, "&gt;");
        let harga = document.getElementById("angka_motor_menurun").innerHTML;
        let uangmuka = ( dp / harga) * 100;

        let persen = uangmuka.toFixed(0);

        if (!isNaN(uangmuka)) {
            document.getElementById("angka_dp_menurun").innerHTML = uangmuka;
            document.getElementById("dp_motor_menurun").innerHTML = persen;
        }
        
        return true;
    }
    
}

// Now Use this function
function kredit_menurun() {

    let otr = document.getElementById("angka_motor_menurun").innerHTML;

    let dp = document.getElementById("dp_menurun").value;

    if (isNaN(dp)) {
        alert("Please enter Numeric value");
        return false;
    } else {
        dp.replace(/</g, "&lt;").replace(/>/g, "&gt;");
        let bunga = document.getElementById("bunga_menurun").value;
        bunga.replace(/</g, "&lt;").replace(/>/g, "&gt;");
        if (bunga == 0.0240) {
            admin = 1518000;
            bungaPerTahun = 0.288;
        } else if(bunga == 0.0175) {
            admin = 1818000;
            bungaPerTahun = 0.21;
        } else {
            alert("Please enter Rate value");
            document.getElementById("bunga_menurun").style = "border: 1px solid red";
            return false;
        }

        let tenor12 = 12;
        let tenor24 = 24;
        let tenor36 = 36;
        let tenor48 = 48;

        let rateAss12 = 0.0080;
        let rateAss24 = 0.0144;
        let rateAss36 = 0.0200;
        let rateAss48 = 0.0248;

        // Tenor 12 Bulan
        let asuransi_12 = parseFloat(otr) * parseFloat(rateAss12);
        let uangMukaMurni_12 = dp - (admin + asuransi_12);
        let pokokHutang_12 = otr - uangMukaMurni_12;
        let angsuranPokok_12 = pokokHutang_12 / tenor12;
        let bungaPertama_12 = pokokHutang_12 * (bungaPerTahun / 12);
        angsuranPokok_12 = Math.round(angsuranPokok_12);
        bungaPertama_12 = Math.round(bungaPertama_12);
        let sum_12 = angsuranPokok_12 + bungaPertama_12;
        let angsuran_12 = roundUp(sum_12, -2);
        let rupiah_12 = formatter.format(angsuran_12);

        // Tenor 24 Bulan
        let asuransi_24 = parseFloat(otr) * parseFloat(rateAss24);
        let uangMukaMurni_24 = dp - (admin + asuransi_24);
        let pokokHutang_24 = otr - uangMukaMurni_24;
        let angsuranPokok_24 = pokokHutang_24 / tenor24;
        let bungaPertama_24 = pokokHutang_24 * (bungaPerTahun / 12);
        angsuranPokok_24 = Math.round(angsuranPokok_24);
        bungaPertama_24 = Math.round(bungaPertama_24);
        let sum_24 = angsuranPokok_24 + bungaPertama_24;
        let angsuran_24 = roundUp(sum_24, -2);
        let rupiah_24 = formatter.format(angsuran_24);

        // Tenor 36 Bulan
        let asuransi_36 = parseFloat(otr) * parseFloat(rateAss36);
        let uangMukaMurni_36 = dp - (admin + asuransi_36);
        let pokokHutang_36 = otr - uangMukaMurni_36;
        let angsuranPokok_36 = pokokHutang_36 / tenor36;
        let bungaPertama_36 = pokokHutang_36 * (bungaPerTahun / 12);
        angsuranPokok_36 = Math.round(angsuranPokok_36);
        bungaPertama_36 = Math.round(bungaPertama_36);
        let sum_36 = angsuranPokok_36 + bungaPertama_36;
        let angsuran_36 = roundUp(sum_36, -2);
        let rupiah_36 = formatter.format(angsuran_36);

        // Tenor 48 Bulan
        let asuransi_48 = parseFloat(otr) * parseFloat(rateAss48);
        let uangMukaMurni_48 = dp - (admin + asuransi_48);
        let pokokHutang_48 = otr - uangMukaMurni_48;
        let angsuranPokok_48 = pokokHutang_48 / tenor48;
        let bungaPertama_48 = pokokHutang_48 * (bungaPerTahun / 12);
        angsuranPokok_48 = Math.round(angsuranPokok_48);
        bungaPertama_48 = Math.round(bungaPertama_48);
        let sum_48 = angsuranPokok_48 + bungaPertama_48;
        let angsuran_48 = roundUp(sum_48, -2);
        let rupiah_48 = formatter.format(angsuran_48);

        if ((!isNaN(angsuran_12)) || (!isNaN(angsuran_24)) || (!isNaN(angsuran_36)) || (!isNaN(angsuran_48))) {
            document.getElementById("angsuran_menurun_12").innerHTML = `
                <div class="angsuran swing-in-left-bck">
                    <label for="">12 Bulan</label>
                    <p>
                        <h2>${rupiah_12}</h2>
                    </p>
                </div>
            `;
            document.getElementById("angsuran_menurun_24").innerHTML = `
                <div class="angsuran flip-in-ver-right">
                    <label for="">24 Bulan</label>
                    <p>
                        <h2>${rupiah_24}</h2>
                    </p>
                </div>
            `;
            document.getElementById("angsuran_menurun_36").innerHTML = `
                <div class="angsuran swing-in-left-bck">
                    <label for="">36 Bulan</label>
                    <p>
                        <h2>${rupiah_36}</h2>
                    </p>
                </div>
            `;
            document.getElementById("angsuran_menurun_48").innerHTML = `
                <div class="angsuran flip-in-ver-right">
                    <label for="">48 Bulan</label>
                    <p>
                        <h2>${rupiah_48}</h2>
                    </p>
                </div>
            `;
            document.getElementById("bunga_menurun").style = "border: none";
        } else {
            document.getElementById("angsuran_menurun_12").innerHTML = "<h2 style='color: #f490c3;'>Informasi Tidak Lengkap</h2>";
            document.getElementById("angsuran_menurun_24").innerHTML = "<h2 style='color: #f490c3;'>Informasi Tidak Lengkap</h2>";
            document.getElementById("angsuran_menurun_36").innerHTML = "<h2 style='color: #f490c3;'>Informasi Tidak Lengkap</h2>";
            document.getElementById("angsuran_menurun_48").innerHTML = "<h2 style='color: #f490c3;'>Informasi Tidak Lengkap</h2>";
        }
    }
}
