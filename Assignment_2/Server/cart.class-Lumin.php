<?php
include_once('product.class.php');
class cart{
    
    public function __construct(){
        $this->itemList[] = new product();
        $this->totalItems = 0;
        $this->totalPrice = 0;
    }

    function addItem(product $product){
        // for($i=0;$i<sizeof($this->itemList);$i++){
        //     if($this->itemlist[$i]->getName() == $product->getName()){
        //         $this->itemlist[$i]->addAmount($product->getAmount());
        //         $found = True;
        //     }
        // }
        // if(!found){
            array_push($this->itemList,$product);
            $this->totalItems++;
    //     }
     }

    function isEmpty(){
        if(sizeof($this->itemList) == 1){
            return true;
        }
        return false;
    }

    function setTotalItems($total){$this->totalItems = $total;}
    function getTotalItems(){return $this->totalItems;}

    function setTotalPrice($total){$this->totalPrice = $total;}
    function getTotalPrice(){return $this->totalPrice;}

    
    function showAll(){
        for($i=0;$i<sizeof($this->itemList);$i++){
            $name = $this->itemList[$i]->getName();
            $price = $this->itemList[$i]->getPrice();
            $count = $this->itemList[$i]->getAmount();

            echo "
                        <div class ='product_selection'>
                            <div id='checkout_product'>
                                <p class ='name_product'>Name: ".$name."</p>
                                <p class ='product_description'>Price: ".$price."</p>
                                <p class ='product_price'>Amount: ".$count."</p>
                            </div>
                        </div>
                     
                     ";
        }
    }
        
                    


//     function addItem(product $product){
//         $check = 0;
//         foreach ($this->itemList as $i){
//             if($this->itemList[$i]->getName() == $product->getName()){
//                 $this->itemList[$i]->addAmount();
//                 $check = 1;
//             }
//         }
//         if($check == 0){
//             array_push($this->itemList,$product);
//         }
        
//     }

//     function getTotalPrice(){
//         foreach ($this->itemList as $i){
//             $totalPrice += $this->itemList[$i]->getPrice();
//         }
//         return $totalPrice;
//     }

//     function getTotalItems(){
//         return sizeof($this->itemList);
//     }

//     function showAll(){
//         foreach ($this->itemList as $i){
//             $name = $this->itemList[$i]->getName();
//             $price = $this->itemList[$i]->getPrice();
//             $count = $this->itemList[$i]->getAmount();

//             echo "
//                 <div class ='product_selection'>
//                     <div id='checkout_product'>
//                         <p class ='name_product'>Name: ".$name."</p>
//                         <p class ='product_description'>Price: ".$price."</p>
//                         <p class ='product_price'>Amount: ".$count."</p>
//                     </div>
//                 </div>
             
//              ";

//         }
//     }

}





?>