<?php

class M_pembayaran extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_pembayaran');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_pembayaran)
    {
        $hsl = $this->db->query("DELETE FROM tbl_pembayaran WHERE id_pembayaran='$id_pembayaran'");
        return $hsl;
    }

    function cekadmin($u, $p)
    {

        $hasil = $this->db->query("SELECT * FROM tbl_pembayaran WHERE id_pembayaran='$u' AND pembayaran =('$p')");
        return $hasil;
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}