<?php
class App {
 private string|object $controller = "home";
 private string $method = "index";
 private array $params = []; 

 public function __construct(private string $routeParam) {
  $this->routing(); 
 }

 private function parseUrl(): array {
  $route = $_GET[$this->routeParam] ?? "[]";
  $parsedRoute = explode("/", filter_var(rtrim($route, "/"), FILTER_SANITIZE_URL));
  if (isset($route))return $parsedRoute;
 }

 private function resolveFilePath(string $dirName): string {
  $filenameFromDirname = ucfirst($dirName);
  $dirName = strtolower($dirName);

  return "../app/controllers/{$dirName}/{$filenameFromDirname}Controller.php";
 }

 private function routing() {
  $route = $this->parseUrl();

  if (isset($route[0])) {
   $controllerFullPath = $this->resolveFilePath($route[0]);
   if (file_exists($controllerFullPath)) {
    $this->controller = $route[0];
    unset($route[0]);
   }

   require $this->resolveFilePath($this->controller);
   $this->controller = new (ucfirst($this->controller)."Controller");
  }

  if (isset($route[1])) {
   if (method_exists($this->controller, $route[1])) {
    $this->method = $route[1];
    unset($route[1]);
   };
  }

  $this->params = $route ? array_values($route) : [];
  call_user_func_array([$this->controller, $this->method], $this->params);
 }


}