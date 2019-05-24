<?php
function asgInput($nombre, $label){
    return <<< Codigo
    
        <div  class=' form-group input-group' >
            <label>{$label} :  </label>
            <input  class=' form-control' type='text' name='{$nombre}'/>
         </div>
Codigo;
    }
    
?>