<div class="backtotop">
    <a id="backtop">
        <img src="{{ asset('img/arrow-up.png') }}" alt="UP" class="img-fluid">
    </a>
</div>

@push('after-js')
<script>
    var btn = $('#backtop');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

</script>
@endpush
