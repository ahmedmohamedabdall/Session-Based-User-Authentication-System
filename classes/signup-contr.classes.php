<?php
class signupcontr extends signup
{

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;
    public function __construct($uid, $pwd, $pwdrepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;

    }
    public function signup_user()
    {
        if ($this->is_input_empty() == false) {
            header('location:../login.php?error=empty_input');
                        echo 'empty_input';
            exit();}
        if ($this->invaliduid() == false) {
            header('location:../login.php?error=invaliduid');
            echo 'invaliduid';

            exit();}

        if ($this->invalidemail() == false) {
            header('location:../login.php?error=invalidemail');
            echo 'invalidemail';

            exit();
        }
        if ($this->pwdmatch() == false) {
            header('location:../login.php?error=invalidpassword');
            echo 'invalidpassword';

            exit();}
        if ($this->uidtaken() == false) {
            header('location:../login.php?error=uidtaken');
            echo 'uidtaken';

            exit();}

        $this->setuser($this->uid, $this->pwd, $this->email);
    }

    private function is_input_empty()
    {
        // $result;
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function invaliduid()
    {
        // $result;
        if (!preg_match('/^[a-zA-Z0-9]*$/', $this->uid)) {
            return false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function invalidemail()
    {
        //  $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function pwdmatch()
    {
        // $result;
        if ($this->pwd!== $this->pwdrepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function uidtaken()
    {
        //   $result;
        if (!$this->checkuser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}
?>