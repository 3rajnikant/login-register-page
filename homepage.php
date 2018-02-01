<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <link rel="stylesheet" type="text/css" href="roaststyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    	#mainNav
      {
      padding-top: 25px;
      padding-bottom: 25px;
      background-color: #17394d;
      min-height: 50px;
      }
      #text
      {
      color: white;	
      font-size: 30px;
      font-weight: 200px;
      text-shadow: 1px 1px;
      }
    </style>
  </head>
  <body id="page-top">
    <div class="wrapper">
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="text" href="homepage.php">WELCOME</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="hidden">
                <a href="#page-top"></a>
              </li>
              <li class="page-scroll" >
                <a href="#page-top" id="text">Home</a>
              </li>
              <li class="page-scroll" id="text">
                <a href="login.php" id="text">Login</a>
              </li>
              <li class="page-scroll" id="text">
                <a href="register.php" target="_self" id="text">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </body>
</html>