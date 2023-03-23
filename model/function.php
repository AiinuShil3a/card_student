<?php
interface myFunction {
    public function dateCalculator();
    public function checkYear();
    public function dataUser();
 
}

Class functionth implements myFunction {

   public function dateCalculator()
    {
        $date = "2002-05-30";
        isset( $date ) ? $date : $date = "";
        if( !empty( $date ) ) {
            $e = explode("-", $date);
            $age = date("Y") - $e[0];
            $data = array("$date","$age");
            $json = json_encode($data);
            return $json ;
        }else {
            return false;
        }
    }

    public function checkYear()
    {
        $year = "2021";
        isset( $year ) ? $year : $year = "";
        if( !empty( $year ) ){
            if($year <= 2023 && $year >= 2020){
                if($year == 2023){
                    $text= "คุณเป็นนักศึกษา ปี 1";
                    return$text;
                }else if($year == 2022){
                    $text= "คุณเป็นนักศึกษา ปี 2";
                    return$text;
                }else if($year == 2021){
                    $text= "คุณเป็นนักศึกษา ปี 3";
                    return$text;
                }else if($year == 2020){
                    $text= "คุณเป็นนักศึกษา ปี 4";
                    return$text;
                }
            }else{
                $text= "คุณไม่ใช่นักศึกษาแล้ว";
                return $text;
            }
        }
    }

    public function dataUser()
    {
        $name = "ศุภลักษณ์ มณีภัณฑ์พาณิช";
        $number = "6444259034";
        $major = "วิศวกรรมซอฟแวร์";
        if( !empty( $name ) && !empty( $number ) && !empty( $major ) ) {
            $data = array("$name","$number","$major");
            $json = json_encode($data);
            return $json ;
        }else {
            return false;
        }
    }
    
  }
?>
  