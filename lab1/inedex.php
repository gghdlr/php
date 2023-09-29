
<?php 
    class User{
        private $name;

        public function __construct(string $name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
    }

    class Article{
        private $title;
        private $text;
        private $author;

        public function __construct(string $title, string $text, User $author){
            $this->title = $title;
            $this->text = $text;
            $this->author = $author;
        }

        public function getAuthor(): User{
            return $this->author;
        }
    }
    $user = new User("Ivan");
    $article = new Article("title", "text", $user);

   //var_dump($article);
    echo $article->getAuthor()->getName();
?>