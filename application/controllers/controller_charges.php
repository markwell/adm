<?php
class Controller_Charges extends Controller
{
    function action_index()
    {
        $this->view->generate('charges_view.php', 'template_view.php');
    }
}
