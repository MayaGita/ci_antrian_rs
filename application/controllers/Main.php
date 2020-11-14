<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//load model
		$this->load->model('Model_pasien');

	}

	   public function index(){
	    	$data['pasien']=$this->Model_pasien->select_pasien()->result();
	    	$this->load->view('Main/index',$data);
	    }
	    public function tambah_pasien($kodedaftar){
	    	$data['kodedaftar']=$kodedaftar;
	    	$this->load->view('Main/notif',$data);
	    }
	    public function proses_tambah(){
	    	$data['nama_pasien']=$_POST['nama_pasien'];
	    	$data['no_identitas']=$_POST['no_identitas'];
	    	$data['jk_pasien']=$_POST['jk_pasien'];
	    	$data['tgl_lahir']=$_POST['tgl_lahir'];
	    	$data['no_telp']=$_POST['no_telp'];
	    	$data['alamat']=$_POST['alamat'];
	    	$data['nama_wali']=$_POST['nama_wali'];
	    	$data['no_telp_wali']=$_POST['no_telp_wali'];
	    	$data['tgl_kunjung']=$_POST['tgl_kunjung'];
	    	$data['kode_poli']=$_POST['kode_poli'];

	    	$id=$this->Model_pasien->tambah_pasien($data);
	    	
	    	$data2=array();
	    	$data2['kode_daftar']=rand();
	    	$data2['id_pasien']=$id;

	    	$this->Model_pasien->tambah_daftar($data2);
	    	redirect('Main/tambah_pasien/'.$data2['kode_daftar']);

	    }
	 public function home(){
	 	$this->load->view('Main/daftar');
	 }
	  public function to_pasien(){
	  	$data['pasien']=$this->Model_pasien->select_pasien()->result();
	 	$this->load->view('Main/pasien',$data);
	 }
	  public function to_pendaftaran(){
	  	$data['daftar']=$this->Model_pasien->select_pendaftaran()->result();
	 	$this->load->view('Main/pendaftaran',$data);
	 }
	 public function user(){
	 	$this->load->view('Main/login');
	 }
	  public function admin(){
	  	$data['pasien']=$this->Model_pasien->select_user()->result();
	 	$this->load->view('Main/admin',$data);
	 }



	

	 public function aksi_login(){
	      $username = $this->input->post('username');
	      $password =$this->input->post('password');

	      $where = array(
              'username' =>$username,
              'password' =>md5($password)
	      );

	      $cek =$this->Model_pasien->tambah_login("user",$where)->num_rows();

	      if($cek > 0){
	      	$data_session=array(
	      		'username' => $username,
	      		'status' => "login"
	      	);

	    
	      	redirect('Main/admin');

	      }else{
	      	echo "login gagal!";
	      }
	      	
	      }
	       public function hapus ($id){
	    $where = array('id_pasien' => $id);
	    $this->Model_pasien->hapus_data($where,'pasien');
	    redirect('Main/to_pasien');
        }
          public function edit ($id){
	    $where = array('id_pasien'=> $id);
	    $data['pasien'] = $this->Model_pasien->edit_data($where,'to_pasien')->result();
	    
	    $this->load->view('Main/edit',$data);

        }
        public function update(){
        	$id_pasien = $this->input->post('id_pasien');
        	$nama_pasien = $this->input->post('nama_pasien');
        	$no_identitas =$this->input->post('no_identitas');
        	$jk_pasien =$this->input->post('jk_pasien');
        	$tgl_lahir =$this->input->post('tgl_lahir');
        	$no_telp =$this->input->post('no_telp');
        	$alamat =$this->input->post('alamat');
            $nama_wali =$this->input->post('nama_wali');
            $no_telp_wali =$this->input->post('no_telp_wali');
            $tgl_kunjung =$this->input->post('tgl_kunjung');
            $kode_poli =$this->input->post('kode_poli');
        	$data=array(
              'nama_pasien'=>$nama_pasien,
              'no_identitas'=>$no_identitas,
              'jk_pasien'=>$jk_pasien,
              'tgl_lahir'=>$tgl_lahir,
              'no_telp'=>$no_telp,
              'alamat'=>$alamat,
              'nama_wali'=>$nama_wali,
              'no_telp_wali'=>$no_telp_wali,
              'tgl_kunjung'=>$tgl_kunjung,
              'kode_poli'=>$kode_poli,
                            
          );

        	$where = array(
        		'id_pasien'=>$id_pasien);

        	$this->Model_pasien->update_data($where,$data,'pasien');
        	redirect('Main/to_pasien');
        	
        }
         public function hapusdaftar ($id){
	    $where = array('id_daftar' => $id);
	    $this->Model_pasien->hapus_data($where,'pendaftaran');
	    redirect('Main/to_pendaftaran');
        }
          public function editdaftar ($id){
	    $where = array('id_daftar'=> $id);
	    $data['daftar'] = $this->Model_pasien->edit_data($where,'to_pendaftaran')->result();
	    
	    $this->load->view('Main/editdaftar',$data);

        }
        public function updatedaftar(){
        	$id_daftar = $this->input->post('id_daftar');
        	$kode_daftar = $this->input->post('kode_daftar');
        	$id_pasien =$this->input->post('id_pasien');
        	$data=array(
              'kode_daftar'=>$kode_daftar,
              'id_pasien'=>$id_pasien,
          );

        	$where = array(
        		'id_daftar'=>$id_daftar);

        	$this->Model_pasien->update_data($where,$data,'pendaftaran');
        	redirect('Main/to_pendaftaran');
        	
        }
             public function hapusadmin ($id){
	    $where = array('id_user' => $id);
	    $this->Model_pasien->hapus_data2($where,'userr');
	    redirect('Main/admin');
        }
          public function editadmin ($id){
	    $where = array('id_user'=> $id);
	    $data['pasien'] = $this->Model_pasien->edit_data($where,'admin')->result();
	    
	    $this->load->view('Main/editadmin',$data);

        }
        public function updateadmin(){
        	$id_user = $this->input->post('id_user');
        	$username = $this->input->post('username');
        	$password =$this->input->post('password');
        	$data=array(
              'username'=>$username,
              'password'=>$password,
                            
          );

        	$where = array(
        		'id_user'=>$id_user);

        	$this->Model_pasien->update_data($where,$data,'user');
        	redirect('Main/admin');
        	
        }
	    
}
?>