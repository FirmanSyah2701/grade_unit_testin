<?php
    
    require_once "../model/Grade.php";
        
        $grd = new Grade();

        //Test case 1
        $param1     = 80.1;
        $param2     = "A";
        $exp1       = "<strong id='success'>Conversi Berhasil!</strong>";
        $result1    = $grd->convert($param1, $param2);
        
        if($result1 == $exp1){
            echo "Test case 1 sesuai expetasi";
            echo "<br>";
            $testResult1 = true;
        }else{
            echo "Test case 1 tidak sesuai expetasi";
            $testResult1 = false;
        } 

        //Test case 2
        $param3     = 75.1;
        $param4     = "AB";
        $result2    = $grd->convert($param3, $param4);

        if($result2 == $exp1){
            echo "Test case 2 sesuai expetasi";
            echo "<br>";
            //$testResult2 = true;
        }else{
            echo "Test case 2 tidak sesuai expetasi";
            echo "<br>";
            //$testResult2 = false;
        }

        //Test case 3
        $param5     = 70.1;
        $param6     = "B";
        $result3    = $grd->convert($param5, $param6);

        if($result3 == $exp1){
            echo "Test case 3 sesuai expetasi";
            echo "<br>";
            $testResult3 = true;
        }else{
            echo "Test case 3 tidak sesuai expetasi";
            echo "<br>";
            $testResult3 = false;
        }

        //Test case 4
        $param7     = 65.1;
        $param8     = "BC";
        $result4    = $grd->convert($param7, $param8);

        if($result4 == $exp1){
            echo "Test case 4 sesuai expetasi";
            echo "<br>";
            $testResult4 = true;
        }else{
            echo "Test case 4 tidak sesuai expetasi";
            echo "<br>";
            $testResult4 = false;
        }

        //Test case 5
        $param9     = 60.1;
        $param10    = "C";
        $result5    = $grd->convert($param9, $param10);

        if($result5 == $exp1){
            echo "Test case 5 sesuai expetasi";
            echo "<br>";
            $testResult5 = true;
        }else{
            echo "Test case 5 tidak sesuai expetasi";
            echo "<br>";
            $testResult5 = false;
        }

        //Test case 6
        $param11    = 55.1;
        $param12    = "CD";
        $result6    = $grd->convert($param11, $param12);

        if($result6 == $exp1){
            echo "Test case 6 sesuai expetasi";
            echo "<br>";
            $testResult6 = true;
        }else{
            echo "Test case 6 tidak sesuai expetasi";
            echo "<br>";
            $testResult6 = false;
        }

        //Test case 7
        $param13    = 40.1;
        $param14    = "D";
        $result7    = $grd->convert($param13, $param14);

        if($result7 == $exp1){
            echo "Test case 7 sesuai expetasi";
            echo "<br>";
            $testResult7 = true;
        }else{
            echo "Test case 7 tidak sesuai expetasi";
            echo "<br>";
            $testResult7 = false;
        }

        //Test case 8
        $param15    = 0;
        $param16    = "E";
        $result8    = $grd->convert($param16, $param15);

        if($result8 == $exp1){
            echo "Test case 8 sesuai expetasi";
            echo "<br>";
            $testResult8 = true;
        }else{
            echo "Test case 8 tidak sesuai expetasi";
            echo "<br>";
            $testResult8 = false;
        }

        //Test case 9
        $param17    = 105;
        $param18    = null;
        $exp2       = 'Batas maksimal nilai yang dikonversi adalah 100, harap periksa kembali input Anda';
        $result9    = $grd->convert($param17, $param18);

        if($result9 == $exp2){
            echo "Test case 9 sesuai expetasi";
            echo "<br>";
            $testResult9 = true;
        }else{
            echo "Test case 9 tidak sesuai expetasi";
            echo "<br>";
            $testResult9 = false;
        }

        //Test case 10
        $param19    = -1;
        $param20    = null;
        $exp3       = 'Program tidak dapat menerima nilai minus, harap periksa kembali input Anda';
        $result10   = $grd->convert($param19, $param20);

        if($result10 == $exp3){
            echo "Test case 10 sesuai expetasi";
            echo "<br>";
            $testResult10 = true;
        }else{
            echo "Test case 10 tidak sesuai expetasi";
            echo "<br>";
            $testResult10 = false;
        }

         if ($testResult1 == true && $testResult2  == true &&
            $testResult3  == true && $testResult4  == true &&
            $testResult5  == true && $testResult6  == true &&
            $testResult7  == true && $testResult8  == true &&
            $testResult9  == true && $testResult10 == true){
            echo "Semua jalur berhasil di eksekusi";
        }else{
            echo "Terdapat jalur yang tidak di eksekusi";
        } 

        