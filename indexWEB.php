<?php include('../header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Content Summarizer</title>
</head>
<body>
    <h1>Web Content Summarizer</h1>
    <form action="/summarize" method="post">
        <label for="url">Enter URL:</label><br>
        <input type="text" id="url" name="url"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
