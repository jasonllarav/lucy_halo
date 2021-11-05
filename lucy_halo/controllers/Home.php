<?php
// el home de views lo trea en herencia pagina del html
   class Home extends Controllers{
     public function __construct()
     {
       parent::__construct();
     }

     public function home()
     {    
         $data['page_id']="1";
         $data['page_tag']="Home";
         $data['page_title'] = "página principal";
         $data['page_name'] = "home";
         $data['page_content'] = "Lorem ipsum, dolor sit amet consectetur 
         adipisicing elit. Quas amet esse totam veniam tempora accusantium 
         quis temporibus, ipsa, pariatur, ullam vitae exercitationem? Atque 
         iure officia unde doloremque quod, numquam dolor.";
        $this->views->getView($this,"home",$data);

     }
       }
?>