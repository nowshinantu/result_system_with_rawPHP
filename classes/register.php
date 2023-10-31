<?php

    include_once 'library/database.php';

    class register{

        public $db;

        public function __construct(){

          $this->db = new database();
        }

        public function addregister($data){
          $Name = $data['name'];
          $ID = $data['id'];
          $Section = $data['section'];
          $Bangla = $data['bangla'];
          $English = $data['english'];
          $Mathematics = $data['math'];
          $Biology = $data['bio'];
          $Physics = $data['physics'];
          $Chemistry = $data['chemistry'];

          if(empty($Name) || empty($ID) || empty($Section) || empty($Bangla) || empty($English) || empty($Mathematics) || empty($Biology) || empty($Physics) || empty($Chemistry)){
            $meg = 'Fill out this field';
            return $meg;
          }
          else{

            $Total = $Bangla + $English + $Mathematics +$Biology + $Physics + $Chemistry;

            if($Total >= 500) {
              $grade = "A+";
            }
            elseif ($Total >= 440 && $Total < 500) {
              $grade = "A";
            }
            elseif ($Total >= 380 && $Total < 440) {
              $grade = "A-";
            }
            elseif ($Total >= 320 && $Total < 380) {
              $grade = "B";
            }
            elseif ($Total >= 260 && $Total < 320) {
              $grade = "C";
            }
            elseif ($Total >= 200 && $Total < 260) {
              $grade = "D";
            }
            else{
              $grade = "F";
            }


            $query = "INSERT INTO `tbl_mark`(`name`, `id`, `section`, `bangla`, `english`, `math`, `bio`, `physics`, `chemistry`, `total`, `grade`) VALUES ('$Name','$ID','$Section','$Bangla','$English','$Mathematics','$Biology','$Physics','$Chemistry','$Total','$grade')";

                $result = $this->db->insert($query);

                if($result){
                  echo '<script language = "javascript">';
                  echo 'alert("Information Added Successfully");
                  location.href = "result.php"';
                  echo '</script>';
                  // $meg = "Successfully";
                  // return $meg;
                }
                else{
                  echo '<script language = "javascript">';
                  echo 'alert("Information Added Failed");
                  location.href = "result.php"';
                  echo '</script>';
                  // $meg = "Failed";
                  // return $meg;
                }

          }

        }

        public function allresult(){
          $query = "SELECT * FROM tbl_mark ORDER BY id DESC";
          $result = $this->db->select($query);
          return $result;
        }

        public function view($id){
          $query = "SELECT * FROM tbl_mark WHERE id = '$id'";
          $result = $this->db->select($query);
          return $result;
        }

        public function getStdById($id){
          $query = "SELECT * FROM tbl_mark WHERE id = '$id'";
          $result = $this->db->select($query);
          return $result;
        }

        //update Information
        public function updateinfo($data, $id){
          $Name = $data['name'];
          $ID = $data['id'];
          $Section = $data['section'];
          $Bangla = $data['bangla'];
          $English = $data['english'];
          $Mathematics = $data['math'];
          $Biology = $data['bio'];
          $Physics = $data['physics'];
          $Chemistry = $data['chemistry'];

          if(empty($Name) || empty($ID) || empty($Section) || empty($Bangla) || empty($English) || empty($Mathematics) || empty($Biology) || empty($Physics) || empty($Chemistry)){
            $meg = 'Fill out this field';
            return $meg;
          }
          else{
            $query = "UPDATE `tbl_mark` SET `name`='$Name',`id`='$ID',`section`='$Section',`bangla`='$Bangla',`english`='$English',`math`='$Mathematics',`bio`='$Biology',`physics`='$Physics',`chemistry`='$Chemistry' WHERE id = '$id'";

                $result = $this->db->insert($query);

                if($result){
                  echo '<script language = "javascript">';
                  echo 'alert("Update Information Successfully");
                  location.href = "calculationresult.php"';
                  echo '</script>';
                  // $meg = "Successfully";
                  // return $meg;
                }
                else{
                  echo '<script language = "javascript">';
                  echo 'alert("Update Information Failed");
                  location.href = "calculationresult.php"';
                  echo '</script>';
                  // $meg = "Fail";
                  // return $meg;
                }

          }

        }

        //DELETE Information
        public function delinfo($id){
            $del_query = "DELETE FROM `tbl_mark` WHERE id = '$id'";
            $del = $this->db->delete($del_query);
            if($del){
              echo '<script language = "javascript">';
              echo 'alert("Delete Information Successfully");
              location.href = "result.php"';
              echo '</script>';
              // $meg = "Successfully";
              // return $meg;
            }
            else{
              echo '<script language = "javascript">';
              echo 'alert("Delete Information Failed");
              location.href = "result.php"';
              echo '</script>';
              // $meg = "Fail";
              // return $meg;
            }
        }

        //calculate
    //     public function calculate($data, $id){
    //       $ID = $data['id'];
    //       $Bangla = $data['bangla'];
    //       $English = $data['english'];
    //       $Mathematics = $data['math'];
    //       $Biology = $data['bio'];
    //       $Physics = $data['physics'];
    //       $Chemistry = $data['chemistry'];
    //       $Total = $data['total'];
    //       $Grade = $data['grade'];
    //
    //       if(empty($ID) || empty($Bangla) || empty($English) || empty($Mathematics) || empty($Biology) || empty($Physics) || empty($Chemistry) || empty($Total) || empty($Grade)){
    //         $meg = 'Fill out this field';
    //         return $meg;
    //       }
    //       else{
    //         $total_query = "INSERT INTO `tbl_calculation`(`id`, `bangla`, `english`, `math`, `bio`, `physics`, `chemistry`, `total`, `grade`) VALUES ('$ID','$Bangla','$English','$Mathematics','$Biology','$Physics','$Chemistry','$Total','$Grade')";
    //
    //         $result = $this->db->insert($total_query);
    //
    //         if($result){
    //           // echo '<script language = "javascript">';
    //           // echo 'alert("Update Information Successfully");
    //           // location.href = "result.php"';
    //           // echo '</script>';
    //           $meg = "Successfully";
    //           return $meg;
    //         }
    //         else{
    //           // echo '<script language = "javascript">';
    //           // echo 'alert("Update Information Failed");
    //           // location.href = "result.php"';
    //           // echo '</script>';
    //           $meg = "Fail";
    //           return $meg;
    //         }
    //
    //       }
    // }

  }
 ?>
