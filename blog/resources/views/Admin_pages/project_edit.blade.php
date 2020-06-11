@extends('layout/admin_master')
@section('content')



<h1>edit project</h1>
<div class="box box-block bg-white">
	<div class="row">
		<form action="project_update{{$project->id}}" method="post
			" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="col-md-12">

				<div class="col-md-5 form-group">
					<label>  نام پروژه  </label>
		
					<input type="text" name="project_name" class="form-control" value="{{$project->project_name}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    صاحب پروژه    </label>
		
					<input type="text" name="owner" class="form-control" value="{{$project->owner}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    نوعیت پروژه   </label>
		
					<input type="text" name="type" class="form-control" value="{{$project->type}}">
				</div>
				<div class="col-md-5 form-group">
					<label>   دیزاین    </label>
		
					<input type="text" name="design" class="form-control" value="{{$project->design}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    رنگ    </label>
		
					<input type="text" name="color" class="form-control" value="{{$project->color}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    ضخامت    </label>
		
					<input type="text" name="technis" class="form-control" value="{{$project->technis}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    مواد    </label>
		
					<input type="text" name="matrial" class="form-control" value="{{$project->matrial}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    موقعیت    </label>
 					<input type="text" name="location" class="form-control" value="{{$project->location}}">
				</div>
				<div class="col-md-5 form-group">
					<label>  ولایت    </label>
		
					<input type="text" name="city" class="form-control" value="{{$project->city}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    جزییات    </label>
		
					<input type="text" name="detail" class="form-control" value="{{$project->detail}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    تاریخ    </label>
		
					<input type="date" name="date" class="form-control" value="{{$project->date}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    عکس   </label>
		
					<input type="csrf_field" name="image" class="form-control" value="{{$project->image}}">
				</div>

				
			<div class="col-md-12">
				<button class="btn btn-md btn-primary  pull-left">  یرایش شود   </button>
			</div>
			</div>
		</form>
	</div>
</div>
@stop