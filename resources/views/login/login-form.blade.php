
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login To Continue</title>
    <link rel="stylesheet" href="{{url('assets/style.css')}}">
    <link href="{{url('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css')}}" rel='stylesheet'>
</head>
<body>
        <div class="wrapper">
            <form method="post" action="{{route('postlogin')}}">
                @csrf
                <h1> LOGIN </h1>        
                <div class="input-box"> 
                    <input name="email" type="text" placeholder="Email" required>
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box"> 
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="remember-forgot">
                    <a href="#">Forgot the password???</a>
                </div>
                <button type="submit" class="btn">LOGIN</button>
            </form> 
        </div>

    <script src="{{('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>