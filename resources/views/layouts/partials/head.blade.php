<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
<!-- Feather CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">
<!-- Select2 css -->
<link href="{{ asset('/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
<!-- Summernote css -->
<link href="{{ asset('/assets/plugins/summernote/summernote-lite.css') }}" rel="stylesheet" type="text/css" />
<!-- DataTables CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables/css/jquery.dataTables.min.css') }}">
@if (Route::is(['event']))
    <!-- Full canlendar css -->
    <link href="{{ asset('/assets/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
@endif
@if (Route::is(['student-dashboard', 'teacher-dashboard']))
    <!-- Simple calendar css -->
    <link href="{{ asset('/assets/plugins/simple-calendar/simple-calendar.css') }}" rel="stylesheet" type="text/css" />
@endif
@if (Route::is(['seo-settings']))
    <link href="{{ asset('/assets/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
@endif
@if (Route::is(['others-settings', 'add-blog', 'edit-blog']))
    <link rel="stylesheet" href="{{ asset('assets/css/ckeditor.css') }}">
@endif
@if (Route::is(['chart-c3']))
    <link rel="stylesheet" href="{{ asset('assets/plugins/c3/c3.min.css') }}">
@endif
@if (Route::is(['drag-drop']))
    <link rel="stylesheet" href="{{ asset('/assets/plugins/dragula/dragula.min.css') }}">
@endif
@if (Route::is(['form-wizard']))
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/twitter-bootstrap-wizard/form-wizard.css') }}">
@endif
@if (Route::is(['icon-feather']))
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/feather/feather.css') }}">
@endif
<link rel="stylesheet" href="{{ asset('assets/plugins/icons/ionic/ionicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/icons/material/materialdesignicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/icons/pe7/pe-icon-7.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/icons/simpleline/simple-line-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/icons/themify/themify.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/icons/typicons/typicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/icons/weather/weathericons.css') }}">
@if (Route::is(['lightbox']))
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/lightbox/glightbox.min.css') }}">
@endif
@if (Route::is(['notification']))
    <link rel="stylesheet" href="{{ asset('assets/plugins/alertify/alertify.min.css') }}">
@endif
@if (Route::is(['rangeslider']))
    <link rel="stylesheet" href="{{ asset('assets/plugins/ion-rangeslider/ion.rangeSlider.min.css') }}">
@endif
@if (Route::is(['scrollbar']))
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/scrollbar/scroll.min.css') }}">
@endif
@if (Route::is(['stickynote']))
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/stickynote/sticky.css') }}">
@endif
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
