<?php
/**
 * Portal Controller
 *
 * @package 
 * @author Aaron Roberts
 **/
class Portal extends Base_Controller
{
  private $username;
  /**
   * Construct the Portal Controller
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function __construct() 
  {
    parent::__construct();
    $title = 'LYNX';
    $descr = 'A web application for scouring the SPSU domain to search for errors.';
    $this->page->init_header($title, $descr);
    $this->load->model('user_model');
  }

  /**
   * Display the Home page.
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function index()
  {
    $inputs['templateTitle'] = array(
      'name'=>'title',
      'type'=>'text',
      'required'=>'required',
      'placeholder'=>'Template Name'
      );
    $modalCreateTemplate = array(
      'modalId'=>'modalCreateTemplate',
      'action'=>'Template/Create',
      'method'=>'post',
      'title'=>'Name Your New Template',
      'submitText'=>'Create!',
      'inputs'=>$inputs
      );

    $content['modalCreateTemplate'] = $modalCreateTemplate;
    $this->page->set_pageHead('Welcome to '.PROJECT_NAME, 'Use the options below to get started');
    $this->page->add_content('portal/index', $content);
    $this->load->view('templates/logged_in', $this->page);
  }

  /**
   * Modify settings for the Crawler Application
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function Settings()
  {
    $content['settings'] = $this->user_model->getSettings();
    $this->page->set_pageHead('Settings', 'Edit the Crawler Application Settings.');
    $this->page->add_content('portal/settings', $content);
    $this->load->view('templates/logged_in', $this->page);
  }

  /**
   * Save settings from settings page
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function Save()
  {
    $alert = new stdClass;
    $settings = $this->input->post(null);
    $this->user_model->saveSettings($settings);
    $alert->message = 'Your Settings have been saved!';
    $alert->type = 'success';
    $this->session->set_userdata('alert', $alert);
    redirect('/Portal');
  }
} // END class Portal