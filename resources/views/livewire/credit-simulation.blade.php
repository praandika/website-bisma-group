<div class="simulation-container">
    <h1>CREDIT SIMULATION</h1>
    <form wire:submit="countCredit">
        <div class="col-lg-6 col-md-12">
            <input type="text" readonly id="model_name" wire:model="model_name">
            <input type="number" placeholder="Cth: 5120000" wire:model="downpayment">
            <select id="bunga" wire:model="bunga">
                <option value="0.024">2.4%</option>
                <option value="0.0175">1.75%</option>
            </select>
        </div>
        <div class="col-lg-6 col-md-12">
            <input type="number" readonly id="harga" wire:model="harga">
            <input type="number" readonly id="dpPerc" wire:model="dpPerc">
        </div>
        <div class="col-lg-12">
            <button type="submit">Check Credit</button>
        </div>
    </form>
</div>
