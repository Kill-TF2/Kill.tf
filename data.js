/*------------// By Using JQuery //----

$(function() {
var i = 0;
$('button').click(function() {
i++;
$("#count").val(i);
// run ajax to save this value dynamically into database 
});
});
--------------------------------*/

// By using javascript 
var i = 0;
function countClick() {
i++;
//alert('here');
document.getElementById("count").value = i ;
}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<button onClick="countClick()">Click Me</button><br>
Total Count<input type="text" id="count" disabled >
