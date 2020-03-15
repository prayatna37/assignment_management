<html>
    <head>
        <title>Management System</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}">
    </head>
    <body>
    @include('partials.success')
    @include('partials.error')
        <div class="row" style="margin: 20px;">
            <div class="col-md-4">
                <h1>UnAuthorized User</h1>
            </div>
            <div class="col-md-4 mt-3">
                <a href="/" class="btn btn-primary"> Home Page</a>
            </div>
        </div>

    </body>
</html>


