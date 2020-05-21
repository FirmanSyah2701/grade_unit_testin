<?php
    
    use PHPUnit\Framework\TestCase;
    require_once "../modelGrade.php";

    class GradeTest extends TestCase{
        
        public function insertTest(){
            $grd = new Grade();

            //Test case 1
            $param1     = 80.1;
            $param2     = "A";
            $exp        = "<strong id='success'>Conversi Berhasil!</strong>";
            $result     = $grd->convert($param1, $param2);
            
            $this->assertEquals($exp, $result);
        }
    }