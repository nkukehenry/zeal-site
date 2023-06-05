

	var country_id = document.getElementById('country_id');
	var check_is_forex = document.getElementById('check_is_forex');

	var insert_icon = document.getElementById('insert_icon');
	var is_forex = document.getElementById('is_forex');

	var dropdownL = document.getElementById('dropdownL');
	var item = document.querySelectorAll('.dropdown-item').forEach(function(li){
		li.onclick = function(){
			var values = li.dataset.content;
			// insert_icon.value = `fi fi-${values}`;
			insert_icon.value = `${values}`;
			dropdownL.innerHTML = values;
			
			country_id.value = li.value;

		}
	});
	check_is_forex.onchange = function(){
		is_forex.value = this.value;
	}