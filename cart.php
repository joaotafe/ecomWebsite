<?php

class Product {

    public $recordID;
    public $title;
    public $qty;
    public $price;

    function get_product_cost() {
        return $this->qty * $this->price;
    }

    function __construct($recordID, $title, $qty, $price) {
        $this->recordID = $recordID;
        $this->title = $title;
        $this->qty = $qty;
        $this->price = $price;
    }

    function getRecordID() {
        return $this->recordID;
    }

    function getTitle() {
        return $this->title;
    }

    function getQty() {
        return $this->qty;
    }

    function getPrice() {
        return $this->price;
    }

}

class ShoppingCart {

    private $items;
    private $totalItems;

    function __construct() {
        $this->items = array();
        $this->totalItems = 0;
    }

    function addProduct($product) {
        $this->items[$this->totalItems] = $product;
        $this->totalItems++;
    }

    function removeProduct($index) {
        unset($this->items[$index]);
        $this->items = array_values($this->items);
        $this->totalItems--;
    }

    function get_depth() {
        return $this->totalItems;
    }

    function getProduct($index) {
        return $this->items[$index];
    }

}

?>
