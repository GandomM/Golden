@extends('layout/admin_master')

@section('content')



<h1>partner edit</h1>
<div class="box box-block bg-white">
	<div class="row">
		<form action="partner_update{{$partner->id}}" method="post">
			{{csrf_field()}}
			<div class="col-md-12">

				<div class="col-md-5 form-group">
					<label>  نام کمپنی     </label>
		
					<input type="text" name="name" value="{{$partner->name}}" class="form-control">
				</div>
				<!-- <div class="col-md-5 form-group">
					<label>    نام کمپنی      </label>
		
					<input type="text" name="company_name" value="{{$partner->company_name}}" class="form-control">
				</div> -->
				<div class="col-md-5 form-group">
					<label>   لوگو      </label>
		
					<input type="file" name="logo" value="{{$partner->logo}}" class="form-control">
				</div>
			<div class="col-md-12">
				<button class="btn btn-md btn-primary  pull-left"> ویرایش شود </button>
			</div>
			</div>
		</form>
	</div>
</div>
@stop