<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('M_barang', 'barang');
		$this->load->model('M_member', 'member');
		$this->load->model('M_sewa', 'sewa');
	}

	public function index()
	{
		$fpdf = new FPDF('l', 'mm', 'A4');
		$fpdf->AddPage();
		$fpdf->SetFont('Arial', 'B', '16');
		$fpdf->Cell(190, 7, 'Data Barang Pinjam.Kamera', 0, 1, 'C');
		$fpdf->Output();
	}

	public function barang()
	{
		$this->load->model('M_barang');
		$this->load->library('pdfgenerator');
		$data['barang'] = $this->M_barang->getAllBarang()->result();

		$html = $this->load->view('table_report_barang', $data, true);
		$filename = 'Data Barang' . time();
		$this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}

	public function member()
	{
		$this->load->model('M_member');
		$this->load->library('pdfgenerator');
		$data['member'] = $this->M_member->getAllMember()->result();

		$html = $this->load->view('table_report_member', $data, true);
		$filename = 'Data Member' . time();
		$this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}

	public function sewa()
	{
		$this->load->model('M_sewa');
		$this->load->library('pdfgenerator');
		$data['sewa'] = $this->M_sewa->T_LIST();

		$html = $this->load->view('table_report_sewa', $data, true);
		$filename = 'Data Sewa' . time();
		$this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}
}
