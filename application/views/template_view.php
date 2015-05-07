<!DOCTYPE html>
<html lang="ru">
   <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>УК "Адмирал" - всегда рядом!</title>
	  <!-- Bootstrap -->
	  <link href="/adm/css/jumbotron-narrow.css" rel="stylesheet">
	  <link href="/adm/css/bootstrap.css" rel="stylesheet">
	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.pond/xs.42/respond.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.pond/xs.42/respond.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.pond/xs.42/respond.min.js"></script>
	  <![endif]-->
   </head>
     <body>
       <div class="container">
         <div class="header">
           <ul class="nav nav-pills pull-right">
             <li class="active"><a href="#">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Contact</a></li>
           </ul>
           <h3 class="text-muted">Project name</h3>
         </div>

         <?php include 'application/views/'.$content_view; ?>

         <div class="footer">
           <p>&copy; Company 2013</p>
         </div>

       </div> <!-- /container -->
       <!-- Bootstrap core JavaScript
       ================================================== -->
       <!-- Placed at the end of the document so the pages load faster -->
     
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="/shop/js/jquery.min.js"></script>
	  <!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/shop/js/bootstrap.js"></script>
	 
   </body>
</html>