<?php
namespace Cons;

include_once (dirname (__FILE__) . '/test1.php');
include_once (dirname (__FILE__) . '/test2.php');

use Ong_nois\Ong_noi;
use Chas\Cha;

class Con extends Cha implements Ong_noi
{
    public function In_Ra()
    {
        echo "123456";
    } 

    function Tai_san()
    {
        echo "<br/>". "phát triển tài sản";
    }
}


?>