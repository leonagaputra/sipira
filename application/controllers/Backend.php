<?php
date_default_timezone_set("Asia/Jakarta");
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
  created by: Leo Naga
 */
include_once('My_Controller.php');

class Backend extends My_Controller {

    var $production;
    var $email_to;

    public function __construct() {
        parent::__construct();
        $this->load->model('gen_model', 'gm');
        //$this->load->model('paket', 'pk');
        //$this->load->model('question', 'qs');
        $this->load->model('hak_akses', 'ha');
        $this->load->model('pengaduan', 'pg');
        $this->load->model('survey', 'sv');
        $this->load->model('buku_nomor', 'bn');
        $this->load->model('penilaian_thos', 'pt');
        $this->load->model('pegawai', 'pw');
        //$this->load->model('total_aset', 'ta');
        $this->load->library('excel_reader');
        //$this->load->library('session');
        $this->data['company'] = "BelajarUjian.com";
        $this->email_to = "leo.nagaputra@gmail.com";
    }

    //put your code here
    public function index() {
        header('location:' . $this->data['base_url'] . "index.php/backend/home");
    }

    private function _cek_user_login() {
        //print_r($_SESSION);exit;    
        //print_r($this->session);exit;
        //echo "test". $_SESSION['VNAME']." lalala";exit;
        //if (!$this->session->userdata('VNAME')) {
        if (!isset($_SESSION['VNAME'])) {
            //echo "test2";exit;            
            header('location:' . $this->data['base_url'] . "index.php/main/frontpage");
        }
        //echo $this->session->userdata('VEMAIL');
        //exit;
        //$this->data['username'] = strtoupper($this->session->userdata('VUSERNAME'));
        $this->data['username'] = strtoupper($_SESSION['VNAME']);
        //echo "test22". $this->session->userdata('username')." lalala";exit;
    }

    function logout() {
        //$this->session->sess_destroy();
        session_unset();
        session_destroy();
        header('location:' . $this->data['base_url'] . 'index.php/main/frontpage');
    }

