<?php

namespace Rain\Form;

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
class Item {

    static function text( $name, $value ){
        return '<input type="text" name="'.$name.'" value="'.$value.'">';
    }
    
}
