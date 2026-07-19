<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" />
    <input type="submit" />
</form>

<?php
if (isset($_FILES['fileToUpload']))
{
    echo "<br>File Name: " . $_FILES['fileToUpload']['name'];
    echo "<br>File Type: " . $_FILES['fileToUpload']['type'];
    echo "<br>File Size: " . ($_FILES['fileToUpload']['size'])/1000 . "KB";
}
?>
<br>

<?php
echo $_SERVER['PHP_SELF'] . '<br>';
echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
echo $_SERVER['SERVER_NAME'] . '<br>';
echo $_SERVER['REQUEST_METHOD'] . '<br>';
echo $_SERVER['REQUEST_TIME'] . '<br>';
echo $_SERVER['HTTP_USER_AGENT'] . '<br>';

echo $_GET['name'] . "<br>";
echo $_GET['pwd'] . "<br>";
?>