@extends('layouts.adminmaster')
@section('content')

<div class="row-100">
	<br>
		<table >
			<thead>
				<tr>
					<th width="75">Bookningsnr</th>
					<th width="250">Namn</th>
					<th width="350">Epost</th>
					<th width="150">Telefon</th>
					<th width="250">Tid för bokningen</th>
					<th width="200">Stuga bokad</th>'
					<th width="200">Datum(till-från)</th>
					<th width="200">Admininstrera</th>
				</tr>
			</thead>
			<tbody>
			@for ($i=0; $i < count($customer); $i++)
				<tr>
					<td>{{$customer[$i]->booking_id}}</td>
					<td>{{$customer[$i]->name}}</td>
					<td>{{$customer[$i]->email}}</td>
					<td>{{$customer[$i]->phonenumber}}</td>
					<td>{{$customer[$i]->created_at}}</td>
					<td>{{$customer[$i]->house_name}}</td>
					<td>{{$customer[$i]->datefrom}} - {{$customer[$i]->dateto}}</td>
					<td>
						Radera<br>
						Redigera<br>
						
					</td>
				</tr>
			@endfor
			</tbody>
		</table>
</div>
@stop