<?php
class LoginForm extends DbConn
{
    public function checkLogin($myusername, $mypassword)
    {
        $conf            = new GlobalConf;
        $ip_address      = $conf->ip_address;
        $login_timeout   = $conf->login_timeout;
        $max_attempts    = $conf->max_attempts;
        $timeout_minutes = $conf->timeout_minutes;
        $attcheck        = checkAttempts($myusername);
        $curr_attempts   = $attcheck['attempts'];

        $datetimeNow = date("Y-m-d H:i:s");
        $oldTime     = strtotime($attcheck['lastlogin']);
        $newTime     = strtotime($datetimeNow);
        $timeDiff    = $newTime - $oldTime;

        try {

            $db          = new DbConn;
            $tbl_members = $db->tbl_members;
            $err         = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        $stmt = $db->conn->prepare("SELECT * FROM " . $tbl_members . " WHERE username = :myusername");
        $stmt->bindParam(':myusername', $myusername);
        $stmt->execute();

        // Gets query result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($curr_attempts >= $max_attempts && $timeDiff < $login_timeout) {

            //Too many failed attempts
            $success = "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>嘗試登入超過指定次數... 請在 " . $timeout_minutes . " 分鐘後再嘗試進行登入</div>";

        } else {

            //If max attempts not exceeded, continue
            // Checks password entered against db password hash
            if (password_verify($mypassword, $result['password']) && $result['verified'] == '1') {

                //Success! Register $myusername, $mypassword and return "true"
                $success = 'true';
                session_start();

                $_SESSION['username'] = $myusername;
                $_SESSION['password'] = $mypassword;

            } elseif (password_verify($mypassword, $result['password']) && $result['verified'] == '0') {

                //Account not yet verified
                $success = "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>您的會員帳號已寫入資料但，但在您完成帳號驗證之前，還無法登入控制台。</div>";

            } else {

                //Wrong username or password
                $success = "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>你輸入了錯誤的帳號或密碼</div>";

            }
        }
        return $success;
    }

    public function insertAttempt($username)
    {
        try {
            $db            = new DbConn;
            $conf          = new GlobalConf;
            $tbl_attempts  = $db->tbl_attempts;
            $ip_address    = $conf->ip_address;
            $login_timeout = $conf->login_timeout;
            $max_attempts  = $conf->max_attempts;

            $datetimeNow   = date("Y-m-d H:i:s");
            $attcheck      = checkAttempts($username);
            $curr_attempts = $attcheck['attempts'];

            $stmt = $db->conn->prepare("INSERT INTO " . $tbl_attempts . " (ip, attempts, lastlogin, username) values(:ip, 1, :lastlogin, :username)");
            $stmt->bindParam(':ip', $ip_address);
            $stmt->bindParam(':lastlogin', $datetimeNow);
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $curr_attempts++;
            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        //Determines returned value ('true' or error code)
        $resp = ($err == '') ? 'true' : $err;

        return $resp;

    }

    public function updateAttempts($username)
    {
        try {
            $db              = new DbConn;
            $conf            = new GlobalConf;
            $tbl_attempts    = $db->tbl_attempts;
            $ip_address      = $conf->ip_address;
            $login_timeout   = $conf->login_timeout;
            $max_attempts    = $conf->max_attempts;
            $timeout_minutes = $conf->timeout_minutes;

            $att           = new LoginForm;
            $attcheck      = checkAttempts($username);
            $curr_attempts = $attcheck['attempts'];

            $datetimeNow = date("Y-m-d H:i:s");
            $oldTime     = strtotime($attcheck['lastlogin']);
            $newTime     = strtotime($datetimeNow);
            $timeDiff    = $newTime - $oldTime;

            $err = '';
            $sql = '';

            if ($curr_attempts >= $max_attempts && $timeDiff < $login_timeout) {

                if ($timeDiff >= $login_timeout) {

                    $sql           = "UPDATE " . $tbl_attempts . " SET attempts = :attempts, lastlogin = :lastlogin where ip = :ip and username = :username";
                    $curr_attempts = 1;

                }

            } else {

                if ($timeDiff < $login_timeout) {

                    $sql = "UPDATE " . $tbl_attempts . " SET attempts = :attempts, lastlogin = :lastlogin where ip = :ip and username = :username";
                    $curr_attempts++;

                } elseif ($timeDiff >= $login_timeout) {

                    $sql           = "UPDATE " . $tbl_attempts . " SET attempts = :attempts, lastlogin = :lastlogin where ip = :ip and username = :username";
                    $curr_attempts = 1;

                }

                $stmt2 = $db->conn->prepare($sql);
                $stmt2->bindParam(':attempts', $curr_attempts);
                $stmt2->bindParam(':ip', $ip_address);
                $stmt2->bindParam(':lastlogin', $datetimeNow);
                $stmt2->bindParam(':username', $username);
                $stmt2->execute();

            }

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        //Determines returned value ('true' or error code) (ternary)
        $resp = ($err == '') ? 'true' : $err;

        return $resp;

    }

}