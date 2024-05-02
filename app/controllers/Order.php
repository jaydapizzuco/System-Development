<?php
namespace app\controllers;


class Order extends \app\core\Controller {

    public function createOrder($user_id, $total_price) {
        $order = new Order();
        $order->user_id = $user_id;
        $order->total_price = $total_price;
        $order->insert();

        $this->redirect('order/cart');
    }

    public function cart(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $order = new \app\models\Order();
            $order = $order->getByID($_GET['id']);

            $this->view('Order/checkout',$order);
        }
        else{
        $this->view('Order/cart');
    }

    }

    public function checkout(){
        $order = new \app\models\Order();
        $order = $order->getByID($_GET['id']);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $order->setCartStatusFalse();

             $this->view('Order/receipt',$order);
        }
        else{
        $this->view('Order/checkout',$order);
    }
    
    }

    public function deleteOrder($order_id) {
        $order = Order::getByID($order_id);
        if ($order) {
            $order->delete();
            
            $this->redirect('');
        } else {
        
            $this->view('error', ['message' => 'not a order']);
        }
    }

    public function setOrderStatus($order_id) {
        $order = Order::getByID($order_id);
        if ($order) {
            $order->setStatusTrue();
           
            $this->redirect('');
        } else {
        
            $this->view('error', ['message' => 'cant find order']);
        }
    }

    public function viewOrder($order_id) {
        $order = Order::getByID($order_id);
        if ($order) {
            $this->view('order/history');
        } else {
           
            $this->view('error', ['message' => 'order not found']);
        }
    }

    public function delete(){
        $order = new \app\models\Order();
        $order = $order->getByID($_GET['id']);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $order->delete();
            header('location:/User/purchaseHistory');
        }else{
            $this->view('Order/delete',$order);
        }
    }
}
  
?>
