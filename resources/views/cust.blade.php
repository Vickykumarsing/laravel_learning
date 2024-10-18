<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid primary">
  <div class="container">
    <form action="{{url('/')}}/cust" method="post">
     @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" value="{{old('name')}}">
    <span class="text-danger">
      @error('name')
      {{$message}}

      @enderror
    </span>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
    <span class="text-danger">
      @error('email')
      {{$message}}

      @enderror
    </span>
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{old('email')}}">
    <span class="text-danger">
      @error('email')
      {{$message}}

      @enderror
    </span>
  </div>

  <div class="mb-3">
    <label for="state" class="form-label">State</label>
    <input type="text" class="form-control" id="state" name="state" value="{{old('email')}}">
    <span class="text-danger">
      @error('email')
      {{$message}}

      @enderror
    </span>
  </div>

  <div class="mb-3">
    <label for="country" class="form-label">Country</label>
    <input type="text" class="form-control" id="country" name="country" value="{{old('email')}}">
    <span class="text-danger">
      @error('email')
      {{$message}}

      @enderror
    </span>
  </div>



  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    <span class="text-danger">
      @error('password')
      {{$message}}

      @enderror
    </span> 
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password_confirm</label>
    <input type="password " class="form-control" id="password" name="password_confirmation">
    <span class="text-danger">
      @error('password_confirm')
      {{$message}}

      @enderror
    </span>
  </div>

  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Default radio
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Default checked radio
  </label>
</div>

<div class="mb-3">
    <label for="dob" class="form-label">DOB</label>
    <input type="date" class="form-control" id="dob" name="dob">
    <span class="text-danger">
      @error('password')
      {{$message}}

      @enderror
    </span> 
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>