<?php

class M_guru extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_guru');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function delete_data($id_guru)
    {
        $hsl = $this->db->query("DELETE FROM tbl_guru WHERE id_guru='$id_guru'");
        return $hsl;
    }


    function cekadmin($u, $p)
    {

        $hasil = $this->db->query("SELECT * FROM tbl_guru WHERE nama_guru='$u' AND password =('$p')");
        return $hasil;
    }
}