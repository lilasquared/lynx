<?php 
class Template_model extends CI_Model {
  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
    $this->load->database();
  }
  /**
   * Create a worksheet with the given title
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function create($title)
  {
    $data['title'] = $title;
    $data['userId'] = $this->session->userdata('userId');
    $this->db->insert('template', $data);
    return $this->db->insert_id();
  }

  /**
   * Get Worksheet data for given Id
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function get($id = null)
  {
    if ($id) {
      $filter['templateId'] = $id;
      return $this->db->get_where('template', $filter)->result()[0];
    } else {
      $filter['user'] = $this->session->userdata('userId');
      return $this->db->get_where('template', $filter)->result();
    }
  }
}