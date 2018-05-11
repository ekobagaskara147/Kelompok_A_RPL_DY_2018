function calcAllTotal(){
	var alltotal = 0;
	var prices = document.getElementsByClassName("total-item-price");
	for (var x=0; x<prices.length; x++){
		alltotal += parseInt(prices[x].innerHTML);
	}
	$("#all-total").html(alltotal);
}

function addCartItem(idItem, namaItem, harga){
	if ($("#row-item-"+idItem).length > 0) {
		return
	} 
	var row = "<tr id=\"row-item-"+idItem+"\">";
	row += "<td width=\"50%\">"+namaItem+"</td>";
	row += "<td width=\"20%\" id=\"harga-item-"+idItem+"\">"+harga+"</td> ";
	row += "<td width=\"5%\"><input style=\"width:30px;\" type=\"text\" name=\"banyak\" class=\"qty-selector\" id=\"qty-item-"+idItem+"\" idItem=\""+idItem+"\"></td>";
	row += "<td width=\"20%\" id=\"harga-total-item-"+idItem+"\" class=\"total-item-price\">0</td>";
	row += "<td width=\"5%\"><button type=\"button\" class=\"btn btn-danger btn-remove-item\" idItem=\""+idItem+"\">X</button></td>";
	row += "</tr>";
	var isi_cart = $("#cart-table").html();
	isi_cart += row;
	$("#cart-table").html(isi_cart);
	// event ganti jumlah
	$(".qty-selector").on('input', function(){
		var idItem = $(this).attr("idItem");
		var val = $("#qty-item-"+idItem).val();
		var harga = $("#harga-item-"+idItem).html();
		var qty = val;
		var total = harga * qty;
		$("#harga-total-item-"+idItem).html(total.toString());
		$("#qty-item-"+idItem).attr("value", val);
		calcAllTotal();
	});
	//event remove item
	$(".btn-remove-item").on('click', function(){
		var idItem = $(this).attr("idItem");
		$("#row-item-"+idItem).remove();
		calcAllTotal();
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