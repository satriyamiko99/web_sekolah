<?php

class M_siswa extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_siswa');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_siswa)
    {
        $hsl = $this->db->query("DELETE FROM tbl_siswa WHERE id_siswa='$id_siswa'");
        return $hsl;
    }


    function cekadmin($u, $p)
    {

        $hasil = $this->db->query("SELECT * FROM tbl_siswa WHERE id_siswa='$u' AND password =('$p')");
        return $hasil;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}