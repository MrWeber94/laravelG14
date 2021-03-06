<!DOCTYPE html>
<html>

<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">


        <div class="page-header">
            <h1> {{ $title }} </h1>
            <br>

            {{ 'Welcome , ' . auth('student')->user()->name }}
            <br>

            @include('messages')

        </div>

        <a href="{{ url('Blogs') }}" class='btn btn-primary m-r-1em'>List Blogs</a>       <a href="{{ url('Blogs/create') }}" class='btn btn-primary m-r-1em'>+ Blog</a> <a href="{{ url('Logout') }}"
            class='btn btn-primary m-r-1em'>Logout</a>

        <br>

        <h2>{{ $data[0]->title }}</h2>
        <p>{{ $data[0]->content }}</p>
        <p>{{ date('Y-F-d', $data[0]->date) }}</p>
        <p><img src="{{ url('images/blogs/' . $data[0]->image) }}" width="350px" height="350px"> </p>
        <p>

            {{ 'By , ' . $data[0]->name }}
            <br>
            <img src="{{ url('images/students/' . $data[0]->studentImage) }}" width="80px" height="80px">

        </p>





    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>
