<div class="backtotop" onclick="topFunction()" style="cursor: pointer;">
    <a id="backtop">
        <img src="{{ asset('img/arrow-up.png') }}" alt="UP" class="img-fluid">
    </a>
</div>

@push('after-js')
<script>
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
@endpush
