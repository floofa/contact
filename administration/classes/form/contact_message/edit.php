<?php defined('SYSPATH') or die('No direct script access.');

class Form_Contect_Message_Edit extends Forms_List
{
  public function build()
  {
    $this->group('group1');
    $this->col('col1')
      ->add('name')
      ->add('rew_id')
      ->add('timestamp', 'date', date('d.m.Y'));
      
    $this->col('col2')
      ->add('meta_description')
      ->add('meta_keywords')
      ->add('cms_status', 'bool', array ('value' => TRUE));
      
    $this->col('col')
      ->add('anotation', 'textarea', array ('attr' => array ('rows' => 10)))
      ->add('content', 'textarea', array ('attr' => array ('rows' => 20)));
      
    $this->add_gallery('news_images', $this->_model, $this->_model_id);
  }
  
  public function set_rules()
  {
    $this->rules('name', array (
      array ('not_empty'),
      array ('max_length', array (':value', 150)),
    ));
    
    $this->rules('rew_id', array (
      array ('max_length', array (':value', 150)),
    ));
    
    $this->rules('timestamp', array (
      array ('date', array (':value')),
    ));
    
    $this->rules('meta_description', array (
      array ('max_length', array (':value', 255)),
    ));
    
    $this->rules('meta_keywords', array (
      array ('max_length', array (':value', 255)),
    ));
    
    $this->rules('anotation', array (
      array ('not_empty'),
      array ('max_length', array(':value', 500)),
    ));
    
    $this->rules('content', array (
      array ('not_empty'),
    ));
  }
}
