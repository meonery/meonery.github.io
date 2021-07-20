let url = 'https://api.oilpriceapi.com/v1/prices/latest'
let url2 = 'https://api.oilpriceapi.com/v1/prices/latest?by_code=WTI_USD'
const headers = {
'Authorization': 'Token 6f2b7e6f35d2846befd06f3e3b8f7f88',
'Content-Type': 'application/json'
}

var table = $('#table-oil-price');
var tbody = table.find('tbody');
var tfoot = table.find('tfoot');

$('#table-result').show();

fetch(url, { headers })
  .then(response => response.json())
  .then(price => {

  	$('#table-result').parents('tr').remove();

	var code = price.data['code'].split('_').join(' ').replace('USD','');
	var presyo = price.data['formatted'];
	var time = new Date(price.data['created_at']).toLocaleTimeString();
	var date = new Date(price.data['created_at']).toUTCString();
	
    var tr = $('<tr>');
    tr.append('<td>' + code + '</td>');
    tr.append('<td>' + presyo + '</td>');
    tr.append('<td>' + time + '</td>');
    tbody.append(tr);

    var trf = $('<tr>');
    trf.append('<td colspan="3" class="text-left">' + date + '</td>');
    tfoot.append(trf)
  })

fetch(url2, { headers })
  .then(response => response.json())
  .then(price => {

  	$('#table-result').parents('tr').remove();

	var code = price.data['code'].split('_').join(' ').replace('USD','');
	var presyo = price.data['formatted'];
	var time = new Date(price.data['created_at']).toLocaleTimeString();
	var date = new Date(price.data['created_at']).toUTCString();
	
    var tr = $('<tr>');
    tr.append('<td>' + code + '</td>');
    tr.append('<td>' + presyo + '</td>');
    tr.append('<td>' + time + '</td>');
    tbody.append(tr);
  })
  