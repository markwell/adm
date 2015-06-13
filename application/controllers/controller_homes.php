<?php
class Controller_homes extends Controller
{
    function __construct()
    	{
    	    $this->model = new Model_Homes();
    	    $this->view  = new View();
    	}
        function action_index()
        {
        	$items = $this->model->getHomes();
        	$this->view->generate('homes_view.php', 'template_view.php', $items); //в разработке
        }	  
}
