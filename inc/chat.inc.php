<?php

// simple chat class
class SimpleChat {

    // DB variables
    var $sDbName;
    var $sDbUser;
    var $sDbPass;

    // constructor
    function SimpleChat() {
        //mysql_connect("localhost","username","password");
        $this->sDbName = 'new_test';
        $this->sDbUser = 'root';
        $this->sDbPass = '';
    }

    // adding to DB table posted message
    function acceptMessages() {
        if ($_COOKIE['member_name']) {
            if(isset($_POST['s_say']) && $_POST['s_message']) {
                $sUsername = $_COOKIE['member_name'];

                //the host, name, and password for your mysql
                $vLink = mysqli_connect("localhost", $this->sDbUser, $this->sDbPass);

                //select the database
                mysqli_select_db($vLink,$this->sDbName);

                $sMessage = mysqli_real_escape_string($vLink,$_POST['s_message']);
                if ($sMessage != '') {
                    mysqli_query($vLink,"INSERT INTO `s_chat_messages` SET `user`='{$sUsername}', `message`='{$sMessage}', `when`=UNIX_TIMESTAMP()");
                }

                mysqli_close($vLink);
            }
        }

        ob_start();
        require_once('chat_input.html');
        $sShoutboxForm = ob_get_clean();

        return $sShoutboxForm;
    }

    function getMessages() {
        $vLink = mysqli_connect("localhost", $this->sDbUser, $this->sDbPass);

        //select the database
        mysqli_select_db($vLink,$this->sDbName);

        //returning the last 15 messages
        $vRes = mysqli_query($vLink,"SELECT * FROM `s_chat_messages` ORDER BY `id` ASC LIMIT 15");

        $sMessages = '';

        // collecting list of messages
        if ($vRes) {
            while($aMessages = mysqli_fetch_array($vRes)) {
                $sWhen = date("H:i:s", $aMessages['when']);
                $sMessages .= '<div class="message">' . $aMessages['user'] . ': ' . $aMessages['message'] . '<span>(' . $sWhen . ')</span></div>';
            }
        } else {
            $sMessages = 'DB error, create SQL table before';
        }

        mysqli_close($vLink);

        ob_start();
        
        require_once('chat_begin.html');
        echo $sMessages;
        require_once('chat_end.html');
        return ob_get_clean();
    }
}

?>