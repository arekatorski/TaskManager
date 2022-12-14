<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-dark">
<nav class="navbar bg-dark">
  <div class="container">
    <span class="navbar-brand mb-0 h1 text-white">Task Manager</span>
  </div>
</nav>
<div class="container login">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 align-items-center">
            <form>
                <p class="h1">Login</p>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><br>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div></br>
                <button type="submit" class="btn btn-primary">login</button>&nbsp;
                <a href="">I forgot my password</a>
         </form>
        </div>
        <div class="col-md-4 align-items-center">
            <form>
                <p class="h1">Register</p><p>(actually disabled)</p>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><br>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div></br>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repeat Password">
                </div></br>
                <button type="submit" class="btn btn-dark" disabled>Register</button>
         </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>   
</body>
</html>