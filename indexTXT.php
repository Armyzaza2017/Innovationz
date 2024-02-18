<?php include('../header.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Text File</title>
</head>
<body>
    <h1>Upload Text File</h1>
    <form action="/summarize" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".txt">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
