<?php
class User extends Controller
{
    public $postModel;
    public $userModel;

    public function __construct()
    {
        $this->postModel = $this->model('PostModel');
        $this->userModel = $this->model('UserModel');
    }

    public function login()
    {
            $_SESSION['isLogin'] = true;
            $this->view('user/log-in');

    }



    public function createBlog()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $this->view('master-layout', ['page' => 'user/add-blog']);
        } else {
            if (isset($_POST['add-blog'])) {
                $userId = $_POST['user-id'];
                $title = $_POST['title'];
                $body = $_POST['body'];

               $result = $this->userModel->insertBlog($userId, $title, $body);
                $this->view('master-layout', ['page' => 'user/add-blog',
                                                    'result' => $result]);

            }
        }
    }


    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $this->view('master-layout', ['page' => 'user/register']);
        } else {
            $userName = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result =  $this->userModel->insertUser($userName, $email, $password);
            $this->view('master-layout', ['page'=> 'user/register',
                                                'result' => $result]);
        }
    }

    public function delete($id)
    {
        $this->userModel->deletePost($id);
        header('Location: index.php?url=Post/listPost');
    }
}
