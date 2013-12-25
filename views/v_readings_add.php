<?php if(isset($error)):?>
	<div class='error' align "center">

		You have submitted an empty article.
		<br><br>
	</div>

<?php else: ?>

<form method='POST' action='/readings/r_add'>



	<div>

		Article Title: <input type="text" name = 'title'><br>
    	Place article text here:<br>
    	<textarea name='content'></textarea>

    	<br><br>
    	<input type='submit' value='Save'>
	</div>
</form> 

<?php endif; ?>