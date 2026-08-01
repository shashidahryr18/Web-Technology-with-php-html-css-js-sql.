<?php
$file="sample.txt";
if(file_exists($file))
    {
        echo "OLD Content: " . file_get_contents($file);
        $new_content="This is new content of IWT class.";
        file_put_contents($file,$new_content);
        $handler=fopen($file,"r");
        $content=fread($handler,filesize($file));
        echo "<br>NEW Content: " . $content;
        fclose($handler);c
    }
