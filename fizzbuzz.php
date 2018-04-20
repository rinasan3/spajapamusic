<?php

for ($i=1; $i<=100; $i++){
    if (($i % 15) == 0){
        print "FizzBuzz";
        print "<br>";
    }
    elseif (($i % 3) == 0){
        print "Fizz";
        print "<br>";
    }
    elseif (($i % 5) == 0){
        print "Buzz";
        print "<br>";
    }
    else{
        print $i;
        print "<br>";
    }
}

?>