<?php
class Controller_Main extends Controller
{
    function action_index()
    {	
        $this->view->generate('main_view.php', 'template_view.php');
    }
    function action_sendMessage()
    {
    	if (isset ($_POST['messageFF'])) {
    	  mail ("mrak.mk@ya.ru",
    	        "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
    	        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
    	  $message = 'Ваше сообщение получено, спасибо!';
    	  $this->view->generate('main_view.php', 'template_view.php', $message);
    	}
    }
}