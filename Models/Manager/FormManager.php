<?php
include('Manager.php');
class FormManager extends Manager{

    public function getForm()
    {
        $_bdd = $this->dbConnect();
        $viewform = $_bdd ->prepare('SELECT id, content FROM form_ddp');
        $viewform->execute();

        return $viewform;
    }

    public function addForm($content)
    {
        $_bdd = $this->dbConnect();
        $newform = $_bdd ->prepare('INSERT INTO form_ddp(content) VALUES(?)');
        $newform->execute(array($content));

        return $newform;
    }

    public function updateForm($id, $content)
    {
        $_bdd = $this->dbConnect();
        $editform = $_bdd ->prepare('UPDATE form_ddp SET id=?, content=?');
        $editform->execute(array($id, $content));

        return $editform;
    }

    public function deleteForm($id, $content)
    {
        $_bdd = $this->dbConnect();
        $delform = $_bdd ->prepare('DELETE FROM form_ddp WHERE id=?, content=?');
        $delform->execute(array($id, $content));

        return $delform;
    }
}