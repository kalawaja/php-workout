
1.  <?php echo 'if you want to serve PHP code in XHTML or XML documents,
                use these tags'; ?>

2.  You can use the short echo tag to <?= 'print this string' ?>.
    It's equivalent to <?php echo 'print this string' ?>.


If your file only have php code then  do not use closing tag.
<?php
//php code;
//php code;
//php code;

# but if you are embedding php with html then enclose php code with opening and closing tag. ?>
<html>
    <head>
    </head>
    <body>
        <?php
        //php code;
        //php code;
        //php code;

        ?>
    </body>
</html>

If you want to just print single text or something ,you should use shorthand version .<?= $var ?>

But if you want to process something, you should use normal tag.
<?php
        //$var = 3;
        //$var2 = 2;
        //$var3 = $var+$var2;
        //if($var3){//result}
?>

If you embedded php with html and single line, do not need to use semicolon
<html>
<head>
<body>
<?= $var ?>
</body>
</head>
</html>

but if you have multiple line, then use semicolon.
<?php
//line 1;
//line 2;
//line 3;
?>

(See: https://www.php.net/manual/en/language.basic-syntax.phptags.php)