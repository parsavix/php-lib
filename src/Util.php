<?php

namespace Parsavix;

class Util
{
    public function defineOnce($name, $value)
    {
        if (!defined($name)) {
            define($name, $value);
        }
    }
}