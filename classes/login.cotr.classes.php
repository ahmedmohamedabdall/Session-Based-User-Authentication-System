<?php
class logincontr extends login
{

    private $uid;
    private $pwd;
    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
  

    }
    public function login_user()
    {
        if ($this->is_input_empty() == false) {
            header('location:../login.php?error=empty_input');
            echo 'empty_input';
            exit();}
 
    


        $this->getuser($this->uid, $this->pwd);
    }

    private function is_input_empty()
    {
        // $result;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
 


}
