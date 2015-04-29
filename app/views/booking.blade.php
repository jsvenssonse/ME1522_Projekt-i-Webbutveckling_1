<!DOCTYPE html>
@extends('layouts.master')
@section('content')
<head>
<link href="Datepicker/jquery-ui.css" rel="stylesheet">
	<script src="js/vendor/jquery-2.1.3.min.js"></script>


  </script>
</head>
<body>



<!-- Datepicker 
<b>Från: <input type="text" id="datepickerfrom" class="datepicker"> till <input type="text" id="datepickerto" class="datepicker"><button id="search">SÖK</button></b> -->
<div class="row booking">

		<!-- Datepicker -->
	
	<div class="large-12 columns">
		<div class="large-2 columns">
		</div>
			<div id="datepicker" class="large-11 columns large-centered">
				<div class="large-6 columns panel">
				<p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok. Lorem ipsum har inte bara överlevt fem århundraden, utan även övergången till elektronisk typografi utan större förändringar. Det blev allmänt känt på 1960-talet i samband med lanseringen av Letraset-ark med avsnitt av Lorem Ipsum, och senare med mjukvaror som Aldus PageMaker.</p>
				</div>
					
		<div class="large-5 columns panel">
			<h2>Boka stuga</h2>
			<!--<p>Date: <input type="text" id="datepickerfrom" class="datepicker">to: <input type="text" id="datepickerto" class="datepicker"></p>-->
			{{Form::open(array('url' => 'results', 'method' => 'POST')) }}
			{{Form::label('id', 'Datum från:')}}
			{{Form::text('datepickerfrom', '', array('class' => 'datepicker shadow')) }}
			{{Form::label('id', 'Datum till:')}}
			{{Form::text('datepickerto', '', array('class' => 'datepicker shadow')) }}
			{{Form::submit('Sök', array('class' => 'formthing button small right')) }}
			{{Form::close() }}
		</div>
			
			</div>
		<div class="large-2 columns">
		<p></p>
		</div>
	</div>	

</div>

<script src="Datepicker/external/jquery/jquery.js"></script>
<script src="Datepicker/jquery-ui.js"></script>
<script>



$( ".datepicker" ).datepicker({
	showWeek: true,
      firstDay: 1,
});
// Hover states on the static widgets
//ui-datepicker-unselectable ui-state-disabled

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


		
