<?php if($user): ?>
	<div id = 'title' class = "header">
    	<p>Welcome to your profile, <?=$user->first_name?>.  Here you can view and delete your readings. Hover over an article title to see how long it is and how long it will take you to read with your current options.</p>
    </div>

    <div id = 'articles' class = "articles">

    	<form>
    		<label for = "chunksize">Words per chunk</label>
			<select class = 'input' id = "chunksize">
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
			<select class = 'input' id = "speed">
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

		</form>

		<p id = 'stats'></p>
		<br><br>
		


	    <?php $posts_reverse = array_reverse($posts); ?>
	    <?php foreach($posts_reverse as $post):?> 


			<article>

			    <p id = "title" onmouseover = 'stats(<?php echo json_encode(str_replace("'", "&#39;", $post['content']))?>)'><?=$post['title']?></p> 		  		   

			    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			        <?=Time::display($post['created'])?>
			    </time>
			    <form>
			    				            
			        <input type = 'button' id = 'display-btn'  value = 'READ!' onclick = 'reader(<?php echo json_encode(str_replace("'", "&#39;", $post['content']))?>)'/>
			    
				</form>
				<form action="/readings/r_delete/<?=$post['post_id']?>" method="post">
						<input type="submit" name="delete" value="Delete"/>
				</form>

				

			</article>

		<?php endforeach; ?>

	</div>

	<div id = 'display'>Your text will appear here.</div>



	


<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>