<?php

namespace App\Manager;

use App\Repository\ProductoRepository;

class ProductoManager{

private $productoRepository;

//1 recibir como parametro la clase producto repository en el constructor
public function __construct(ProductoRepository $productoRepository){
    $this->productoRepository = $productoRepository;

    
}

public function getProductos(){
    return $this->productoRepository->findAll();
}


}
