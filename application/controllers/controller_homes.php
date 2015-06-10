<?php
class Controller_homes extends Controller
{
    function action_index()
    {
        $this->view->generate('homes_view.php', 'template_view.php');
    }
}
