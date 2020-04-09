<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Writer Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <link rel="Stylesheet" href="common.css">
 <link rel="icon" href="https://cdn4.iconfinder.com/data/icons/pictype-free-vector-icons/16/home-128.png">
  </head>
  <body class="body1">
  
  
       <nav class="navbar fixed-top navbar-dark bg-dark">
       <a class="navbar-brand" href="#">Welcome To Indian Police - Crime Branch.</a>
  <!-- Navbar content -->
       </nav>
       <br>
       <br>
       
  <br>
  <br>
  <div class="container">
        <div class="jumbotron">
        <h1 class="display-4" id="header">Writer Login</h1>
        <br>
        <hr class="my-4">
        <br>
    <form method="post" action="writervali.jsp">
      
          <div class="form-group">
            <label for="exampleInputEmail1">Email address*</label>
            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="auserid" placeholder="Enter your email" required>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password*</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="apass" placeholder="Enter your password" required>
            <div class="text-right">
            <a style="text-align:right" name="new" href="forget.jsp">Forgot password?</a>
            </div>
          </div>
           <div class="text-center">
          <button type="submit" class="btn btn-primary">Get OTP!</button>
          </div>
            
        </form>
        <br>
      <div class="text-center">
        Not yet Registered?
        <a style="text-align:right" name="new" href="writerreg.jsp">Register now!</a>
        <div class="text-center">
        </div>
          </div>

  </body>
</html>