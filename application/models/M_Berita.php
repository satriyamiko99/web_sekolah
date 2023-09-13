<?php

class M_Berita extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_Berita');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_Berita)
    {
        $hsl = $this->db->query("DELETE FROM tbl_Berita WHERE id_Berita='$id_Berita'");
        return $hsl;
    }


    function cekadmin($u, $p)
    {

        $hasil = $this->db->query("SELECT * FROM tbl_Berita WHERE id_Berita='$u' AND password =('$p')");
        return $hasil;
    }
}