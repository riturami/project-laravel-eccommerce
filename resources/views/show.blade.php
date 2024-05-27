<a href="ins"><button>ins</button></a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    

</head>
<body>

    <table class="table table-dark">
        <thead>
          <tr>
            <th>productname</th>
            <th>productimage</th>
            <th>productprice</th>
            <th>category</th>
            <th>delete</th>
            <th>update</th>
          </tr>
        </thead>
        <tbody>



            @foreach($r as $s)
          <tr>
            <td>{{$s -> productname}}</td>
            <td><img src="photos/{{$s -> productimage}}" style="height: 50px"></td>
            <td>{{$s -> productprice}}</td>
            <td>{{$s -> category}}</td>
            <td><button><a href="delete/{{$s->id}}">delete</a></button></td>
            <td><button><a href="update/{{$s->id}}">update</a></button></td>
          </tr>
          @endforeach

         </tbody>
      </table>

</body>
</html>