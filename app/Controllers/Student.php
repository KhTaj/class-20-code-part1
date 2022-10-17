<?php

namespace Project\Controllers;

class Student{
    public $id;
    public $name;

    public function __construct(){
        session_start();
    }

    public function store(array $data){
        // session_start();      
        $_SESSION['students'][] = $data;
        $_SESSION['message'] = 'Successfully Created';
        }

        public function details(int $id)
        {     
             return $_SESSION['students'][$this->findIndex($id)];

    }

    public function update(array $data, int $id)
    {
        $_SESSION['students'][$this->findINdex($id)] = $data;
        $_SESSION['message'] = 'Successfully Updated';
    }

    public function destroy(int $id){
      
      unset( $_SESSION['students'][$this->findIndex($id)]);
        $_SESSION['message'] = 'Successfully Deleted';
    }

    public function findIndex(int $id)
    {
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