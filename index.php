<html>
  <head>
    <title>Test upload</title>
  </head>
  <body>
    <h2>Select files to upload</h2>
    <form name="upload" method="POST" enctype="multipart/form-data" action="/upload">
      <input type="file" name="file"><br>
      <input type="submit" name="submit" value="Upload">
      <input type="hidden" name="test" value="value">
    </form>
    <pre>FILES: <?php var_dump($_FILES); ?></pre>
    <pre>GET: <?php var_dump($_GET); ?></pre>
    <pre>POST: <?php var_dump($_POST); ?></pre>
    <pre>SERVER: <?php var_dump($_SERVER); ?></pre>
    <pre>File size: <?=isset($_SERVER['HTTP_X_FILE_NAME']) ? filesize($_SERVER['HTTP_X_FILE_NAME']) : null ?></pre>
  </body>
</html>

