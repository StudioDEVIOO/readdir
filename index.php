<!-- DEVIOO archives || Index of directory -->
<html lang="en">
<head>
    <title>DEVIOO archives</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://devioo.com/media/devioo.png"/>
</head>
<style>
    td{
        padding: 2px 10px;
    }
</style>
<body>
<main style="margin: 50px 10px 10px 10px">
    <h1>DEVIOO archives</h1>
    <table>
        <tr>
            <td style="font-weight: bold;font-size: 18px">Name</td>
            <td style="font-weight: bold;font-size: 18px">Size</td>
            <td style="font-weight: bold;font-size: 18px">Last edit</td>
        </tr>
        <?php
        $dirname = '.';
        $dir = opendir($dirname);

        while($file = readdir($dir)) {
            if($file != '.' && $file != '..' && !is_dir($dirname.$file) && $file != 'index.php' && $file != '.idea' && $file != "404.html")
            {
                echo '<tr>';
                echo '<td><a href="'.$dirname.'/'.$file.'" download="'. $dirname.'/'.$file .'">'.$file.'</a>'.'</td>';
                echo '<td>'. explode('.' , filesize($file)/1024)[0] .' ko</td>';
                echo '<td>'. date("d M Y",filemtime($file)) .'</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</main>
</body>
</html>