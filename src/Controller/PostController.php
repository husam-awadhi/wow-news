<?php 

namespace App\Controller;

use App\Model\Post;
use Exception;

class PostController extends AbstractController
{
    protected $model;
    protected string $template = 'post/post.twig';

    public function __construct()
    {
        parent::__construct();
        $this->model = new Post();
    }

    public function showAction($id = "", $idparent = "", $event = "")
    {
        $post = $this->model->get($id);
        if(!$post) throw new Exception("Post with id #{$id} not found");
        $this->render(['post' => $post]);
    }
}
