<?php 

class Auth_model extends CI_Model{
    public function post_content($result)
    {
        return $this->db->insert('news', $result);
    }

    public function get_keyid($keyid)
    {
        $this->db->select('*');
        $this->db->where('keyid', $keyid);
        return $this->db->get('news');
    }

    public function update_content($result, $keyid)
    {
        $this->db->where('keyid', $keyid);
        return $this->db->update('news', $result);
    }

    public function delete($keyid)
    {
        $this->db->where('keyid', $keyid);
        return $this->db->delete('news');
    }
}