
<div class="box">
	<div class="row">
		<form action="update_employee{{$employee->id}}" method="post
			">
			{{csrf_field()}}
		
			<input type="text" name="name" value="{{$employee->name}}">
			<br>
			<input type="number" name="phone" value="{{$employee->phone}}">
			<br>
			<input type="email" name="email" value="{{$employee->email}}">
			<button class="btn">update</button>
		</form>
	</div>
</div>