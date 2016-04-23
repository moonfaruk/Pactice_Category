<?php

class Common_model extends CI_Model {

    public function selectAll($tbl_name) {
//        $this->db->select('*');
//        $this->db->where('status', 1);
//        $this->db->from($tbl_name);
//        $query_result = $this->db->get();
//        $result = $query_result->result();
//        return $result;
//            echo "<pre>";
//            print_r($result);
//            exit();
        $sql = "SELECT * FROM $tbl_name WHERE status=1";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function get_info($tbl_name, $id) {
//        $this->db->select('*');
//        $this->db->where('id', $id);
//        $this->db->from($tbl_name);
//        $query_result = $this->db->get();
//        $result = $query_result->row();
//        return $result;
//            echo "<pre>";
//            print_r($result);
//            exit();
        $sql = "SELECT * from $tbl_name WHERE id=$id";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }

    public function update($tbl_name, $id, $data) {
//        $this->db->where('id', $id);
//        $this->db->update($tbl_name, $data);
        
        $sql = "UPDATE $tbl_name SET $data WHERE id=$id";
        $this->db->query($sql);
        
    }

    public function change_status($tbl_name, $id) {
//        $this->db->set('status', 0);
//        $this->db->where('id', $id);
//        $this->db->update($tbl_name);
        
        $sql = "update $tbl_name set status=0 where id=$id";
        $this->db->query($sql);
    }

}
