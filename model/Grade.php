<?php

    require ("../config/Database.php");

    class Grade{

        function convert($num, $char){
            try {
                $sql = "INSERT INTO grade_table VALUES (NULL, $num, '$char')";
                $query = Database::getConnection()->prepare($sql);
                $query->execute();
                return "<strong class='success'>Conversi Berhasil!</strong>";
            } catch (\Throwable $th) {
                return "<p class='error'>Conversi Gagal: " . $th->getMessage() . "</p>";
            }

        }

         function showAllGrade(){
            try {
                $sql = "SELECT * FROM grade_table ORDER BY id ASC";
                $result = Database::getConnection()->query($sql);
                return $result;
            } catch (\Throwable $th) {
                return "<p class='error'>Gagal menampilkan semua data nilai: " . $th->getMessage() . "</p>";
            }
        } 

    }

?>