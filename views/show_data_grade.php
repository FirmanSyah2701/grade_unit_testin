<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data Grade</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <a href="../index.html">Kembali</a>
    <div>
        <h2>Data Grade</h2>
        <table cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nilai</th>
                    <th>Huruf</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require("../controller/GradeController.php");
                    $grdc = new GradeController();
                    $grdc->showAll();
                ?>
            </tbody>
        </table>
        <footer>Copyright &copy; by Firman Syah</footer>
    </div>
</body>
</html>