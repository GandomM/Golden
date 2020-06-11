@extends('layout/admin_master')
@section('content')



<h1>product list</h1>
 <div class="box box-block bg-white">
 	<div class="row">
 			@if(Session::has('success'))
 			<div class="alert alert-success">
 				<span>{{Session::get('success')}}</span>
 			</div>
 				@endif
<table class="table">
	<thead>
		<tr>
			<th> شماره   محصول </th>
			
			<th>  نام محصول     </th>
			<th>ضخامت	 </th>
			<th>	رنگ </th>
			<th>  نیزاین     </th>
			<th> عکس  </th>
			<th>  عجزییات    </th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $pr)
		<tr>
			<td>{{$pr->id}}</td>
		
			<td>{{$pr->product_name}}</td>
			<td>{{$pr-> technis}}</td>
			<td>{{$pr->color}}</td>
			<td>{{$pr->design}}</td>
			<td>{{$pr->design}}</td>
			<td>
				<img src="" height="30" width="30">
			</td>
			<td>{{$pr->detail}}</td>
			
			<td>
				<a href="product_delete{{$pr->id}}">
				<i class="fa fa-trash">
					</i>
				</a>
				
			<a href="product_edit{{$pr->id}}">
					<i class="fa fa-edit">
					</i>
				</a>


			</td>
		</tr>
		@endforeach
	</tbody>
</table>
	<center>
		{{$products->links()}}<br>
		showing records :  {{$products->count()}}  <br>
		current page  : {{$products->currentPage()}}<br>
		total records : {{$products->total()}}
	</center>
</div>
</div>
@stop