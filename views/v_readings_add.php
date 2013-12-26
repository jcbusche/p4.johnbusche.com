<?php if(isset($error)):?>
	<div class='error' align "center">

		You have submitted an empty article.
		<br><br>
	</div>

<?php else: ?>

<div>

	<form method='POST' action='/readings/r_add'>

			Article Title: <br>
			<input type="text" name = 'title' required placeholder = "You must enter a title"><br>
	    	Place article text here:<br>
	    	<textarea name = "content"  rows = "10" cols = "50" required placehold = "You must enter article text">Place the text for your article here</textarea>

	    	<br><br>
	    	<input type='submit' value='Save'>
	</form> 
</div>

<?php endif; ?>