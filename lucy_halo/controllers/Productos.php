<?php
// el home de views lo trea en herencia pagina del html
   class Productos extends Controllers{
     public function __construct()
     {
       parent::__construct();
     }

     public function Productos()
     {    
         $data['page_id']="2";
         $data['page_tag']="Productos";
         $data['page_title'] = "Productos de tienda ";
         $data['page_name'] = "Productos";
         $data['page_content'] = "";
        $this->views->getView($this,"productos",$data);

     }
       }
?>