  <!-- Основной контент сайта -->
    
         <div class="col-xs-12">
              <div class="page-header">
                <h1 class="disclosure-page-heading">
          Дома в управлении
            <br>
            <small>
              Форма 1.4 — Перечень многоквартирных домов, управление которыми осуществляет управляющая организация
            </small>
         </h1>
              </div>
              
              <ul class="list-group">

<?php for ($i=0; $i < count($data); $i++) 
            {   
                echo '
                <li class="list-group-item">
                 <div class="row">
                   <div class="col-xs-8">
                     <h4 class="text-info">
                       '.$data[$i]['adres'].'
                     </h4>
                     <div>
                       <strong>
                         Основание управления:
                       </strong>
                         <span>
                           '.$data[$i]['foundation'].'
                         </span>
                     </div>
                     <div>
                       <strong>
                         Дата начала управления:
                       </strong>
                         <span>
                           '.$data[$i]['datestart'].'
                         </span>
                     </div>
                   </div>
                   <div class="col-xs-4 text-right">
                     <div style="margin-top: 20px;">
                       <a class="btn btn-default" href="/adm/info">
                         Информация о доме
                         →
                       </a>
                     </div>
                   </div>
                 </div>';
                 if ((isset($_COOKIE['username'])) && ($_COOKIE['username'] == 'admin')) {
                  echo '
                 <a href="/adm/login/deleteHomes?id='.$data[$i]['id'].'">Удалить из списка</a>';
                  }
                echo '</li>';
            }?>
            <br>
            <br>
            <br>
         <?php 
         if ((isset($_COOKIE['username'])) && ($_COOKIE['username'] == 'admin')) {
             echo '
         <div class="row">
         <h4>Добавить дом</h4>
         <form role="form" class="form-horizontal" method="POST" action="/adm/login/addHome">
           <div class="form-group">
             <label for="exampleInputName1">Адрес</label>
             <input type="name" name="adresFF" class="form-control" id="exampleInputPassword1">
           </div>
           <div class="form-group">
             <label for="exampleInputName1">Основание управления</label>
             <input type="name" name="whyFF" class="form-control">
           </div>
           <div class="form-group">
             <label for="exampleInputName1">Дата начала управления</label>
             <input type="name" name="datestartFF" class="form-control">
           </div>
           <button type="submit" name="submit" class="btn btn-default">Добавить</button>
         </form>
         </div>
         <br>
        
         </div>'
         ; }
         ?>
                  
            
        