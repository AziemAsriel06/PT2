<?php
 
class OrderController extends Controller {
    private $orderModel;
    private $customerModel;
    private $staffModel;
    private $detailModel;
 
    public function __construct() {
        $this->orderModel = $this->model("ordermodel");
        $this->customerModel = $this->model("customermodel");
        $this->staffModel = $this->model("staffmodel");
        $this->detailModel = $this->model("orderdetailmodel");
    }
 
    public function index() {
        $this->view("orders", [
            "orders" => $this->orderModel->readAll(),
            "customers" => $this->customerModel->readAll(),
            "staffs" => $this->staffModel->readAll()
        ]);
    }

    public function invoice($id) {
        $order = $this->orderModel->readById($id);
        if (!$order) {
            exit;
        }

        $details = $this->detailModel->readByOrder($id);

        // Kira jumlah setiap baris dan grand total
        $grandTotal = 0;
        foreach ($details as $i => $detail) {
            $lineTotal = (float) ($detail['fld_product_price'] ?? 0)
                       * (int) $detail['fld_order_detail_quantity'];
            $details[$i]['line_total'] = $lineTotal;
            $grandTotal += $lineTotal;
        }

        $this->view("invoice", [
            "order"      => $order,
            "details"    => $details,
            "grandTotal" => $grandTotal
        ]);
    }
 
    public function save() {
        $data = $_POST;
        $orderNum = $this->orderModel->create($data);
 
        $this->index();
    }
 
    public function edit($id) {
        $order = $this->orderModel->readById($id);
 
        if (!$order) {
            exit;
        }
 
        $this->view("orders", [
            "aorder" => $order,
            "orders" => $this->orderModel->readAll(),
            "customers" => $this->customerModel->readAll(),
            "staffs" => $this->staffModel->readAll()
        ]);
    }
 
    public function update() {
        $data = $_POST;
        $this->orderModel->update($data);
 
        $this->index();
    }
 
    public function delete($id) {
        $order = $this->orderModel->readById($id);
 
        if (!$order) {
            exit;
        }
 
        $this->orderModel->delete($id);
        $this->index();
    }
}
 
?>