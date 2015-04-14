@extends('layouts.master')
@section('content')
<head>
<link href="Datepicker/jquery-ui.css" rel="stylesheet">


</head>
<body>



<!-- Datepicker 
<b>Från: <input type="text" id="datepickerfrom" class="datepicker"> till <input type="text" id="datepickerto" class="datepicker"><button id="search">SÖK</button></b> -->
	{{Form::open(array('url' => 'searchresults', 'method' => 'POST')) }}
		{{Form::label('id', 'Datum från:')}}
		{{Form::text('datepickerfrom', '', array('class' => 'datepicker')) }}
		{{Form::label('id', 'till')}}
		{{Form::text('datepickerto', '', array('class' => 'datepicker')) }}
		{{Form::submit('SÖK', '', array('class' => 'formthing')) }}
	{{Form::close() }}

<div class="row">
<!-- Datepicker -->




<div id="datepicker" class="large-6 columns large-centered">
	<p>Date: <input type="text" id="datepickerfrom" class="datepicker">to: <input type="text" id="datepickerto" class="datepicker"></p>
</div>

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
<a href="#" class="button">Search</a>
 
  
</div>



@stop
