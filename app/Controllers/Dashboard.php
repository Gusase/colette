<?php

/**
 * undocumented class
 */
class Dashboard extends Controller
{

  public function index()
  {
    $data = $this->model('User')->getAllUsers();
    $this->view('components/head', ['title' => 'Dashboard']);
    $this->view('dashboard/index',  ['user' => $data]);
    $this->view('components/foot');
  }
}
