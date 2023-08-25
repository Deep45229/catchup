<!-- <?php
require_once 'controllers/UsersController.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $perPage = 3; // Change this according to your needs
    $controller = new UsersController();
    $users = $controller->indexView($page, $perPage);
    // $totalPages = $controller->indexView();
print_r($users);die;
    // $response = [
    //     'users' => $users,
    //     'totalPages' => $totalPages
    // ];

    // header('Content-Type: application/json');
    // echo json_encode($response);
}
?> -->

