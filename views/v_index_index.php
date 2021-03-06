

<div id = 'title' class = "header">
        <h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>
</div>
<div class = "header">
    <p><?=APP_NAME?> is a simple speed reading trainer. You can save text from articles to read later, or you can try it out without saving below.  Just pick how many words you want to be displayed in a chunk and how many chunks you want to be shown per minute.</p>
</div>
<br><br>
<!--Text input and options-->
<div id = 'text-input' class = 'articles'>
    <form >
        <p id = "stats"></p>
        <br><br>
        <textarea class = "input" id = 'toread'  rows = "10" cols = "50" required placeholder = "Place the text for your article here"></textarea>
        <br><br>
        <label for = "chunksize">Words per chunk</label>
        <select class = "input" id = "chunksize">
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
            
        <input type = 'button' class = 'display-btn' id = 'quick' value = 'READ!' onClick = 'reader($("#toread").val())'>
    </form>
    <script>
        $(".input").change(function() {
                stats($("#toread").val());
            });
    </script>
          
</div>

<div id = 'display'>Your text will appear here.</div>

	
