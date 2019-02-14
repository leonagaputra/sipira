<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Perijinan_model extends CI_Model {

    var $table = "hdrperijinan";

    public function __construct() {
        parent::__construct();
    }
    
    public function get_monitoring($where = NULL, $where_in = NULL, $wherein_val = NULL, $start = NULL, $end = NULL, $single = FALSE) {       
        $this->db->select("h.ID,date_format(DTGLSURAT,'%Y-%m-%d') as DTGLSURAT, "
                . "h.ID_MSTKATEGORIIJIN, "
                . "date_format(DTGLTERIMA,'%Y-%m-%d') as DTGLTERIMA, "
                . "date_format(DDEADLINE,'%Y-%m-%d') as DDEADLINE, "
                . "IF(VSTATSRT=1,'ASLI',IF(VSTATSRT=2,'TEMBUSAN','NA')) AS VSTATSRT, "
                . "VNOSURAT, VPERIHAL, k.VDESC, "
                . "VTIPEKANTOR, "
                . "m.VNAMA as NAMABANK, "
                . "i.VDESC as VSTAT, "
                . "h.VSTAT as VSTATS, "
                . "p.VNAMA,"
                . "VALAMAT,"
                . "VALAMATBARU");        
        $this->db->from($this->table. " h");
            $this->db->join('mstkategoriijin k', 'k.ID = h.ID_MSTKATEGORIIJIN');    
            $this->db->join('mstijk m', 'm.ID = h.ID_MSTIJK'); 
            $this->db->join('mstpegawai p', 'p.VEMAIL = h.VPIC'); 
            $this->db->join('mststatusijin i', 'i.ID = h.VSTAT'); 
        if($where != NULL)
        {
            foreach($where as $key=>$val)
            {
                $this->db->where($key, $val);
            }
        }
        
        if($where_in != NULL){
            $this->db->where_in($where_in, $wherein_val);
        }
        //$this->db->where("h.HDRSETTING = 'VALSURVEY'");
        //$this->db->where("t.DDATE BETWEEN '" . $start. " 00:00:00' AND '".$end." 23:59:59'");
        //$this->db->group_by($column);
        $this->db->order_by("h.DDEADLINE", "asc");
        if($query = $this->db->get())
        {
//            echo $this->db->last_query();exit;
            if($query->num_rows() > 0)
            {            
                if($single){
                    
                    return $query->row();            
                }
                else return $query->result();
            }
        }
        return FALSE;
    }
    
    //SELECT m.ID, m.VDESC, h.JML FROM `mststatusijin` m LEFT JOIN (SELECT count(VSTAT) JML, VSTAT FROM `hdrperijinan` GROUP BY VSTAT) h ON h.VSTAT = m.ID 
    public function get_rekap_data($dcrea, $where_in_text = NULL) {       
        $this->db->select("m.ID, m.VDESC, IFNULL(h.JML,'0') AS JML");        
        $this->db->from("mststatusijin m");
            $this->db->join('(SELECT count(VSTAT) JML, VSTAT, DCREA FROM `hdrperijinan` WHERE year(DCREA)='.$dcrea.' AND VSTAT in ('.$where_in_text.') GROUP BY VSTAT) h', 'h.VSTAT = m.ID','LEFT');    
//        if($where_in != NULL){
//            $this->db->where_in($where_in, $wherein_val);
//        }
        $this->db->order_by("m.ID", "asc");
        if($query = $this->db->get())
        {
            //echo $this->db->last_query();exit;
            if($query->num_rows() > 0)
            {                          
                return $query->result();
            }
        }
        return FALSE;
    }
    
    
}
