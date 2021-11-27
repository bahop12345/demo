<?php

namespace App\model;

class Cart
{
	public $products = null;	
	public $totalQuanty = 0;
	public $totalPrice = 0;


	public function __construct($Cart){
		if($Cart){
			$this->products = $Cart->products;
			$this->totalQuanty = $Cart->totalQuanty;
			$this->totalPrice = $Cart->totalPrice;
		}
	}


	public function AddCart($product, $id,$quantity=1){
		// dd($quantity);
		
		$newProduct = ['quanty'=>0,'price'=>$product->price,'productInfo'=>$product];
		if($this->products){
			if(array_key_exists($id,$this->products)){
				$newProduct = $this->products[$id];
			}
		}
	
		$newProduct['quanty']+=$quantity;
		$newProduct['price'] = $newProduct['quanty']*$product->price;
		$this->products[$id]=$newProduct;
		$this->totalPrice += $product->price;
		$this->totalQuanty+=$quantity;
		
	}
	public function DeleteItemCart($id){
	$this->totalQuanty -= $this->products[$id]['quanty'];
	$this->totalPrice -= $this->products[$id]['price'];
	unset($this->products[$id]);
	}
	public function UpdateItemCart($id,$quanty){
	$this->totalQuanty -= $this->products[$id]['quanty'];
	$this->totalPrice -= $this->products[$id]['price'];
	$this->products[$id]['quanty'] = $quanty;
	$this->products[$id]['price'] = $quanty *$this->products[$id]['productInfo']->price;
	$this->totalQuanty += $this->products[$id]['quanty'];
	$this->totalPrice += $this->products[$id]['price'];
	}

}
