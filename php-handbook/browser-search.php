
<?php

# Let's detect which browser your visitors are using.

echo $_SERVER['HTTP_USER_AGENT'];

?>


<?php
# Mixing HTML and PHP
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() false olmayan bir değer döndürmelidir</h3>
<p>Internet Explorer kullanmaktasınız</p>
<?php
} else {
?>
<h3>strpos() false döndürmelidir</h3>
<p>Internet Explorer kullanmıyorsunuz</p>
<?php
}
?>