<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
                <div class="card">
                    <div class="card-header">
                        <h1 class="float-start">Edit Student</h1>
                        <a href="{{route('student.index')}}" class="btn btn-outline-info btn-sm float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('student.update',$student->id)}}" method="POST">
                            @csrf
                            <input type="text" name="name" value="{{$student->name}}" class="form-control mb-3" placeholder="Enter name">
                            <input type="text" name="roll" value="{{$student->roll}}" class="form-control mb-3" placeholder="Enter roll">
                            <input type="text" name="reg" value="{{$student->registration}}" class="form-control mb-3" placeholder="Enter resistration">
                            <input type="email" name="email" value="{{$student->email}}" class="form-control mb-3" placeholder="Enter name">
                            <input type="submit" class="btn btn-outline-primary w-100" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>