<html>
    <head></head>
    <body>
        <form action="addNews.php" method="POST"> 
            หัวข้อ<input type="text" name="Topic" placeholder="หัวข้อ" required><br>
            เนื้อหา<textarea name="Detail"></textarea><br>
            วันที่<input type="date" name="Date"><br>
            รูปภาพ<input type="file" name="ImgName[]" multiple><br>
            <input type="submit" value="send">
        </form>    
    </body>
</html>