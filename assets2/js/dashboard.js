function refreshStatusMeja(){
	$.ajax({
		url:"getStatusMeja",
		success:function(data) {
			var meja=JSON.parse(data);
			for(var i=0; i<meja.length; i++){
				var no_meja = parseInt(meja[i]["no_meja"]);
				var statusmeja = parseInt(meja[i]["status"]);
				var selmeja=$("#meja-"+no_meja);
				if(statusmeja != 0){
					if (!selmeja.hasClass("reservedtable")){
						selmeja.addClass("reservedtable");
					}
				} else {
					if (selmeja.hasClass("reservedtable")){
						selmeja.removeClass("reservedtable");
					}
				}
			}
		}
	});
	setTimeout(refreshStatusMeja, 1000);
}
$(document).ready(function() {
	refreshStatusMeja();
});