<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form action="{{url('/')}}/form" method="post">
     @csrf
  <div class="mb-3">
    <label for="userInputEmail1" class="form-label">Email address</label>
    <input type="user" class="form-control" id="userInputEmail1" name="user" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="EmailInputPassword1" class="form-label">Password</label>
    <input type="email" class="form-control" id="emailInputPassword1" name="email">
  </div>

  <div class="mb-3">
    <label for="passwordInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="passwordInputPassword1" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
