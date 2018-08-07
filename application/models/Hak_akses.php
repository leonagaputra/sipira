<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hak_akses extends CI_Model {

    //var $table = "paket";

    public function __construct() {
        parent::__construct();
    }
    
    public function do_login($email, $password){
        $this->db->select("u.VEMAILS, u.VNAME, u.VDEP, u.VDIR, ur.VROLE");
        $this->db->from("MSTUSERS u");
        $this->db->join("MSTUSERROLES ur","u.VEMAILS = ur.VEMAILS");
        $this->db->where("UPPER(u.VEMAILS)", strtoupper($email));
        $this->db->where("u.VPASS", $password);
        if($query = $this->db->get())
        {            
            //echo $this->db->last_query();exit;
            if($query->num_rows() > 0)
            {                
                return $query->row();
            }
        }
        return FALSE;
    }
    
//    public function do_login($email, $password){
//        $this->db->from("MSTUSERS");
//        $this->db->where("UPPER(VEMAILS)", strtoupper($email));
//        $this->db->where("VPASS", $password);
//        if($query = $this->db->get())
//        {
//            
//            if($query->num_rows() > 0)
//            {                
//                return $query->row();
//            }
//        }
//        return FALSE;
//    }

    public function get_user_menu($user_id) {
        $this->db->select("m.VMENUS, m.VPATH, m.VDESC, m.VBACKEND, m.VPARENTMNU");
        $this->db->from("MSTMENUS m");
            $this->db->join("MSTROLEMENUS rm", 'rm.VMENUS = m.VMENUS');
            $this->db->join("MSTROLES r", 'r.VROLE = rm.VROLE');
            $this->db->join("MSTUSERROLES ur", 'ur.VROLE = r.VROLE');
            $this->db->join("MSTUSERS u", 'u.VEMAILS = ur.VEMAILS');
        $this->db->where("u.VEMAILS", $user_id);
        $this->db->order_by("m.VPARENTMNU,m.IORDER ASC");
        $this->db->group_by("m.VMENUS");
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
    
    public function get_user_parentmenu($user_id) {
        $this->db->select("m.VPARENTMNU");
        $this->db->from("MSTMENUS m");
            $this->db->join("MSTROLEMENUS rm", 'rm.VMENUS = m.VMENUS');
            $this->db->join("MSTROLES r", 'r.VROLE = rm.VROLE');
            $this->db->join("MSTUSERROLES ur", 'ur.VROLE = r.VROLE');
            $this->db->join("MSTUSERS u", 'u.VEMAILS = ur.VEMAILS');
        $this->db->where("u.VEMAILS", $user_id);
        $this->db->group_by("m.VPARENTMNU");
        $this->db->order_by("m.VPARENTMNU,m.IORDER ASC");
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
    
    public function cek_hak_akses($user, $menu_path){
        $this->db->select("m.ID as MENU_ID, u.ID as USER_ID");
        $this->db->from("menu m");
            $this->db->join("rolemenu rm", 'rm.MENU_ID = m.ID');
            $this->db->join("role r", 'r.ID = rm.ROLE_ID');
            $this->db->join("userrole ur", 'ur.ROLE_ID = r.ID');
            $this->db->join("users u", 'u.ID = ur.USER_ID');
        $this->db->where("u.ID", $user);
        $this->db->where("m.VPATH", $menu_path);
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
