<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to recipes</title>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>
    <body>
        <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
        <div class="container-fluid">
  <div class="row content">
      
    <div class="col-sm-2 sidenav">
      <h4>Category</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Desserts</a></li>
        <li><a href="#section2">Salads</a></li>
        <li><a href="#section3">Pastry</a></li>
        <li><a href="#section4">Canned food</a></li>
        <li><a href="#section5">Breakfasts</a></li>
      </ul><br>      
    </div>
      
      <form class="col-sm-8" role="form">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

    </body>
</html>
