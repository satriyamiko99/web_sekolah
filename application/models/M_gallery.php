<?php

class M_gallery extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_gallery');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_gallery)
    {
        $hsl = $this->db->query("DELETE FROM tbl_gallery WHERE id_gallery='$id_gallery'");
        return $hsl;
    }

    function cekadmin($u, $p)
    {

        $hasil = $this->db->query("SELECT * FROM tbl_gallery WHERE id_gallery='$u' AND password =('$p')");
        return $hasil;
    }
}