/*
	Main Scripts
	* Look Don't Copy*
*/

$(document).ready(function () {
    
    
    // Ajax those results
	$.ajaxSetup ({ cache: false });
	var ajax_load = "<div style='text-align:center; margin: 25px 0;'><img src='includes/images/ajax-loader.gif' alt='loading...' /><p>This may take a few minutes.</p></div>";
	

	//	load() functions
	var loadUrl = "grab.php";
	$("#urlForm").submit(function(){
		var urltopass = $('#urlForm .txt').val();
		$("#results").html(ajax_load).load(loadUrl, "url=" + urltopass, function(responseText){
			$("#demo").wijgrid({
			    allowPaging: true,
			    pageSize: 25,
			    allowSorting: true,
			    columns: [
			        {},
			        { dataType: "number", dataFormatString: "n0" }
			    ]
			});	 
		});		
		return false; 
	});        
    
    
});