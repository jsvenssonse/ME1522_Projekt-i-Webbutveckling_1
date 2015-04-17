@extends('layouts.master')
@section('content')

<style>
h5  {color:white}
</style>
<form>
<br>
	<div class="large-4 columns">
	    <div class="large-12 columns">
      <h5>Välj ledig stuga</h5>
      <input id="checkbox1" type="checkbox"><label for="checkbox1">Stuga 1</label>
      <input id="checkbox2" type="checkbox"><label for="checkbox2">Stuga 2</label>
    </div>
<br>
<br>	
	    <div class="large-12 columns">
	    <br>
	    <h5>Fyll i dina uppgifter</h5>
	      <label>Namn
	        <input type="text"/>
	      </label>
	    </div>
	    <div class="large-12 columns">
	      <label>Telefonnummer
	        <input type="text" />
	      </label>
	    </div>
	    <div class="large-12 columns">
	      <label>Email
	        <input type="text"  />
	      </label>
	      <div class="button small right">Bekräfta bokning</div>
	    </div>

 	</div>

  
</form>




@stop
