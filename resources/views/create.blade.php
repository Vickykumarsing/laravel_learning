<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body{
      background-color:blue;
    }
  </style>
  </head>
  <body >
 
  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
 
    <a class="navbar-brand" href="{{url('/')}}">Form submit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/registration')}}">Registration</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link disable dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Customer
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('/customer')}}" aria-disabled="true">customer</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
   


<div class="container mt-5 bg-light ">

        <div class="row">
            <div class="form-group col-md-12 required bg-success">
                <marquee behavior="" direction="">
                    <h1>{{$title}}</h1>
                </marquee>
            </div>
        </div>


        <form action="{{$url}}" method="post">
            @csrf

            <div class="row">
                <div class="form-group col-md-6 required bg-light mt-5">

                    <label for="name" class="form-label ">Name</label>
                    <input type="text" class="form-control bg-light " id="name" name="name" value="{{old('name')}}"/>
                    <span class="text-danger">
                        @error('email')
                        {{$message}}

                        @enderror
                    </span>

                </div>

                <div class="form-group col-md-6 required bg-light mt-5">

                    <label for="email" class="form-label ">Email</label>
                    <input type="email" class="form-control bg-light" id="email" name="email" value="{{old('email')}}"/>
                    <span class="text-danger">
                        @error('email')
                        {{$message}}

                        @enderror
                    </span>
                </div>
            </div>




            <div class="row">
                <div class="form-group col-md-6 required bg-light mt-5">

                    <label for="address" class="form-label">Address</label>
                    <input type="address" class="form-control bg-light" id="address" name="address"
                    value="{{old('address')}}"/>
                    <span class="text-danger">
                        @error('password')
                        {{$message}}

                        @enderror
                    </span>

                </div>


                <div class="form-group col-md-6 required bg-light mt-5">

                    <label for="state" class="form-label">State</label>
                    <input type="state " class="form-control bg-light" id="state" name="state" value="{{old('state')}}"/>
                    <span class="text-danger">
                        @error('password_confirm')
                        {{$message}}

                        @enderror
                    </span>

                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-6 required bg-light mt-5">

                    <label for="country" class="form-label">contry</label>
                    <input type="country" class="form-control bg-light" id="country" name="country"
                    value="{{old('country')}}">
                    <span class="text-danger">
                        @error('password')
                        {{$message}}

                        @enderror
                    </span>
                </div>


                <div class="form-group col-md-6 required bg-light mt-5">

                    <label for="dob" class="form-label bg-success">DOB</label>
                    <input type="date" class="form-control bg-light" id="dob" name="dob" value="{{old('dob')}}">
                    <span class="text-danger">
                        @error('password_confirm')
                        {{$message}}

                        @enderror
                    </span>
                </div>
            </div>






            <div class="row">
                <div class="form-group col-md-6  bg-light mt-5">
                    <label class="" for="">
                        Gnder
                    </label>
                    <br />


                    <div class="form-check form-check-inline ">

                        <input class="form-check-input bg-light border border-primary" type="radio"
                            name="flexRadioDefault" id="flexRadioDefault2" value="M"  />
                        <label class="form-check-label" for="flexRadioDefault2">
                            Male
                        </label>
                    </div>



                    <div class="form-check form-check-inline ">
                        <input class="form-check-input bg-light border border-primary" type="radio"
                            name="flexRadioDefault" id="flexRadioDefault2" value="F" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Fimale
                        </label>
                    </div>

                    <div class="form-check form-check-inline ">
                        <input class="form-check-input bg-light border border-primary" type="radio"
                            name="flexRadioDefault" id="flexRadioDefault2" value="O" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Other
                        </label>
                    </div>
                </div>



                <div class="form-group col-md-6 required bg-light mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>>

            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>