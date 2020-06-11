@extends('layout/admin_master')
@section('content')
<h1>project list</h1>
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
			<th>  نام پروژه  </th>
			<th>     صاحب پروژه  </th>
			<th>   نوعیت پروژه </th>
			<th> دیزاین   </th>
			<th>  رنگ      </th>
			<th> ضخامت  </th>
			<th> مواد   </th>
			<th>  موقعیت      </th>
			<th> ولایت   </th>
			<th>  جزییات      </th>
			<th> تاریخ   </th>
			<th> عکس  </th>

		</tr>
	</thead>
	<tbody>
		@foreach($projects as $pr)
		<tr>
			<td>{{$pr->id}}</td>
			<td>{{$pr->project_name}}</td>
			<td>{{$pr->owner}}</td>
			<td>{{$pr->type}}</td>
			<td>{{$pr->design}}</td>
			<td>{{$pr->color}}</td>
			<td>{{$pr->technis}}</td>
			<td>{{$pr->matrial}}</td>
			<td>{{$pr->location}}</td>
			<td>{{$pr->city}}</td>
			<td>{{$pr->detail}}</td>
			<td>{{$pr->date}}</td>
			<td>
				<!-- <img src="{{$pr->image}}" height="30" width="30"> -->
			</td>
			
			
			<td>
				<a href="project_delete{{$pr->id}}">
					<i class="fa fa-trash">
					</i>
				</a>
				
			<a href="project_edit{{$pr->id}}">
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