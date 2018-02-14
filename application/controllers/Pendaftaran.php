<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function index()
	{
		$this->load->view('pendaftaran_page', FALSE);
	}

	function compress_image($image){
		$this->load->library('image_lib');
		$config_resize['image_library'] = 'gd2';
		$config_resize['source_image'] = $_FILE['image']['tmp_name'];
		$config_resize['create_thumb'] = TRUE;
		$config_resize['maintain_ratio'] = TRUE;
		$config_resize['width']         = 75;
		$config_resize['height']       = 50;

		$this->load->library('image_lib', $config_resize);

		$this->image_lib->resize();
	}

	function simpan_pendaftaran()
	{
		$this->load->model('model_pendaftaran');

		//Compress Image
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		//$gambar = $_FILES['image']['tmp_name'];
		$field_name = 'foto';
		if ( ! $this->upload->do_upload($field_name)){
			//$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger">Penyimpanan gagal dilakukan pastikan sudah memalukan hal berikut : <br>1. Data sudah terisi sepenuhnya <br>2. Passfoto harus berformat JPG/PNG dengan ukuran maksimal <strong>100Kb</strong></div>');
			//$ukuran = filesize($gambar);
			//$this->session->set_flashdata('gagal', 'ukuran gambar : ' . $ukuran . ' KB');
			//echo $ukuran;
			redirect('pendaftaran');
		}
		else{
			// $data = array('upload_data' => $this->upload->data());
			// echo "success";

			$image_path = $this->upload->data();


			$data = array(
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'kelamin' => $this->input->post('kelamin'),
			'agama' => $this->input->post('agama'),
			'telpon' => $this->input->post('telpon'),
			'smp_asal' => $this->input->post('smp_asal'),
			'alamat_smp' => $this->input->post('alamat_smp'),
			'un_total' => $this->input->post('un_total'),
			'nama_bpk' => $this->input->post('nama_bpk'),
			'pendidikan_bpk' => $this->input->post('pendidikan_bpk'),
			'pekerjaan_bpk' => $this->input->post('pekerjaan_bpk'),
			'penghasilan_bpk' => $this->input->post('penghasilan_bpk'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
			'foto' => $this->input->post('foto'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'foto' => $image_path[file_name],
			'tanggal' => date("Y-m-d H:i:s")
			);

			$res = $this->model_pendaftaran->do_simpan($data);
			if ($res>0) {
				redirect('pendaftaran/sukses_daftar');
			}
			else {
				echo "penyimpnan gagal";
			}
		}
	}

	function sukses_daftar()
	{
		$this->load->view('success_page');
	}

}


/* End of file Pendaftaran.php */
/* Location: ./application/controllers/Pendaftaran.php */
