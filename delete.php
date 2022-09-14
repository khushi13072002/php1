<?php
include 'conn.php';
class de
{
    public function delete(){
        $c=new conn();
        $c->db_connect();
        $c->deletes();
            
    }
}
$d=new de();
$d->delete();
?> 