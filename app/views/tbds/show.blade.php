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
            <a class="navbar-brand" href="{{ URL::to('tbds') }}">TBD</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('tbds') }}">View TBD</a></li>
            <li><a href="{{ URL::to('tbds/create') }}">Create TBD</a>
        </ul>
    </nav>



    <div class="jumbotron text-center">
        <h2>{{ $tbds->tbds }}</h2>

    </div>

</div>
</body>
</html>