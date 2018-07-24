<?php
    class M_tambah_stok extends CI_Model{    
        function proses (){
                    $tanggal= $this->input->post('tanggal');
                    $ukuran = $this->input->post('ukuran');
                    $komponen = $this->input->post('komponen');
                    $pendonor = $this->input->post('pendonor');
                    $harga= $this->input->post('harga');
                    $gol_darah = $this->input->post('gol_darah');
                    
					$data = array(
                       'tgl_input'=>$tanggal,
                        'id_ukuran'=>$ukuran,
                        'id_komponen'=>$komponen,
                        'id_pendonor'=>$pendonor,
                        'harga'=>$harga,
                        'gol_darah'=>$gol_darah,
                            
  				 
                    );
                    $cek=$this->db->insert('kantong_darah',$data);
                   
	return $cek;					
            }//end of simpan        
        }
?>
