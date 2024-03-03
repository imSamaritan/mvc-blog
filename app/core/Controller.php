<?php 
class Controller {
 
 private function resolveFilePath($file, $callingFuncName) {
  $callingFuncName = strtolower($callingFuncName);
  $dirname = is_string($file) ? strtolower($file) : '';
  
  if ($callingFuncName === 'view') {
    $file = strtolower($file);
    return "../app/views/{$dirname}/{$file}.view.php";
  }
  
  if ($callingFuncName === 'model') {
    if (is_array($file)) extract($file); //$dirname & $file;

    $file = ucfirst($file);
    return '../app/models/'.$dirname.'/'.$file.'Model.php';
  }

 }
 
 protected function view($viewName, $data = []) {
  $viewFile = $this->resolveFilePath($viewName, 'view');

  if (! file_exists($viewFile)) 
    require $this->resolveFilePath("_404", "view");
  else 
    require $viewFile;
}

protected function model(string|array $model, $optionalConstructParams = []) {
  $modelFullPath = $this->resolveFilePath($model, 'model');

  if (file_exists($modelFullPath)) {
    require $modelFullPath;
    if (is_array($model)) $model = $model['file'];
    return new (ucfirst($model).'Model')($optionalConstructParams);
  }
  else {
    print "Model does not exists";
  }
}

}