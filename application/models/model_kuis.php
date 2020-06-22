<?php
class Model_kuis extends CI_Model
{
  public function tambah_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function hasil_sangat_puas()
  {
    return $this->db->get('tb_sangat_puas');
  }
  public function hasil_puas()
  {
    return $this->db->get('tb_puas');
  }
  public function hasil_tidak_puas()
  {
    return $this->db->get('tb_tidak_puas');
  }
}
