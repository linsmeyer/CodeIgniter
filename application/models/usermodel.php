<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model
{
    var $table = "user";

//    function __construct()
//    {
//        parent::__construct();
//    }

    function getAll($limit = null)
    {
        if($limit != null)
        {
            $this->db->limit($limit['limit'],$limit['offset']);
        }
        $q = $this->db->get($this->table);
        if($q->num_rows() > 0)
        {
            return $q->result();
        }
        return array();
    }

    function countAll()
    {
        return $this->db->count_all($this->table);
    }

    function add($data)
    {
        $this->db->insert($this->table, $data);
    }

    function update($data,$id)
    {
        $this->db->where("id",$id);
        $this->db->update($this->table,$data);
    }

    function delete($id)
    {
        $this->db->where("id",$id);
        $this->db->delete($this->table);
    }

    function getById($id)
    {
        $this->db->where("id",$id);
        $q = $this->db->get($this->table);
        if($q->num_rows() > 0)
        {
            return $q->row();
        }
        return false;
    }


}