<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Student</title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
  
  <link rel="stylesheet" href="template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  
  <link rel="stylesheet" href="template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h1"><b>Add Student</b>LTE</p>
    </div>
    <div class="card-body">
      <form action="{{url("/add_student")}}" method="post">
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full name" required>
          
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          
        </div>
        <div class="input-group mb-3">
          <input type="text" name="age" class="form-control" placeholder="Age" required>
          
        </div>
        <div class="input-group mb-3">
          <input type="text" name="adress" class="form-control" placeholder="Address" required>
          
        </div>
        <div class="input-group mb-3">
          <input type="text" name="telephone" class="form-control" placeholder="Telephone" required>
          
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>    
      </form>
    </div>
  </div>
</div>  

<script src="template/plugins/jquery/jquery.min.js"></script>

<script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="template/dist/js/adminlte.min.js"></script>
</body>
</html>