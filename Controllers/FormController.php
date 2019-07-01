<?php
include('Models/Manager/FormManager.php');

    class FormController
    {
        public function listForm()
        {
            $lforms = new FormManager();
            $lforms -> getForm();
            require('Views/indexView.php');
        }

        public function addForm($content)
        {
            $newForm = new FormManager();
            $newForm -> addForm($content);

            if($newForm === false)
            {
                throw new Exception('Impossible d\'ajouter la question');
            }
            else
            {
                header('Location: index.php');
            }

        }
}