<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Survey extends CI_Model {

    var $table = "txnsurveys";

    public function __construct() {
        parent::__construct();
    }
    
    public function get_data($start, $end, $column) {       
        $this->db->select("h.VDESC VTYPE, ".$column." VALUE, COUNT(".$column.") JUMLAH");        
        $this->db->from($this->table. " t");
            $this->db->join('hdrsetting h', 't.'.$column.' = h.VAL');            
        $this->db->where("h.HDRSETTING = 'VALSURVEY'");
        $this->db->where("t.DTGL BETWEEN '" . $start. " 00:00:00' AND '".$end." 23:59:59'");
        $this->db->group_by($column);
        $this->db->order_by($column, "desc");
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
