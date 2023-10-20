<?php
namespace src\Controllers;
use Services\Db;
use src\View\View;
    class ArticleController{
    private $db;
    private $view;
    public function __construct() {
        $this->db = new Db;
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
    }

    public function index(){
        $sql = 'SELECT * FROM `articles`';
        $articles = $this->db->query($sql);
        $this->view->renderHTML('/articles/view.php', ['articles'=>$articles]);
    }
    public function show($id){
        $sql = 'SELECT * FROM `articles` WHERE `id` = :id';
        $article = $this->db->query($sql, [':id' => $id]);
        $this->view->renderHTML('/articles/show.php', ['article'=>$article[0]]);
    }
    }
    