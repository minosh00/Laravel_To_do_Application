<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit  ToDo Item </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container" style="margin-top:20px ">
        <div class="row">
            <div class="col-md-12">
                <h1> update  ToDo</h1>
                @if(Session::has('success'))
              <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>

                @endif
                 <form  method="post" action="{{url('update-todo')}}">
                  @csrf
                  <div class="md-3">
                    <label class="form-label">Name </label>
                    <input type="text" class="form-control" name="name" placeholder="enter your name " value="{{$data->name}}"  />
                    @error('name')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="md-3">
                    <label class="form-label">Todo Item  </label>
                    <input type="text" class="form-control" name="todo" placeholder="enter your todo Item "  value="{{$data->todo}}"  />
                  </div>
                  <br></br>
                  <button type="submit" class="btn btn-primary">submit</button>
                  <a href="{{url('todo-list')}}"  class="btn btn-danger"> back to home</a>


                 </form>


            </div>
         </div>
     </div>
</body>
</html>
