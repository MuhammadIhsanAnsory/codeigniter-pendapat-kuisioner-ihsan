<?php

class Dashboard extends CI_Controller
{
  public function index()
  {
    $this->load->view('templates/header');
    $this->load->view('vote');
    $this->load->view('templates/footer');
  }

  public function tambah_sangat_puas()
  {
    date_default_timezone_set('Asia/Jakarta');
    $nilai          = 1;
    $tanggal        = strtotime(date('Y-m-d'));
    $data = array(
      'nilai'            => $nilai,
      'tanggal'            => $tanggal,
    );
    $this->model_kuis->tambah_data($data, 'tb_sangat_puas');
    redirect('hasil_vote/index');
  }
  public function tambah_puas()
  {
    date_default_timezone_set('Asia/Jakarta');
    $nilai          = 1;
    $tanggal        = strtotime(date('Y-m-d'));
    $data = array(
      'nilai'            => $nilai,
      'tanggal'            => $tanggal,
    );
    $this->model_kuis->tambah_data($data, 'tb_puas');
    redirect('hasil_vote/index');
  }
  public function tambah_tidak_puas()
  {
    date_default_timezone_set('Asia/Jakarta');
    $nilai          = 1;
    $tanggal        = strtotime(date('Y-m-d'));
    $data = array(
      'nilai'            => $nilai,
      'tanggal'            => $tanggal,
    );
    $this->model_kuis->tambah_data($data, 'tb_tidak_puas');
    redirect('hasil_vote/index');
  }
}
