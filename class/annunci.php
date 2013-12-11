<?php
class Fabio_Annuncio {  
   
   public function __construct()  
    {  
        add_shortcode('annuncio', array($this, 'costuisciAnnuncio'));  //cosi, ogni volta che uso lo shortcode annuncio lo costruisco
                                                                //con la funzione costuisciAnnuncio e lascio il costruttore snello
    }  
      
    public function costuisciAnnuncio()  
    {  
    } 
  
  
}  
  
$annuncio = new Fabio_Annuncio();  


?>