<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Buku_nomor extends CI_Model {

    var $table = "txnbukunomor";

    public function __construct() {
        parent::__construct();
    }
    
    public function get_data($where = NULL, $start = NULL, $end = NULL) {       
        $this->db->select("s.VKODE, k.VKODE AS KODE_JABATAN,t.ID_JABATAN, t.ID_SURAT,t.IYEAR,t.VSUBNOMOR, t.DDATE, t.INOMOR, t.VPERIHAL, t.VKETERANGAN, t.VCREA");        
        $this->db->from($this->table. " t");
            $this->db->join('mstkodejabatan k', 't.ID_JABATAN = k.ID');    
            $this->db->join('mstkodesurat s', 't.ID_SURAT = s.ID'); 
        if($where != NULL)
        {
            foreach($where as $key=>$val)
            {
                $this->db->where($key, $val);
            }
        }
        //$this->db->where("h.HDRSETTING = 'VALSURVEY'");
        //$this->db->where("t.DDATE BETWEEN '" . $start. " 00:00:00' AND '".$end." 23:59:59'");
        //$this->db->group_by($column);
        $this->db->order_by("t.INOMOR", "desc");
        if($query = $this->db->get())
        {
//            echo $this->db->last_query();exit;
            if($query->num_rows() > 0)
            {                
                return $query->result();
            }
        }
        return FALSE;
    }
}
