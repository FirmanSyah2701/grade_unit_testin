<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input nilai</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <a href="../index.html">Kembali</a>
    <div>
        <form action="" method="post">
            <input type="number" name="number" required>
            <button id="convert" type="submit" name="save">Convert</button>
        </form>
        
        <?php
            require("../controller/GradeController.php");

            if (isset($_POST['save'])) {
                $grd = new GradeController();
                echo $grd->insert();
            }    
        ?>

        <footer>Copyright &copy; by Firman Syah</footer>
    </div>
</body>
</html>