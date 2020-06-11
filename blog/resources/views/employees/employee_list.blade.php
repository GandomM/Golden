

		@if(Session::has('success'))
			<span>{{Session::get('success')}}</span>
		@endif


<table>
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>phone</th>
			<th>email</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($employees as $em)
		<tr>
			<td>{{$em->id}}</td>
			<td>{{$em->name}}</td>
			<td>{{$em->phone}}</td>
			<td>{{$em->email}}</td>
			<td>
				<a href="delete_employee{{$em->id}}">Delete</a>
				<a href="edit_employee{{$em->id}}">update</a>
			</td>
		</tr>
		@endforeach
	</tbody>

</table>