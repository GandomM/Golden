@extends('layout/admin_master')

@section('content')

<h1>add project</h1>

<div class="box box-block bg-white">
	<div class="row">
		<form action="project_insert" method="post" enctype="multipart/form-data" name="_token">
			{{csrf_field()}}
			<div class="col-md-12">

				<div class="col-md-5 form-group">
					<label>  نام پروژه  </label>
		
					<input type="text" name="project_name" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    صاحب پروژه    </label>
		
					<input type="text" name="owner" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    نوعیت پروژه   </label>
		
					<input type="text" name="type" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>   دیزاین    </label>
		
					<input type="text" name="design" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    رنگ    </label>
		
					<input type="text" name="color" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    ضخامت    </label>
		
					<input type="text" name="technis" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    مواد    </label>
		
					<input type="text" name="matrial" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    موقعیت    </label>
		
					<input type="text" name="location" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>  ولایت    </label>
		
					<input type="text" name="city" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    جزییات    </label>
		
					<input type="text" name="detail" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    تاریخ    </label>
		
					<input type="date" name="date" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    عکس    </label>
		
					<input type="file" name="image" class="form-control" multiple class="file" >
					
				</div>

				
			<div class="col-md-12">
				<button class="btn btn-md btn-primary  pull-left"> درج شود  </button>
			</div>
			</div>
		</form>
	</div>
</div>
@stop