<?php
declare(strict_types=1);

/*
 * This file is part of the Niga PHP framework package
 *
 * (c) Abass Dev <abass@abassdev.com>
 */

namespace Niga\Framework\Support;

use Niga\Framework\Support\Exception\StrException;

/**
 * String supports
 *
 * @author Abass Dev <abass@abassdev.com>
 */
class Str extends AbstractStr
{
  
   /**
    * @{inheritdoc}
    */
    public static function len($str)
    {
        return self::strLength($str);
    }
  
   /**
    * @{inheritdoc}
    */
    public static function pos($str, $pos)
    {
        return self::strPos($str, $pos);
    }
  
   /**
    * @{inheritdoc}
    */
    public static function isNum($isNum)
    {
        return self::isNumeric($isNum);
    }
  
   /**
    * @{inheritdoc}
    */
    public static function isInt($isInt)
    {
        return self::isInteger($isInt);
    }
          
}
