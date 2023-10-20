<?php
namespace src\Controllers;

use src\View\View;
use src\Models\Articles\Article;
    class ArticleController{
    private $view;
    public function __construct(){ 
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
    }

    public function index(){
        
        $this->view->renderHTML('/articles/view.php', ['articles'=>$articles]);
    }
    public function show($id){
        $sql = 'SELECT * FROM `articles` WHERE `id` = :id';
       // $article = $this->db->query($sql, [':id' => $id], Article::class);
        $this->view->renderHTML('/articles/show.php', ['article'=>$article[0]]);
        //var_dump($article);
    }
    }
    