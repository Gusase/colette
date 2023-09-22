<?php

/**
 * undocumented class
 */
class Controller
{

  protected function view(string $url, array $data = [])
  {
    require_once 'app/Views/' . $url . '.php';
  }

  protected function model(string $model)
  {
    require_once 'app/Models/' . $model . '.php';
    return new $model;
  }
}
