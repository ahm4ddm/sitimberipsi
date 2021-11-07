<?php
class PomodoroMod extends CI_Model
{
    public $waktu;
    public $totalwaktu;

    public function dbInitTimer($data)
    {
        return $this->db->insert('pomodoros', $data);
    }

    public function dbSelect($id)
    {
        //$query = $this->db->select('totalwaktu')->get_where('pomodoros', ['id' => $id]);
        $this->db->select('totalwaktu');
        $query = $this->db->get_where('pomodoros', ['id' => $id])->row_array();
        return $query;
    }

    public function dbUpdateTimer($data, $id)
    {
        return $this->db->update('pomodoros', $data, ['id' => $id]);
    }
}