<?php
class Controller_About extends Controller
{
    function action_index()
    {
        $this->view->generate('about_view.php', 'template_view.php');
    }
    function action_sendMessage()
    {
    	if (isset ($_POST['messageFF'])) {
    	  mail ("mrak.mk@ya.ru",
    	        "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
    	        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
    	  echo ('<p>Ваше сообщение получено, спасибо!</p>');
    	}
    }
}
