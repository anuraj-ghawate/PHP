<?php
function countv($string)
{
    $txt=strtolower($string);
    $countv=0;

    for($i = 0; $i < strlen($txt); $i++)
    {
        if($txt[$i]=='a'||$txt[$i]=='e'||$txt[$i]=='i'||$txt[$i]=='o'||$txt[$i]=='u')
        {
            $countv++;
        }
        
    }
        echo "Number Of Vowels In Given String Is:$countv";
}

function occurrences($string)
{
    $ca=0;
    $ce=0;
    $ci=0;
    $co=0;
    $cu=0;
    $txt=strtolower($string);

    for($i = 0; $i < strlen($txt); $i++)
    {
        if($txt[$i]=='a')
        {
            $ca++;
        } elseif($txt[$i]=='e')
        {
            $ce++;
        } elseif($txt[$i]=='i')
        {
            $ci++;
        } elseif($txt[$i]=='o')
        {
            $co++;
        } elseif($txt[$i]=='u')
        {
            $cu++;
        }
    }

    echo "A Ocurrence For $ca Times In Given String<br>";
    echo "E Ocurrence For $ce Times In Given String<br>";
    echo "I Ocurrence For $ci Times In Given String<br>";
    echo "O Ocurrence For $co Times In Given String<br>";
    echo "U Ocurrence For $cu Times In Given String<br>";
}

function palindrome($string)
{
    $string = strtolower($string);
    $txt = strrev($string);
    if($txt==$string)
    {
        echo "String Is Palindrom";
    } else {
        echo "String Is Not Palindrome";
    }
}
?>