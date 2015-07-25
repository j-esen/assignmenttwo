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
            <a class="navbar-brand" href="{{ URL::to('images') }}">Images</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('images') }}">View All Images</a></li>
            <li><a href="{{ URL::to('images/create') }}">Upload an Image</a>
        </ul>
    </nav>


    <div class="jumbotron text-center">
        <h2>{{ HTML::image($images->image) }}</h2>

    </div>

</div>
</body>
</html>