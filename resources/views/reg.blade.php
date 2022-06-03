<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <link href="{{ URL::asset('css/reg.css') }}" rel="stylesheet" type="text/css">
    <link maxcdn.bootstrapcdn.com bootstrap 4.0.0 css bootstrap.min.css>
    <link https:use.fontawesome.com releases v5.7.2 css all.css>
</head>

<body>
    <div class="wrapper bg-white">
        <div class="h2 text-center"> User Profile</div>
        <div class="h2 text-center">Registration</div>

        <div class="text-muted">
            <div class="text">Enter your registration details </div>
        </div>
        <form action="/register" method="POST">
            @csrf
            <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                <div class="form-group"> <label class="text-muted mandatory">Name</label> <input type="text" required class="form-control"> </div>
                <div class="form-group"> <label class="text-muted mandatory">Email</label> <input type="email" required class="form-control"> </div>
            </div>
            <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                <div class="form-group">
                    <div class="form-group"> <label class="text-muted mandatory">Gender</label> <input type="text" required class="form-control"> </div>

                </div>
                <div class="form-group"> <label class="text-muted">DOB</label> <input type="text" class="form-control"> </div>
            </div>
            <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                <div class="form-group"> <label class="text-muted mandatory">phone.no</label> <input type="tel" required class="form-control"> </div>
                <div class="form-group"> <label class="text-muted">City</label> <input type="text" class="form-control"> </div>
            </div>
            <div class="form-group"> <label class="text-muted mandatory">Password</label> <input type="password" required class="form-control"> </div>

            <div class="d-flex align-items-center justify-content-sm-end button-section">
                <button class="btn btn-primary mx-4" type="submit">Submit</button>
                <button class="btn" onclick="location.href='{{ url('/') }}'">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>
