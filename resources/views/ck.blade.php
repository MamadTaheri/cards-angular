<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<script src="assets/ck/ckeditor.js"></script>

<div class="container">
<!-- First row -->
<div class="row border border-success m-1">
    <h4>تعداد فعلی پست های دیتابیس :</h4> <h4>{{ count($posts)}}</h4><h4> عدد</h4>
</div>
<!-- Second row -->
<div class="row border border-success m-1">
<table class="table table-hover">
    <thead>
      <tr>
        <th>عنوان</th>
        <th>متن پست</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->post_title}}</td>
        <td>{{strip_tags($post->post_content)}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
<br>
<br>

<!-- Third row -->
<div class="row border border-success m-1">
    <div class="col">
    {!! Form::open(['method' => 'POST', 'action'=> 'App\Http\Controllers\ck@store','files'=>true]) !!}
        <div class="form-group">
            <label for="title">عنوان پست</label>
            <input name="title" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="title">متن پست </label>
            <textarea id="editor" name="editor"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-login btn-success" type="submit"  onclick="validateCaptcha()">ثبت پست در دیابییس     </button>
        </div>


    </div>
</div>
</div>

 

<script>
    CKEDITOR.replace('editor')
</script>


</body>
</html>