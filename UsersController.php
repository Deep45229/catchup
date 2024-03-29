<?php
require_once 'models/UsersModel.php';

class UsersController {
    private $model;

    public function __construct() {
        $this->model = new UsersModel();
    }

    public function createView() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $success = $this->model->createUser($_POST);
            if ($success) {
                header('Location: index.php');
            } else {
                echo "Failed to add user.";
            }
        } else {
            include 'views/create_view.php';
        }
    }

    
public function indexView() {
    $users = $this->model->getAllUsers();
    include 'views/index_view.php';
}
// public function indexView($page=false, $perPage=false) {
//     echo '<pre>';
//     print_r($page);
//     echo '<br>';
//     print_r($perPage);
//     echo '</pre>'; die;
//     $users = $this->model->getPaginatedUsers($page, $perPage);
//     $totalPages = $this->model->getTotalPages($perPage);

//     // echo "<pre>";
//     // print_r($totalPages);
//     // die();
// return array($users,$totalPages);

//     // include 'views/index_view.php';

// }




    public function deleteView($id) {
        $this->model->deleteUser($id);
        header('Location: index.php?action=index'); // Redirect to the index view
    }
    

    public function editView($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $success = $this->model->updateUser($_POST);
            if ($success) {
                header('Location: index.php');
            } else {
                echo "Failed to update user.";
            }
        } else {
            $user = $this->model->getUserById($id);
            include 'views/edit_view.php';
        }
    }
    
       
    
    
}
?>
