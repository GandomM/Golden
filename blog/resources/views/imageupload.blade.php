<!-- imageupload.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Multiple Images Upload Using Dropzone</title>
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
</head>
<body>
<div class="container">
       
    <h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>
    <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="type">
    <input type="file" name="image_name[]" multiple>

    <input type="submit" name="ok" value="upload">

</form> 
@if(Session::has('msg'))
{{Session::get('msg')}}
@endif  

</body>
</html>