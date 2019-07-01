<?php require_once('Views/formView.php');
?>

<?php $title ?>

<?php ob_start(); ?>

<?php 
    foreach($forms as $form){
?>
    <p> <?= $form['content'] ?></p>
<?php } ?>
    <div class='d-flex justify-content-center mt-4'>
    <button type="submit" class="btn btn-primary add_form" data-toggle='modal' data-target='#modalform'>Ajouter une question</button>
    </div>  



<?php
$content = ob_get_clean();
require('Views/template.php');
?>