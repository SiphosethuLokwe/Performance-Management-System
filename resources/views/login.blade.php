<!Doctype html>
<html>

<head>
    <title>Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        html,
        body {
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100%;
            margin: 0;
            /* background-image: url("images/compassion.jpg"); */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/educational.jpg");
        }
        
        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }
        /* Clear floats after image containers */
        
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        img {
            border-radius: 50%;
            max-width: 100%;
            height: auto;
        }
        
        #login-form {
            width: 40%;
            height: auto;
            background-color: white;
            /* padding-left: 50px; */
            border-radius: 25px;
            border: 5px solid #a7d8de;
            padding: 10px;
            margin: auto;
        }
        
        p {
            left: 0;
            line-height: 200px;
            margin: auto;
            margin-top: -70px;
            position: absolute;
            top: 50%;
            width: 100%;
            color: orange;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- <nav>
        <a href="#">
            <h5 style="color:orange;float:right;margin-right:50px;">Login</h5>
        </a>
    </nav> -->
    <div id="login-form" class="container " style="background:white;">
        <h2 style="text-align:center;color:#a7d8de;">Login</h2>
        <div class="row">
            <div class="column" style="float:right;padding-left:20px;">
                <a href="Principal/pages/samples/studentlogin.html"><img src="images/student.jpg"></a><br><br>
                <a href="Principal/pages/samples/studentlogin.html">
                    <h5 style="padding-left:auto;">Students</h5>
                </a>
            </div>
            <div class="column " style="float:right;padding-right:70px;">
                <a href="Principal/pages/samples/teacherlogin.html"><img src="images/teacher.jpg" class="pull-right"></a><br><br>
                <a href="Principal/pages/samples/teacherlogin.html" style="float:right;padding-left:150px">
                    <h5>Teacher</h5>
                </a>
            </div>

        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>

</body>

</html>