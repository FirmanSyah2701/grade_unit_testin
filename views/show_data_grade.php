<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data Grade</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div style='margin-top:10px;'></div>
    <div class="col-md-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a>
                <li class="breadcrumb-item active" aria-current="page">Lihat Data Nilai</li>
            </ol>
        </nav>
    </div>

    <div class="subdiv">
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
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>