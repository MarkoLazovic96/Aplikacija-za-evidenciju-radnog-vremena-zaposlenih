<?php
namespace App\Core;
class Route{

private $requsetMetod;
private $pattern;
private $controller;
private $method;

    private function __construct(string $requsetMetod, string $pattern, string $controller, $method){

        $this->requsetMetod = $requsetMetod;
        $this->pattern = $pattern;
        $this->controller = $controller;
        $this->method = $method;
    }

    public static function get(string $pattern, string $controller, string $method): Route {
        return new Route('GET',$pattern,$controller,$method);
    }
    public static function post(string $pattern, string $controller, string $method): Route {
        return new Route('POST',$pattern,$controller,$method);
    }
    public static function any(string $pattern, string $controller, string $method): Route {
        return new Route('GET|POST',$pattern,$controller,$method);
    }

    public function matches(string $method, string $url): bool {
        if(!preg_match('/^' . $this->requsetMetod . '$/', $method)){
            return false;
        }
        return boolval(preg_match($this->pattern, $url));
    }
    public function getControllerName() : string {
        return $this->controller;
    }
    public function getMethodName() : string {
        return $this->method;
    }
}