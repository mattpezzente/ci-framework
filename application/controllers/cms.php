<?php

class cms extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('crudModel');
    $this->load->helper('url');
  }

  public function index() {
    $this->form_validation->set_rules('name', 'name', 'required|min_length[5]|max_length[15]');
    $dataObj["fruits"] = $this->crudModel->getFruits();

    if ($this->form_validation->run() == FALSE) {      
      $this->load->view('crudview', $dataObj);
    }
    else {
      $dataObj2 = $this->input->post("name");
      $this->crudModel->addFruit($dataObj2);
      redirect('/cms');
    }
  }

  public function actionDelete($id) {
    $this->crudModel->deleteFruit($id);
    redirect('/cms');
  }

  public function formUpdate($id) {
    $this->form_validation->set_rules('name', 'name', 'required|min_length[5]|max_length[15]');    

    if ($this->form_validation->run() == FALSE) {
      $dataObj["fruit"] = $this->crudModel->getFruit($id);
      $this->load->view('updateForm', $dataObj);
    }
    else {
      $dataObj = $this->input->post("name");
      $this->crudModel->updateFruit($id, $dataObj);
      redirect('/cms');
    }
  }
}

?>