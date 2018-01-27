<?php

class crudModel extends CI_Model {
  public function addFruit($data) {
    $this->db->insert('fruit_table', $_POST);
  }

  public function getFruit($id) {
    $q = $this->db->get_where("fruit_table", array('id' => $id));
    return $q->result();
  }

  public function getFruits() {
    $q = $this->db->get("fruit_table");
    return $q->result();
  }

  public function updateFruit($id, $fruit) {
    $this->db->where('id', $id);
    $this->db->update('fruit_table', array('name' => $fruit));
  }

  public function deleteFruit($id) {
    $q = $this->db->delete("fruit_table", array('id' => $id));
  }
}

?>