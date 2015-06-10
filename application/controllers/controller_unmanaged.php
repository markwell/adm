<?php
class Controller_unmanaged extends Controller
{
    function action_index()
    {
        $this->view->generate('unmanaged_view.php', 'template_view.php');
    }
}
