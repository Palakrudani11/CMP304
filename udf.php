<?php
function bigest_smallest($x)
{
    
    if($x%2==0)
    {
        return 1;
    }
    else
    {
       return 0;
    }
}
$y=bigest_smallest(8);
if($y==1)
{
    echo "bigest";
}
else
{
    echo "smallest";
}

?>