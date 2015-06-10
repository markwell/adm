<?php
class Controller_info extends Controller
{
    function action_index()
    {
        $this->view->generate('info_view.php', 'template_view.php');
    }
}

