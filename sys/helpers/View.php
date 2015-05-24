<?php
  
    /**
    * View
    * 
    * @package    helpers
    * @version 	 1.0
    * @author     Francis Goris Payano <fgpayano@gmail.com>
    */

    class View 
    {

      /**
      * 
      * Include views to show
      *
      * @param string $name  name of the view
      * @param array $data  information passed to view
      * @return none
      */
      public static function load($name = "", $data = null)
        {
          include_once "app/views/{$name}.php";
        }
        
    }

?>