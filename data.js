function countClicks(){
    console.log("Counting Start...");
    var counts = localStorage.getItem('click-counts');//You can use
    if (counts!==null){
        var newClick = parseInt(counts) + 1;
        localStorage.setItem('click-counts', newClick);
    }
    else{
        localStorage.setItem('click-counts', "1");
    }
   document.getElementById("showCounts").innerHTML = counts;
 }
