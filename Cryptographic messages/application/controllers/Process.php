<?php
class Process extends CI_Controller{

public function home(){
    $this->load->view('users/home.php');
}
public function encrypt_text(){

    $text=$this->input->post('text',true);    // Null is every thing in the post .....
    $this->load->library('encryption');
    $array['encryptext']=$this->encryption->encrypt($text);
    $this->load->view('users/encrypt.php',$array);
}
public function decrypt_text(){
    // store the users with out dublle informaton 
    $text=$this->input->post('text',true);    // Null is every thing in the post .....
    $this->load->library('encryption');
    $array['decryptext']=$this->encryption->decrypt($text);

    $this->load->view('users/decrypt.php',$array);
}

}
?>