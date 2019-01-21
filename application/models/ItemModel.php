<?php
/**
 * Created by PhpStorm.
 * User: sajith
 * Date: 1/20/19
 * Time: 7:08 AM
 */

class ItemModel extends CI_Model {

    public function insertItem($item) {
        return $this->db->insert('item', $item);
    }

    public function getList($user_id){
        $this->db->select('*');
        $this->db->where('user_id',$user_id);
        $this->db->from('item');
        $query = $this->db->get();
        return $result = $query->result_array();
    }

}