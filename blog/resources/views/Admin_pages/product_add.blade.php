@extends('layout/admin_master')

@section('content')



<h1>add product</h1>
<div class="box box-block bg-white">
	<div class="row">
		<form action="product_insert" method="post" enctype="multipart/form-data">{{csrf_field()}}
			<div class="col-md-12">

				<div class="col-md-5 form-group">
					<label>  نام محصول    </label>
		
					<input type="text" name="product_name" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>     ضخامت    </label>
		
					<input type="text" name="technis" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>     رنگ   </label>
		
					<input type="text" name="color" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>       دیزاین     </label>
		
					<input type="text" name="design" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<label>    عکس    </label>
		
					<input type="file" name="image" class="form-control" multiple>
				</div>
				<div class="col-md-5 form-group">
					<label>    عجزییات  </label>
		
					<input type="textarea" name="detail" class="form-control">
				</div>
			<div class="col-md-12">
				<button class="btn btn-md btn-primary  pull-left"> درج شود  </button>
			</div>
			</div>
		</form>
	</div>
</div>
@stop