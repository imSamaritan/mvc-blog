<?php
class Component {
 private static function resolveFilePath(string $filename) {
  return "../app/views/components/{$filename}.php";
 }
 public static function nav($links = [], $active = 'home') {
  require_once self::resolveFilePath('__nav');
  return self::class;
 }

 public static function header(array $config) {
  if (! array_key_exists('css', $config)) $config['css'] = null;
  if (! array_key_exists('js', $config)) $config['js'] = null;


  require_once self::resolveFilePath('__header');
  return self::class;
 }

 public static function content($data = []) {
  require_once self::resolveFilePath('__home');
  return self::class;
 }
}