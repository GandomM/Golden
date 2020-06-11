@extends('layout/admin_master')

@section('content')



<h1>edit product</h1>
<div class="box box-block bg-white">
	<div class="row">
		<form action="product_update{{$product->id}}" method="post">
			{{csrf_field()}}
			<div class="col-md-12">

				<div class="col-md-5 form-group">
					<label>  نام محصول    </label>
		
					<input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
				</div>
				<div class="col-md-5 form-group">
					<label>  ضخامت  </label>
		
					<input type="text" name="technis" class="form-control" value="{{$product->technis}}">
				</div>
				<div class="col-md-5 form-group">
					<label>  رنگ  </label>
		
					<input type="text" name="color" class="form-control" value="{{$product->color}}">
				</div>
				<div class="col-md-5 form-group">
					<label>       دیزاین     </label>
		
					<input type="text" name="design" class="form-control" value="{{$product->design}}">
				</div>
				<div class="col-md-5 form-group">
					<label>    عکس    </label>
		
					<input type="file" name="image" class="form-control" value="">
				</div>
				<div class="col-md-5 form-group">
					<label>    عجزییات  </label>
		
					<input type="textarea" name="detail" class="form-control">
				</div>
			<div class="col-md-12">
				<button class="btn btn-md btn-primary  pull-left"> یرایش شود    </button>
			</div>
			</div>
		</form>
	</div>
</div>
@stop