<?php
  
/**
 * Log
 * 
 * @package    helpers
 * @version 	 1.0
 * @author     Francis Goris Payano <fgpayano@gmail.com>
 */
  
namespace helpers;

function makeInstance($arr = NULL)
{
    if ($arr == NULL) return;

    foreach($arr as $key => $val)
    {
     $name = getClassName($val);
      
     $this->{$name} = $val;
    }
}

function getClassName($obClass = NULL, $lowerCase = TRUE)
{
  $name = ""; 

  $obClassName = get_class($obClass);

  $arrClass = explode("\\", $obClassName);

  $total = count($arrClass) - 1;

  $name = $arrClass[$total];

  if ($lowerCase) $name = strtolower($name);

  return $name;
}
