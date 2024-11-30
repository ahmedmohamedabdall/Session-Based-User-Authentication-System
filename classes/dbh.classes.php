<?PHP
class dbh
{

    protected function conectdb()
    {
        try {

            $dbhost = 'localhost';
            $dbname = 'signupforms';
            $dbuser = 'root';
            $dbpassword ='';

            $db = new PDO("mysql:hostname=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;

        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
            die();
        }

    }


}
?>