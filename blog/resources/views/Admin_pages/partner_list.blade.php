@extends('layout/admin_master')
@section('content')





<h1>partner list</h1>
 <div class="box box-block bg-white">
 	<div class="row">
 			@if(Session::has('success'))
 			<div class="alert alert-success">
 				<span>{{Session::get('success')}}</span>
 			</div>
 				@endif
<table class="table table-striped">
	<thead>
		<tr>
			<th> شماره  </th>
			<th>  نام کمپنی      </th>
			<th> لوگو   </th>		
		</tr>
	</thead>
	<tbody>
		@foreach($partners as $par)
		<tr>
			<td>{{$par->id}}</td>
			<td>{{$par->name}}</td>
			<td>
				<img src="{{$par->logo}}" height="30" width="30">
			</td>
			
			<td>
				<a href="partner_delete{{$par->id}}">
					<i class="fa fa-trash">
					</i>
				</a>
			
			<a href="partner_edit{{$par->id}}">
					<i class="fa fa-edit">
					</i>
				</a>


			</td>
		</tr>
		@endforeach
	</tbody>

</table>
</div>
</div>
@stop