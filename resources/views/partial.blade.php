{{-- navbarHome sebelum login --}}
{{--  --}}
@section("navbarHome")
<div class="nav_bar">
    <div class="logoNav">
        <a href="{{url('home')}}" class="logo"><img src="/img/logo.png" alt=""></a>
        <a href="{{url('home')}}" class="logo">Tech Box</a>
    </div>

    <div class="menus">
        <a href="{{url('home')}}" class="navList">Home</a>
        <a href="{{url('course')}}" class="navList">Course</a>
        <a href="{{url('about')}}" class="navList">About</a>
        <button href="{{url('login')}}" class="loginRegister_botton"><a href="{{url('login')}}" class="color_reg">Login</a></button>
    </div>
</div>
@endsection

{{-- navbarDashboard sebelum login --}}
{{--  --}}
@section("navbarDashboard")
<div class="nav_bar">
    <div class="logoNav">
        <a href="{{url('dashboard')}}" class="logo"><img src="/img/logo.png" alt=""></a>
        <a href="{{url('dashboard')}}" class="logo">Tech Box</a>
    </div>

    <div class="menus">
        <a href="{{url('course')}}" class="navList">Course</a>
        <a href="{{url('about')}}" class="navList">About</a>
        <button href="{{url('profile')}}" class="loginRegister_botton"><a href="{{url('profile')}}" class="color_reg">Profile</a></button>
    </div>
</div>
@endsection

{{-- navbarLoginRegister sebelum login --}}
{{--  --}}
@section("navbarLoginRegister")
<div class="nav_bar">
    <div class="logoNav">
        <a href="{{url('home')}}" class="logo"><img src="/img/logo.png" alt=""></a>
        <a href="{{url('home')}}" class="logo">Tech Box</a>
    </div>

    <div class="menus">
        <a href="{{url('home')}}" class="navList">Home</a>
        <a href="{{url('course')}}" class="navList">Course</a>
        <a href="{{url('about')}}" class="navList">About</a>
    </div>
</div>
@endsection

{{-- sebelum login --}}
{{--  --}}
@section("profileWebsite")
<div class="contents">
    <div class="banner_one">
        <div class="text">
            <a href="#PopularCourse" >Start Programming<br>with Us</a>
            <p>Tech Box adalah sebuah platform belajar pemrograman secara <b><i>gratis</i></b>.<br>Terdapat banyak pilihan <i>course</i> populer, seperti C++, Pyhton, Java.<br>
            </p>
            <a href="{{url('login')}}" ><p class="textDaftar">Mulai <i>Coding</i> Sekarang!</p></a>

        </div>

        <div class="image">
            <img src="/img/programming_vector2.png" alt="">
        </div>
    </div>
</div>
@endsection

