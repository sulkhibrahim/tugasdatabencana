<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenisbencana extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model('BaseModel');
	}
	public function index()
	{
		//$this->load->view('v_dashboard');
        $this->load->library('auth', "jenisbencana");
		$data["me"]=$this->auth->me();
		$data["stats"]=$this->BaseModel->getStats();
		// query builder for get
		$this->db->select('jenis_bencana.id,jenis_bencana.jenis_bencana,jenis_bencana.icon,jenis_bencana.color,count(bencana.id) as total');
		$this->db->from('jenis_bencana');
		$this->db->join('bencana', 'bencana.jenis_bencana_id = jenis_bencana.id');
		$this->db->group_by('jenis_bencana.id');
		$data["jenisb"]=$this->db->get()->result_array();
        $this->template->load('template','v_jenisbencana',$data);
	}
	public function add(){
		// query builder for add / edit
		$ids=$this->input->post("bids");
		$name=$this->input->post("nama_bencana");
		$icon=$this->input->post("icon");
		$color=$this->input->post("color");
		$data=array ('jenis_bencana'=>$name, 'icon'=> $icon,'color'=> $color);
		if(empty($ids)){
			$this->db->insert('jenis_bencana', $data);
			$this->session->set_flashdata('msgx', 'Berhasil menambahkan data');
		}else{
			$this->db->where('id', $ids);
            $this->db->update('jenis_bencana', $data);
			$this->session->set_flashdata('msgx', 'Berhasil edit data');
		}
		header("Location: /jenisbencana");
	}
	public function del($id){
		// query builder hapus
		$this->db->where('id', $id);
        $this->db->delete('jenis_bencana');
		$this->session->set_flashdata('msgx', 'Berhasil menghapus data');
		header("Location: /jenisbencana");
	}
	public function exportpdf(){
		// based on https://www.petanikode.com/codeigniter-dompdf/
		$this->load->library('auth', "databencana");
		$data["me"]=$this->auth->me();
		$data["stats"]=$this->BaseModel->getStats();
		$data["jenisb"]=$this->BaseModel->getJenisBencana();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "JenisBencana.pdf";
		$this->pdf->load_view('v_layoutpdf', $data);
	}
	public function exportexcel(){
		// based on https://bahasaweb.com/membuat-export-file-excel-dengan-codeigniter/
		$semuadata = $this->BaseModel->getJenisBencana();

		$spreadsheet = new Spreadsheet;

		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'No')
					->setCellValue('B1', 'Jenis Bencana')
					->setCellValue('C1', 'Total Bencana');

		$kolom = 2;
		$nomor = 1;
		foreach($semuadata as $data) {
			 $spreadsheet->setActiveSheetIndex(0)
						 ->setCellValue('A' . $kolom, $nomor)
						 ->setCellValue('B' . $kolom, $data["jenis_bencana"])
						 ->setCellValue('C' . $kolom, $data["total"]);

			 $kolom++;
			 $nomor++;

		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="JenisBencana.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}
