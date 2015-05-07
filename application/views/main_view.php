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
           	  			<img src="/adm/images/1.jpg" alt="">
           	  			<div class="carousel-caption">
           	  				<h3>Первый слайд</h3>
           	  				<p>Описание первого слайда</p>
           	  			</div>
           	  		</div>
           	  		<div class="item">
           	  			<img src="/adm/images/2.jpg" alt="">
           	  			<div class="carousel-caption">
           	  				<h3>Второй слайд</h3>
           	  				<p>Описание второго слайда</p>
           	  			</div>
           	  		</div>
           	  		<div class="item">
           	  			<img src="/adm/images/3.jpg" alt="">
           	  			<div class="carousel-caption">
           	  				<h3>Третий слайд слайд</h3>
           	  				<p>Описание третьего слайда</p>
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