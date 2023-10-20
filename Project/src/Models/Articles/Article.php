<?php
    namespace src\Models\Articles;
    use src\Models\Users\User;
    use Services\Db;
    use src\Models\ActiveRecordEntity;

    class Article extends ActiveRecordEntity{
        protected $id;
        protected $name;
        protected $text;
        protected $authorId;

        public function getAuthor(): User{
            return $this->authorId;
        }

        
        public function getName(){
            return $this->name;
        }

        public function getText(){
            return $this->text;
        }
       

        public function getAuthorId() : User{
           $db = new Db(); 
           $user = $db -> query('SELECT * FROM `users` WHERE `id` = :id', [':id'=>$this->authorId], User::class);
           //var_dump($user);
           return $user[0];
        }

        public function getTableName()
        {
            return 'article';
        }
    }

?>