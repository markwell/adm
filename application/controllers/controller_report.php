<?php
class Controller_report extends Controller
{
    function action_index()
    {
        $this->view->generate('report_view.php', 'template_view.php');
    }
}
