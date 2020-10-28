{{-- Toastr Notification Alert --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>


    // Global errors Notification
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr["error"]("{{ $error }}")
        @endforeach
    @endif



    // Custom Notifications
    @if(Session::has('success'))
        toastr["success"]("{{ Session::get('success') }}")
    @endif
    @if(Session::has('info'))
        toastr["info"]("{{ Session::get('info') }}")
    @endif
    @if(Session::has('warning'))
        toastr["warning"]("{{ Session::get('warning') }}")
    @endif
    @if(Session::has('error'))
        toastr["error"]("{{ Session::get('error') }}")
    @endif

    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }
</script>