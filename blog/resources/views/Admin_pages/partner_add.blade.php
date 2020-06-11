@extends('layout/admin_master')

@section('content')



<h1>add partner</h1>
<div class="box box-block bg-white">
	<div class="row">
		<form action="partner_insert" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="col-md-12">

				<div class="col-md-5 form-group">
					<label>     نام کمپنی        </label>
		
					<input type="text" name="name" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>  لوگو  </label>
		
					<input type="file" name="logo" class="form-control">
				</div>
			<div class="col-md-12">
				<button class="btn btn-md btn-primary  pull-left"> درج شود  </button>
			</div>
			</div>
		</form>
	</div>
</div>
@stop