<?php

/**
 * Class Router
 */
class Router
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var array
     */
    private $routes = [];

    /**
     * Router constructor.
     * @param string $method
     * @param string $uri
     */
    public function __construct(string $method, string $uri)
    {
        $this->method = strtolower($method);
        $this->uri = $uri;
    }

    /**
     * @param string $method
     * @param string $uri
     * @return Router
     */
    public static function instance(string $method, string $uri)
    {
        return new static($method, $uri);
    }

    /**
     * @param string $path
     * @param callable $action
     * @return Router
     */
    public function get(string $path, callable $action)
    {
        return $this->addRoute('get', $path, $action);
    }

    /**
     * @param string $path
     * @param callable $action
     * @return Router
     */
    public function post(string $path, callable $action)
    {
        return $this->addRoute('post', $path, $action);
    }

    /**
     * @param string $method
     * @param string $path
     * @param callable $action
     * @return $this
     */
    protected function addRoute(string $method, string $path, callable $action)
    {
        if (!isset($this->routes[$method])) {
            $this->routes[$method] = [];
        }
        $this->routes[$method][$path] = $action;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function run()
    {
        $routes = $this->routes[$this->method];
        foreach ($routes as $path => $action) {
            $regex = "/{$path}/";
            $match = preg_match_all($regex, $this->uri, $matches, PREG_SET_ORDER, 0);
            if (!$match) {
                continue;
            }
            $payload = json_decode(file_get_contents('php://input'), true);
            return $action($matches[0], $payload);
        }
        http_response_code(404);
        return ['error' => 'not found'];
    }
}