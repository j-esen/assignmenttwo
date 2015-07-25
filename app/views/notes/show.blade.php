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
            <a class="navbar-brand" href="{{ URL::to('notes') }}">Notes</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('notes') }}">View Notes</a></li>
            <li><a href="{{ URL::to('notes/create') }}">Create a Note</a>

        </ul>
    </nav>

    <h1>Showing: {{ $notes->notes }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $notes->notes }}</h2>

    </div>

</div>
</body>
</html>