
<footer id="pFooter" class="w3-bar w3-col l10 w3-right w3-light-gray">
	<a class="w3-bar-item">&copy; COA - Technical Service Office</a>
	<a class="w3-bar-item w3-right" href="developers.php">Contact Developer</a>
	<a class="w3-bar-item"><?php
		$time = microtime();
		$time = explode(' ', $time);
		$time = $time[1] + $time[0];
		$finish = $time;
		$total_time = round(($finish - $start), 4);
		echo 'Page generated in '.$total_time.' seconds.';?>
	</a>
</footer>
</body>
</html>
<script>
//for custom scrollbar
$(".p-scroll")
.niceScroll({
	cursorcolor:"#dddddd", 
	cursorwidth:"12px", 
	background:"#f1f1f1",
	opacity:"0.9", 
	cursorborder:"0px solid #ddd", 
	cursorborderradius:"5px",
	});
//datatable
$(document).ready(function(){
	$('#table_id').DataTable();
});
//dropdown
function dropdown(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {  
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
//tabs
function p_tab(cityName) {
    var i;
    var x = document.getElementsByClassName("p-tab-content");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}
//modal open
function p_modal(id) {
document.getElementById(id).style.display='block';
}
//modal close
function p_close(id) {
document.getElementById(id).style.display='none';
}
//for page resposiveness
function p_open_small_sidebar() {
    document.getElementById("pSidebar").style.display = "block";
	document.getElementById("pSidebar").classList.remove("w3-hide-small");
	document.getElementById("pContent").classList.add("w3-right");
	document.getElementById("pContent").classList.add("m9");
	document.getElementById("pContent").classList.remove("m12");
	document.getElementById("pContent").classList.add("l10");
	document.getElementById("pContent").classList.remove("l12");
	document.getElementById("pCloseSidebar").style.display = "block";
	document.getElementById("pOpenSidebar").style.display = "none";
}
function p_close_small_sidebar() {
    document.getElementById("pSidebar").style.display = "none";
	document.getElementById("pContent").classList.remove("w3-right");
	document.getElementById("pContent").classList.remove("m9");
	document.getElementById("pContent").classList.add("m12");
	document.getElementById("pContent").classList.remove("l10");
	document.getElementById("pContent").classList.add("l12");
	document.getElementById("pCloseSidebar").style.display = "none";
	document.getElementById("pOpenSidebar").style.display = "block";
}

function p_open_big_sidebar() {
    document.getElementById("pSidebar").style.display = "block";
	
	document.getElementById("pContent").classList.add("w3-right");
	document.getElementById("pFooter").classList.add("w3-right");
	
	document.getElementById("pContent").classList.add("l10");
	document.getElementById("pFooter").classList.add("l10");
	
	document.getElementById("pContent").classList.remove("l12");
	document.getElementById("pFooter").classList.remove("l12");
	
	document.getElementById("pCloseSidebar").style.display = "block";
	document.getElementById("pOpenSidebar").style.display = "none";
}
function p_close_big_sidebar() {
    document.getElementById("pSidebar").style.display = "none";
	
	document.getElementById("pContent").classList.remove("w3-right");
	document.getElementById("pFooter").classList.remove("w3-right");
	
	document.getElementById("pContent").classList.remove("l10");
	document.getElementById("pFooter").classList.remove("l10");
	
	document.getElementById("pContent").classList.add("l12");
	document.getElementById("pFooter").classList.add("l12");
	
	document.getElementById("pCloseSidebar").style.display = "none";
	document.getElementById("pOpenSidebar").style.display = "block";
}
//select all checkboxes
var select_all = document.getElementById("select_all"); //select all checkbox
var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

//select all checkboxes
select_all.addEventListener("change", function(e){
    for (i = 0; i < checkboxes.length; i++) { 
        checkboxes[i].checked = select_all.checked;
    }
});


for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
        //uncheck "select all", if one of the listed checkbox item is unchecked
        if(this.checked == false){
            select_all.checked = false;
        }
        //check "select all" if all checkbox items are checked
        if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
            select_all.checked = true;
        }
    });
}

//hide notifications
setTimeout(function() {
    $('#xrd').fadeOut('fast');
}, 1000); // <-- time in milliseconds
</script>	