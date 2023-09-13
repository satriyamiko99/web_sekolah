<?php

class M_user extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_user');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_user)
    {
        $hsl = $this->db->query("DELETE FROM tbl_user WHERE id_user='$id_user'");
        return $hsl;
    }


    function cekadmin($u, $p)
    {

        $hasil = $this->db->query("SELECT * FROM tbl_user WHERE username='$u' AND password =md5('$p')");
        return $hasil;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}