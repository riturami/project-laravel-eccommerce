<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    
<form method="post" enctype="multipart/form-data" action="\down">
@csrf
<input type="hidden" name="id" value="{{$s -> id}}">

<div class="mb-3 mt-3">
    <label for="text" class="form-label">product name:</label>
    <input type="text" class="form-control" placeholder="Enter product name" name="name" value="{{$s -> productname}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">product image:</label>
    <input type="file" class="form-control"  placeholder="select image" name="img" value="{{$s -> productimage}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">product price:</label>
    <input type="text" class="form-control"  placeholder="enter product price" name="price" value="{{$s -> productprice}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">select category</label><br>
    <select placeholder="select category" name="cate" style="width: 20%" value="{{$s -> category}}">
        <option>Cleanser</option>
        <option>body lotion</option>
        <option>Sunscreens</option>
        <option>bundels</option>
        <option>Moisturizer</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</body>
</html>