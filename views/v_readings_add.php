<?php if(isset($error)):?>
	<div class='error' align "center">

		You have submitted an empty article.
		<br><br>
	</div>

<?php else: ?>

<div>

	<form method='POST' action='/readings/r_add'>

			Article Title: <br>
			<input type="text" name = 'title' rows = "10" cols = "50"><br>
	    	Place article text here:<br>
	    	<textarea name='content'></textarea>

	    	<br><br>
	    	<input type='submit' value='Save'>
	</form> 
</div>

<?php endif; ?>