<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * Page class, contains data for header, main content and footer
 *
 * @package KnowName
 * @author Aaron Roberts
 **/
class Page 
{
  //Internal Data Members
  public $header, $main_content, $footer;
  /**
   * Construct the Page Object
   *
   * @param $title = Page Title (eg. Home, Settings)
   * @param $descr = Page Description
   * @param $theme = Page Theme (css and images to use)
   * @return void
   * @author Aaron Roberts
   **/
  public function __construct()
  {
    $this->header = new Header();
    $this->main_content = array();
    $this->footer = null;
  }
  /**
   * Initialize the header
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function init_header($title, $descr, $theme = 'default')
  {
    $this->header->title = $title;
    $this->header->description = $descr;
    $this->header->theme = $theme;
  }
  /**
   * Add content to a page.  Use this function to include a view in the page
   * and set the data array for that view.
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function add_content($view, $data)
  {
    $this->main_content[$view] = $data;
  }
  /**
   * Set the page header and tagline
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function set_pageHead($header, $tagline)
  {
    $this->header->pageHead = $header;
    $this->header->tagline = $tagline;
  }
}
/**
 * Header class, contains data for header (title, description)
 * as well as navigation and action menu.
 *
 * @package KnowName
 * @author Aaron Roberts
 **/
class Header
{
  public  $title,       //Title of the page
          $description, //metadata description of the page
          $stylesheet,  //stylesheet to load for particular theme
          $menu_right,  //Action menu (right hand menu)
          $menu_left,   //Navigation menu (left hand menu)
          $pageHead,    //Header for the page
          $tagline;     //Tagline for the page
  /**
   * Construct the header object
   *
   * @return void
   * @author Aaron Roberts
   **/
  public function __construct()
  {
  }
} // END class Header