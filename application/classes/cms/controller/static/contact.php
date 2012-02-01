<?php defined('SYSPATH') or die('No direct script access.');

abstract class Cms_Controller_Static_Contact extends Controller_Builder_Static
{ 
  protected $_folder = 'contact';
  
  /**
  * paticka
  */
  public function action_form() 
  {
    $this->_view->form = Forms::get('send', 'contact_message', 'contact_message');
  }
}
