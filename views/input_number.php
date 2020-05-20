<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input nilai</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div style='margin-top:10px;'></div>
    <div class="col-md-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a>
                <li class="breadcrumb-item active" aria-current="page">Input Nilai</li>
            </ol>
        </nav>
    </div>

    <div class="subdiv">
        <form action="" method="post">
            <div class="form-group">
            <label for="">Input Number: </label>
            <input style="margin-left:20px; padding:6px; margin-right:20px;" type="number" name="number" required>

            <button class="btn btn-purple-moon btn-rounded" type="submit" name="save">Convert</button>
            </div>
        </form>
        
        <?php
            require("../controller/GradeController.php");

            if (isset($_POST['save'])) {
                $grd = new GradeController();
                echo    "<div class='container'>
                            <div id='msg' class='alert alert-info alert-dismissable'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
                                    " . $grd->insert() . "
                            </div>
                        </div>";
            }    
        ?>

        <footer>Copyright &copy; by Firman Syah</footer>
    </div>
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</body>
</html>