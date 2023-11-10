<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 400px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
            @csrf
            <h1 class="text-center">Sign in</h1>
            <div class="social-container text-center">
                <a href="#" title="This feature still not available" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" title="This feature still not available" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" title="This feature still not available" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span class="text-center d-block">or use your account</span>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required />
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required />
                <div class="invalid-feedback">Please enter your password.</div>
            </div>
            <a href="{{ route('signup')}}" class="d-block mb-3 text-center">Create Account</a>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
