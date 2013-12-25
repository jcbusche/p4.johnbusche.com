<?php if(isset($error)):?>
	<div class='error' align "center">

		You have submitted an empty article.
		<br><br>
	</div>

<?php else: ?>

<form method='POST' action='/readings/r_add'>



	<div>

		Article Title: <input type="text" name = 'title' id = 'title'>
    	<label for='content'>Place article text here:</label><br>
    	<textarea name='content' id='content'></textarea>

    	<br><br>
    	<input type='submit' value='Save'>
	</div>
</form> 

<?php endif; ?>