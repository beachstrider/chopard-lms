<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('assets/admin/plugins/bootstrap-rating/bootstrap-rating.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" type="text/css">
    </head>


    <body>
        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="5"/>
        
        <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/app.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/bootstrap-rating/bootstrap-rating.min.js') }}"></script>
        <script src="{{ asset('assets/admin/pages/rating-init.js') }}"></script>


    </body>
</html>