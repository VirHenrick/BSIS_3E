<?php
class Home extends Controller
{
  public function index()
  {
    $model = new Model();
    $arr['firstname'] = 'jhay arron';
    $data = $model->where($arr);
    show($data);

    $this->view('home');
  }
}