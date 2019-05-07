<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penilaian_thos extends CI_Model {

    var $table = "hdrnilaithos";

    public function __construct() {
        parent::__construct();
    }
    
    public function get_thos($IYEAR = FALSE, $ISEMESTER = FALSE, $VCREA = FALSE) {       
        $this->db->select("m.ID, m.VNAMA, m.VJABATAN");        
        $this->db->from("mstthos m");
        if($IYEAR)
            $this->db->where('ID NOT IN (SELECT ID_MSTTHOS FROM HDRNILAITHOS WHERE IYEAR='.$IYEAR.' AND ISEMESTER='.$ISEMESTER.' AND VCREA="'.$VCREA.'")');
        //$this->db->where("h.HDRSETTING = 'VALSURVEY'");
        //$this->db->where("t.DDATE BETWEEN '" . $start. " 00:00:00' AND '".$end." 23:59:59'");
        //$this->db->group_by($column);
        //$this->db->order_by("m.VNAMA", "asc");
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
    
    public function get_komponen_nilai() {       
        $this->db->select("m.ID, m.VDESC, g.ID as GRPID, g.VDESC as GRPVDESC");     
        $this->db->from("mstkomp m");
        $this->db->join("mstgrpkomp g", "g.ID = m.ID_MSTGRPKOMP");      
        $this->db->order_by("g.ID", "asc");
        //$this->db->where('ID NOT IN (SELECT ID_MSTTHOS FROM HDRNILAITHOS WHERE IYEAR='.$IYEAR.' AND ISEMESTER='.$ISEMESTER.' AND VCREA="'.$VCREA.'")');
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
    
    public function get_nilai_by_user($IYEAR = FALSE, $ISEMESTER = FALSE, $VCREA = FALSE) {       
        $this->db->select("m.ID, m.VNAMA, m.VJABATAN, h.DNILAI, h.DCREA, h.ID as HDRID, h.ISEMESTER, h.IYEAR, h.VCREA");     
        $this->db->from("hdrnilaithos h");
        $this->db->join("mstthos m", "m.ID = h.ID_MSTTHOS");
        $this->db->where("h.IYEAR", $IYEAR);
        $this->db->where("h.ISEMESTER", $ISEMESTER);
        $this->db->where("h.VCREA", $VCREA);
        $this->db->order_by("m.VNAMA", "asc");
        //$this->db->where('ID NOT IN (SELECT ID_MSTTHOS FROM HDRNILAITHOS WHERE IYEAR='.$IYEAR.' AND ISEMESTER='.$ISEMESTER.' AND VCREA="'.$VCREA.'")');
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
    
    
    
    public function get_nilai_rekap($IYEAR = FALSE, $ISEMESTER = FALSE) {       
        $this->db->select("m.ID, m.VNAMA, m.VJABATAN, ROUND(AVG(h.DNILAI),2) as DNILAI, COUNT(ID_MSTTHOS) AS JML_PENILAI, h.ISEMESTER, h.IYEAR", FALSE);     
        $this->db->from("hdrnilaithos h");
        $this->db->join("mstthos m", "m.ID = h.ID_MSTTHOS");
        $this->db->group_by("h.ID_MSTTHOS, h.ISEMESTER, h.IYEAR");
        $this->db->having("h.IYEAR", $IYEAR);
        $this->db->having("h.ISEMESTER", $ISEMESTER);
        $this->db->order_by("m.VNAMA", "asc");
        //$this->db->having("h.VCREA", $VCREA);
        //$this->db->order_by("h.ID_MSTGRPKOMP", "asc");
        //$this->db->where('ID NOT IN (SELECT ID_MSTTHOS FROM HDRNILAITHOS WHERE IYEAR='.$IYEAR.' AND ISEMESTER='.$ISEMESTER.' AND VCREA="'.$VCREA.'")');
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
    
    public function get_nilai_by_id($IYEAR = FALSE, $ISEMESTER = FALSE, $VCREA = FALSE, $ID = FALSE) {       
        $this->db->select("d.ID_HDRNILAITHOS, h.ID_MSTTHOS, m.ID, m.VDESC, g.ID as GRPID, g.VDESC as GRPVDESC, d.DNILAI, h.ISEMESTER, h.IYEAR, h.VCREA");     
        $this->db->from("dtlnilaithos d");
        $this->db->join("hdrnilaithos h", "h.ID = d.ID_HDRNILAITHOS");
        $this->db->join("mstkomp m", "m.ID = d.ID_MSTKOMP");
        $this->db->join("mstgrpkomp g", "g.ID = m.ID_MSTGRPKOMP");
        $this->db->where("h.IYEAR", $IYEAR);
        $this->db->where("h.ISEMESTER", $ISEMESTER);
        $this->db->where("h.VCREA", $VCREA);
        $this->db->where("h.ID_MSTTHOS", $ID);              
        $this->db->order_by("g.ID", "asc");
        //$this->db->order_by("h.ID_MSTGRPKOMP", "asc");
        //$this->db->where('ID NOT IN (SELECT ID_MSTTHOS FROM HDRNILAITHOS WHERE IYEAR='.$IYEAR.' AND ISEMESTER='.$ISEMESTER.' AND VCREA="'.$VCREA.'")');
        if($query = $this->db->get())
        {
            //echo $this->db->last_query();exit;
            if($query->num_rows() > 0)
            {                
                return $query->result();
                //return $query->row();
            }
        }
        return FALSE;
    }
    
    public function get_rekap_nilai_by_id($IYEAR = FALSE, $ISEMESTER = FALSE, $VCREA = FALSE, $ID = FALSE) {       
        $this->db->select("d.ID_HDRNILAITHOS, h.ID_MSTTHOS, m.ID, m.VDESC, g.ID as GRPID, g.VDESC as GRPVDESC, round(avg(d.DNILAI),'2') as DNILAI, h.ISEMESTER, h.IYEAR, h.VCREA");     
        $this->db->from("dtlnilaithos d");
        $this->db->join("hdrnilaithos h", "h.ID = d.ID_HDRNILAITHOS");
        $this->db->join("mstkomp m", "m.ID = d.ID_MSTKOMP");
        $this->db->join("mstgrpkomp g", "g.ID = m.ID_MSTGRPKOMP");
        $this->db->where("h.IYEAR", $IYEAR);
        $this->db->where("h.ISEMESTER", $ISEMESTER);
        //$this->db->where("h.VCREA", $VCREA);
        $this->db->where("h.ID_MSTTHOS", $ID);
        $this->db->group_by("h.id_mstthos, d.id_mstkomp");                      
        $this->db->order_by("g.ID", "asc");
        //$this->db->order_by("h.ID_MSTGRPKOMP", "asc");
        //$this->db->where('ID NOT IN (SELECT ID_MSTTHOS FROM HDRNILAITHOS WHERE IYEAR='.$IYEAR.' AND ISEMESTER='.$ISEMESTER.' AND VCREA="'.$VCREA.'")');
        if($query = $this->db->get())
        {
            //echo $this->db->last_query();exit;
            if($query->num_rows() > 0)
            {                
                return $query->result();
                //return $query->row();
            }
        }
        return FALSE;
    }
}
