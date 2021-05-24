<?php

class Page extends Controller
{
    public function Homepage()
    {
        $postModel = $this->model('PostModel');
        $posts = $postModel->getThreePostsLatest();

        $this->view('master-layout', ['posts' => $posts,
                                            'page' => 'home-page/home-page' ]);
    }
}

?>