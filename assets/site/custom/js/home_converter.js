var country_name = document.querySelector('#country_name');
var send_amount = document.querySelector('#send_amount');
var receive_amount = document.querySelector('#receive_amount');
var send_amount_currency = document.querySelector('#send_amount_currency');
var receive_amount_currency = document.querySelector('#receive_amount_currency');



	country_name.addEventListener("change", putDataToReceiveCurrency);

		function putDataToReceiveCurrency(){
			var splitContent = this.value.split('-');
			var weBuy = splitContent[0];
			var weSell = splitContent[1];
			var currency = splitContent[2];
			receive_amount_currency.value = currency;
			setAmountToSend(weBuy, weSell);
			setAmountToReceive(weBuy, weSell);
		}

		function setAmountToSend(weBuy, weSell){
			send_amount.onkeyup = function(){
				send_amount.value;
				receive_amount.value = send_amount.value / weSell;
			}
		}

		function setAmountToReceive(weBuy, weSell){
			receive_amount.onkeyup = function(){
				receive_amount.value;
				send_amount.value = receive_amount.value * weSell;
			}
		}



	// country = "";
	// send = "";

	// country_name.addEventListener('change', sendMoney);
	// send_amount.addEventListener('keypress', sendMoney);

		// function sendMoney(){
		// 	country = country_name.value;
		// 	send = send_amount.value;

		// 	setToSend();
		// }

		// function setToSend(){
		// 	var c = parseFloat(country);
		// 	var s = parseFloat(send);

		// 	var output = s/c;
		// 	receive_amount.value = output.toFixed(3);
		// }

// -------------------Currency Converter-------------------


var convert_from = document.querySelector('#convert_from');
var convert_to = document.querySelector('#convert_to');
var convert_amount = document.querySelector('#convert_amount');
var convert_output = document.querySelector('#convert_output');


// this.selectedOptions[0].getAttribute('data-set');
	from = "";
	to = "";
	amount = "";


	selected_from = "";
	selected_to = "";



	convert_from.addEventListener('change', convert);
	convert_to.addEventListener('change', convert);
	convert_amount.addEventListener('keyup', convert);

		var va = this.selectedOptions[0].getAttribute('data-set');

	function convert(){
		from = convert_from.value;
		to = convert_to.value;
		amount = convert_amount.value;

		selected_from = va;
		selected_to = convert_to.dataset.set;

		if (amount.length < 1) {
			amount = 0;
		}

		showConverted();
	}

	function showConverted(){
		var f = parseFloat(from);
		var t = parseFloat(to);
		var a = parseFloat(amount);
		
		var currency = f/t;
		var final = currency*a;
		var outputData = final.toFixed(3);
		convert_output.value = outputData;
	}