<script>
        CKEDITOR.replace( 'description',
          {
              filebrowserBrowseUrl :'ckeditor/filemanager/browser/default/browser.html?Connector=http://ksnews/admin/ckeditor/filemanager/connectors/php/connector.php',
              filebrowserImageBrowseUrl : 'ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=http://ksnews/admin/ckeditor/filemanager/connectors/php/connector.php',
              filebrowserFlashBrowseUrl :'ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=http://ksnews/admin/ckeditor/filemanager/connectors/php/connector.php',
              filebrowserUploadUrl  :'ckeditor/filemanager/connectors/php/upload.php?Type=File',
              filebrowserImageUploadUrl : 'ckeditor/filemanager/connectors/php/upload.php?Type=Image',
              filebrowserFlashUploadUrl : 'ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
        });
</script>
<footer><div id="footer"><div class="container"><p><?php date_default_timezone_set("Asia/Phnom_Penh"); $today = date("Y-m-d H:i:s"); echo "&copy; ".$today;?></p></div></div></footer>