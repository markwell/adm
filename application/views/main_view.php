	<!-- Основной контент сайта -->
		<div class="jumbotron">
           <!-- Карусель(слайдер) -->
            <div id="carousel" class="carousel slide">
           	  	<!-- Индикаторы слайдов -->
           	  	<ol class="carousel-indicators">
           	  		<li class="active" data-target="#carousel" data-slide-to="0"></li>
           	  		<li data-target="#carousel" data-slide-to="1"></li>
           	  		<li data-target="#carousel" data-slide-to="2"></li>
           	  	</ol>
           	  	<!-- Слайды -->
           	  	<div class="carousel-inner">
           	  		<div class="item active">
           	  			<img src="images/1.jpg" alt="">
           	  			<div class="carousel-caption">
           	  				<h3>WELCOME!</h3>
           	  				<p>Мы рады приветствовать Вас на нашем сайте!</p>
           	  			</div>
           	  		</div>
           	  		<div class="item">
           	  			<img src="images/2.jpg" alt="">
           	  			<div class="carousel-caption">
           	  				<h3></h3>
           	  				<p>Управляющая компания "Адмирал" образована в 2007 году, для того чтобы воплотить в жизнь мечту и основную возможность, заложенную в новом Жилищном Кодексе, - создать открытую современную клиентоориентированную компанию в сфере управления жилыми многоквартирными домами. </p>
           	  			</div>
           	  		</div>
           	  		<div class="item">
           	  			<img src="images/3.jpg" alt="">
           	  			<div class="carousel-caption">
           	  				<h3></h3>
           	  				<p> Работать на людей и для людей, не будучи деталью бюрократической машины. </p>
           	  			</div>
           	  		</div>
           	  	</div>	
           	  	<!-- Стрелки переключения слайдов -->
           	  		<a href="#carousel" class="left carousel-control" data-slide="prev">
           	  			<span class="glyphicon glyphicon-chevron-left"></span>
           	  		</a>
           	  		<a href="#carousel" class="right carousel-control" data-slide="next">
           	  			<span class="glyphicon glyphicon-chevron-right"></span>
           	  		</a>
           		</div>
         </div>

         <div class="row marketing text-center lead">
          
           <h3>Обращение директора</h3>

           <p><strong>Здравствуйте, уважаемые жильцы!</strong></p>

           <p>Рады приветствовать вас на сайте нашей управляющей компании!</p>

           Здесь вы найдёте всю необходимую информацию, подлежащую раскрытию, согласно Стандарта раскрытия информации (Постановления Правительства №731 от 23 октября 2010).      
           </div>

         <form role="form" class="form-horizontal"  method="POST" action="/adm/main/sendMessage">
          <h3>Письмо директору</h3>
           <div class="form-group">
             <label for="exampleInputName1">Имя</label>
             <input type="name" name="nameFF" class="form-control" id="exampleInputPassword1" placeholder="Имя" x-autocompletetype="name">
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Почта</label>
             <input type="email" name="contactFF" class="form-control" id="exampleInputEmail1" placeholder="Почта" x-autocompletetype="email">
           </div>
           <div class="form-group">
           <label for="exampleInputName1">Обращение</label>
           <textarea class="form-control" name="messageFF" rows="3"></textarea>
         </div>
           <button type="submit" class="btn btn-default">Отправить</button>
         </form>
         <? 
         if (isset($data)){
               echo('<br><div class="alert alert-info" role="alert">'.$data.'</div>');
             }
         ?>
         <h3>Новости</h3>
         <div class="row">
           <div class="col-sm-6 col-md-4">
             <div class="thumbnail">
               <img src="..." alt="...">
               <div class="caption">
                 <h3>Thumbnail label</h3>
                 <p>...</p>
                 <p><a href="#">Читать далее</a></p>
               </div>
             </div>
           </div>
         </div>

         <h3>Факты</h3>
         <div class="row marketing">
                 <div class="col-lg-6">
                   <h4>Subheading</h4>
                   <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                   <h4>Subheading</h4>
                   <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                   <h4>Subheading</h4>
                   <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                 </div>

                 <div class="col-lg-6">
                   <h4>Subheading</h4>
                   <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                   <h4>Subheading</h4>
                   <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                   <h4>Subheading</h4>
                   <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                 </div>
               </div>

		<!-- Скрипт автоматической прокрутки слайдера-to -->
		<script type='text/javascript'>
    	$(document).ready(function() {
         $('.carousel').carousel({
             interval: 3000
         })
    		});    
    	</script>﻿
