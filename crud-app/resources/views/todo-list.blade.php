
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My To do list </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="margin-top:20px ">
        <div class="row">
            <div class="col-md-12">
                <h1>My To Do List </h1>
         <div style="margin-right:10px">
            <a href="{{url('add-todo')}}" > Add new todo  </a>
         </div>
                <table class="table" >
                    <thead><tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>ToDo Item</th>
                        <th>Action </th>
                        </tr></thead>

                    <tbody>
                        @php
                            $i =1;
                        @endphp
                        @foreach ($data as $todo )
                         <tr>
                            <td>{{$i++}}</td>
                            <td>{{$todo->name}}</td>
                            <td>{{$todo->todo}}</td>
                            <td>Edit  |  Delete </td>

                         </tr>
                        @endforeach
                    </tbody>

                </table>
           </div>
        </div>
    </div>
</body>
</html>
