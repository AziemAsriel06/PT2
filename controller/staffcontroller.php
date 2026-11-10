<?php

class StaffController extends Controller {
    private $model;

    public function __construct() {
        $this->model = $this->model("staffmodel");
    }

    public function index() {
        $records = $this->model->readAll();
        $this->view("staffs", ["staffs" => $records]);
    }

    public function save() {
        $data = $_POST;
        $this->model->create($data);

        $this->index();
    }

    public function edit($id) {
        $astaff = $this->model->readById($id);
        if (!$astaff) {
            exit;
        }
        $this->view("staffs", [
            "astaff" => $astaff,
            "staffs" => $this->model->readAll()
        ]);
    }

    public function update() {
        $data = $_POST;
        $this->model->update($data);

        $this->index();
    }

    public function delete($id) {
        $astaff = $this->model->readById($id);
        if (!$astaff) {
            exit;
        }

        $this->model->delete($id);
        $this->index();
    }
}

?>