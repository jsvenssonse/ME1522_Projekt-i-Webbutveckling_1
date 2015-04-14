@extends('layouts.master')
@section('content')
<head>
<link href="Datepicker/jquery-ui.css" rel="stylesheet">


</head>
<body>



<!-- Datepicker 
<b>Från: <input type="text" id="datepickerfrom" class="datepicker"> till <input type="text" id="datepickerto" class="datepicker"><button id="search">SÖK</button></b> -->


<div class="row">
<!-- Datepicker -->
	<div id="datepicker" class="large-6 columns large-centered">
	<!--<p>Date: <input type="text" id="datepickerfrom" class="datepicker">to: <input type="text" id="datepickerto" class="datepicker"></p>-->
		{{Form::open(array('url' => 'searchresults', 'method' => 'POST')) }}
		{{Form::label('id', 'Date:')}}
		{{Form::text('datepickerfrom', '', array('class' => 'datepicker')) }}
		{{Form::label('id', 'to')}}
		{{Form::text('datepickerto', '', array('class' => 'datepicker')) }}
		{{Form::submit('Search', array('class' => 'formthing button right')) }}
		{{Form::close() }}
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
