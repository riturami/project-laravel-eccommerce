<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container-fluid">
        <div  class="col-md-12">
            <div style="background-image:url('photos/1.jpg');height:600px;background-size:cover"><br>
            <span class="ms-3">home</span>
            <span class="ms-3">shop</span>
            <span class="ms-3">about</span>
            <span class="ms-3">contact</span>
            <Span style="margin-left:300px "><img src="photos/site-logo.svg"></Span>
            
            <i class="fa fa-user-circle-o" aria-hidden="true" style="margin-left:300px"></i>

            <i class="fa fa-shopping-bag ms-3" aria-hidden="true"></i>
            <form action="search" method="get">
            <input type="search" name="sea">
<button>go</button>
        </form>
            <hr>
            <br><br><br><br><br>

            <div class="ms-5">WELCOME TO FLAWLESS STORE</div><br>
            <div class="ms-5 display-1">The Best Skin <br> Cleanser for You</div><br><br>
            <button class="ms-5 btn btn-light btn-outline-success">SHOP NOW</button>
            </div>
        </div>
    </div>
<br><br>


<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
         <div style="font-size:30px ">New Arrivals</div>
        </div>
        <div class="col-md-6">
         <button class="btn btn-primary" style="margin-left: 400px">SHOP NOW</button>
        </div>
        </div>
    </div>
</div>
<br><br><br>

<div class="container">
    <div class="col-md-12">
        <div class="row">
@if($sql->isnotempty())
@foreach($sql as $row)



            <div class="col-md-3 mt-5">
                <a href="cart1/{{$row->id}}">            
            <img src="photos/{{$row->productimage}}" style="height: 300px;width:100%">
            <div>{{$row->category}}</div>
            <h3>{{$row->productname}}</h3>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <p>${{$row->productprice}}</p>
        </a>

            </div>@endforeach
           
           
           
 @else 
            <h1>no product found</h1>
@endif




        </div>
    </div>
</div>


<div class="container">
    <div class="col-md-12">
        <div class="row">

@foreach($sql1 as $row)



            <div class="col-md-3 mt-5">
                <a href="cart1/{{$row->id}}">  <img src="photos/{{$row->productimage}}" style="height: 300px;width:100%">
            
            <div>{{$row->category}}</div>
            <h3>{{$row->productname}}</h3>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <p>${{$row->productprice}}</p>
                </a>
            </div>

@endforeach



        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-12">
        <div class="row">

@foreach($sql2 as $row)



            <div class="col-md-3 mt-5">
                <a href="cart1/{{$row->id}}">
            <img src="photos/{{$row->productimage}}" style="height: 300px;width:100%">
            
            <div>{{$row->category}}</div>
            <h3>{{$row->productname}}</h3>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <p>${{$row->productprice}}</p></a>
            </div>

@endforeach



        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-12">
        <div class="row">

@foreach($sql4->slice(3,3) as $row)



            <div class="col-md-3 mt-5">
                <a href="cart1/{{$row->id}}">
            <img src="photos/{{$row->productimage}}" style="height: 300px;width:100%">
            
            <div>{{$row->category}}</div>
            <h3>{{$row->productname}}</h3>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <p>${{$row->productprice}}</p></a>
            </div>

@endforeach



        </div>
    </div>
</div>



</body>
</html>