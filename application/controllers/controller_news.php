<?php
class Controller_News extends Controller
{
	function __construct()
	{
	    $this->model = new Model_News();
	    $this->view  = new View();
	}
    function action_index()
    {
    	$items = $this->model->getNews();
    	$this->view->generate('news_view.php', 'template_view.php', $items); //в разработке
    }	    
}
