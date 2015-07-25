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

    <h1>Add a website</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'websites')) }}

    <div class="form-group">
        {{ Form::label('websites', 'Website') }}
        {{ Form::text('websites', Input::old('websites'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Add the website!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>