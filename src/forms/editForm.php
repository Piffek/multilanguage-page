<?php
function addText(string $text, string $partial){
    if(isset($_SESSION['user_id'])){
        echo '<a class="'.$partial.'Edit" href="/?part='.$partial.'">Edytuj</a>';
        if(isset($_GET['part']) && $_GET['part'] === $partial){
    		echo '
        		<div id="loginForm">
        			<form method="post" action="/admin/updateText'.$partial.'">
        				<textarea name="text" >'.$text.'</textarea>
        				<input type="submit" value="wyslij">
        			</form>
        		</div>
			';
		}
    }
}
