<?php
$CI =& get_instance();
/**
 * Create an alert and add to the session
 *
 * @return void
 * @author Aaron Roberts
 **/
function create_alert($type, $message)
{
  $CI =& get_instance();
  $alert = new stdClass;
  $alert->type = $type;
  $alert->message = $message;
  $CI->session->set_userdata('alert', $alert);
}

/**
 * undocumented function
 *
 * @return void
 * @author 
 **/
function dismiss_alert()
{
  $CI =& get_instance();
  $CI->session->unset_userdata('alert');
}

/**
 * undocumented function
 *
 * @return void
 * @author 
 **/
function show_alert()
{
  $CI =& get_instance();
  if ($CI->session->userdata('alert'))
  {
    $alert = $CI->session->userdata('alert');
    $CI->load->view('templates/alert', $alert);
    dismiss_alert();
  }
}