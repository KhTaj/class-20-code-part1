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
        $index = $this->findIndex($id);
        return $_SESSION['students'][$index];

    }

    public function update($data, $id)
    {
        $students = $_SESSION['students'];
        // $studentInfo = null;
        foreach ($students as $key => $student){
             if($student['id'] == $id) {
            $_SESSION['students'][$key] = $data;
            }
        }
    

    }

    public function destroy($id){
      
      unset( $_SESSION['students'][$this->findIndex($id)]);
        $_SESSION['message'] = 'Successfully Deleted';
    }

    public function findIndex($id){
        $students = $_SESSION['students'];
        $index = null;
        foreach ($students as $key => $student){
        if($student['id'] == $id) {
        $index = $key;
    }
}
    return $index;
    }

    
}

?>