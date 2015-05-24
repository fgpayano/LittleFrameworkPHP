<?php
  
  /**
   * Log
   * 
   * @package    helpers
   * @version 	 1.0
   * @author     Francis Goris Payano <fgpayano@gmail.com>
   */
   
	class Log
	{

        static $logFile = "error.log";

        private $arrErrors = array();

        /**
        * 
        * Initialize arrError variable with the error generated 
        * @param none
        * @return none
        */  
        public function __construct() 
        {
            $this->arrErrors = (array)error_get_last();
        }

        /**
        * 
        * Formatting data error 
        *
        * @return string
        */  
        public function tpl () 
        {
            $tplString = "\n";

            foreach ($this->arrErrors as $key => $val) 
            {
                $tplString .= "\t".strtoupper($key)."\t: {$val} \n";
            }

            $tplString .= "\tDATE\t: ".date("l jS \of F Y h:i:s A")."\n";

            return $tplString;
        }

        /**
        * 
        * Check whether has an error
        *
        * @return boolean
        */  
        public function hasErrors ()
        {
            return $this->arrErrors != NULL;
        }


        /**
        * 
        * Add additional information that go to be saved into the log file as an error
        * 
        * @param array $arr options that go to be saved
        * @return array
        */ 
        public function addOptions($arr = array()) 
        {
            if (!$this->hasErrors()) return $this;

            $this->arrErrors = array_merge($this->arrErrors, $arr);

            return $this;
        }

        /**
        * 
        * Save all information into the log
        * 
        * @param none
        * @return none
        */ 
        public function save ()
        {
            if (!$this->hasErrors()) return false;

            $file = fopen(self::$logFile, "a");

            fwrite($file, $this->tpl());

            fclose($file);
        }

    }

?>