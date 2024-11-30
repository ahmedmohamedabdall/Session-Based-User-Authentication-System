<?Php

class login extends dbh
{

    protected function getuser($uid, $pwd)
    {
        $stmt = $this->conectdb()->prepare("SELECT pwd FROM login WHERE uid=? OR email=? ;");
       

     if (!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header('location:../html_page.php?error= first_stmt_failed');
            exit();
        }
    if ($stmt->rowcount()==0) {
    $stmt = null;
header('location:../html_page.php?error= first_rowcount_failed');
exit();

}
        $pwdhash = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $chek_pwd = password_verify($pwd, $pwdhash[0]["pwd"]);
if ($chek_pwd==false) {
    $stmt = null;
    header('location:../html_page.php?error= check_pwd_failed');
    exit();

}elseif($chek_pwd==true){
    $stmt = $this->conectdb()->prepare("SELECT * FROM login WHERE uid=? OR email=? AND pwd=?;");

if (!$stmt->execute(array($uid,$uid,$pwd))) {
    $stmt = null;
    header('location:../html_page.php?error= second_stmt_failed');
    exit();
}
if ($stmt->rowcount() == 0) {
    $stmt = null;
    header('location:../html_page.php?error= second_rowcount_failed');
    exit();

}
$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['USERID'] = $user[0]['id'];
            $_SESSION['USERUID'] = $user[0]['uid'];
            $stmt = null;




}

        $stmt = null;

    }

    

}

        


