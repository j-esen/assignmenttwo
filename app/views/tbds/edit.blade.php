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

    <h1>Edit {{ $tbds->tbds }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($tbds, array('route' => array('tbds.update', $tbds->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('tbds', 'Tbds') }}
        {{ Form::textarea('tbds', null, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit TBD!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>