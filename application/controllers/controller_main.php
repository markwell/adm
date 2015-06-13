<?php
class Controller_Main extends Controller
{
    function __construct()
        {
            $this->model = new Model_Main();
            $this->view  = new View();
        }
    function action_index()
    {	 
        $items = $this->model->getNews();
        if (isset ($_POST['submit'])) {
          mail ("mrak.mk@ya.ru",
                "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
                "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
          $items['alert'] = 'Ваше сообщение получено, спасибо!';
        }
        $this->view->generate('main_view.php', 'template_view.php', $items);
    }
}