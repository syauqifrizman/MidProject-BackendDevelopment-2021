<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <title>Dashboard | Tech Box</title>
</head>
<body>
    @include('partial')
    @yield('navbarDashboard')

    @yield('enrolledCourse')

    @yield('popularCourses')

    @yield('whyChooseUs')

    @yield('footer')

</body>
</html>
