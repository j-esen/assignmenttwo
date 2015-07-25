<!DOCTYPE html>
<html>
<head>
    <title>Jessica Clements - Assignment 2</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('index') }}">Home</a>
            <a class="navbar-brand" href="{{ URL::to('websites') }}">Websites</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('websites') }}">View All URLS</a></li>
            <li><a href="{{ URL::to('websites/create') }}">Add a URL</a>
        </ul>
    </nav>


    {{--<div class="jumbotron text-center">--}}
        {{--<h2>{{ $websites->websites }}</h2>--}}
       {{----}}

    {{--</div>--}}
    <a href="{{ URL::to($websites->websites) }}">Open Link</a></li>

</div>
</body>
</html>