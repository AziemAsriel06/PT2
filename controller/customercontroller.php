<?php

class CustomerController extends Controller {
    private $model;

    public function __construct() {
        $this->model = $this->model("customermodel");
    }

    public function index() {
        $records = $this->model->readAll();
        $this->view("customers", ["customers" => $records]);
    }

    public function save() {
        $data = $_POST;
        $this->model->create($data);

        $this->index();
    }

    public function edit($id) {
        $acustomer = $this->model->readById($id);
        if (!$acustomer) {
            exit;
        }
        $this->view("customers", [
            "acustomer" => $acustomer,
            "customers" => $this->model->readAll()
        ]);
    }

    public function update() {
        $data = $_POST;
        $this->model->update($data);

        $this->index();
    }

    public function delete($id) {
        $acustomer = $this->model->readById($id);
        if (!$acustomer) {
            exit;
        }

        $this->model->delete($id);
        $this->index();
    }
}

?>