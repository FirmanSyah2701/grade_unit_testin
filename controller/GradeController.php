<?php
    require ("../model/Grade.php");

    class GradeController{

        private static $grd;

        function __construct(){            
            self::$grd = new Grade();            
        }

        function insert(){
            $num = $_POST['number'];
            if ($num > 80 && $num <= 100) {
                return self::$grd->convert($num, 'A');
            } elseif ($num > 75 && $num <= 80) {
                return self::$grd->convert($num, 'AB');
            } elseif ($num > 70 && $num <= 75) {
                return self::$grd->convert($num, 'B');
            } elseif ($num > 65 && $num <= 70) {
                return self::$grd->convert($num, 'BC');
            } elseif ($num > 60 && $num <= 65) {
                return self::$grd->convert($num, 'C');
            } elseif ($num > 55 && $num <= 60) {
                return self::$grd->convert($num, 'CD');
            } elseif ($num > 40 && $num <= 55) {
                return self::$grd->convert($num, 'D');
            } elseif ($num >= 0 && $num <= 40) {
                return self::$grd->convert($num, 'E');
            } else if($num > 100) {
                return "Batas maksimal nilai yang dikonversi adalah 100, harap periksa kembali input Anda";
            } else if($num < 0){
                return "Program tidak dapat menerima nilai minus, harap periksa kembali input Anda";
            }           

        }

        function showAll(){

            $row = self::$grd->showAllGrade()->fetchAll(PDO::FETCH_ASSOC);

            // echo var_dump($row);
            
            if( count($row) == 0 ){
                echo "<tr align='center'>";
                echo "<td colspan=3>Tidak ada data</td>";                
                echo "</tr>";
            }else{
                foreach ($row as $key) {
                    echo "<tr align='center'>";
                    echo "<td>" . $key['id'] . "</td>";
                    echo "<td>" . $key['number'] . "</td>";
                    echo "<td>" . $key['char'] . "</td>";
                    echo "</tr>";
                }
            }
            
        }

    }
?>