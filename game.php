<?php require("header.php")?>

    <main id="gameBox">
        <iframe src="<?php echo $gameUrls[$_GET["game"]] ?>" frameborder="0" width="100%" height="100%"></iframe>
    </main>
    
<?php require("footer.php")?>
