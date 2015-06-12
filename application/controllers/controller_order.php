<?php
class Controller_order extends Controller
{
    function action_index()
    {
        $this->view->generate('order_view.php', 'template_view.php');
    }
    function action_sendMessage()
    {
    	  if (isset($_POST['submitFF'])) {
    	  mail ("mrak.mk@ya.ru",
    	        "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
    	        "Адрес: ".$_POST['homeadresFF']."\nКвартира: ".$_POST['flatFF']."\nИмя: ".$_POST['contacsFF']."\nТелефон: ".$_POST['phoneFF']."\nПочта: ".$_POST['mailFF']."\nУслуга: ".$_POST['serviceFF']."\nДата выполнения: ".$_POST['dateFF']."\nКоммантарий: ".$_POST['commentFF']);
    	  $message = 'Ваш заказ принят, в скором времени с вами свяжется наш специалист!';
    	  $this->view->generate('order_view.php', 'template_view.php', $message);
    	}
    }
}
