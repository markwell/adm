<?php
class Controller_Login extends Controller
{
    function __construct()
    {
        $this->model = new Model_Login();
        $this->view  = new View();
    }
    function action_index()
    {
        $this->view->generate('login_view.php', 'template_view.php');
    }
    function action_authAdmin()
    {
        if (isset($_POST['submit'])) {
            $error = $this->model->checkAndAuthUser($_POST['login'], $_POST['password']);
            if (is_null($error)) {
                header('Location:/adm/login/checkUser');
            } else {
                $this->view->generate('login_view.php', 'template_view.php', $error);
            }
        }
    }
    function action_checkUser()
    {
        $userdata = $this->model->getHashAndID(intval($_COOKIE['id']));
        if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
            if (($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])) {
                setcookie("id", "", time() - 3600*24*30*12, "/");
                setcookie("username", "", time() - 3600*24*30*12, "/");
                setcookie("hash", "", time() - 3600*24*30*12, "/");
                $message = "Авторизуйтесь пожалуйста.";
            } else {
                $message = "Здравствуйте! Теперь вы можете редактировать содержимое сайта прямо на страницах сайта.";
            }
        } else {
                $message = "Пожалуйста, включите куки.";
        }
        $this->view->generate('login_view.php', 'template_view.php', $message);
    }
    function action_deleteNews()
    {
        $id = $_GET['id'];
                $userdata = $this->model->getHashAndID(intval($_COOKIE['id']));
                if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
                    if (($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])) {
                        setcookie("id", "", time() - 3600*24*30*12, "/");
                        setcookie("username", "", time() - 3600*24*30*12, "/");
                        setcookie("hash", "", time() - 3600*24*30*12, "/");
                        $message = "Авторизуйтесь пожалуйста.";
                        $this->view->generate('login_view.php', 'template_view.php', $message);
                    } else {
                                $this->model->deleteObjFromNews($id);
                                // $this->
                            }
                    } else {
                                $message = "Пожалуйста, включите куки.";
                                $this->view->generate('login_view.php', 'template_view.php', $message);
                            }
                
                
    } 
    function action_addNew()
    {
        if (isset($_POST['submit'])) {
        $userdata = $this->model->getHashAndID(intval($_COOKIE['id']));
        if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
            if (($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])) {
                setcookie("id", "", time() - 3600*24*30*12, "/");
                setcookie("username", "", time() - 3600*24*30*12, "/");
                setcookie("hash", "", time() - 3600*24*30*12, "/");
                $message = "Авторизуйтесь пожалуйста.";
                $this->view->generate('login_view.php', 'template_view.php', $message);
            } else {
                        $this->model->addObjToNews($_POST['titleFF'],$_POST['textFF']);
                        echo "Добавлено!";
                    }
            } else {
                        $message = "Пожалуйста, включите куки.";
                        $this->view->generate('login_view.php', 'template_view.php', $message);
                    }
        
        }
    }
    function action_deleteHomes()
    {
        $id = $_GET['id'];
                $userdata = $this->model->getHashAndID(intval($_COOKIE['id']));
                if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
                    if (($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])) {
                        setcookie("id", "", time() - 3600*24*30*12, "/");
                        setcookie("username", "", time() - 3600*24*30*12, "/");
                        setcookie("hash", "", time() - 3600*24*30*12, "/");
                        $message = "Авторизуйтесь пожалуйста.";
                        $this->view->generate('login_view.php', 'template_view.php', $message);
                    } else {
                                $this->model->deleteObjFromHomes($id);
                                // $this->
                            }
                    } else {
                                $message = "Пожалуйста, включите куки.";
                                $this->view->generate('login_view.php', 'template_view.php', $message);
                            }
                
    } 
    function action_addHome()
    {
        if (isset($_POST['submit'])) {
        $userdata = $this->model->getHashAndID(intval($_COOKIE['id']));
        if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
            if (($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])) {
                setcookie("id", "", time() - 3600*24*30*12, "/");
                setcookie("username", "", time() - 3600*24*30*12, "/");
                setcookie("hash", "", time() - 3600*24*30*12, "/");
                $message = "Авторизуйтесь пожалуйста.";
                $this->view->generate('login_view.php', 'template_view.php', $message);
            } else {
                        $this->model->addObjToHomes($_POST['adresFF'],$_POST['whyFF'],$_POST['datestartFF']);
                        // header('Location:/adm/homes');
                    }
            } else {
                        $message = "Пожалуйста, включите куки.";
                        $this->view->generate('login_view.php', 'template_view.php', $message);
                    }
        
        }
    }
}
