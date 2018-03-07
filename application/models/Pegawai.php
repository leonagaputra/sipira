<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pegawai extends CI_Model {

    var $table = "mstpegawai";

    public function __construct() {
        parent::__construct();
    }
    
    public function get_data($where = NULL, $start = NULL, $end = NULL) {       
        $this->db->select("t.VNIP, t.VNAMA, t.VEMAIL");        
        $this->db->from($this->table. " t");
            $this->db->join('mstuserroles u', 't.VEMAIL = u.VEMAILS');    
            
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
        $this->db->order_by("t.VNAMA", "ASC");
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
