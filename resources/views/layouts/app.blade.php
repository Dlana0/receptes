<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to recipes</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/newcss.css">
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    
    
    <style>
        #login{
    float: right;
    width: 150px;
    margin-right: 50px;
}
#block{
    margin-top: 30px;
    margin-bottom: 50px;
    margin-left: 100px;
    margin-right: 100px;
        
}

#search{
    width: 500px;
    margin-left: 300px;
    margin-right: 300px;
    margin-top: 20px;
}

#log{
       margin-top: 40px;
    margin-bottom: 70px; 
}
    </style>
    
    
</head>
<body style="background-image: url(foodpics/background.jpg); background-repeat: repeat;">
    <div class="panel panel-default" id="block">
        <a class="navbar-brand" href="{{ url('/') }}">
               Recipes
                </a>
            <div id="search" class="input-group">
        <input type="text" class="form-control" placeholder="Search for recipes...">
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
        <li><a href="/desserts">Desserts</a></li>
        <li><a href="/salads">Salads</a></li>
        <li><a href="/pastry">Pastry</a></li>
        <li><a href="/canned">Canned food</a></li>
        <li><a href="/breakfasts">Breakfasts</a></li>
      </ul><br>      
    </div>
     
      <div class="col-sm-6 sidenav">
      @yield('content')
      </div>
      <div id="login" class="col-sm-2 sidenav">
      <div class="well">
          @if (Auth::guest())
          <a href="{{ url('/login') }}" role="button" class="btn btn-info">Login</a> <br>
          <a href="{{ url('/register') }}" role="button" class="btn btn-info">Register</a> <br>
          
        @else
        <a href="{{ url('/addrecipe') }}" role="button" class="btn btn-info">Add recipe</a>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
      </div>
    </div>
</div>
      </div>
            </div>
 
    


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
