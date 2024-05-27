<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOP PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-4"><img src="../photos/{{$s->productimage}}" class="col-md-12 col-12"></div>
            <div class="col-md-8"><h1>{{$s->productname}}</h1>
            
                <h6>{{$s->productprice}}</h6>
                <p>{{$s->category}}</p>
            </div>
        </div>
    </div>
    
</body>
</html>