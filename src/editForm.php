<?php

/**
* Add text of database to form.
* @param String $text
**/
function addText(string $text)
{
    if(isset($_SESSION['user_id'])){
        echo '
        <form method="post">
            <input name="text" value="'.$text.'">
            <input type="submit" value="wyslij">
        </form>';
    }else{
        return $text;
    }
}
