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

    <h1>All the Websites</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Websites</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($websites as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->websites }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'websites/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this URL', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}



                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    {{--{{ HTML::link(Redirect::away($value->websites), 'Show this Website', array('class' => 'btn btn-small btn-success'))}}--}}
                    <a class="btn btn-small btn-success" href="{{ URL::to('websites/' . $value->id) }}">Show this Website</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('websites/' . $value->id . '/edit') }}">Edit this Website</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>