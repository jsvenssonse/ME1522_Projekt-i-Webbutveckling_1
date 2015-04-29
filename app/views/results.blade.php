@extends('layouts.master')
@section('content')

<style>
h5  {color:white}
</style>
<br>
	<div class="large-4 columns">
	    <div class="large-12 columns">
      <h5>Välj ledig stuga</h5>
      {{Form::open(array('url' => 'verification', 'method' => 'POST')) }}
      @for ($i=0; $i < count($houses); $i++)
      {{Form::label($houses[$i]->name) }}
      {{ Form::checkbox('checkbox', $houses[$i]->id) }}
      
      @endfor

    </div>

<br>
<br>	

{{Form::open(array('url' => 'verification', 'method' => 'POST')) }}
	    <div class="large-12 columns">

	    <br>
	    <h5>Fyll i dina uppgifter</h5>
	    {{Form::label('Namn:')}}
	    {{Form::text('name', '', array('class' => '')) }}
	    </div>
	    <div class="large-12 columns">
	    {{Form::label('Telefonnummer:')}}
	    {{Form::text('phonenumber', '', array('class' => '')) }}
	    </div>
	    <div class="large-12 columns">
	    {{Form::label('Epost:')}}
	    {{Form::text('email', '', array('class' => '')) }}
	      {{Form::submit('Bekräfta bokning', array('class' => 'button small ')) }}
	    </div>
 	</div>

{{Form::close() }}

  



@stop
