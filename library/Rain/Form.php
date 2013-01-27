<?php

namespace Rain;

/**
 * Form - Form generator class
 * 
 * @package Rain
 * @version 3
 * @author Federico Ulfo
 * @link http://rainframework.com
 */

/**
 * Form is a form generator class
 */
class Form {

    // form variables
    private $name, 
            $action, 
            $method, 
            $target;

    // item counter
    protected $item_counter = 0;

    // keep all the information of the form
    protected $form_info = array();

    // count the number of open form
    protected static $form_counter = 0;

    // configurations
    protected static $conf = array(
    );

    

    /**
     * 
     * Create a form
     * 
     * @param string $action
     * @param string $method
     * @param string $name
     * @param string $target
     * @param string $layout
     */
    public function __construct( $action = null, $method = "get", $name = null, $target = null ){
        
            // set the form action
            $this->form_info['action'] = $action;
            
            // set the form name
            $this->form_info['name']   = $name ? $name : "form__" . self::$form_counter;

            // set the form method
            $this->form_info['method'] = $method;
            
            // set the form target
            $this->form_info['target'] = $target;

    }




    /**
     * Add one item to the form
     * 
     * @param string $item
     * @param string $name
     * @param string $title
     * @param string $description
     * @param string $value
     * @param string $validation
     * @param string $param
     * @param string $layout
     */
    function addItem( $item, $name, $title = null, $description = null, $value = null, $validation = null, $param = null, $layout = null ) {

        // increase the counter
        $this->item_counter++;

        // render the item
        $html = $this->renderItem( $item, $name, $title, $description, $value, $validation, $param, $layout );

        // save the information of this item in form_info
        $this->form_info['items'][ $name ] = array(

            'item'        => $item,
            'name'        => $name,
            'title'       => $title,
            'description' => $description,
            'value'       => $value,
            'validation'  => $validation,
            'param'       => $param,
            'layout'      => $layout
        );
        
    }
    
    
    /**
     * Draw the form
     * @return string
     */
    public function draw() {

        // render the form
        $this->renderForm();

    }
    
    
    
    /**
     * Get the form info
     * @return array
     */
    public function getFormInfo(){
        return $this->form_info;
    }
    
    
    /**
     * Render the items. Internally called by Form::addItem()
     * 
     * @param string $item
     * @param string $name
     * @param string $title
     * @param string $description
     * @param string $value
     * @param string $validation
     * @param string $param
     * @param string $layout
     * @return type
     */
    protected function renderItem( $item, $name, $title = null, $description = null, $value = null, $validation = null, $param = null, $layout = null ){

        // render the item
        return Form\Item::$item( $name, $value );
        
    }
    
    
    
    

    
}
