<?php
/**
 * Worksheet Controller
 *
 * @package 
 * @author Aaron Roberts
 **/
class Template extends Base_Controller
{
  private $username;
  /**
   * Construct the Template Controller
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
    $this->load->model('template_model', 'templateFactory');
  }

  /**
   * View my templates
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function View()
  {
    $content['templates'] = $this->templateFactory->get();
    $this->page->set_pageHead('My Templates', '');
    $this->page->add_content('template/view', $content);
    $this->load->view('templates/logged_in', $this->page);
  }

  /**
   * Create a new Template in the database
   *
   * @return void
   * @author 
   **/
  public function Create()
  {
    $title = $this->input->post('title');
    $templateId = $this->worksheetFactory->create($title);
    redirect("/Template/Edit/$worksheetId");
  }

  /**
   * Display the Home page.
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function Edit($worksheetId)
  {
    $worksheet = $this->worksheetFactory->get($worksheetId);
    $content['worksheet'] = $worksheet;
    $this->page->set_pageHead('Customize your worksheet', $worksheet->title);
    $this->page->add_content('worksheet/edit', $content);
    $this->load->view('templates/logged_in', $this->page);
  }

} // END class Template