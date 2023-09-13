<?php

class M_Ekstrakulikuler extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_Ekstrakulikuler');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_Ekstrakulikuler)
    {
        $hsl = $this->db->query("DELETE FROM tbl_Ekstrakulikuler WHERE id_Ekstrakulikuler'$id_Ekstrakulikuler'");
        return $hsl;
    }


    function cekadmin($u, $p)
    {

        $hasil = $this->db->query("SELECT * FROM tbl_Ekstrakulikuler WHERE id_Ekstrakulikuler='$u' AND password =('$p')");
        return $hasil;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}