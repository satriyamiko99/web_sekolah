<?php

class M_formulir extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_formulir');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function delete_data($id_formulir)
    {
        $hsl = $this->db->query("DELETE FROM tbl_formulir WHERE id_formulir='$id_formulir'");
        return $hsl;
    }


    function cekadmin($u, $p)
    {

        $hasil = $this->db->query("SELECT * FROM tbl_formulir WHERE id_formulir='$u' AND formulir =('$p')");
        return $hasil;
    }
}