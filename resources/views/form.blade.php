<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Registration Page</title>
  </head>
  <body>
    <form action="{{url('/')}}/form" method="post">
      @csrf      
      <div class="container">
        <h1 class="text-centre">Registration</h1>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" class="form-control" placeholder="" area-describedby="" value="{{old('name')}}">
          <span class="text-danger">
            @error('name')
              {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" placeholder="" area-describedby=>
          <span class="text-danger">
            @error('email')
              {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control" placeholder="" area-describedby="">
          <span class="text-danger">
            @error('password')
              {{$message}}
            @enderror
          </span>
        </div>
        <div>
          <label for="">Confirm Password</label>
          <input type="password" name="password_confirmatio" class="form-control" placeholder="" area-describedby="">
          <span class="text-danger">
            @error('password_confirmatio')
              {{$message}}
            @enderror
          </span>
        </div>
        <button class="btn btn-primary">Submit</button>
      </div>  
    </form>  
  </body>
</html>
