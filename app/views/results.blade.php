@extends('layouts.master')
@section('content')



	@for ($i=0; $i < count($houses); $i++) 
		{{$houses[$i]->name;}}<br>
	@endfor

@stop
