<?php
  class ProduitCtrl{
     
    public function viewProduit(){
        $this->liste();
    }

    public function liste(){
        include_once 'src/view/produit/liste.php';
    }
  }
 
 