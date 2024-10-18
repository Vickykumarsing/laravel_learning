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
            </tr>
        </thead>
        <tbody>
            @foreach($cust as $cust)<tr>
                <td>{{$cust->name}}</td>
                <td>{{$cust->email}}</td>
                <td>{{$cust->address}}</td>
                <td>{{$cust->gender}}</td>
                <td>{{$cust->state}}</td>
                <td>{{$cust->country}}</td>
                <td>{{$cust->dob}}</td>
                <td>@if($cust->status== "1")
                    Active
                    @else
                    Inactive
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>