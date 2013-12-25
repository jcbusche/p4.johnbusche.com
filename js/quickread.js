displayLoop = 0

$('#display-btn').click(function(){
    stopLoop();
    //Ensure that the loop won't nest and force speed;
    clearInterval(displayLoop);
    //Pull in text from text area and break it down into an array of words
    var words = $("#toread").val().split(' ');
    var numwords = words.length;
    
    //Pull in chunksize from selector; Cast value to avoid errors
    var chunksize = parseInt($("#chunksize").val());
    
    //Pull in speed from selector
    var cpm = parseInt($("#speed").val());
    
    //Counter to keep track of place in chunks array once the text is being displayed
    var counter = 0;
    
    //Counter to keep track of place in words array while chunks are being made
    var counter2 = 0;
    
    //Initialize array for chunks and fill it with empty strings to avoid having undefined indeces
    var chunks = [];
    for (k = 0; k < numwords/chunksize ; k ++){
        chunks[k] = "";
    }
    
    //Begin grouping all of the words in the words array into chunks
    for (i = 0; i< numwords; i+=chunksize) {
        //Check the number of words left to cover in the array
        var diff = numwords - i;
        
        //If the number of words left is greater than the selected chunk size, create the chunk
        //normally by inserting that many words into an index of the chunk array
        if (diff >= chunksize +1){
            for (j = 0; j < chunksize; j++) {
                chunks[counter2] = chunks[counter2]  + words[i + j] + " ";
            }
        }
        
        //If the nuumber of items left in the words array is less than the selected
        //chunk size, then add the remaining words to the last index of the chunk array.
        //It needs to be done this way to avoid missing the last few words or causing an
        //"index out of bounds" error
        else {
            for (j = 0; j< diff; j++){
                chunks[counter2] = chunks[counter2] + words[i + j] + " ";
            }
        }
        counter2 = counter2 + 1;
    }
    console.log(words);
    console.log(chunks);
    console.log(cpm);
    
    //Ensure that the loop won't nest and force speed;
    function stopLoop(){
        clearInterval(displayLoop);
    }
    //Loop through the chunk array to display the chunks one by one, displaying each one for a 
    //time determined by the speed selector    
    displayLoop = setInterval(function(){
        $('#display').text(chunks[counter]);
        counter = counter + 1 ;
     }, 60000/cpm);
});
        