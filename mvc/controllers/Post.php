<?php

class Post extends Controller
{
    public function listPost()
    {

        $postModel = $this->model('PostModel');
        $posts = $postModel->getAllPosts();
        $this->view('master-layout', ["Posts" => $posts,
                                            "page" => 'Posts/listPost'] );

    }

    public function postDetails($id)
    {
        $postModel = $this->model('PostModel');
        $post = $postModel->getDetails($id);
        $this->view('master-layout', ["Post" => $post,
                                            "page" => 'Posts/postDetails']);
    }

    public function search()
    {
            $postModel = $this->model('PostModel');
            $title = $_POST['search'];
            $post = $postModel->searchTitle($title);

            $this->view('master-layout', ["Posts" => $post,
                                                "page" => 'Posts/listPost']);


    }


}
