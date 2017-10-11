<?php
function addText(string $text){
    if(isset($_SESSION['user_id'])){
		echo '<a href="/?id=1">Zmień</a>';
    }
}
if(isset($_SESSION['user_id']) && isset($_GET['id'])){
		echo '<form method="post">
            <input name="text" value="'.$text.'">
            <input type="submit" value="wyslij">
			</form>';
    }
	