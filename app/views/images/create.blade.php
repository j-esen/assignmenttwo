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

    <h1>Upload an Image</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'images', 'files' => 'true')) }}

    <div class="form-group">
        {{ Form::label('image', 'Image') }}
        {{ Form::file('image', Input::old('image'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Upload the Image!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>