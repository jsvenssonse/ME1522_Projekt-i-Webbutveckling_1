@extends('layouts.master')
@section('content')
<head>
<link href="Datepicker/jquery-ui.css" rel="stylesheet">
	<style>
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>

</head>
<body>


<!-- Datepicker 
<b>Från: <input type="text" id="datepickerfrom" class="datepicker"> till <input type="text" id="datepickerto" class="datepicker"><button id="search">SÖK</button></b> -->
	{{Form::open(array('url' => 'results', 'method' => 'POST')) }}
		{{Form::label('id', 'Datum från:')}}
		{{Form::text('datepickerfrom', '', array('class' => 'datepicker')) }}
		{{Form::label('id', 'till')}}
		{{Form::text('datepickerto', '', array('class' => 'datepicker')) }}
		{{Form::submit('SÖK', '', array('class' => 'formthing')) }}
	{{Form::close() }}

<div id="datepicker"></div>

<script src="Datepicker/external/jquery/jquery.js"></script>
<script src="Datepicker/jquery-ui.js"></script>
<script>
$( ".datepicker" ).datepicker({
	inline: true
});
// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>

@stop