    private function _check_captcha($recaptcha) {
        //phpinfo();
        //exit;
        //print_r($_POST);exit;
        ini_set('display_errors', '1');
        $fields_string = "";
        $url = "https://www.google.com/recaptcha/api/siteverify";

        $fields = array(
            'secret' => "6LfosgsTAAAAACVaKwPBahJcK2sk8EGBhZMpk7iL",
            'response' => $recaptcha,
            'remoteip' => ''
        );

        //url-ify the data for the POST
        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);
        //print_r($result);exit;
        return $result;
    }


    /**
     * sample function to send mail
     */
    function sendmail() {
        $this->load->library('email'); // load email library
        $this->email->from('xand3r.leo@gmail.com', 'Leo Naga');
        $this->email->to('leo.nagaputra@gmail.com');

        $this->email->subject('Your Subject');
        $this->email->message('Your Message');

        if ($this->email->send())
            echo "Mail Sent!";
        else
            echo "There is error in sending mail!";
    }

    function do_signin() {
        $data = array();

        $data['VEMAILS'] = $this->security($this->input->post('email', TRUE));
        $data['VPASS'] = $this->security($this->input->post('password', TRUE));
        //print_r($data);exit;
        $var_cookie = 'belajarujian_remember';
        if (isset($_POST['remember']) && $_POST['remember'] == 1) {
            //set cookie
            //1 year cookie
            $year = time() + 31536000;
            $cookie = array(
                'name' => $var_cookie,
                'value' => $data['VEMAIL'],
                'expire' => $year
            );
            $this->input->set_cookie($cookie);
        } else {
            delete_cookie($var_cookie);
        }
//echo "here";exit;
        //if ($result = $this->gm->get("users", $data, TRUE)) {
        if ($result = $this->ha->do_login($data['VEMAILS'], $data['VPASS'])) {
            //print_r($result);exit;
            $this->data['username'] = strtoupper($data['VEMAILS']);
            foreach($result as $key => $value)
            {
                //$this->session->set_userdata((array) $result);
                $_SESSION[$key] = $value;
            }
            //print_r($_SESSION);exit;
            //$this->session->set_userdata((array) $result);
            //echo"test";exit;
            //$_SESSION['test'] = 'LEO';
            //print_r($_SESSION);exit;
            //$_SESSION("test") = "leo";
            //print_r($this->session);exit;
            //echo $this->session->userdata('VNAME');exit;
            header('location:' . $this->data['base_url'] . 'index.php/backend/home');
        } else {
            //echo "test";exit;
            //header('location:' . $this->data['base_url'] . 'index.php/main/signin?gagal_login=1');
            header('location:' . $this->data['base_url'] . 'index.php/backend/home');
        }
        //$this->index();
    }

    function go_to_home() {
        header('location:' . $this->data['base_url'] . "index.php/backend/home");
        //echo "test";
    }

    function home() {
        //cek login
        //echo "dalam";
        //exit;
        //print_r($_SESSION);exit;
        $this->_cek_user_login();
        //cek user akses, jangan kasi cek hak akses, krn semua redirect ke sini jika tidak punya akses
        //$this->cek_hak_akses($this->session->userdata('ID'), "index.php/backend/home");
        $this->_get_backend_menu();
//        print_r($this->data);exit;
        $this->data['backend_page'] = 'homepage.php';
        //print_r($this->data['menus']);exit;
        //get_user_class 
        $this->load->view('home', $this->data);
    }
    
    function breakdown_excel($sheet, $param) {
        //print_r($param);exit;
        $id = 0;
        $data = array();

        $data['VKASPOS'] = isset($sheet['cells'][2][1]) ? $sheet['cells'][2][1] : '';
        $data['VLANGGAR'] = isset($sheet['cells'][2][2]) ? $sheet['cells'][2][2] : '';
        $data['VKET'] = isset($sheet['cells'][2][3]) ? $sheet['cells'][2][3] : '';        
        $data['VCREA'] = $this->session->userdata('VEMAILS');
        $data['VNOTADINAS'] = $param['VNOTADINAS'];
        //print_r($data);exit;
        if ($get = $this->gm->get('HDRMPKPS', array('VNOTADINAS' => $param['VNOTADINAS']), TRUE)) {
            //print_r($get);exit;
            $data['VMODI'] = $this->session->userdata('VEMAILS');
            $where = array('VNOTADINAS' => $param['VNOTADINAS']);
            $this->gm->update_data('HDRMPKPS', $data, NULL, array('VNOTADINAS' => $param['VNOTADINAS']));
            $id = $get->ID;
            //print_r($get);exit;
            
        } else {
            $id = $this->gm->insert('HDRMPKPS', $data);
        }
        return $id;
    }


    

    function sheetData($sheet) {
        $re = '<table>';     // starts html table

        $x = 1;
        while ($x <= $sheet['numRows']) {
            $re .= "<tr>\n";
            $y = 1;
            while ($y <= $sheet['numCols']) {
                $cell = isset($sheet['cells'][$x][$y]) ? $sheet['cells'][$x][$y] : '';
                $re .= " <td>$cell</td>\n";
                $y++;
            }
            $re .= "</tr>\n";
            $x++;
        }

        return $re . '</table>';     // ends and returns the html table
    }
    

    function upload_doc() {
        $data = array();
        $data['bulan'] = $this->security($this->input->post('bulan', TRUE));
        $data['tahun'] = $this->security($this->input->post('tahun', TRUE));
        $data['tipe'] = $this->security($this->input->post('tipe', TRUE));
        $this->_cek_user_login();

        if (isset($_POST['bulan'])) {
            $this->process_file($data);
            //exit;
            $this->data['submitted'] = 1;
        }

        $this->_get_backend_menu();
        $this->data['backend_page'] = 'upload.php';

        $this->load->view('home', $this->data);
    }        

    
    function do_upload($id) {
        //print_r($_FILES);exit;
        $target_dir = "upload/";
        foreach ($_FILES as $key => $value) {
            //print_r($key);
            //echo count($_FILES[$key]["name"]);exit;
            for($i = 0; $i < count($_FILES[$key]["name"]); $i++){
                $target_file = $target_dir . $id . "_" . basename($_FILES[$key]["name"][$i]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                // Check if image file is a actual image or fake image
                //echo "helo";exit;
                if (isset($_POST["submit"])) {
                    if (move_uploaded_file($_FILES[$key]["tmp_name"][$i], $target_file)) {
                        $data = array();
                        $data['ID_HDRMPKPS'] = $id;
                        $data['VDESC'] = basename($_FILES[$key]["name"][$i]);
                        $data['VPATH'] = $target_file;
                        $data['VCREA'] = $this->session->userdata('VEMAILS');
                        $this->gm->insert("DTLMPKPS", $data);
                        //echo "The file " . basename($_FILES[$key]["name"]) . " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                }
            }
            
        }
    }
    
//    function _get_backend_menu() {
//
//        //$this->data['nama'] = $this->session->userdata('VNAME');
//        $this->data['nama'] = $_SESSION['VNAME'];
//        //echo $this->session->userdata('VEMAILS');exit;
//        //$this->data['menus'] = $this->get_user_menu($this->session->userdata('VEMAILS'));
//        $this->data['menus'] = $this->get_user_menu($_SESSION['VEMAILS']);
//        //print_r($this->data['menus']);exit;
//    }
  

    function _get_backend_menu() {        
        $this->data['nama'] = $_SESSION['VNAME'];
        $this->data['menus'] = $this->get_user_menu($_SESSION['VEMAILS']);
        //print_r($this->data['menus']);exit;
    }
    
    function get_dokumen(){      
        $where = array();
        $where['ID_HDRMPKPS'] = $this->security($this->input->post('ID', TRUE));
        //$this->gm->update_data('HDRRULES',$data,NULL,$where);
        $data = $this->gm->get('DTLMPKPS', $where);
        //print_r($data);
        echo json_encode($data);
    }
    
    function send_validate(){
        $where = array();
        $where['ID'] = $this->security($this->input->post('ID', TRUE));
        
        $data = array();
        $data['VSTAT'] = "T";
        $data['VDISPOS'] = $this->security($this->input->post('VDISPOS', TRUE));
        
        $this->gm->update_data('HDRMPKPS', $data, NULL, $where);
        
        echo json_encode(array(
            'status' => 'ok'
        ));
    }

    function input_pengaduan() {
        $data = array();
        $data['DTGLPENG'] = $this->security($this->input->post('DTGLPENG', TRUE));
        $data['VTYPE'] = $this->security($this->input->post('VTYPE', TRUE));
        $data['VNAMA'] = $this->security($this->input->post('VNAMA', TRUE));
        $data['VALAMAT'] = $this->security($this->input->post('VALAMAT', TRUE));
        $data['VIDENTITAS'] = $this->security($this->input->post('VIDENTITAS', TRUE));
        $data['VTELEPON'] = $this->security($this->input->post('VTELEPON', TRUE));
        $data['ID_MSTIJK'] = $this->security($this->input->post('ID_MSTIJK', TRUE));
        $data['VALAMATPENG'] = $this->security($this->input->post('VALAMATPENG', TRUE));
        $data['VNAMAPENG'] = $this->security($this->input->post('VNAMAPENG', TRUE));
        $data['VTELPENG'] = $this->security($this->input->post('VTELPENG', TRUE));
        $data['VMASALAH'] = $this->security($this->input->post('VMASALAH', TRUE));
        $data['VTANGGAPAN'] = $this->security($this->input->post('VTANGGAPAN', TRUE));
        $data['VSARAN'] = $this->security($this->input->post('VSARAN', TRUE)); 
        $data['VPIC'] = $this->security($this->input->post('VPIC', TRUE)); 
        
        $data['VCREA'] = $_SESSION['VEMAILS'];
        $data['DCREA'] = date('Y-m-d H:i:s');
        //print_r($data);exit;
        
        $vbtype = (isset($data['VTYPE']) && $data['VTYPE'] != "")?$data['VTYPE']:'-';
        //echo $vbtype;exit;
        if ($get = $this->gm->get('MSTIJK', array('VBTYPE' => $vbtype),FALSE, FALSE, NULL, NULL,'VNAMA')) {
            //print_r($get);exit;              
        }
        $this->data['list_ijk'] = $get;
        
        $this->data['pics'] = $this->pw->get_data(array('VROLE' => 'EPK'));
        //print_r($this->data['pics']);exit;
        if (isset($_POST['DTGLPENG'])) {
            $id = $this->gm->insert("hdrpengaduan", $data);
            //$this->do_upload($id);
            $this->data['submitted'] = 1;
            $this->data['values'] = $data;
//            $this->data['DTGLPENG'] = $data['DTGLPENG'];
//            $this->data['VTYPE'] = $data['VTYPE'];
//            $this->data['VNAMA'] = $data['VNAMA'];
//            $this->data['VALAMAT'] = $data['VALAMAT'];
//            $this->data['VIDENTITAS'] = $data['VIDENTITAS'];
//            $this->data['VTELEPON'] = $data['VTELEPON'];
//            $this->data['ID_MSTIJK'] = $data['ID_MSTIJK'];
//            $this->data['VALAMATPENG'] = $data['VALAMATPENG'];
//            $this->data['VNAMAPENG'] = $data['VNAMAPENG'];
//            $this->data['VTELPENG'] = $data['VTELPENG'];
//            $this->data['VMASALAH'] = $data['VMASALAH'];
//            $this->data['VTANGGAPAN'] = $data['VTANGGAPAN'];
//            $this->data['VSARAN'] = $data['VSARAN'];
        }
        $this->data['VNAME'] = $_SESSION['VNAME'];
        $this->data['VDEP'] = $_SESSION['VDEP'];
        $this->data['VDIR'] = $_SESSION['VDIR'];
        
        $this->data['VCREA'] = $_SESSION['VEMAILS'];
        $this->data['DCREA'] = date('Y-m-d H:i:s');
        $this->data["today"] = date('Y-m-d'); 
        

        $this->_cek_user_login();
       
        $this->_get_backend_menu();

        $this->data['backend_page'] = 'input_pengaduan.php';

        $this->load->view('home', $this->data);
    }
    
    function input_pengaduan_surat() {
        $data = array();
        $data['DTGLSRT'] = $this->security($this->input->post('DTGLSRT', TRUE));
        $data['DTGLRCV'] = $this->security($this->input->post('DTGLRCV', TRUE));
        $data['VNAMA'] = $this->security($this->input->post('VNAMA', TRUE));
        $data['VIDENTITAS'] = $this->security($this->input->post('VIDENTITAS', TRUE));
        $data['VALAMAT'] = $this->security($this->input->post('VALAMAT', TRUE));        
        $data['VTELEPON'] = $this->security($this->input->post('VTELEPON', TRUE));          
        $data['VTYPE'] = $this->security($this->input->post('VTYPE', TRUE));           
        $data['ID_MSTIJK'] = $this->security($this->input->post('ID_MSTIJK', TRUE));        
        $data['VALAMATPENG'] = $this->security($this->input->post('VALAMATPENG', TRUE));
        $data['VNAMAPENG'] = $this->security($this->input->post('VNAMAPENG', TRUE));
        $data['VTELPENG'] = $this->security($this->input->post('VTELPENG', TRUE));        
        $data['VMASALAH'] = $this->security($this->input->post('VMASALAH', TRUE));
        $data['VTANGGAPAN'] = $this->security($this->input->post('VTANGGAPAN', TRUE));
        $data['VSARAN'] = $this->security($this->input->post('VSARAN', TRUE)); 
        $data['VPIC'] = $this->security($this->input->post('VPIC', TRUE)); 
        $data['VSTATSRT'] = $this->security($this->input->post('VSTATSRT', TRUE)); 
        $data['VSTATPRS'] = $this->security($this->input->post('VSTATPRS', TRUE)); 
        
        $data['VCREA'] = $_SESSION['VEMAILS'];
        $data['DCREA'] = date('Y-m-d H:i:s');
        //print_r($data);exit;
        
        $vbtype = (isset($data['VTYPE']) && $data['VTYPE'] != "")?$data['VTYPE']:'-';
        //echo $vbtype;exit;
        if ($get = $this->gm->get('MSTIJK', array('VBTYPE' => $vbtype),FALSE, FALSE, NULL, NULL,'VNAMA')) {
            //print_r($get);exit;              
        }
        $this->data['list_ijk'] = $get;
        
        $this->data['list_stat'] = array(
            (object)array("ID" => "0", "VNAMA" => "-"),
            (object)array("ID" => "1", "VNAMA" => "ASLI"),
            (object)array("ID" => "2", "VNAMA" => "TEMBUSAN")
        );
        
        $this->data['list_proses'] = array(
            (object)array("ID" => "0", "VNAMA" => "-"),
            (object)array("ID" => "1", "VNAMA" => "OPEN - SUDAH DIKLARIFIKASI"),
            (object)array("ID" => "2", "VNAMA" => "OPEN - DITERUSKAN KE KANTOR PUSAT"),
            (object)array("ID" => "3", "VNAMA" => "CLOSED - SELESAI")
        );

        $this->data['pics'] = $this->pw->get_data(array('VROLE' => 'EPK'));
        //print_r($this->data['pics']);exit;
        if (isset($_POST['DTGLSRT'])) {
            $id = $this->gm->insert("txnpengaduansurat", $data);
            //$this->do_upload($id);
            $this->data['submitted'] = 1;
            $this->data['values'] = $data;
        }
        $this->data['VNAME'] = $_SESSION['VNAME'];
        $this->data['VDEP'] = $_SESSION['VDEP'];
        $this->data['VDIR'] = $_SESSION['VDIR'];
        
        $this->data['VCREA'] = $_SESSION['VEMAILS'];
        $this->data['DCREA'] = date('Y-m-d H:i:s');
        $this->data["today"] = date('Y-m-d'); 
        

        $this->_cek_user_login();
       
        $this->_get_backend_menu();

        $this->data['backend_page'] = 'input_pengaduan_surat.php';

        $this->load->view('home', $this->data);
    }
    
    function get_mstijk(){
        $data = array();
        $data['VBTYPE'] = $this->security($this->input->post('VBTYPE', TRUE));
        $get = $this->gm->get('MSTIJK', $data,FALSE, FALSE, NULL, NULL,'VNAMA');
        //print_r($get);exit;
        echo json_encode($get);                      
    }
    
    function monitoring_pengaduan(){
        //cek login
        //echo "dalam";
        //exit;
        $this->_cek_user_login();
//        $this->data["role"] = $this->session->userdata('VROLE');
        
        $this->data["role"] = $_SESSION['VROLE'];
//        if ($this->session->userdata('VDEP') != 'DKIP') {
        if ($datas = $this->pg->get()) {
            $this->data['datas'] = $datas;
        }
        
        //print_r($datas);exit;
        //$this->data['backend_page'] = 'monitoring.php';
        //cek user akses, jangan kasi cek hak akses, krn semua redirect ke sini jika tidak punya akses
        //$this->cek_hak_akses($this->session->userdata('ID'), "index.php/backend/home");
        $this->_get_backend_menu();
//        print_r($this->data);exit;
        $this->data['backend_page'] = 'monitoring_pengaduan.php';
        //print_r($this->data['menus']);exit;
        //get_user_class 
        $this->load->view('home', $this->data);
    }
    
    function monitoring_pengaduan_surat(){
        $this->_cek_user_login();

        $this->data["role"] = $_SESSION['VROLE'];

        if ($datas = $this->pg->get_pengaduan_tertulis()) {
            $this->data['datas'] = $datas;
        }
        
        //print_r($datas);exit;
        //$this->data['backend_page'] = 'monitoring.php';
        //cek user akses, jangan kasi cek hak akses, krn semua redirect ke sini jika tidak punya akses
        //$this->cek_hak_akses($this->session->userdata('ID'), "index.php/backend/home");
        $this->_get_backend_menu();
//        print_r($this->data);exit;
        $this->data['backend_page'] = 'monitoring_pengaduan_surat.php';
        //print_r($this->data['menus']);exit;
        //get_user_class 
        $this->load->view('home', $this->data);
    }
    
    function edit_pengaduan($idhdr) {
        $data = array();
        
        $data['DTGLPENG'] = $this->security($this->input->post('DTGLPENG', TRUE));
        $data['VTYPE'] = $this->security($this->input->post('VTYPE', TRUE));
        $data['VNAMA'] = $this->security($this->input->post('VNAMA', TRUE));
        $data['VALAMAT'] = $this->security($this->input->post('VALAMAT', TRUE));
        $data['VIDENTITAS'] = $this->security($this->input->post('VIDENTITAS', TRUE));
        $data['VTELEPON'] = $this->security($this->input->post('VTELEPON', TRUE));
        $data['ID_MSTIJK'] = $this->security($this->input->post('ID_MSTIJK', TRUE));
        $data['VALAMATPENG'] = $this->security($this->input->post('VALAMATPENG', TRUE));
        $data['VNAMAPENG'] = $this->security($this->input->post('VNAMAPENG', TRUE));
        $data['VTELPENG'] = $this->security($this->input->post('VTELPENG', TRUE));
        $data['VMASALAH'] = $this->security($this->input->post('VMASALAH', TRUE));
        $data['VTANGGAPAN'] = $this->security($this->input->post('VTANGGAPAN', TRUE));
        $data['VSARAN'] = $this->security($this->input->post('VSARAN', TRUE));    
        $data['VPIC'] = $this->security($this->input->post('VPIC', TRUE)); 
        
        $data['VMODI'] = $_SESSION['VEMAILS'];
        $data['DMODI'] = date('Y-m-d H:i:s');
        //print_r($data);exit;
        $values = $this->gm->get('hdrpengaduan', array('ID' => $idhdr),TRUE);
        $vbtype = (isset($data['VTYPE']) && !empty($data['VTYPE']))?$data['VTYPE']:$values->VTYPE;
        //echo "aaa " . $vbtype. " bbb";exit;
        if ($get = $this->gm->get('MSTIJK', array('VBTYPE' => $vbtype),FALSE, FALSE, NULL, NULL,'VNAMA')) {
            //print_r($get);exit;                      
        }
        $this->data['list_ijk'] = $get;
        $this->data['pics'] = $this->pw->get_data(array('VROLE' => 'EPK'));
        
        if (isset($_POST['DTGLPENG'])) {
            $this->gm->update_data("hdrpengaduan", $data, $idhdr);
            //$this->do_upload($id);
            $this->data['submitted'] = 1;
            $this->data['values'] = $data;
        } else {
            //$values = array();
            //$values = $this->gm->get('hdrpengaduan', array('ID' => $idhdr),TRUE);
            //$this->data['submitted'] = 1;
            //print_r($values);exit;
            $this->data['values'] = (array)$values;
        }
        $this->data['VNAME'] = $_SESSION['VNAME'];
        $this->data['VDEP'] = $_SESSION['VDEP'];
        $this->data['VDIR'] = $_SESSION['VDIR'];
        $this->data['ID'] = $idhdr;
        
        $this->data['VCREA'] = $_SESSION['VEMAILS'];
        $this->data['DCREA'] = date('Y-m-d H:i:s');
        
        

        $this->_cek_user_login();
       
        $this->_get_backend_menu();

        $this->data['backend_page'] = 'edit_pengaduan.php';
        $this->load->view('home', $this->data);
    }
    
    function edit_pengaduan_surat($idhdr) {
        $data = array();
        
        $data['DTGLSRT'] = $this->security($this->input->post('DTGLSRT', TRUE));
        $data['DTGLRCV'] = $this->security($this->input->post('DTGLRCV', TRUE));
        $data['VNAMA'] = $this->security($this->input->post('VNAMA', TRUE));
        $data['VIDENTITAS'] = $this->security($this->input->post('VIDENTITAS', TRUE));
        $data['VALAMAT'] = $this->security($this->input->post('VALAMAT', TRUE));        
        $data['VTELEPON'] = $this->security($this->input->post('VTELEPON', TRUE));          
        $data['VTYPE'] = $this->security($this->input->post('VTYPE', TRUE));           
        $data['ID_MSTIJK'] = $this->security($this->input->post('ID_MSTIJK', TRUE));        
        $data['VALAMATPENG'] = $this->security($this->input->post('VALAMATPENG', TRUE));
        $data['VNAMAPENG'] = $this->security($this->input->post('VNAMAPENG', TRUE));
        $data['VTELPENG'] = $this->security($this->input->post('VTELPENG', TRUE));        
        $data['VMASALAH'] = $this->security($this->input->post('VMASALAH', TRUE));
        $data['VTANGGAPAN'] = $this->security($this->input->post('VTANGGAPAN', TRUE));
        $data['VSARAN'] = $this->security($this->input->post('VSARAN', TRUE)); 
        $data['VPIC'] = $this->security($this->input->post('VPIC', TRUE)); 
        $data['VSTATSRT'] = $this->security($this->input->post('VSTATSRT', TRUE)); 
        $data['VSTATPRS'] = $this->security($this->input->post('VSTATPRS', TRUE)); 
        
        $data['VMODI'] = $_SESSION['VEMAILS'];
        $data['DMODI'] = date('Y-m-d H:i:s');
        //print_r($data);exit;
        $values = $this->gm->get('txnpengaduansurat', array('ID' => $idhdr),TRUE);
        $vbtype = (isset($data['VTYPE']) && !empty($data['VTYPE']))?$data['VTYPE']:$values->VTYPE;
        //echo "aaa " . $vbtype. " bbb";exit;
        if ($get = $this->gm->get('MSTIJK', array('VBTYPE' => $vbtype),FALSE, FALSE, NULL, NULL,'VNAMA')) {
            //print_r($get);exit;                      
        }
        $this->data['list_ijk'] = $get;
        
        $this->data['list_stat'] = array(
            (object)array("ID" => "0", "VNAMA" => "-"),
            (object)array("ID" => "1", "VNAMA" => "ASLI"),
            (object)array("ID" => "2", "VNAMA" => "TEMBUSAN")
        );
        
        $this->data['list_proses'] = array(
            (object)array("ID" => "0", "VNAMA" => "-"),
            (object)array("ID" => "1", "VNAMA" => "OPEN - SUDAH DIKLARIFIKASI"),
            (object)array("ID" => "2", "VNAMA" => "OPEN - DITERUSKAN KE KANTOR PUSAT"),
            (object)array("ID" => "3", "VNAMA" => "CLOSED - SELESAI")
        );
        
        $this->data['pics'] = $this->pw->get_data(array('VROLE' => 'EPK'));
        
        if (isset($_POST['DTGLSRT'])) {
            $this->gm->update_data("txnpengaduansurat", $data, $idhdr);
            //$this->do_upload($id);
            $this->data['submitted'] = 1;
            $this->data['values'] = $data;
        } else {
            //$values = array();
            //$values = $this->gm->get('hdrpengaduan', array('ID' => $idhdr),TRUE);
            //$this->data['submitted'] = 1;
            //print_r($values);exit;
            $this->data['values'] = (array)$values;
        }
        $this->data['VNAME'] = $_SESSION['VNAME'];
        $this->data['VDEP'] = $_SESSION['VDEP'];
        $this->data['VDIR'] = $_SESSION['VDIR'];
        $this->data['ID'] = $idhdr;
        
        $this->data['VCREA'] = $_SESSION['VEMAILS'];
        $this->data['DCREA'] = date('Y-m-d H:i:s');
        $this->data["today"] = date('Y-m-d');
        

        $this->_cek_user_login();
       
        $this->_get_backend_menu();

        $this->data['backend_page'] = 'edit_pengaduan_surat.php';
        $this->load->view('home', $this->data);
    }
    
    function rekapitulasi_pengaduan(){
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];        
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'rekapitulasi_pengaduan.php';
        $this->load->view('home', $this->data);
    }
    
    function proses_rekap(){
        $data = array();
        $data['DTGLPENG'] = $this->security($this->input->post('DTGLPENG', TRUE));
        $data['VTYPE'] = $this->security($this->input->post('VTYPE', TRUE));
        //echo $data['DTGLPENG'];exit;
        $vtype = "";
        if($data['VTYPE']!="ALL")
            $vtype = $data['VTYPE'];
        $dates = explode(" s/d ", $data['DTGLPENG']);
        //print_r($dates);exit;
        //$data['VBTYPE'] = $this->security($this->input->post('VBTYPE', TRUE));
        $get = $this->pg->proses_rekap($vtype, $dates[0], $dates[1]);
        $tipe = $this->pg->proses_rekap_tipe($vtype, $dates[0], $dates[1]);
        $result = array(
            'IJK' =>$get,
            'TIPE' =>$tipe
        );
        //print_r($get);exit;
        echo json_encode($result);                      
    }
    
    function dashboard_anggaran(){
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];        
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'dashboard_anggaran.php';
        $this->load->view('home', $this->data);
    }
    
    function show_anggaran(){
        $data = array();
        $data['bulan'] = $this->security($this->input->post('bulan', TRUE));
        $data['tahun'] = $this->security($this->input->post('tahun', TRUE));
        //print_r($data);exit;
        $pagu = $this->gm->get("mstpaguang", array("IYEAR"=>$data['tahun']), TRUE);
        $real = $this->gm->get("txnrealang", NULL, TRUE, FALSE, 1, 0, "DDATE", TRUE, array("DDATE"=>"".$data['tahun']."-".$data['bulan'].""));
        $real->POPR = round((100*$real->IOPR/$pagu->IOPR), 2);
        $real->PADM = round((100*$real->IADM/$pagu->IADM), 2);
        $real->PAST = round((100*$real->IAST/$pagu->IAST), 2);
        $real->PPEND = round((100*$real->IPEND/$pagu->IPEND), 2);
        $real->PTOT = round(100*($real->IOPR + $real->IADM + $real->IAST + $real->IPEND)/($pagu->IOPR + $pagu->IADM + $pagu->IAST + $pagu->IPEND),2);
                
        $real->PBANK = round((100*$real->IBANK/$pagu->IBANK), 2);
        $real->PEPK = round((100*$real->IEPK/$pagu->IEPK), 2);
        $real->PBUD = round((100*$real->IBUD/$pagu->IBUD), 2);        
        
        $real->IOPRF = number_format($real->IOPR,0,".",",");
        $real->IADMF = number_format($real->IADM,0,".",",");
        $real->IASTF = number_format($real->IAST,0,".",",");
        $real->IPENDF = number_format($real->IPEND,0,".",",");
        $real->DDATEF = date_format(date_create($real->DDATE),"d M Y");
        
        $real->IBANKF = number_format($real->IBANK,0,".",",");
        $real->IEPKF = number_format($real->IEPK,0,".",",");
        $real->IBUDF = number_format($real->IBUD,0,".",",");
        
        //print_r($real);exit;
        echo json_encode($real);                      
    }
    
    function realisasi_anggaran() {
        $data = array();
        $data['DDATE'] = $this->security($this->input->post('DDATE', TRUE)) . date(' H:i:s');
        $data['IOPR'] = $this->security($this->input->post('IOPR', TRUE));
        $data['IADM'] = $this->security($this->input->post('IADM', TRUE));
        $data['IAST'] = $this->security($this->input->post('IAST', TRUE));
        $data['IPEND'] = $this->security($this->input->post('IPEND', TRUE));
        
        $data['IBANK'] = $this->security($this->input->post('IBANK', TRUE));
        $data['IEPK'] = $this->security($this->input->post('IEPK', TRUE));
        $data['IBUD'] = $this->security($this->input->post('IBUD', TRUE));
                
        $data['VCREA'] = $_SESSION['VEMAILS'];
        $data['DCREA'] = date('Y-m-d H:i:s');
        //print_r(date('Y-m-d H:i:s'));exit;
                
        if (isset($_POST['DDATE'])) {
            $id = $this->gm->insert("txnrealang", $data);
            //$this->do_upload($id);
            $this->data['submitted'] = 1;
            $this->data['values'] = $data;
        }
        $this->data['VNAME'] = $_SESSION['VNAME'];
        $this->data['VDEP'] = $_SESSION['VDEP'];
        $this->data['VDIR'] = $_SESSION['VDIR'];
        
        $this->data['VCREA'] = $_SESSION['VEMAILS'];
        $this->data['DCREA'] = date('Y-m-d H:i:s');
        $this->data["today"] = date('Y-m-d'); 
        $this->_cek_user_login();      
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'realisasi_anggaran.php';
        $this->load->view('home', $this->data);
    }
    
    function rekapitulasi_survey(){
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];        
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'rekapitulasi_survey.php';
        $this->load->view('home', $this->data);
    }
    
    function proses_rekap_survey(){
        $data = array();
        $data['DTGL'] = $this->security($this->input->post('DTGL', TRUE));
        
        $dates = explode(" s/d ", $data['DTGL']);
        //print_r($dates);exit;
        
        $layanan = $this->sv->get_data($dates[0], $dates[1], "ILAYANAN");
        $hubungan = $this->sv->get_data($dates[0], $dates[1], "IHUBUNGAN");
        $pengetahuan = $this->sv->get_data($dates[0], $dates[1], "IPENG");
        $fasilitas = $this->sv->get_data($dates[0], $dates[1], "IFASI");
        $rapi = $this->sv->get_data($dates[0], $dates[1], "IRAPI");
        $informasi = $this->sv->get_data($dates[0], $dates[1], "IINFO");
        $cepat = $this->sv->get_data($dates[0], $dates[1], "ICEPAT");
        $rapilingkungan = $this->sv->get_data($dates[0], $dates[1], "IRAPILING");
        $peduli = $this->sv->get_data($dates[0], $dates[1], "IPEDULI");
        $telepon = $this->sv->get_data($dates[0], $dates[1], "ITELRAMAH");
        $sopan = $this->sv->get_data($dates[0], $dates[1], "ISOPAN");
        $waktu = $this->sv->get_data($dates[0], $dates[1], "IWAKTU");
        $result = array(
            'layanan' => $layanan,
            'hubungan' => $hubungan,
            'pengetahuan' => $pengetahuan,
            'fasilitas' => $fasilitas,
            'rapi' => $rapi,
            'informasi' => $informasi,
            'cepat' => $cepat,
            'rapilingkungan' => $rapilingkungan,
            'peduli' => $peduli,
            'telepon' => $telepon,
            'sopan' => $sopan,
            'waktu' => $waktu
        );
        //print_r($get);exit;
        echo json_encode($result);                      
    }
    
    function buku_nomor(){
        $data = array();
        $data['ID_SURAT'] = $this->security($this->input->post('ID_SURAT', TRUE));
        $data['ID_JABATAN'] = $this->security($this->input->post('ID_JABATAN', TRUE));
        $data['IYEAR'] = $this->security($this->input->post('IYEAR', TRUE));
        
        if (isset($_POST['ID_SURAT'])) {
            //$id = $this->gm->insert("hdrpengaduan", $data);
            //get number
            $where = array(
                'ID_JABATAN' => $data['ID_JABATAN'],
                'ID_SURAT' => $data['ID_SURAT'],
                'IYEAR' => $data['IYEAR']
            );
            $result = array();
            $result = $this->bn->get_data($where);   
            //print_r($result);exit;
            //$id = $this->gm->insert("txnbukunomor", $data);
            //print_r($data);exit;
            $this->data['submitted'] = 1;
            $this->data['values'] = (array)$data;
            $this->data['datas'] = $result;
            //print_r($this->data['values']);exit;
            
        }
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];      
        $this->data['kode'] = $this->gm->get('mstkodejabatan');
        $this->data['tipe'] = $this->gm->get('mstkodesurat', NULL, FALSE, FALSE, NULL, NULL, 'VDESC');
        //print_r($this->data['kode']);exit;
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'buku_nomor.php';
        $this->load->view('home', $this->data);
    }
    
    function download_buku_nomor($id_surat = NULL, $id_jabatan = NULL, $iyear = NULL){
        $data = array();
//        $data['ID_SURAT'] = $this->security($this->input->post('ID_SURAT', TRUE));
//        $data['ID_JABATAN'] = $this->security($this->input->post('ID_JABATAN', TRUE));
//        $data['IYEAR'] = $this->security($this->input->post('IYEAR', TRUE));
        
        $data['ID_SURAT'] = $id_surat;
        $data['ID_JABATAN'] = $id_jabatan;
        $data['IYEAR'] = $iyear;
        $where = array();
        if ($data['ID_SURAT'] != NULL) {
            $this->data['submitted'] = 1;   
            $where = array(
                'ID_JABATAN' => $data['ID_JABATAN'],
                'ID_SURAT' => $data['ID_SURAT'],
                'IYEAR' => $data['IYEAR']
            );
        }
        
        
        $result = array();
        $result = $this->bn->get_data_download($where);
        $this->data['values'] = (array) $data;
        $this->data['datas'] = $result;
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];      
        $this->data['kode'] = $this->gm->get('mstkodejabatan');
        $this->data['tipe'] = $this->gm->get('mstkodesurat', NULL, FALSE, FALSE, NULL, NULL, 'VDESC');
        //print_r($this->data['kode']);exit;
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'buku_nomor.php';
        //$this->load->view('home', $this->data);
        $this->download_excel($result);
    }
    
    function input_buku_nomor(){
        $data = array();
        $data['ID_SURAT'] = $this->security($this->input->post('ID_SURAT', TRUE));
        $data['ID_JABATAN'] = $this->security($this->input->post('ID_JABATAN', TRUE));
        $data['IYEAR'] = $this->security($this->input->post('IYEAR', TRUE));
        $data['DDATE'] = $this->security($this->input->post('DDATE', TRUE));
        $data['VPERIHAL'] = $this->security($this->input->post('VPERIHAL', TRUE));
        $data['VKETERANGAN'] = $this->security($this->input->post('VKETERANGAN', TRUE));
        
        $data['VCREA'] = $_SESSION['VEMAILS'];
        $data['DCREA'] = date('Y-m-d H:i:s');
        
        if (isset($_POST['ID_SURAT'])) {
            //$id = $this->gm->insert("hdrpengaduan", $data);
            //get number
            $where = array(
                'ID_JABATAN' => $data['ID_JABATAN'],
                'ID_SURAT' => $data['ID_SURAT'],
                'IYEAR' => $data['IYEAR']
            );
            if($get = $this->gm->get('txnbukunomor', $where, TRUE, FALSE,1, NULL,'INOMOR', TRUE)){                
                $data['INOMOR'] = $get->INOMOR + 1;                
            } else {
                $data['INOMOR'] = 1;
            }
            $id = $this->gm->insert("txnbukunomor", $data);
            //print_r($data);exit;
            $this->data['submitted'] = 1;
            $this->data['values'] = (array)$data;
            //print_r($this->data['values']);exit;
            
        }
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];      
        $this->data['kode'] = $this->gm->get('mstkodejabatan');
        $this->data['tipe'] = $this->gm->get('mstkodesurat', NULL, FALSE, FALSE, NULL, NULL, 'VDESC');
        $this->data["today"] = date('Y-m-d');
        //print_r($this->data['kode']);exit;
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'input_buku_nomor.php';
        $this->load->view('home', $this->data);
    }
    
    function penilaian_thos(){
        //echo "halo";exit;
        $data = array();
        $data['IYEAR'] = $this->security($this->input->post('IYEAR', TRUE));
        $data['ISEMESTER'] = $this->security($this->input->post('ISEMESTER', TRUE));
        $data['VCREA'] = $_SESSION['VEMAILS'];
        //$data['IYEAR'] = $this->security($this->input->post('IYEAR', TRUE));
        
        if (isset($_POST['IYEAR'])) {
            //$id = $this->gm->insert("hdrpengaduan", $data);
            //get number
            $where = array(
                'IYEAR' => $data['IYEAR'],
                'ISEMESTER' => $data['ISEMESTER'],
                'VCREA' => $data['VCREA']
            );
            $result = array();
            $result = $this->pt->get_nilai_by_user($data['IYEAR'],$data['ISEMESTER'], $data['VCREA']);   
            //print_r($result);exit;
            //$id = $this->gm->insert("txnbukunomor", $data);
            //print_r($data);exit;
            $this->data['submitted'] = 1;
            $this->data['values'] = (array)$data;
            $this->data['datas'] = $result;
            //print_r($this->data['values']);exit;      
        }
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];      
        $this->data['kode'] = $this->gm->get('mstkodejabatan');
        $this->data['tipe'] = $this->gm->get('mstkodesurat', NULL, FALSE, FALSE, NULL, NULL, 'VDESC');
        //print_r($this->data['kode']);exit;
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'thos/penilaian_thos.php';
        $this->load->view('home', $this->data);
    }
    
    function input_penilaian_thos($IYEAR = FALSE, $ISEMESTER = FALSE){
        $data = array();
//        $data['IYEAR'] = $IYEAR;
//        $data['ISEMESTER'] = $ISEMESTER;
        $data['IYEAR'] = $IYEAR ? $IYEAR : $this->security($this->input->post('IYEAR', TRUE));
        $data['ISEMESTER'] = $ISEMESTER ? $ISEMESTER : $this->security($this->input->post('ISEMESTER', TRUE));;
        $data['ID_MSTTHOS'] = $this->security($this->input->post('ID_MSTTHOS', TRUE)); 
        $DTL_ID = $this->security($this->input->post('DTL_ID', TRUE)); 
        $DTL_NILAI = $this->security($this->input->post('DTL_NILAI', TRUE)); 
        $data['VCREA'] = $_SESSION['VEMAILS'];
        $data['DCREA'] = date('Y-m-d H:i:s'); 
        $this->data['submitted'] = 0;
        //print_r($data);exit;
        if (isset($_POST['ID_MSTTHOS'])) {//echo"test";exit;
            //insert header
            $id = $this->gm->insert("hdrnilaithos", $data);         
            
            //insert detail
            //loop
            //print_r($DTL_ID);exit;
            $detail = [];
            $nilai_sum = 0;
            for($i=0; $i<count($DTL_ID); $i++){
                $detail['ID_HDRNILAITHOS'] = $id;
                $detail['ID_MSTKOMP'] = $DTL_ID[$i];
                $detail['DNILAI'] = $DTL_NILAI[$i];
                $nilai_sum += $DTL_NILAI[$i];
                $detail['VCREA'] = $data['VCREA'];
                $detail['DCREA'] = $data['DCREA']; 
                //insert
                $this->gm->insert("dtlnilaithos", $detail); 
                $detail = [];
            }
            $avg = $nilai_sum / $i;   
            $avg = number_format($avg, 2);
            //update rata2
            $where = array(
                'ID' => $id
            );
            $update = [];
            $update['DNILAI'] = $avg;
            $this->gm->update_data("hdrnilaithos", $update, NULL, $where);
            
            $this->data['submitted'] = 1;
            $this->data['values'] = (array)$data;
            //print_r($this->data['values']);exit;            
        }
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE']; 
        $this->data["IYEAR"] = $data['IYEAR'];
        $this->data["ISEMESTER"] = $data['ISEMESTER'];
        if($this->data['submitted'] != 1)
            $this->data["list_thos"] = $this->pt->get_thos($data['IYEAR'], $data['ISEMESTER'], $data['VCREA']);
        else
            $this->data["list_thos"] = $this->pt->get_thos();
        $this->data["dtlnilaithos"] = $this->pt->get_komponen_nilai();
        $this->data["today"] = date('Y-m-d');
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'thos/input_penilaian_thos.php';
        $this->load->view('home', $this->data);
    }
    
    function show_penilaian_thos($ID_MSTTHOS = FALSE, $IYEAR = FALSE, $ISEMESTER = FALSE){
        $data = array();
//        $data['IYEAR'] = $IYEAR;
//        $data['ISEMESTER'] = $ISEMESTER;
        $data['IYEAR'] = $IYEAR ? $IYEAR : $this->security($this->input->post('IYEAR', TRUE));
        $data['ISEMESTER'] = $ISEMESTER ? $ISEMESTER : $this->security($this->input->post('ISEMESTER', TRUE));;
        $data['ID_MSTTHOS'] = $ID_MSTTHOS ? $ID_MSTTHOS : $this->security($this->input->post('ID_MSTTHOS', TRUE)); 
        
        $data['VCREA'] = $_SESSION['VEMAILS'];
        $data['DCREA'] = date('Y-m-d H:i:s'); 
        $this->data['submitted'] = 1;
        //print_r($data);exit;
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE']; 
        $this->data["IYEAR"] = $data['IYEAR'];
        $this->data["ISEMESTER"] = $data['ISEMESTER'];
        $this->data["ID_MSTTHOS"] = $data['ID_MSTTHOS'];
        $this->data["list_thos"] = $this->pt->get_thos();
        //$this->data["dtlnilaithos"] = $this->pt->get_komponen_nilai();
        $this->data["dtlnilaithos"] = $this->pt->get_nilai_by_id($data['IYEAR'],$data['ISEMESTER'], $data['VCREA'], $data['ID_MSTTHOS']);
        
        //$this->data["dtlnilaithos"] = $this->pt->get_komponen_nilai();
        $this->data["today"] = date('Y-m-d');
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'thos/show_penilaian_thos.php';
        $this->load->view('home', $this->data);
    }
    
    function rekap_penilaian_thos(){
        $data = array();
        $data['IYEAR'] = $this->security($this->input->post('IYEAR', TRUE));
        $data['ISEMESTER'] = $this->security($this->input->post('ISEMESTER', TRUE));
        $data['VCREA'] = $_SESSION['VEMAILS'];
      
        if (isset($_POST['IYEAR'])) {
            $where = array(
                'IYEAR' => $data['IYEAR'],
                'ISEMESTER' => $data['ISEMESTER'],
                'VCREA' => $data['VCREA']
            );
            $result = array();
            $result = $this->pt->get_nilai_rekap($data['IYEAR'],$data['ISEMESTER']);   

            $this->data['submitted'] = 1;
            $this->data['values'] = (array)$data;
            $this->data['datas'] = $result; 
        }
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE'];      
        $this->data['kode'] = $this->gm->get('mstkodejabatan');
        $this->data['tipe'] = $this->gm->get('mstkodesurat', NULL, FALSE, FALSE, NULL, NULL, 'VDESC');
        //print_r($this->data['kode']);exit;
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'thos/rekap_penilaian_thos.php';
        $this->load->view('home', $this->data);
    }
    
    function show_rekap_penilaian_thos($ID_MSTTHOS = FALSE, $IYEAR = FALSE, $ISEMESTER = FALSE){
        $data = array();
//        $data['IYEAR'] = $IYEAR;
//        $data['ISEMESTER'] = $ISEMESTER;
        $data['IYEAR'] = $IYEAR ? $IYEAR : $this->security($this->input->post('IYEAR', TRUE));
        $data['ISEMESTER'] = $ISEMESTER ? $ISEMESTER : $this->security($this->input->post('ISEMESTER', TRUE));;
        $data['ID_MSTTHOS'] = $ID_MSTTHOS ? $ID_MSTTHOS : $this->security($this->input->post('ID_MSTTHOS', TRUE)); 
        
        $data['VCREA'] = $_SESSION['VEMAILS'];
        $data['DCREA'] = date('Y-m-d H:i:s'); 
        $this->data['submitted'] = 1;
        //print_r($data);exit;
        
        $this->_cek_user_login();
        $this->data["role"] = $_SESSION['VROLE']; 
        $this->data["IYEAR"] = $data['IYEAR'];
        $this->data["ISEMESTER"] = $data['ISEMESTER'];
        $this->data["ID_MSTTHOS"] = $data['ID_MSTTHOS'];
        $this->data["list_thos"] = $this->pt->get_thos();
        //$this->data["dtlnilaithos"] = $this->pt->get_komponen_nilai();
        $this->data["dtlnilaithos"] = $this->pt->get_rekap_nilai_by_id($data['IYEAR'],$data['ISEMESTER'], $data['VCREA'], $data['ID_MSTTHOS']);
        //print_r($this->data["dtlnilaithos"]);exit;
        //$this->data["dtlnilaithos"] = $this->pt->get_komponen_nilai();
        $this->data["today"] = date('Y-m-d');
        $this->_get_backend_menu();
        $this->data['backend_page'] = 'thos/show_rekap_penilaian_thos.php';
        $this->load->view('home', $this->data);
    }
}
