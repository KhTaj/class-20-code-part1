<?php

namespace Project\Controllers;

class Student{
    public $id;
    public $name;

    public function __construct(){
        session_start();
    }

    public function store($data){
        // session_start();      
        $_SESSION['students'][] = $data;
        $_SESSION['message'] = 'Successfully Created';
        }

        public function details($id)
        {
            // echo '<pre>';
            // print_r($_SESSION['students']);
            
        $students = $_SESSION['students'];
        $studentInfo = null;
        foreach ($students as $key => $student){
        if($student['id'] == $id) {
        $studentInfo = $_SESSION['students'][$key];
    }
}
    return $studentInfo;

    }

    public function update($data, $id){
        
    }

    public function destroy($id){
        $students = $_SESSION['students'];
        foreach ($students as $key => $student) {
            if($student['id'] == $id){
                unset($_SESSION['students'][$key]);
            }
        }
        $_SESSION['message'] = 'Successfully Deleted';
    }



    
}

?>