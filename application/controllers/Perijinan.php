<?php
date_default_timezone_set("Asia/Jakarta");
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
  created by: Leo Naga
 */
include_once('My_Controller.php');

class Perijinan extends My_Controller {

    var $production;
    var $email_to;

    public function __construct() {
        parent::__construct();
        $this->load->model('gen_model', 'gm');
        //$this->load->model('paket', 'pk');
        //$this->load->model('question', 'qs');
        $this->load->model('perijinan_model', 'ij');
        $this->load->model('hak_akses', 'ha');
        $this->load->model('pengaduan', 'pg');
        $this->load->model('survey', 'sv');
        $this->load->model('buku_nomor', 'bn');
        $this->load->model('penilaian_thos', 'pt');
        $this->load->model('pegawai', 'pw');
        //$this->load->model('total_aset', 'ta');
        $this->load->library('excel_reader');
        //$this->load->library('session');
        //$this->data['company'] = "BelajarUjian.com";
        $this->email_to = "leo.nagaputra@gmail.com";
    }

    //put your code here
    public function index() {
        header('location:' . $this->data['base_url'] . "index.php/backend/home");
    }

    private function _cek_user_login() {
        if (!isset($_SESSION['VNAME'])) {
            //echo "test2";exit;            
            header('location:' . $this->data['base_url'] . "index.php/main/frontpage");
        }
        $this->data['username'] = strtoupper($_SESSION['VNAME']);
        //echo "test22". $this->session->userdata('username')." lalala";exit;
    }
    
    function _get_backend_menu() {        
        $this->data['nama'] = $_SESSION['VNAME'];
        $this->data['menus'] = $this->get_user_menu($_SESSION['VEMAILS']);
        //print_r($this->data['menus']);exit;
    }
    
    function input_perijinan(){
        $data = array();
        $data['DTGLSURAT'] = $this->security($this->input->post('DTGLSURAT', TRUE)); 
        $data['DTGLTERIMA'] = $this->security($this->input->post('DTGLTERIMA', TRUE));
        $data['VNOSURAT'] = $this->security($this->input->post('VNOSURAT', TRUE));
        $data['VSTATSRT'] = $this->security($this->input->post('VSTATSRT', TRUE));
        $data['VSTAT'] = 1;
        if($data['VSTATSRT'] == 2){
            $data['VSTAT'] = 8;
        } else if ($data['VSTATSRT'] == 3){
            $data['VSTAT'] = 7;
        }
        
        $data['VPERIHAL'] = $this->security($this->input->post('VPERIHAL', TRUE));
        
        $data['VPIC'] = $this->security($this->input->post('VPIC', TRUE)); 
        $data['ID_MSTKATEGORIIJIN'] = $this->security($this->input->post('ID_MSTKATEGORIIJIN', TRUE));
        $data['VTIPEKANTOR'] = $this->security($this->input->post('VTIPEKANTOR', TRUE));
        $data['ID_MSTIJK'] = $this->security($this->input->post('ID_MSTIJK', TRUE));
        $data['VALAMAT'] = $this->security($this->input->post('VALAMAT', TRUE));
        $data['VALAMATBARU'] = $this->security($this->input->post('VALAMATBARU', TRUE));
        
        //$data['VSTAT'] = $this->security($this->input->post('VSTAT', TRUE));
        $data['VCREA'] = $_SESSION['VEMAILS'];
        $data['DCREA'] = date('Y-m-d H:i:s');
        //print_r($data);exit;
        
//        $this->data['list_stat_dok'] = array(
//            (object)array("ID" => "1", "VDESC" => "DITERIMA"),
//            (object)array("ID" => "8", "VDESC" => "TEMBUSAN")
//        );
        
        $this->data['list_stat'] = array(
            //(object)array("ID" => "0", "VNAMA" => "-"),
            (object)array("ID" => "1", "VNAMA" => "ASLI"),
            (object)array("ID" => "2", "VNAMA" => "TEMBUSAN"),
            (object)array("ID" => "3", "VNAMA" => "INFO EKSEKUSI")
        );
        
        //$vbtype = (isset($data['VTYPE']) && $data['VTYPE'] != "")?$data['VTYPE']:'-';
        //echo $vbtype;exit;
        if ($get = $this->gm->get('MSTIJK', array('VBTYPE' => "PERBANKAN"),FALSE, FALSE, NULL, NULL,'VNAMA')) {
            //print_r($get);exit;              
        }
        $this->data['list_ijk'] = $get;
        
        if($kategoris = $this->gm->get('mstkategoriijin', NULL,FALSE, FALSE, NULL, NULL,'ID')){
            //print_r($kategoris);exit;
        }
        $this->data['kategoris'] = $kategoris;
        
        //LIST PEGAWAI YANG MENANGANI PERIJINAN
        $this->data['pics'] = $this->pw->get_data(array('VROLE' => 'PJN'));
        
        
        //print_r($this->data['pics']);exit;
        if (isset($_POST['DTGLSURAT'])) {                       
            //GET DEADLINE
            $data['DDEADLINE'] = NULL;
//            if($deadline = $this->gm->get('mstkategoriijin', array("ID"=>$data['ID_MSTKATEGORIIJIN']),TRUE, FALSE, NULL, NULL,'ID')){
//                $data['DDEADLINE'] = date('Y-m-d',$this->add_days(strtotime($data['DTGLTERIMA']), $deadline->IDEADLINE, array("Saturday", "Sunday")));
//            }
            //print_r($data);exit;
            
            $id = $this->gm->insert("hdrperijinan", $data);
            $detil = array(
                "ID_HDRPERIJINAN" => $id,
                "VSTAT" => $data['VSTAT'],
                "VCREA" => $data['VCREA'],
                "DCREA" => $data['DCREA']
            );
            $detil_id = $this->gm->insert("dtlperijinan", $detil);
            
            $this->data['submitted'] = 1;
            $this->data['values'] = $data;            
            
//            $this->data['DTGLPENG'] = $data['DTGLPENG'];
//            $this->data['VTYPE'] = $data['VTYPE'];
        }
        $this->data['VNAME'] = $_SESSION['VNAME'];
        $this->data['VDEP'] = $_SESSION['VDEP'];
        $this->data['VDIR'] = $_SESSION['VDIR'];
        
        $this->data['VCREA'] = $_SESSION['VEMAILS'];
        $this->data['DCREA'] = date('Y-m-d H:i:s');
        $this->data["today"] = date('Y-m-d'); 
        //$this->data['judul'] = "Proses Perijinan";
        

        $this->_cek_user_login();
       
        $this->_get_backend_menu();

        $this->data['backend_page'] = 'perijinan/input_perijinan.php';

        $this->load->view('home', $this->data);
    }
    
