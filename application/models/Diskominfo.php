<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class diskominfo extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($table,$data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function select($table,$where)
    {
        return $query = $this->db->get_where($table, $where);
    }

    public function selectAll($table)
    {
        return $query = $this->db->get($table);
    }

    public function update($table,$where,$id)
    {
        return $query = $this->db->update($table, $where, $id);
    }

    public function delete($table,$where)
    {
        return $query = $this->db->delete($table, $where);
    }

    public function selectLimit($table,$data,$limit,$offset)
    {
    return $query = $this->db->order_by('id', 'desc')->get_where($table, $data, $limit,$offset);	
    }

    public function proseslogin($email,$password)
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->where(array('email'=> $email,
                               'password' => SHA1($password)));
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function get_by_petugas()
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->like('level', 'petugas');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_petugas_query()
	{
		$this->db->select('berita.*, petugas.nama');
		$this->db->from('berita');
		$this->db->join('petugas', 'petugas.id_petugas = berita.id_petugas','left');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

    // untuk mengambil berita berdasarkan jenis berita
    
    public function get_by_siaran()
    {
        $this->db->select('berita.*, petugas.nama');
        $this->db->from('berita');
        $this->db->join('petugas', 'petugas.id_petugas = berita.id_petugas','left');
        $this->db->like('jenis', 'Siaran Pers');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_by_infografis()
    {
        $this->db->select('berita.*, petugas.nama');
        $this->db->from('berita');
        $this->db->join('petugas', 'petugas.id_petugas = berita.id_petugas','left');
        $this->db->like('jenis', 'Infografis');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_esakip()
    {
        $this->db->select('*');
        $this->db->from('esakip');
        $query = $this->db->get();
        return $query->result();
    }

    // fungsi mendownload file
    public function download($id_esakip)
	{
		
		$query = $this->db->get_where('esakip',array('id_esakip'=>$id_esakip));
		return $query->row_array();
	}

    // listing konfigurasi slider
    public function listing()
	{
		$query = $this->db->get('slider');
		return $query->row();
	}

    public function edit($data)
	{
		$this->db->where('id_slider', $data['id_slider']);
		$this->db->update('slider', $data);
	}
    
    // listing konfigurasi profil
    public function detail($id_petugas)
	{
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where('id_petugas', $id_petugas);
		$this->db->order_by('id_petugas', 'desc');
		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */