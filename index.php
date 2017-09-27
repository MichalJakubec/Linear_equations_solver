<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Linear equations solver</title>
    </head>
    <body>
        <h1>Linear equations solver</h1>
        <form method="GET" action="">
            Linear equation ax + b = 0<br/>
            Assign a <input name="a" type="text"><br/>
            Assign b <input name="b" type="text"><br/>
            <input type="submit" value="Count"/>
        </form>
        <?php
        $a = $_GET['a'];
        $ax = $_GET['a'] . 'x';
        $b = $_GET['b'];
        echo("$ax ".'+'." $b ".'='.' 0 / -b'."<br/>");
        echo("$ax ".'='." -$b".' / :a'."<br/>");
        $result = (-$b)/$a;
        echo("x = $result");
        ?>
    </body>
</html>