    function edit_perijinan($id, $menu, $vstat = 0, $disabled = 0, $id_mstkategoriijin = 0){
        $data = array();
        $data['VSTAT'] = $vstat ? $vstat : $this->security($this->input->post('VSTAT', TRUE));
        $data['VPIC'] = $this->security($this->input->post('VPIC', TRUE));
        $data['ID'] = $id;
        $data['VNEXTPIC'] = $this->security($this->input->post('VNEXTPIC', TRUE));
        $data['VNOSURATKELUAR'] = $this->security($this->input->post('VNOSURATKELUAR', TRUE));
        $data['ID_MSTKATEGORIIJIN'] = $id_mstkategoriijin ? $id_mstkategoriijin : $this->security($this->input->post('ID_MSTKATEGORIIJIN', TRUE));
        
        $data['VMODI'] = $_SESSION['VEMAILS'];
        $data['DMODI'] = date('Y-m-d H:i:s');
        $data['VCREA'] = $data['VMODI'];
        $data['DCREA'] = $data['DMODI'];
        
        $this->data['list_stat'] = array(
            (object)array("ID" => "1", "VNAMA" => "ASLI"),
            (object)array("ID" => "2", "VNAMA" => "TEMBUSAN"),
            (object)array("ID" => "3", "VNAMA" => "INFO EKSEKUSI")
        );
        
       
        //if ($get_perijinan = $this->gm->get('hdrperijinan', array('ID' => $id), TRUE)) {
        if ($get_perijinan = $this->ij->get_monitoring(array('h.ID' => $id), NULL, NULL, NULL, NULL, TRUE)) {
            //print_r($get_perijinan);exit; 
            $this->data['values'] = (array)$get_perijinan; 
            $this->data['values']['VNEXTPIC'] = $data['VNEXTPIC'];
            $this->data['values']['VNOSURATKELUAR'] = $data['VNOSURATKELUAR'];
            $this->data['values']['ID_MSTKATEGORIIJIN'] = $data['ID_MSTKATEGORIIJIN'];
        }
        //print_r($this->data['values']);exit;
        //echo "leo";exit;
        //array_push($this->data['values'], $get_perijinan)
        //print_r($get_perijinan);exit;
        
        //print_r($this->data['values']);exit; 
        //print_r($this->data['pics']);exit;
        //print_r($_POST);EXIT;
        if (isset($_POST) && !empty($_POST)) {  //echo "here";exit;             
            //UPDATE HEADER
            $update = array(
                "VSTAT" => $data['VSTAT'],
                "VMODI" => $data['VMODI'],
                "DMODI" => $data['DMODI']
            );
            
            if($data['VSTAT'] == 2){
                //echo "vstat: ".$data['ID_MSTKATEGORIIJIN'];
                if($deadline = $this->gm->get('mstkategoriijin', array("ID"=>$data['ID_MSTKATEGORIIJIN']),TRUE, FALSE, NULL, NULL,'ID')){
                    $update['DDEADLINE'] = date('Y-m-d',$this->add_days(strtotime($data['DMODI']), $deadline->IDEADLINE, array("Saturday", "Sunday")));
                    //echo "dalam: ".$data['VSTAT'];exit;
                    
                }
                //echo "luar: ".$data['VSTAT'];exit;
            }
            
            
            //$data['VCREA'] = $_SESSION['VEMAILS'];
            //$data['DCREA'] = date('Y-m-d H:i:s');
            $this->gm->update_data("hdrperijinan", $update, $id);
            
            //INSERT DETAIL               
            $detil = array(
                "ID_HDRPERIJINAN" => $id,
                "VSTAT" => $data['VSTAT'],
                "VNEXTPIC" => $data['VNEXTPIC'],
                "VNOSURATKELUAR" => $data['VNOSURATKELUAR'],
                "VCREA" => $data['VCREA'],
                "DCREA" => $data['DCREA']
            );
            $detil_id = $this->gm->insert("dtlperijinan", $detil);
            
            $this->data['values']['VSTATS'] = $data['VSTAT'];
            $this->data['submitted'] = 1;
            //$this->data['values']['VNEXTPIC'] = $data['NEXTPIC'];
            //$this->data['values'] = $data;            
            
//            $this->data['DTGLPENG'] = $data['DTGLPENG'];
//            $this->data['VTYPE'] = $data['VTYPE'];
        }
        
        if($disabled){
            $update = array(
                "VSTAT" => $data['VSTAT'],
                "VMODI" => $data['VMODI'],
                "DMODI" => $data['DMODI']
            );
            //$data['VCREA'] = $_SESSION['VEMAILS'];
            //$data['DCREA'] = date('Y-m-d H:i:s');
            $this->gm->update_data("hdrperijinan", $update, $id);
            $this->data['submitted'] = 1;
        }
        $this->data['VNAME'] = $_SESSION['VNAME'];
        $this->data['VDEP'] = $_SESSION['VDEP'];
        $this->data['VDIR'] = $_SESSION['VDIR'];
        $this->data['judul'] = "Proses Perijinan";
        $this->data['perijinan_menu'] = $menu;
        
        $this->data['tombol'] = "Proses";
        if($this->data['values']['VSTATS'] == 2)$this->data['tombol'] = "Konfirmasi";
        else if($this->data['values']['VSTATS'] == 3)$this->data['tombol'] = "Selesai";
        
        
        
        if($menu == 1){
            $this->data['back'] = "index.php/perijinan/proses_perijinan";
        } else if($menu ==2){
            $this->data['back'] = "index.php/perijinan/konfirmasi_perijinan";
        }
        //print_r($this->data['values']);exit;
        //$this->data['VCREA'] = $_SESSION['VEMAILS'];
        //$this->data['DCREA'] = date('Y-m-d H:i:s');
        $this->data["today"] = date('Y-m-d'); 
        //print_r($this->data);exit;

        $this->_cek_user_login();       
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'perijinan/edit_perijinan.php';
        $this->load->view('home', $this->data);
    }


