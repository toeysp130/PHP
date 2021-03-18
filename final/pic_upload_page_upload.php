<html>
<head><title> Upload file </title></head>
<body>
    <form enctype = "multipart/form-data" method = "post" action = "pic_upload.php">
    <input type = "hidden" name = "MAX_FILE_SIZE" value = "5000000">เลือกไฟล์ที่ต้องการ : <input type = "file" name = "ImageFile" size = "50">
    <input type = "submit" name = "Submit" value = "Upload Now">
    </form>
</body>
</html>