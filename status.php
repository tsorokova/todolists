
 <?php
require_once './model/task.php';
var_dump ($_POST);
    $task = new Task();
        if (!empty($_POST['id'])) {
        $task->change_status($_POST['id']);
    }
   
header('location: /');
?>