<!doctype html>
<html>
    <body>
        <h1>Function</h1>
        <?php
        $str = "Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        echo $str;
        ?>

        <h2>strlen()</h2>
        <?php echo nl2br(1+1); ?> <br>
        <?php echo strlen($str); ?>

        <h2>nl2br</h2>
        <?php
        echo nl2br($str);
        ?>
    </body>
</html>
