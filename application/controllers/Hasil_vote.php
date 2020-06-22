<?php
class Hasil_vote extends CI_Controller
{
    public function Index()
    {
        $data['sangat_puas'] = $this->model_kuis->hasil_sangat_puas()->result();
        $data['puas'] = $this->model_kuis->hasil_puas()->result();
        $data['tidak_puas'] = $this->model_kuis->hasil_tidak_puas()->result();

        $data['angka_seminggu_terakhir'] = strtotime(date('Y-m-d')) - 604800;
        $data['angka_sebulan_terakhir'] = strtotime(date('Y-m-d')) - 18748800;


        $this->load->view('templates/header');
        $this->load->view('hasil_vote', $data);
        $this->load->view('templates/footer');
    }
}