    function add_days($timestamp, $days, $skipdays = array("Saturday", "Sunday")) {
        // $skipdays: array (Monday-Sunday) eg. array("Saturday","Sunday")
        // $skipdates: array (YYYY-mm-dd) eg. array("2012-05-02","2015-08-01");
       //timestamp is strtotime of ur $startDate
        $i = 1;
//print_r($skipdays);exit;
        while ($days >= $i) {
            //echo $i. " - ";
            //print_r($skipdays);
            $timestamp = strtotime("+1 day", $timestamp);
            //echo $timestamp;exit;
            if ( (in_array(date("l", $timestamp), $skipdays))  )
            {
                $days++;
            }
            $i++;
        }
//print_r($skipdays);exit;
        return $timestamp;
        //return date("m/d/Y",$timestamp);
    }
    
    function monitoring_perijinan(){
        $data = array();        
        $data['IYEAR'] = $this->security($this->input->post('IYEAR', TRUE));
        $this->data['display'] = "none;";
        $this->data['status'] = $this->security($this->input->post('STATUS', TRUE));
        if (isset($_POST['IYEAR'])) {
            $where_in = array();
            if($this->data['status'] == 1){
                $where_in = array(1,2,3,4,5,6,7,8);
                $where_in_text = "1,2,3,4,5,6,7,8";
            } else if($this->data['status'] == 2) {
                $where_in = array(1,2,3,4);
                $where_in_text = "1,2,3,4";
            } else if($this->data['status'] == 3) {
                $where_in = array(5,6,7,8);
                $where_in_text = "5,6,7,8";
            }
            $where = array(
                'year(h.DCREA)' => $data['IYEAR']
            );
            $result = array();
            //$result = $this->gm->get("hdrperijinan",$where, FALSE, FALSE, NULL, NULL, "DTGLTERIMA", TRUE); 
            $result = $this->ij->get_monitoring($where, "VSTAT", $where_in);
            
            $currdate = date('Y-m-d');
            if($result = $this->ij->get_monitoring($where, "VSTAT", $where_in)){
                foreach($result as $res){
                    $hari = $this->get_working_days($currdate, $res->DDEADLINE, array());
                    //echo $hari;exit;
                    if($res->VSTATS == 6 || $res->VSTATS == 8 || $res->VSTATS == 7 || $res->VSTATS == 5)$res->COLOR = "bg-green";
                    else if($hari <= 0) $res->COLOR = "bg-red";
                    else if($hari < 5)  $res->COLOR = "bg-purple";
                    else if($hari < 10) $res->COLOR = "bg-yellow";
                    else $res->COLOR = "";

                }
            }
            
            //print_r($result);exit;
            
            $result2 = $this->ij->get_rekap_data($data['IYEAR'], $where_in_text);
            //print_r($result2);exit;
            $this->data['submitted'] = 1;
            $this->data['values'] = (array)$data;
            $this->data['rekap'] = $result2;
            $this->data['datas'] = $result;
            $this->data['display'] = "block;";
            //$this->data['status'] = 2;
            //print_r($this->data['values']);exit;
            
        }
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];      
        $this->data['kode'] = $this->gm->get('mstkodejabatan');
        $this->data['tipe'] = $this->gm->get('mstkodesurat', NULL, FALSE, FALSE, NULL, NULL, 'VDESC');
        //print_r($this->data['kode']);exit;
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'perijinan/monitoring_perijinan.php';
        $this->load->view('home', $this->data);
    }
    
    function proses_perijinan(){
        $data = array();        
        //$data['IYEAR'] = $this->security($this->input->post('IYEAR', TRUE));
        
        //if (isset($_POST['IYEAR'])) {
//            $where = array(
//                'year(h.DCREA)' => $data['IYEAR']
//            );
            $result = array();
            //$result = $this->gm->get("hdrperijinan",$where, FALSE, FALSE, NULL, NULL, "DTGLTERIMA", TRUE); 
            $result = $this->ij->get_monitoring(NULL,"VSTAT", array(1,3,4));

            $this->data['submitted'] = 1;
            $this->data['values'] = (array)$data;
            $this->data['datas'] = $result;
            $this->data['judul'] = "Proses Perijinan";
            $this->data['back'] = "1";
            //print_r($this->data['values']);exit;
            
        //}
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];      
        $this->data['kode'] = $this->gm->get('mstkodejabatan');
        $this->data['tipe'] = $this->gm->get('mstkodesurat', NULL, FALSE, FALSE, NULL, NULL, 'VDESC');
        //print_r($this->data['kode']);exit;
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'perijinan/proses_perijinan.php';
        $this->load->view('home', $this->data);
    }
    
    function konfirmasi_perijinan(){
        $data = array();        
        //$data['IYEAR'] = $this->security($this->input->post('IYEAR', TRUE));
        
        //if (isset($_POST['IYEAR'])) {
//            $where = array(
//                'year(h.DCREA)' => $data['IYEAR']
//            );
            $result = array();
            //$result = $this->gm->get("hdrperijinan",$where, FALSE, FALSE, NULL, NULL, "DTGLTERIMA", TRUE); 
            $result = $this->ij->get_monitoring(NULL,"VSTAT", array(2));

            $this->data['submitted'] = 1;
            $this->data['values'] = (array)$data;
            $this->data['datas'] = $result;
            $this->data['judul'] = "Konfirmasi Perijinan";
            $this->data['back'] = "2";
            //print_r($this->data['values']);exit;
            
        //}
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];      
        $this->data['kode'] = $this->gm->get('mstkodejabatan');
        $this->data['tipe'] = $this->gm->get('mstkodesurat', NULL, FALSE, FALSE, NULL, NULL, 'VDESC');
        //print_r($this->data['kode']);exit;
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'perijinan/proses_perijinan.php';
        $this->load->view('home', $this->data);
    }
    
    function get_working_days($startDate, $endDate, $holidays) {
        // do strtotime calculations just once
        $endDate = strtotime($endDate);
        $startDate = strtotime($startDate);


        //The total number of days between the two dates. We compute the no. of seconds and divide it to 60*60*24
        //We add one to inlude both dates in the interval.
        $days = ($endDate - $startDate) / 86400 + 1;

        $no_full_weeks = floor($days / 7);
        $no_remaining_days = fmod($days, 7);

        //It will return 1 if it's Monday,.. ,7 for Sunday
        $the_first_day_of_week = date("N", $startDate);
        $the_last_day_of_week = date("N", $endDate);

        //---->The two can be equal in leap years when february has 29 days, the equal sign is added here
        //In the first case the whole interval is within a week, in the second case the interval falls in two weeks.
        if ($the_first_day_of_week <= $the_last_day_of_week) {
            if ($the_first_day_of_week <= 6 && 6 <= $the_last_day_of_week)
                $no_remaining_days--;
            if ($the_first_day_of_week <= 7 && 7 <= $the_last_day_of_week)
                $no_remaining_days--;
        }
        else {
            // (edit by Tokes to fix an edge case where the start day was a Sunday
            // and the end day was NOT a Saturday)
            // the day of the week for start is later than the day of the week for end
            if ($the_first_day_of_week == 7) {
                // if the start date is a Sunday, then we definitely subtract 1 day
                $no_remaining_days--;

                if ($the_last_day_of_week == 6) {
                    // if the end date is a Saturday, then we subtract another day
                    $no_remaining_days--;
                }
            } else {
                // the start date was a Saturday (or earlier), and the end date was (Mon..Fri)
                // so we skip an entire weekend and subtract 2 days
                $no_remaining_days -= 2;
            }
        }

        //The no. of business days is: (number of weeks between the two dates) * (5 working days) + the remainder
//---->february in none leap years gave a remainder of 0 but still calculated weekends between first and last day, this is one way to fix it
        $workingDays = $no_full_weeks * 5;
        if ($no_remaining_days > 0) {
            $workingDays += $no_remaining_days;
        }

        //We subtract the holidays
        foreach ($holidays as $holiday) {
            $time_stamp = strtotime($holiday);
            //If the holiday doesn't fall in weekend
            if ($startDate <= $time_stamp && $time_stamp <= $endDate && date("N", $time_stamp) != 6 && date("N", $time_stamp) != 7)
                $workingDays--;
        }

        return $workingDays;
    }
    
    function view_perijinan($id, $menu){
        $data = array();
               
        if ($get_perijinan = $this->ij->get_monitoring(array('h.ID' => $id), NULL, NULL, NULL, NULL, TRUE)) {
            //print_r($get_perijinan);exit; 
            $this->data['values'] = (array)$get_perijinan;             
        }

        
        $this->data['VNAME'] = $_SESSION['VNAME'];
        $this->data['VDEP'] = $_SESSION['VDEP'];
        $this->data['VDIR'] = $_SESSION['VDIR'];
        $this->data['judul'] = "View Perijinan";
        $this->data['perijinan_menu'] = $menu;
        
        $this->data['tombol'] = "Proses";
        if($this->data['values']['VSTATS'] == 2)$this->data['tombol'] = "Konfirmasi";
        else if($this->data['values']['VSTATS'] == 3)$this->data['tombol'] = "Selesai";
        
        
        
        if($menu == 1){
            $this->data['back'] = "index.php/perijinan/proses_perijinan";
        } else if($menu ==2){
            $this->data['back'] = "index.php/perijinan/konfirmasi_perijinan";
        } else if($menu ==3){
            $this->data['back'] = "index.php/perijinan/monitoring_perijinan";
        }

        $this->data["today"] = date('Y-m-d'); 

        $this->_cek_user_login();       
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'perijinan/edit_perijinan.php';
        $this->load->view('home', $this->data);
    }

}
