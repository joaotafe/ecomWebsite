<?php
class Product
{
    public $recordID;
    public $title;
    public $price;
    public $qty;

    function get_product_cost() {
        return $this->qty * $this->price;
    }
	
    public function __construct($recordID, $title, $price, $qty)
    {
        $this->recordID = $recordID;
        $this->title = $title;
        $this->price = $price;
        $this->qty = $qty; 
    }
    // Getter for recordID
    public function getRecordID()
    {
        return $this->recordID;
    }

    // Getter for title
    public function getTitle()
    {
        return $this->title;
    }

    // Getter for price
    public function getPrice()
    {
        return $this->price;
    }
     // Getter for price
     public function getQty()
     {
         return $this->qty;
     }
}

class ShoppingCart {
    private $items = array();

    // Add a product to the cart
    public function addProduct(Product $product) {
        $recordID = $product->getRecordID();

        // Check if the product already exists in the cart
        if (isset($this->items[$recordID])) {
            // If it exists, update the quantity
            $this->items[$recordID]->qty += $product->getQty();
        } else {
            // If it doesn't exist, add the product to the cart
            $this->items[$recordID] = $product;
        }
    }

    // Remove a product from the cart by its recordID
    public function removeProduct($recordID) {
        if (isset($this->items[$recordID])) {
            unset($this->items[$recordID]);
        }
    }

    // Update the quantity of a product in the cart
    public function updateQuantity($recordID, $qty) {
        if (isset($this->items[$recordID])) {
            $this->items[$recordID]->qty = $qty;
        }
    }

    // Get a product from the cart by its recordID
    public function getProduct($recordID) {
        return isset($this->items[$recordID]) ? $this->items[$recordID] : null;
    }

    // Get all items in the cart
    public function getItems() {
        return $this->items;
    }

    // Get the total cost for all items in the cart
    public function getTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->get_product_cost();
        }
        return $total;
    }

    // Get the total quantity of all items in the cart
    public function getTotalQuantity() {
        $totalQty = 0;
        foreach ($this->items as $item) {
            $totalQty += $item->getQty();
        }
        return $totalQty;
    }

    // Check if the cart is empty
    public function isEmpty() {
        return empty($this->items);
    }

    // Clear the cart
    public function clear() {
        $this->items = array();
    }
}
