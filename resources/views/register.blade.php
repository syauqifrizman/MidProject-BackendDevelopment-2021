<?php

// require_once("/resources/config.php");
include "../resources/config.php";

if(isset($_POST['submit'])){

    // filter data yang diinputkan
    $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // enkripsi password
    $password = md5($_POST["password"]);
    $cpassword = md5[$_POST["cpassword"]];
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $birthdate = filter_input(INPUT_POST, 'birthdate');

    // menyiapkan query
    $sql = "INSERT INTO users (username, password, cpassword, fullname, address, phone, age, birthdate)
            VALUES ('$username', '$password', '$cpassword', '$fullname', '$address', '$phone', '$age', '$birthdate')";

    //save query to database
    $saved = mysqli_query($connect, $sql);


    if($saved){
        header("Location: {{url('login')}}");
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <title>Register Account | Tech Box</title>
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

        <form action="{{url('register')}}" method="POST">

            {{-- Username input --}}
            <div class="form-outline mb-4">
                <center><label class="form-label" for="username">Username</label></center>
                <input type="text" name="username" placeholder="Your username" class="form-control form-control-lg" />
            </div>

            {{-- Password input --}}
            <div class="form-outline mb-4">
                <center><label class="form-label" for="password">Password</label></center>
                <input type="password" name="password" placeholder="Your password" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <center><label class="form-label" for="cpassword">Confirm Password</label></center>
                <input type="password" name="cpassword" placeholder="Rewrite your password" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <center><label class="form-label" for="fullname">Fullname</label></center>
                <input type="text" name="fullname" placeholder="Aku pasti bisa" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <center><label class="form-label" for="address">Address</label></center>
                <input type="text" name="address" placeholder="Jl. Ahmad Yani xxx" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <center><label class="form-label" for="phone">Phone Number</label></center>
                <input type="text" name="phone" placeholder="+628xxxx" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <center><label class="form-label" for="age">Age</label></center>
                <input type="text" name="age" placeholder="Only Number, example: 19" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <center><label class="form-label" for="birthDate">Bith Date</label></center>
                <input type="text" name="birthdate" placeholder="YYYY-MM-DD" class="form-control form-control-lg" />
            </div>

            {{-- Submit button --}}
            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>

            <br>
            <p class="mb-5 pb-lg-2" style="color: #393f81;">Punya akun? <a href="{{url('login')}}" style="color: #393f81;">Login di sini</a></p>
        </form>
    </div>

    @yield('footer')
</body>
</html>
