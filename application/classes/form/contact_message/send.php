<?php defined('SYSPATH') or die('No direct script access.');

class Form_Contact_Message_Send extends Forms
{
  public function build()
  {
    $this->add('name');
    $this->add('email');
    $this->add('phone');
    $this->add('question', 'textarea');
  }
  
  public function set_rules()
  {
    $this->rules('name', array (
      array ('not_empty'),
      array ('max_length', array (':value', 50)),
    ));
    
    $this->rules('email', array (
      array ('not_empty'),
      array ('email'),
      array ('max_length', array (':value', 127)),
    ));
    
    $this->rules('phone', array (
      array ('max_length', array (':value', 20)),
    ));
    
    $this->rules('question', array (
      array ('not_empty'),
    ));
  }
  
  public function do_form($values = array (), $refresh = FALSE, $redirect = FALSE)
  {
    parent::do_form($values, $refresh, $redirect);
    
    if (Kohana::$config->load('contact.send_email_enabled')) {
      $email = Email_View::factory('contact_message');
      $email->view_set_param('message', $this->_saved);
      $email->to(($email_to = Kohana::$config->load('contact.send_email_to')) ? $email_to : Kohana::$config->load('cms.default_email'));
    }
    
    Request::refresh_page();
  }
}

