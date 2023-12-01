

var flag_send = document.getElementById('flag_send');
var flag_exchange_from = document.getElementById('flag_exchange_from');
var flag_exchange_to = document.getElementById('flag_exchange_to');

var option_send_to = document.getElementById('option_send_to');

var option_exchange_from = document.getElementById('option_exchange_from');
var option_exchange_to = document.getElementById('option_exchange_to');


    option_send_to.onchange = function(){
        flag_send.src = `assets/site/custom/flags/4x3/${this.value}.svg`;
    }

    option_exchange_from.onchange = function(){
        flag_exchange_from.src = `assets/site/custom/flags/4x3/${this.value}.svg`;
    }

    option_exchange_to.onchange = function(){
        flag_exchange_to.src = `assets/site/custom/flags/4x3/${this.value}.svg`;
    }