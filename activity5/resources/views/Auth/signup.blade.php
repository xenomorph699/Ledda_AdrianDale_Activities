<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        form {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h1 class="text-center">Create Account</h1>
        <div class="social-container text-center">
            <a href="" title="This feature still not available" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="" title="This feature still not available" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="" title="This feature still not available" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span class="d-block text-center">or use your email for registration</span>
        <div class="form-group">
            <input type="text" name="Name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="Password" class="form-control" placeholder="Password" required>
        </div>
        <a href="{{ route('login')}}" class="d-block mb-3 text-center">Already have an account</a>
        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
