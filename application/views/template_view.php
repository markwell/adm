<!DOCTYPE html>
<html lang="ru">
   <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>УК "Адмирал" - всегда рядом!</title>
	  <!-- Bootstrap -->
	  <link href="css/jumbotron-narrow.css" rel="stylesheet">
	  <link href="css/bootstrap.css" rel="stylesheet">
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
          <img src="images/Shapka.jpg">
          <!-- <h3 class="text-muted">ООО УК "АДМИРАЛ"</h3>
          <h3 class="text-muted">УПРАВЛЯЮЩАЯ КОМПАНИЯ</h3> -->
           <ul class="nav nav-pills">
             <li><a href="main">Главная</a></li>
             <li><a href="news">Новости</a></li>
             <li>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                    Дома <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="homes">Дома в управлении</a></li>
                    <li><a href="unmanaged">Дома, управление которыми прекращенно</a></li>
                </ul>
             </li>
             <li><a href="report">Отчетность</a></li>
             <li><a href="charges">Нарушения</a></li>
             <li><a href="about">О компании</a></li>
             <li><a href="order">Заказать</a></li>
           </ul>
           
         </div>

         <?php include 'application/views/'.$content_view; ?>

         <div class="footer">
           <p>&copy; Общество с ограниченной ответственностью "Управляющая компания "АДМИРАЛ"
           Реквизиты

           ИНН:
           2540159511
           ОГРН/ОГРНИП:
           1102540000540
           Директор:
           Олейников Сергей Николаевич
           Наш адрес:
           Приморский край, Владивосток, улица Набережная, д. 5
           Офис

           Режим работы:

           Понедельник- пятница, время работы 9.00 - 18.00, без перерыва на обед 
           Суббота, воскресенье - выходной день
           Телефоны и факс:
             +7914733278 , +79147078429 , -
           Электронная почта:
           uk.admiral@gmail.com
           Диспетчерская

           Режим работы:
           круглосуточно
           Телефоны:
           Директор   2 733-278
           Дежурный слесарь- сантехник  +79140681202
           Электрик +79242319881
           Управляющая  2744-439</p>
         </div>

       </div> <!-- /container -->
       <!-- Bootstrap core JavaScript
       ================================================== -->
       <!-- Placed at the end of the document so the pages load faster -->
     
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
	  <!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.js"></script>
	 
   </body>
</html>