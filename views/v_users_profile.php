<?php if($user): ?>
	<div id = 'title' class = "header">
    	<h2>Welcome to your profile, <?=$user->first_name?>.  Here you can view and delete your readings.</h2>
    </div>

    <div id = 'articles' class = "input">

	    <?php $posts_reverse = array_reverse($posts); ?>
	    <?php foreach($posts_reverse as $post):?> 
		

			<article>

			    <p><?=$post['title']?></p>

			    <script src = "../js/read.js.php">
			    	var words = '<?=$post["content"]?>';
			    </script>

			    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			        <?=Time::display($post['created'])?>
			    </time>
			    <form>
			    	<label for = "chunksize">Words per chunk</label>
			        <select id = "chunksize">
			            <option value= 1 selected >1</option>
			            <option value= 2 > 2 </option>
			            <option value= 3 > 3 </option>
			            <option value= 4 > 4 </option>
			            <option value= 5 > 5 </option>
			            <option value= 6 > 6 </option>
			            <option value= 7 > 7 </option>
			            <option value= 8 > 8 </option>
			            <option value= 9 > 9 </option>
			            <option value= 10 > 10 </option>
			        </select>
			        <label for = "speed">Chunks per minute</label>
			        <select id = "speed">
			            <option value= 60 selected >60</option>
			            <option value= 70 > 70 </option>
			            <option value= 80 > 80 </option>
			            <option value= 90 > 90 </option>
			            <option value= 100 > 100 </option>
			            <option value= 110 > 110 </option>
			            <option value= 120 > 120 </option>
			            <option value= 130 > 130 </option>
			            <option value= 140 > 140 </option>
			            <option value= 150 > 150 </option>
			            <option value= 160 > 160 </option>
			            <option value= 170 > 170 </option>
			            <option value= 180 > 180 </option>
			            <option value= 190 > 190 </option>
			            <option value= 200 > 200 </option>
			            <option value= 210 > 210 </option>
			            <option value= 220 > 220 </option>
			            <option value= 230 > 230 </option>
			            <option value= 240 > 240 </option>
			            <option value= 250 > 250 </option>
			            <option value= 260 > 260 </option>
			        </select>
			            
			        <input type = 'button' class = 'display-btn' id = 'saved' value = 'READ!'>
				    <br><br>
				</form>
				<form action="/readings/r_delete/<?=$post['post_id']?>" method="post">
						<input type="submit" name="delete" value="Delete"/>
				</form>

			</article>

		<?php endforeach; ?>

	</div>

	<div id = 'display'>Your text will appear here.</div>

	<script src = "../js/read.js.php"></script>


<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>