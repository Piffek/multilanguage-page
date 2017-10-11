<?php
function addText(string $text){
    if(isset($_SESSION['user_id'])){
		echo '<a class="linkToChange" href="/?id=1">Edytuj</a>';
    }
	if(isset($_GET['id'])){
		echo '
		<div id="loginForm">
			<form method="post" action="/admin/updateText">
				<input name="text" value="'.$text.'">
				<input type="submit" value="wyslij">
			</form>
		</div>
			';
    }
}
	