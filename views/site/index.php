<?php

echo "Hello";
?>
<form name="upload" method="POST" enctype="multipart/form-data" action="/upload/">
<input type="file" name="file1">
<input type="hidden" name="test" value="value">
<input type="submit" name="submit" value="Upload">
</form>