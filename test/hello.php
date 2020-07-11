<?php
        $dirname = "img/";
        $images = scandir($dirname);
        shuffle($images);
        $ignore = Array(".", "..");
        foreach($images as $curimg){
            if(!in_array($curimg, $ignore)) {
                echo "<li><a href='".$dirname.$curimg."'><img src=".$dirname.$curimg." alt='' /></a></li>\n";
            }
        }                 

phpinfo();
?>
