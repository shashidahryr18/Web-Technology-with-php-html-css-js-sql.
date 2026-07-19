<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" />
    <input type="submit">
</form>

<?php

    if (isset($_FILES['fileToUpload'])) {
        echo"<br>File Name: " . $_FILES['fileToUpload']['name'];
        echo"<br>File Type: " . $_FILES['fileToUpload']['type'];
        echo"<br>File Size: " . ($_FILES['fileToUpload']['size'] / 1000) . " KB";
}

echo "<br>Name : ".$GETS['name'];
echo "<br>Email : ".$GETS['email'];
?>