<?php

// require_once("../resources/config.php");
include "../resources/config.php";

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['username'])){
    // {{url('dashboard')}}
    header("Location: {{url('dashboard')}}");
    exit;
}

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty(trim($username)) && !empty(trim($password))){

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_num_rows($result);

        if($rows != 0){
            $hash = mysqli_fetch_assoc($result)['password'];

            if(password_verify($password, $hash)){
                $_SESSION['username'] = 'username';
                // {{url('dashboard')}}
                header("Location: {{url('dashboard')}}");
            }
        }
        else{
            echo "<script>alert('Wrong username or password!')</script>";
        }
    }
    else{
        echo "<script>alert('Username and password required!')</script>";
    }

    // if($result->num_rows > 0){
    //     $row = mysqli_fetch_assoc($result);
    //     $_SESSION['username'] = $row['username'];
    //     header("Location: index.php");
    // }
    // else{
    //     echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    // }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <title>Login Account | Tech Box</title>
</head>
<body>
    @include('partial')
    @yield('navbarLoginRegister')

    <div class="cardLogin">

        <div class="judul">
            <h1>Login</h1>
            <img src="/img/techbox_logo.png" alt="logo">
            <p>Tech Box</p>
        </div>

        <form action="{{url('login')}}" method="POST">
            @csrf

            {{-- Username input --}}
            <div class="form-outline mb-4">
                <center><label class="form-label" for="form1Example13">Username</label></center>
                <input type="text" name="username" class="form-control form-control-lg" />
            </div>

            {{-- Password input --}}
            <div class="form-outline mb-4">
                <center><label class="form-label" for="form1Example23">Password</label></center>
                <input type="password" name="username" class="form-control form-control-lg" />
            </div>

            {{-- Submit button --}}
            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>

            <br>
            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{url('register')}}" style="color: #393f81;">Register here</a></p>

        </form>
    </div>

    @yield('footer')

</body>
</html>
