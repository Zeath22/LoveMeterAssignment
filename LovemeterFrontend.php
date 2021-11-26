<html>
<head>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <header><h1>Love Meter</h1></header>
    <div class="container">
        <form class="myForm" action="LovemeterBackend.php" method="POST">

            <div class="box">
                <label>Name<input class="textbox" type="text" name="nameOne" placeholder="1st Name" required></label><br>
                <hr>
                <label style="margin-bottom: 20px">Gender</label><br>
                <div>
                    <label style="float: left"><input type="radio" value="Male" name="gender1" checked>Male</label>
                    <label style="float: right"><input type="radio" value="Female" name="gender1">Female</label>
                </div>
            </div>


            <input class="button" type="submit" name="calculate" value="Calculate The LOVE">


            <div class="box">
                <label>Name<input class="textbox" type="text" name="nameTwo" placeholder="2nd Name" required></label><br>
                <hr>
                <label style="margin-bottom: 20px">Gender</label><br>
                <div>
                    <label style="float: left"><input type="radio" value="Male" name="gender2" >Male</label>
                    <label style="float: right"><input type="radio" value="Female" name="gender2" checked>Female</label>
                </div>
            </div>
        </form>
    </div>
    <audio controls>
        <source src="Careless.mp3" type="audio/mp3">
    </audio>
</body>
</html>

