<?php
function display_error($validation, $field){
    if($validation->hasError($field)){
        echo $validation->getError($field);
    }else{
    }
    
    }
?>