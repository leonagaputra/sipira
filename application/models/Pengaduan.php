<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengaduan extends CI_Model {

    var $table = "hdrpengaduan";

    public function __construct() {
        parent::__construct();
    }

    public function get() {
        $this->db->select("h.ID, h.DTGLPENG, h.VNAMA, h.VTELEPON, h.VTYPE, h.VMASALAH, m.VNAMA VIJK");        
        $this->db->from($this->table. " h");
            $this->db->join('mstijk m', 'h.ID_MSTIJK = m.ID');            
        //$this->db->where('h.ID', $id);
        $this->db->order_by("h.DTGLPENG", "desc");
        if($query = $this->db->get())
        {
            if($query->num_rows() > 0)
            {                
                return $query->result();
            }
        }
        return FALSE;
    }
    
    public function proses_rekap($vtype, $start, $end) {
        $this->db->select("h.VTYPE,m.VNAMA VIJK, count(ID_MSTIJK) JUMLAH");        
        $this->db->from($this->table. " h");
            $this->db->join('mstijk m', 'h.ID_MSTIJK = m.ID');            
        //$this->db->where('h.ID', $id);
        if($vtype){
            $this->db->where('h.VTYPE', $vtype);
        }
        $this->db->where("h.DTGLPENG BETWEEN '" . $start. "' AND '".$end."'");
        $this->db->group_by("h.ID_MSTIJK");
        if($query = $this->db->get())
        {
//            /echo $this->db->last_query();exit;
            if($query->num_rows() > 0)
            {                
                return $query->result();
            }
        }
        return FALSE;
    }
    
    public function proses_rekap_tipe($vtype, $start, $end) {
        $this->db->select("h.VTYPE, count(h.VTYPE) JUMLAH");        
        $this->db->from($this->table. " h");
            //$this->db->join('mstijk m', 'h.ID_MSTIJK = m.ID');            
        //$this->db->where('h.ID', $id);
        if($vtype){
            $this->db->where('h.VTYPE', $vtype);
        }
        $this->db->where("h.DTGLPENG BETWEEN '" . $start. "' AND '".$end."'");
        $this->db->group_by("h.VTYPE");
        if($query = $this->db->get())
        {
//            /echo $this->db->last_query();exit;
            if($query->num_rows() > 0)
            {                
                return $query->result();
            }
        }
        return FALSE;
    }
}
