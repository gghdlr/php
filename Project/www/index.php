
<?php 
    spl_autoload_register(function ($className){
        require_once('../'.str_replace('\\', '/', $className).'.php');
    });

    // require('../src/Controllers/MainControllers.php');
    //require('src/Models/Articles/Article.php');
    // $user = new src\Models\Users\User("Ivan");
    // $article = new src\Models\Articles\Article("title", "text", $user);

    //var_dump($article);
    // echo $article->getAuthor()->getName();
    $isRouteFound = false;
    $url = $_GET['route'] ?? '';
    $routes = require('../src/routes.php');
    foreach($routes as $pattern=>$controllerAndAction){
        preg_match($pattern, $url, $matches);
        if(!empty($matches)){
            $isRouteFound = true;
            break;
        }
    }
    unset($matches[0]);
    $action = $controllerAndAction[1];
    $controllerName = $controllerAndAction[0];
    if($isRouteFound){
        $controller = new $controllerName;
        $controller->$action(...$matches);
    }
    else{
    echo 'Nor Found';
    }
    
?>