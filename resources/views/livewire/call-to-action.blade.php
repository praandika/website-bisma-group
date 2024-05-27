<div class="content">
    <div class="search-home">
        <form action="route('search') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <input type="text" placeholder="Search your motorbike" class="search" name="search" autocomplete="off" style="width: 100%;">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="flip-in-ver-right">Find Your MotorBike!</button>
                </div>
            </div>
        </form>
    </div>
    <div class="cta">

    </div>
</div>
