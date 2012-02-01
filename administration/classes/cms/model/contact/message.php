<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Contact_message extends ORM_Classic 
{
  protected $_sorting = array ('timestamp' => 'DESC');
  protected $_form_date_fields = array ('timestamp');
  
  public function set_list_item_default(&$arr, $item) 
  {
    $arr['date'] = date('d.m.Y', $item->timestamp);
  }
}
