<?PHP
 
 class Model_pasien extends CI_model
 {
 	//fungsi mengambil konfigurasi database
 	function __construct()
 	{
 		parent::__construct();

 	}
 	function select_pasien(){
 		$sql=$this->db->query("select *from pasien");

 		return $sql;
 	}

    function select_pendaftaran(){
    $sql=$this->db->query("select *from pendaftaran");

    return $sql;
  }
   function select_user(){
    $sql=$this->db->query("select *from user");

    return $sql;
  }

    function tambah_pasien($data){
    $this->db->insert('pasien',$data);
    return $this->db->insert_id();
  }
 	function tambah_daftar($data){
 		$this->db->insert('pendaftaran',$data);
    return $this->db->insert_id();
 	}
  function tambah_login($table,$data){
   return $this->db->get_where('user',$data);
     
  }
    function hapus_data($where){
    $this->db->where($where);
    $this->db->delete('pasien');
  }
    function hapus_data2($where){
    $this->db->where($where);
    $this->db->delete('user');
  }
    function edit_data($where,$table){    
  return $this->db->get_where($table,$where);
}
    function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }
 

 }








?>