<?php
function variableName($name)
{
    $s = str_replace("_", "a", $name);
    if (!ctype_alpha($s[0]))
        return false;
    return ctype_alnum($s);
}