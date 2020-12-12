<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>

</head>
<body class="container">
<div class="row">
    <div class="col-2">
        <div class="d-flex flex-column my-5">
            <button type="button" class="btn btn-secondary p-2 m-2">Secondary</button>
            <button type="button" class="btn btn-secondary p-2 m-2">Secondary</button>
            <button type="button" class="btn btn-secondary p-2 m-2">Secondary</button>
        </div>
    </div>
    <div class="col-9">
        <div class="m-10">
            @yield('content')
        </div>
    </div>
</div>




</body>
</html>
