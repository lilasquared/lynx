<?php 
class User_model extends CI_Model {
  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
    $this->load->database();
  }
  /**
   * Get the user data for a particular user
   *
   * @return User Object
   * @author Aaron Roberts
   **/
  public function getByName($username)
  {
    $user = 
      $this->db->select('*')
               ->from('user')
               ->where('username', $username)
               ->get()->result();
    return isset($user[0]) ? $user[0] : null;
  }

  /**
   * Retrieve settings data
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function getSettings()
  {
    return $this->db->get_where('setting')->result();
  }

  /**
   * Save settings data
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function saveSettings($settings)
  {
    foreach ($settings as $key => $value) {
      $this->db->where(Array('option'=>$key))
               ->update('setting', Array('value'=>$value));
    }
  }
}