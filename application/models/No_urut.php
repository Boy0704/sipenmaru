<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class No_urut extends CI_Model
{

    function buat_kode_pendaftaran()   {    
      $this->db->select('RIGHT(pendaftaran.id_pendaftaran,4) as kode', FALSE);
      $this->db->order_by('id_pendaftaran','DESC');    
      $this->db->limit(1);     
      $query = $this->db->get('pendaftaran');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){       
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;     
      }
      else{       
       //jika kode belum ada      
       $kode = 1;     
      }
      $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);    
      $kodejadi = "O-".$kodemax;     
      return $kodejadi;  
     }

     function buat_kode_penjualan()   {    
      $this->db->select('RIGHT(penjualan_header.id_penjualan,5) as kode', FALSE);
      $this->db->order_by('id_penjualan','DESC');    
      $this->db->limit(1);     
      $query = $this->db->get('penjualan_header');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){       
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;     
      }
      else{       
       //jika kode belum ada      
       $kode = 1;     
      }
      $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);    
      $kodejadi = "PJ".$kodemax;     
      return $kodejadi;  
     }

     

}
