<?php
class M_pemesanan extends CI_Model{
  function tambah (){
              $length=10;
              $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
              $id_permintaan = substr( str_shuffle( $chars ), 0, $length );
              $no_rekam_medis = $this->input->post('no_rekam_medis');
              $nama_pasien = $this->input->post('nama_pasien');
              $diagnosa = $this->input->post('diagnosa');
              $nama_dokter = $this->input->post('nama_dokter');
              $jumlah = $this->input->post('jumlah');
              $keterangan = $this->input->post('keterangan');
              $gol_darah = $this->input->post('gol_darah');
              $pmi= $this->input->post('pmi');


    $data = array(
                 'no_rekam_medis'=>$no_rekam_medis,
                 'nm_pasien'=>$nama_pasien,
                 'diagnosa'=>$diagnosa,
                 'nm_dokter'=>$nama_dokter,
                 'jumlah'=>$jumlah,
                 'gol_darah'=>$gol_darah,
                 'id_rs'=> $this->session->userdata('rs'),
                 'id_permintaan'=> $id_permintaan
            );
              $cek=$this->db->insert('permintaan',$data);

  for($i=1;$i<=$jumlah;$i++){
        $data = array(
                  'id_pmi'=>$pmi,
                  'id_rs'=> $this->session->userdata('rs'),
                  'id_permintaan'=> $id_permintaan
                  );
                  $cek2=$this->db->insert('pesan',$data);
  }
    return $cek;
      }//end of simpan


      function status()
      {
          $id_rs= $this->session->userdata('rs');
          $query=$this->db->query("SELECT * from permintaan where id_rs='$id_rs'");
          return $query->result();
      }
      function data_permintaan()
      {
          $id_rs= $this->session->userdata('rs');
          $query=$this->db->query("SELECT * from permintaan left join rs on rs.id_rs=permintaan.id_rs");
          return $query->result();
      }

}