{{-- setelah login --}}
{{--  --}}
@section("enrolledCourse")
<div class="contents" id="enrolledCourse">

    <div class="text_ec" id="EnrolledCourses">
        <center><a href="#EnrolledCourses"  >Enrolled Courses</a></center>
    </div>

    <div class="enrolled_courses" >
        <div class="card">
            <img src="/img/angularjs.png" alt="Angular JS" style="width:250px">
            <div class="biodatas">
                <h4><b>Angular JS - 45%</b></h4>
                <p>Structural framework for dynamic web apps</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/html5.png" alt="HTML 5" style="width:250px">
            <div class="biodatas">
                <h4><b>HTML - 35%</b></h4>
                <p>Used to structure a web page and its content.</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/css3.png" alt="CSS 3" style="width:250px">
            <div class="biodatas">
                <h4><b>CSS - 55%</b></h4>
                <p>Describes how HTML elements are to be displayed on screen</p>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- sebelum dan setelah login --}}
{{--  --}}
@section("popularCourses")
<div class="contents" id="PopularCourse">
    <div class="text_ec">
        <center><a href="#PopularCourse" >Popular Courses</a></center>
    </div>

    <div class="courses_lineone">
        <div class="card">
            <img src="/img/csharp.png" alt="C#" style="width:250px">
            <div class="biodatas">
                <h4><b>C#</b></h4>
                <p>Object-oriented programming language from Microsoft</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/git.png" alt="GIT" style="width:250px">
            <div class="biodatas">
                <h4><b>GIT</b></h4>
                <p>Software for tracking changes in any set of files</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/cplusplus.png" alt="C++" style="width:250px">
            <div class="biodatas">
                <h4><b>C++</b></h4>
                <p>Cross-platform language to create high-performance apps</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/backbonejs.png" alt="Backbone JS" style="width:250px">
            <div class="biodatas">
                <h4><b>Backbone JS</b></h4>
                <p>Structure to web by providing models with key-value binding</p>
            </div>
        </div>
    </div>

    <div class="courses_linetwo">
        <div class="card">
            <img src="/img/javascript.png" alt="Java Script" style="width:250px">
            <div class="biodatas">
                <h4><b>Java Script</b></h4>
                <p>Object-oriented language with first-class functions</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/mysql.png" alt="My SQL" style="width:250px">
            <div class="biodatas">
                <h4><b>My SQL</b></h4>
                <p>Relational database management system</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/node-js.png" alt="Node JS" style="width:250px">
            <div class="biodatas">
                <h4><b>Node JS</b></h4>
                <p>Platform for executing JavaScript code server-side</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/java.png" alt="Java" style="width:250px">
            <div class="biodatas">
                <h4><b>Java</b></h4>
                <p>Object-oriented programming language and software platform</p>
            </div>
        </div>
    </div>

    <div class="courses_linethree">
        <div class="card">
            <img src="/img/python.png" alt="Python" style="width:250px">
            <div class="biodatas">
                <h4><b>Python</b></h4>
                <p>High-level programming language that is easy to read</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/ruby.png" alt="Ruby" style="width:250px">
            <div class="biodatas">
                <h4><b>Ruby</b></h4>
                <p>Pure object-oriented programming language.</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/swift.png" alt="Swift" style="width:250px">
            <div class="biodatas">
                <h4><b>Swift</b></h4>
                <p>Intuitive programming language for Apple products</p>
            </div>
        </div>

        <div class="card">
            <img src="/img/typescript.png" alt="Type Script" style="width:250px">
            <div class="biodatas">
                <h4><b>Type Script</b></h4>
                <p>Programming language developed by Microsoft</p>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- sebelum dan setelah login --}}
{{--  --}}
@section("whyChooseUs")

<div class="whyChooseUs">
    <div class="about">
        <center><h2>Why Choose Us</h2></center>
        <div class="img">
            <img src="/img/techbox_logo.png" alt="" width="200px" height="200px">
            <p>Tech Box</p>
        </div>
        <div class="text">
            <p>Kami telah membantu lebih dari <b>100.000</b> orang belajar mengenai back-end, kurikulum yang kami tawarkan mengikuti relevansi industri yang terus maju.</p>
        </div>
    </div>
</div>
@endsection

{{-- sebelum dan setelah login --}}
{{--  --}}
@section("footer")
<div class="footer">
    <div class="logos">
        <div class="image_techbox">
            <img src="/img/techbox_logo.png" alt="Techbox Logo">
        </div>
        <p>Tech Box</p>
    </div>

    <div  class="social_media" id="contact">
        <div class="socmed" class="socmed_instagram">
            <a href=""><img src="/img/insta_logo.png" alt="Instagram" width="100px"></a>@techbox.id<br>
        </div>

        <div class="socmed" class="socmed_youtube">
            <a href=""><img src="/img/youtube_logo.png" alt="Youtube" width="100px"></a>Tech Box<br>
        </div>

        <div class="socmed" class="socmed_tiktok">
            <a href=""><img src="/img/tiktok_logo.png" alt="Tik Tok" width="100px"></a>@techbox.id<br>
        </div>
    </div>
</div>

<div class="copyright">
    <center>© Copyright 2022 Tech Box Indonesia</center>
</div>
@endsection
