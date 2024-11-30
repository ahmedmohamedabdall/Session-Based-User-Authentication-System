<?Php



class signup extends dbh
{
    protected function checkuser($uid, $email)
    {
        $stmt = $this->conectdb()->prepare("SELECT uid FROM login where uid=? OR email=? ;");
        if (!$stmt->execute(array($uid, $email))) {
            $stmt=null;
            header('location:../html_page.php');
            exit;
        }
        //$resultchk;
        if ($stmt->rowcount() > 0) {
            $resultchk = false;
        } else {
            $resultchk = true;
        }
        return $resultchk;
    }

    protected function setuser($uid, $pwd, $email)
    {
        
        $stmt = $this->conectdb()->prepare("INSERT INTO  login (uid,pwd,email) values(?,?,?);");
        $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
        if (!$stmt->execute(array($uid, $hashpwd, $email))) {
            $stmt = null;
            header('location:../html_page.php');
            exit;
        }
        $stmt = null;

    }
}



?>






























?>