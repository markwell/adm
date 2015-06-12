	<!-- Основной контент сайта -->
         <h3>Новости</h3>
         <?php for ($i=0; $i < count($data); $i++) 
            {   
                echo '<div class="row">
               <div class="caption">
                 <h3>'.$data[$i]['title'].'</h3>
                 <p>'.$data[$i]['text'].'</p>
                 <p><small>Дата создания: '.$data[$i]['date_create'].'</small></p>
                 </div>
                 </div>
                <a href="/adm/login/deleteNews?id='.$data[$i]['id'].'">Удалить новость</a>
                 ';
            }?>
         
         <h4>Добавить новость</h4>
         <form role="form" class="form-horizontal"  method="POST" action="/adm/login/newNews">
           <div class="form-group">
             <label for="exampleInputName1">Заголовок</label>
             <input type="name" name="nameFF" class="form-control" id="exampleInputPassword1" placeholder="Имя" x-autocompletetype="name">
           </div>
           <div class="form-group">
           <label for="exampleInputName1">Текст</label>
           <textarea class="form-control" name="messageFF" rows="3"></textarea>
         </div>
           <button type="submit" class="btn btn-default">Добавить</button>
         </form>
