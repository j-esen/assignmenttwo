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

    <h1>Edit {{ $notes->notes }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($notes, array('route' => array('notes.update', $notes->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('notes', 'Notes') }}
        {{ Form::textarea('notes', null, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit the Note!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>