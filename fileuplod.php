<?php
$file = "Sample.txt";

if (file_exists(filename: $file))
{
    echo "OLD Content: " . file_get_contents(filename: $file);

    $new_content = "Hello, Welcome To IWT Lab";
    file_put_contents(filename: $file, data: $new_content);

    $handler1 = fopen(filename: $file, mode: "r");
    $content = fread(stream: $handler1, length: filesize(filename: $file));

    echo "<br>New Content: " . $content;

    fclose(stream: $handler1);
}
?>
