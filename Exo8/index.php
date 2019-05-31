<?php

function nextSuite()
{   $str = '1';
    $nextstr = '';

    for ($i = 0; $i < strlen($str); $i++)
    {
        if (substr($str, $i) != substr($str, $i+1)) //Un caractère identique
        {
            $nextstr .= '1' . substr($str, $i);
        }
        else
                {
                    if (substr($str, $i) != substr($str, $i+2)) //Deux caractères identiques
                    {
                        $nextstr .= '2' . substr($str, $i);
                        $i++;
                    }
                    else
                        {
                            //Trois caractères identiques
                            $nextstr .= '3' . substr($str, $i);
                            $i += 2;
                        }
                }
    }
}

nextSuite();