<?php
class Session extends CI_Controller
{
  public $page;
  /**
   * Construct the Session Controller.  
   * This controller contains the default static pages for guest users.
   *
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function __construct() 
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('page');
    $this->load->helper('url');
    $this->load->model('user_model');
  }
// PUBLIC FUNCTIONS
  /**
   * Display the index page.
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function index()
  {
    $this->load->view("session/login");
  }
  /**
   * Authenticate against the Deluxe Active Directory Server
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function login()
  {
    $formData = $this->input->post(null, TRUE);
    $userData = $this->user_model->getByName($formData['username']);
    if ($userData && $formData['password'] == $userData->password) {
      $this->_init_session($userData);
      redirect('/Portal');
    } else {
      $message = 'Invalid Username or Password';
      $this->session->set_userdata('error', $message);
      redirect('');
    }
  }
  private function _init_session($user)
  {
    $this->session->unset_userdata('error');
    $this->session->set_userdata('userId', $user->userId);
    $this->session->set_userdata('username', $user->username);
  }
  public function logout()
  {
    $this->session->sess_destroy();
    redirect('');
  }
}