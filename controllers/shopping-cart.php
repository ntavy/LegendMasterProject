<?php

class ShoppingCartController extends Controller
{
    public function processCart($action, $proCode){

        $productModel = $this->model('product');
        switch ($action) {
            case "add":
                if (!empty($_POST["quantity"])) {
                    $cartItems = $_SESSION["cart_items"];
                    if (!$cartItems) $cartItems = [];
                    $productItem = Product::getProductByProCode($proCode);
                    if(empty($cartItems[$proCode])){
                        $cartItems[$proCode] = array(
                            'proName' => $productItem["proName"],
                            'proCode' => $productItem["proCode"],
                            'quantity' => $_POST["quantity"],
                            'salePrice' => $productItem["salePrice"],
                            'sizePerPack' => $productItem["sizePerPack"],
                            'imagePath' => $productItem["imagePath"],
                        );
                    }else{
                        $currentItem = $cartItems[$proCode];
                        $currentItem['quantity'] += $_POST["quantity"];
                        $cartItems[$proCode] = $currentItem;
                    }

                    $_SESSION["cart_items"] = $cartItems;
                }
                break;
            case "remove":
                $cartItems = $_SESSION["cart_items"];
                unset($cartItems[$proCode]);        //remove item at proCode key
                $_SESSION["cart_items"] = $cartItems;
                break;
            case "change":
                $productItem = Product::getProductByProCode($proCode);
                $remainQuantity = $productItem["remainQuantity"];
                $cartItems = $_SESSION["cart_items"];
                $currentItem = $cartItems[$proCode];
                if($_REQUEST['quantity'] <= $remainQuantity){
                    $currentItem['quantity'] = $_REQUEST['quantity'];
                }
                $cartItems[$proCode] = $currentItem;
                $_SESSION["cart_items"] = $cartItems;
                break;
            case "view":
                break;

        }
        return $this->view('shopping-cart', ['activeMenu' => 'shopping']);
    }

    public function viewCart(){
        return $this->view('shopping-cart', ['activeMenu' => 'shopping']);
    }
}

