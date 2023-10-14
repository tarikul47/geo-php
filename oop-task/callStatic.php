<?php

class Person
{

    private static function hello()
    {
        echo "This is static hello functions";
    }

    public static function __callStatic($name, $arguments)
    {
        if (method_exists(__CLASS__, $name)) {
            //  call_user_func_array([__CLASS__, $name], $arguments);
         //   if (!empty($arguments)) {
                self::$name(...$arguments);
          //  } else {
          //      self::$name();
         //   }
        } else {
            echo "This is not exisitng method: {$name}";
        }
    }
}

Person::hello();
