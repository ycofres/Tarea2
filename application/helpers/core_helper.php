<?php


class core_persona{
    
    static function guardar($persona){

        $CI =& get_instance();
    if(isset($persona['id']) && $persona['id'] > 0){

        $CI->db->where('id', $persona);
        


    }
         $CI->db->insert('personas', $persona);
   
    } 
    static function borrar($id){

            $CI =& get_instance();
            $sql = 'delete from personas where id=?';
            $CI->db->query($sql, [$id]);
    
        } 
        static function listado(){
            $CI =& get_instance();
    
            $rs= $CI->db->get('personas')->result();
            return $rs;
        }


}



