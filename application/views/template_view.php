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
          <img src="/adm/images/Shapka.jpg">
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
                    <li><a href="/adm/homes">Дома в управлении</a></li>
                    <li><a href="/adm/unmanaged">Дома, управление которыми прекращенно</a></li>
                </ul>
             </li>
             <li><a href="/adm/report">Отчетность</a></li>
             <li><a href="/adm/charges">Нарушения</a></li>
             <li><a href="/adm/about">О компании</a></li>
             <li><a href="/adm/order">Заказать</a></li>
           </ul>
           
         </div>

         <?php include 'application/views/'.$content_view; ?>

         <div class="footer">
          <div class="row" >
            <p><strong>Общество с ограниченной ответственностью: управляющая компания "АДМИРАЛ"</strong></p>
            <div class="col-xs-4 col-md-4 table-bordered">
               <address>
                 <strong>Реквизиты</strong><br>
                 ИНН:
                 2540159511<br>
                 ОГРН/ОГРНИП:
                 1102540000540<br>
                 Директор:
                 Олейников Сергей Николаевич<br>
                 Наш адрес:
                 Приморский край, Владивосток, улица Набережная, д. 5<br>
               </address>
               <address>
                <?php if (isset($_COOKIE['username'])){echo 'Пользователь: '.$_COOKIE['username'].' <br /><a href="/adm/login/logoutUser">Выход</a>';} else {
                  
                  echo "
                  <strong>Администратор?</strong><br>
                  <a href='/adm/login'>Вход</a>";
                } ?>
                
              </address>
            </div>
            <div class="col-xs-4 col-md-4 table-bordered"> 
           <address>
             <strong>Офис</strong><br>
             Режим работы:<br>
             Понедельник- пятница, время работы 9.00 - 18.00, без перерыва на обед Суббота, воскресенье - выходной день
             Телефоны и факс:<br>
             <abbr title="Phone">P:</abbr> +7914733278 , +79147078429, -
             Электронная почта:
             uk.admiral@gmail.com
           </address>
           <address>
             <strong>Электронная почта:</strong><br>
             <a href="mailto:uk.admiral@gmail.com">uk.admiral@gmail.com</a>
           </address>
          </div>
            <div class="col-xs-4 col-md-4 table-bordered">
              <address>
                <strong>Диспетчерская</strong><br>
                Режим работы:
                круглосуточно<br>
                Телефоны:<br>
                Директор 2 733-278<br>
                Дежурный слесарь- сантехник +79140681202<br>
                Электрик +79242319881 <br>
                Управляющая  2744-439
              </address>
              
          </div>
         </div>

       </div> <!-- /container -->
       <!-- Bootstrap core JavaScript
       ================================================== -->
       <!-- Placed at the end of the document so the pages load faster -->
     
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="/adm/js/jquery.min.js"></script>
	  <!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/adm/js/bootstrap.js"></script>
	 
   </body>
</html>
