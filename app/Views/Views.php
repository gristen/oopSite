<?php

namespace app\Views;

class Views
{

    public static $arr = [];

    public static function resultRegister($message)
    {
      self::$arr[] =
          [
              "msg"=>'<div class="alert alert-primary" role="alert">
                            A simple primary alert—check it out!
                      </div>'
          ];
    }
}