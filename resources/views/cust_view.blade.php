<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
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

<div class="container">
  <div>
    <a href="{{url('/customer/create')}}">
      <button class="btn btn-primary">Add</button>
    </a>
  </div>
</div>
   <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>State</th>
                <th>Country</th>
                <th>DOB</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cust as $cust)<tr>
                <td>{{$cust->name}}</td>
                <td>{{$cust->email}}</td>
                <td>{{$cust->address}}</td>
                <td>
                  @if($cust->gender== 'M')
                  Male
                  @elseif($cust->gender == 'F')
                  Fimale
                  @else
                  Other
                  @endif

                </td>
                <td>{{$cust->state}}</td>
                <td>{{$cust->country}}</td>
                <td>{{$cust->dob}}</td>
                <td>@if($cust->status== "1")
                    Active
                    @else
                    Inactive
                    @endif
                </td>

                <td>
                  <a href="{{route('customer.delete', ['id'=> $cust->ccust_id])}}"><button class="btn btn-danger">Delete</button></a>
                  <a href="{{route('customer.edit', ['id' => $cust->ccust_id])}}"><button class="btn btn-primary">Edit</button></a>
                </td>
                
            </tr>
            @endforeach
           
        </tbody>
    </table>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>