<?php
error_reporting(E_ALL & ~E_NOTICE);

/**
 * 
 */
function check_session(string $module_name = null)
{
  $ci = &get_instance();
  $ci->load->database();
  # code...
  $module = $module_name ? $module_name : $ci->uri->segment(1);
  $result = false;

  $permit['approve'] = array('dashboard','calendar','admin');
  $permit['user'] = array('dashboard','calendar');

  // return print_r($permit['test']);
  if ($ci->session->userdata('role') == 'admin') {
    $result = true;
  } else {
    if (in_array($module, $permit[$ci->session->userdata('role')])) {
      $result = true;
    }
  }

  return $result;
}

function check_permit(string $module = null)
{
  $ci = &get_instance();
  $ci->load->database();
  # code...

  $result = check_session();

  if (!$result) {
    redirect(site_url('error_permit'));
  }
}

function check_permit_menu(string $module = null)
{
  $result = check_session($module);
  $css_name = '';

  if (!$result) {
    $css_name = 'd-none';
  }

  return $css_name;
}
