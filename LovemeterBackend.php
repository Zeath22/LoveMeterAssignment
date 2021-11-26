<html>
<head>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <header><h1>Love Meter</h1></header>
    <div class="container2">
        <?php
            echo "<div class='container3'>";
                if (isset($_POST['calculate'])){
                    $randNumber = rand(0,100);
                    $user1 = $_POST['nameOne'];
                    $user2 = $_POST['nameTwo'];
                    function logWriter($log, $result){

                        if(!file_exists('log.txt')){
                            file_put_contents('log.txt','');
                        }
                        $time = date('d/m/y h:iA', time());
                        $logs = file_get_contents('log.txt');
                        $logs .= $log . $result . "% at $time \n";

                        file_put_contents('log.txt', $logs);
                    }
                        echo "<div class='box' style='width: 100%; font-size: 35px'>" . "The Love Connection Between " . $_POST['nameOne'] ." and " . $_POST['nameTwo'] . " is $randNumber%!" . "</div>";
                        echo "<meter id='meter' value='$randNumber' min='0' low='50' max='100'></meter>";
                        $logs = "($user1 and $user2)'s LOVE connection was: ";
                        logWriter($logs, $randNumber);
                    }else{
                        echo "<label style='font-size: 32px;'>You Haven't Submitted Anything!</label>";
                }
        echo "</div>";
        ?>
    </div>
</body>
</html>

