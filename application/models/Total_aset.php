<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Total_aset extends CI_Model {

    //var $table = "paket";

    public function __construct() {
        parent::__construct();
    }
    
    public function aset_kredit($bulan, $tahun, $vkab){
        $this->db->select("SUM(IKRREK) IKRREK, SUM(MKRAMT) MKRAMT, SUM(MPNMBKLN) MPNMBKLN, SUM(ITABREK) ITABREK, SUM(MTAB) MTAB, SUM(IDEPREK) IDEPREK, SUM(MDEP) MDEP, SUM(IJUMREK) IJUMREK, SUM(MJUM) MJUM, SUM(MSIMBKLN) MSIMBKLN, SUM(MTOT) MTOT");
        $this->db->from("TXNTOTALASET");        
        $this->db->where("VMONTH", $bulan);
        $this->db->where("IYEAR", $tahun);
        $this->db->where_in('VKAB', $vkab);
        if($query = $this->db->get())
        {            
            if($query->num_rows() > 0)
            {                
                return $query->row();
            }
        }
        return FALSE;
    }
    


}
