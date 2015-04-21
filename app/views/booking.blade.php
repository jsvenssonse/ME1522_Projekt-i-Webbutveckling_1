<!DOCTYPE html>
@extends('layouts.master')
@section('content')
<head>
<link href="Datepicker/jquery-ui.css" rel="stylesheet">

</head>
<body>



<!-- Datepicker 
<b>Från: <input type="text" id="datepickerfrom" class="datepicker"> till <input type="text" id="datepickerto" class="datepicker"><button id="search">SÖK</button></b> -->
<div class="row booking">

		<!-- Datepicker -->
	
	<div class="large-12 columns">
		<div class="large-2 columns">
		</div>
			<div id="datepicker" class="large-8 columns large-centered">
				<div class="large-6 columns panel">
				</div>
					<div class="large-5 columns panel">
					<!--<p>Date: <input type="text" id="datepickerfrom" class="datepicker">to: <input type="text" id="datepickerto" class="datepicker"></p>-->
			{{Form::open(array('url' => 'results', 'method' => 'POST')) }}
			{{Form::label('id', 'Date:')}}
			{{Form::text('datepickerfrom', '', array('class' => 'datepicker')) }}
			{{Form::label('id', 'to')}}
			{{Form::text('datepickerto', '', array('class' => 'datepicker')) }}
			{{Form::submit('Search', array('class' => 'formthing button small right success')) }}
			{{Form::close() }}
					</div>
			</div>
		<div class="large-2 columns">
		</div>
	</div>	

</div>

<script src="Datepicker/external/jquery/jquery.js"></script>
<script src="Datepicker/jquery-ui.js"></script>
<script>
$( ".datepicker" ).datepicker({
	
	showWeek: true,
      firstDay: 1
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


		
