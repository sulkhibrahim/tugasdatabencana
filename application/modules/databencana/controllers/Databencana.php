<?php
require 'vendor/autoload.php';
ini_set('memory_limit','256M');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

defined('BASEPATH') OR exit('No direct script access allowed');

class Databencana extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model('BaseModel');
	}
	public function index()
	{
		//$this->load->view('v_dashboard');
		$page=$this->input->get('page', TRUE);
		if(!isset($page)) $page=1;

		$this->load->library('auth', "databencana");
		$data["me"]=$this->auth->me();
		$data["stats"]=$this->BaseModel->getStats();
		$data["curpage"]=$page;
		$data["jenisb"]=$this->BaseModel->getJenisBencana();
		$data["bencanas"]=$this->BaseModel->getAll(null,null,);
		
        $this->template->load('template','v_databencana',$data);
	}
	public function del($id){
		$this->BaseModel->delBencana($id);
		$this->session->set_flashdata('msgx', 'Berhasil menghapus data');
		header("Location: /databencana");
	}
	public function do_post(){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2100;
		$config['max_width']            = 3024;
		$config['max_height']           = 2768;
		$config['encrypt_name'] = TRUE;

		$fm_id=$this->input->post("ids");
		// res success: 
		// {"upload_data":{"file_name":"60436a28b258b.jpg","file_type":"image\/jpeg","file_path":"C:\/laragon\/www\/petabencana\/uploads\/","full_path":"C:\/laragon\/www\/petabencana\/uploads\/60436a28b258b.jpg","raw_name":"60436a28b258b","orig_name":"60436a28b258b.jpg","client_name":"60436a28b258b.jpg","file_ext":".jpg","file_size":28.43,"is_image":true,"image_width":750,"image_height":500,"image_type":"jpeg","image_size_str":"width=\"750\" height=\"500\""}}
		if (empty($fm_id)) {
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo $fm_id." upload error: ".json_encode($error);
				$this->session->set_flashdata('msgr', 'ERROR: upload gambar terlalu besar, max 2mb');
				header("Location: /databencana");
			}
			else
			{
				$data = $this->upload->data();
				$this->filltheForm($data);
			}
		}else{
			$this->filltheForm(["file_name"=>""]);
		}
	}
	public function filltheForm($data){
		$fm_id=$this->input->post("ids");
		$fm_judul=$this->input->post("form_judul");
		$fm_des=$this->input->post("form_desc");
		$fm_tgl=$this->input->post("form_tgl");
		$fm_alamat=$this->input->post("form_alamat");
		$fm_jb=$this->input->post("form_jenis");
		$fm_poslat=$this->input->post("maplat");
		$fm_poslng=$this->input->post("maplng");
		$p=date_parse($fm_tgl);
		$tgl=$p['year']."-".$p['month']."-".$p['day'];
		if(empty($fm_id)){
			$this->BaseModel->postBencana(array("judul_bencana"=>$fm_judul,"jenis_bencana_id "=>$fm_jb,"deskripsi_bencana"=>$fm_des,"photo_bencana"=>$data['file_name'],"tanggal_kejadian"=>$tgl,"alamat"=>$fm_alamat,"latitude"=>$fm_poslat,"longitude"=>$fm_poslng));
			$this->session->set_flashdata('msgx', 'Berhasil menambahkan data');
		}else{
			$this->BaseModel->editBencana(array("judul_bencana"=>$fm_judul,"jenis_bencana_id "=>$fm_jb,"deskripsi_bencana"=>$fm_des,"photo_bencana"=>$data['file_name'],"tanggal_kejadian"=>$tgl,"alamat"=>$fm_alamat,"latitude"=>$fm_poslat,"longitude"=>$fm_poslng),$fm_id);
			$this->session->set_flashdata('msgx', 'Berhasil edit data');
		}
		header("Location: /databencana");
	}
	public function exportpdf(){
		// based on https://www.petanikode.com/codeigniter-dompdf/
		$this->load->library('auth', "databencana");
		$data["me"]=$this->auth->me();
		$data["stats"]=$this->BaseModel->getStats();
		$data["curpage"]=1;
		$data["jenisb"]=$this->BaseModel->getJenisBencana();
		$data["bencanas"]=$this->BaseModel->getAll(null,null);
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "DataBencana.pdf";
		$this->pdf->load_view('v_layoutpdf', $data);
	}
	public function exportexcel(){
		// based on https://bahasaweb.com/membuat-export-file-excel-dengan-codeigniter/
		$semuadata = $this->BaseModel->getAll(null,null);

		$spreadsheet = new Spreadsheet;

		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'No')
					->setCellValue('B1', 'Judul Bencana')
					->setCellValue('C1', 'Jenis Bencana')
					->setCellValue('D1', 'Deskripsi')
					->setCellValue('E1', 'Tanggal Kejadian')
					->setCellValue('F1', 'Alamat')
					->setCellValue('G1', 'Koordinat');

		$kolom = 2;
		$nomor = 1;
		foreach($semuadata as $data) {
			 $spreadsheet->setActiveSheetIndex(0)
						 ->setCellValue('A' . $kolom, $nomor)
						 ->setCellValue('B' . $kolom, $data["judul_bencana"])
						 ->setCellValue('C' . $kolom, $data["jenis_bencana"])
						 ->setCellValue('D' . $kolom, $data["deskripsi_bencana"])
						 ->setCellValue('E' . $kolom, $data["tanggal_kejadian"])
						 ->setCellValue('F' . $kolom, $data["alamat"])
						 ->setCellValue('G' . $kolom, $data["latitude"].",".$data["longitude"]);

			 $kolom++;
			 $nomor++;

		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="DataBencana.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}
