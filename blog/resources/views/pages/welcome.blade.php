@extends('layout/master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-11 mail-section">
			<form name="frm" action="upload" method="post" enctype="multipart/form-data">
				{{csrf_token()}}
			
			<h1>Multiple file upload</h1>
			<input type="hidden" name="_token" value="">
			<div class="form-group">
				<input type="file" name="img">
			</div>
			<input type="submit" name="ok" value="upload">
			</form>

			@if(Session::has('msg'))
			{ { Session::get('msg')} }
			@endif
		</div>
		
	</div>
</div>

@stop