
<div class="box">
	<div class="row">
		<form action="insert_employee" method="post">
		{{csrf_field()}}
			<input type="text" name="name">
			<br>
			<input type="number" name="phone">
			<br>
			<input type="email" name="email">
			<button class="btn">insert</button>
		</form>
	</div>
</div>
