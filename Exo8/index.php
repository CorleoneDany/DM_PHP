<?php



function nextSuite()
{
    $str = '11';
    $nextstr = '';
    $i = 0;
    while($i < strlen($str))
    {
        if (substr($str, $i) == substr($str, $i + 3)) 
        {
            //Trois
            $nextstr .= '3' . substr($str, $i, 1);
            $i = $i + 3;
        }
        else if (substr($str, $i) == substr($str, $i + 2)) 
        {
            //Deux 
            $nextstr .= '2' . substr($str, $i, 1);
            $i = $i + 2;
        }
        else
        {
            //Aucun
            $nextstr .= '1' . substr($str, $i, 1);
            $i = $i + 1;
        }
    }
    echo $nextstr . '<br>';
}

nextSuite();
