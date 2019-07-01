<?php 
require_once('Views/indexView.php');
require_once('Controllers/FormController.php');

try{
    if(isset($_GET['action']))
    {
        if($_GET['action'] == 'listform' )
        {
            $forms = new FormController();
            $forms -> listForm();
        }
        elseif($_GET['action'] == 'addform'){
            if(isset($_POST['content']) && !empty($_POST['content']))
            {
                $addForm = new FormController();
                $addForm -> addForm($_POST['content']);
            } else {
                throw new Exception("Veuillez remplir une question");
                    
            }
            
        }
    }
}
catch(Exception $e){
    $errorMessage =$e->getMessage();
    require('Views/error.php');
}