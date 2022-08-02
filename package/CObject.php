<?php

namespace DotonInterface;



class CObject{



    public function __construct(object|array|null $data = null) {

        if($data){

            foreach( $data as $property => $value){

                $this->{ $property } = $value;
                
            }
            
        }
        
    }

    
}