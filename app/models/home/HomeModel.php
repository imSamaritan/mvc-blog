<?php
class HomeModel extends Model {
 public string $name = __CLASS__;
 public function __construct(private array $config) {}

}