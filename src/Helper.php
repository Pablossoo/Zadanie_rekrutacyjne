<?php


namespace App;


class Helper
{
  public static function RemoveWhiteSpaceFromString(string $string)
  {
      return str_replace(' ', '', $string);
  }

  public static function RemoveAllWhiteSignFromString(string $string)
  {
      return preg_replace('/\s+/', '', $string);
  }
}