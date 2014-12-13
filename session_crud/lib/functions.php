<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 12/9/2014
 * Time: 10:06 PM
 */

function add_item_to_session($first_name='', $last_name=''){

    if ((empty($first_name))|| (empty($last_name))){
        return;
    }
    if(!array_key_exists('student', $_SESSION)){
        $_SESSION['student'] = array();
    }

    $length = count($_SESSION['student']);
    $_SESSION['student'][$length] = array('fname' => $first_name, 'lname' => $last_name);

}

function edit_item_to_session($new_fname, $new_lname, $index){

    $new_fname = $_POST['fname'];
    $new_lname = $_POST['lname'];
    $index= $_POST['id'];

    $_SESSION['student'][$index]['fname']=$new_fname;
    $_SESSION['student'][$index]['lname']= $new_lname;

}

function get_student_detail($index){
    $student = array('fname'=>$_SESSION['student'][$index]['fname'],
        'lname'=>$_SESSION['student'][$index]['lname']);

    return $student;
}

function filter_get_data($data){
    return $data;
}

function filter_post_data($data){

    if (!empty($data)){

        return $data;

    }else{
        echo '<span class="alert-danger">Please fill in all the fields.<br>None of these fields should remain empty.</span>';
        // header('location: http://localhost/basis/session_crud/add.php');
        die();
    }


}