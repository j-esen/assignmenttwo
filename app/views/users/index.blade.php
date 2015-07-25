@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
{{trans('pages.listwith')}} {{trans('pages.users')}}
@stop

{{-- Content --}}
@section('content')

	<h3><a href="{{ URL::to('notes') }}">Notes</a></h3>
	<h3><a href="{{ URL::to('images') }}">Images</a></h3>
	<h3><a href="{{ URL::to('websites') }}">Websites</a></h3>
	<h3><a href="{{ URL::to('tbds') }}">TBD</a></h3>



@stop
