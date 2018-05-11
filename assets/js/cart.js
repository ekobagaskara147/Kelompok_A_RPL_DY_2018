
function addCartItem(idItem, namaItem, harga){
	var row = "<tr>";
	row += "<td width=\"50%\">"+namaItem+"</td>";
	row += "<td width=\"20%\" id=\"harga-item-"+idItem+"\">"+harga+"</td> ";
	row += "<td width=\"5%\"><input style=\"width:30px;\" type=\"text\" name=\"banyak\" id=\"qty-item-"+idItem+"\" idItem=\""+idItem+"\"></td>";
	row += "<td width=\"20%\" id=\"harga-total-item-"+idItem+"\">0</td>";
	row += "<td width=\"5%\"><button type=\"button\" class=\"btn btn-danger\">X</button></td>";
	row += "</tr>";
	var isi_cart = $("#cart-table").html();
	isi_cart += row;
	$("#cart-table").html(isi_cart);
	// event ganti jumlah
	var sel_id = "#qty-item-"+idItem;
	$(sel_id).on('input', function(){
		var idItem = $(this).attr("idItem");
		var harga = $("#harga-item-"+idItem).html();
		var qty = $("#qty-item-"+idItem).val();
		var total = harga * qty;
		$("#harga-total-item-"+idItem).html(total.toString());
	});
}

$(document).ready(function(){
	$(".style-button-pesan").click(function(){
		var idItem = $(this).attr("idItem");
		var item = $(this).attr("namaItem");
		var harga = $(this).attr("harga");
		addCartItem(idItem, item, harga);
	});
});
