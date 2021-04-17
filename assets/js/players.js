jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ){
    if ( ns.includes("noPreventDefault") ) {
      this.addEventListener("touchstart", handle, { passive: false });
    } else {
      this.addEventListener("touchstart", handle, { passive: true });
    }
  }
};

//json and table population
function jsonHandle(json){
	let html = '';
	let count = json.length;
	let x = 0;

	for (var i = 0; i < count; i++) {

		switch(json[i]['team_id']){

			case '4':
				var team = 'Atalanta';
				break;
			case '7':
				var team = 'Bordeaux';
				break;
			case '9':
				var team = 'Angers';
				break;
			case '10':
				var team = 'Napoli';
				break;
			case '11':
				var team = 'Roma';
				break;
			case '12':
				var team = 'Lille';
				break;

		}

		switch(x){
			case 0:
				var id = 'tbf';
				break;
			case 1:
				var id = 'tbs';
				break;
			case 2:
				var id = 'tbt';
				break;
			default:
				id = '';
		}

		if(x<3){
			html += '<tbody id="stats"><tr id="'+id+'"><td scope="row">'+json[i]['name']+'</td><td>'+team+'</td><td>'+json[i]['matches']+'</td><td>'+json[i]['goals']+'</td><td>'+json[i]['assists']+'</td><td>';
			x++;
		} else {
			html += '<tbody><tr id=""><td scope="row">'+json[i]['name']+'</td><td>'+team+'</td><td>'+json[i]['matches']+'</td><td>'+json[i]['goals']+'</td><td>'+json[i]['assists']+'</td><td>';
		}

		if (json[i]['matches'] != 0) {
			html += json[i]['score']/json[i]['matches'];
		} else {
			html += 0;
		}

		html+= '</td></tr></tbody>'

	}
	count = 0;
	$('#stats').replaceWith(html);
}

//add new player
$(document).ready(function(){
	$('#form-player').on('submit', function(e){
		e.preventDefault();

		let nome = $('#formp').val();
		let gols = $('#formp0').val();
		let ass = $('#formp1').val();
		let matchez = $('#formp2').val();
		let time = $('#team_namm').val();
		let media = $('#formp3').val();
		$.ajax({
			data:{
					name: nome,
					goals: gols,
					assists: ass,
					matches: matchez,
					team: time,
					avrg: media
				},
			datatype: 'json',
			type: 'get',
			url: 'http://localhost/GitHub/tournaments/players/adicionar' 
		}).done(function(result){
			
			if (result == 0) {
				$('#team-msg').html('<div class="alert alert-success" id="msg" role="alert">Jogador adicionado com Sucesso! Recarregue a página.</div>');
			} else {
				$('#team-msg').html('<div class="alert alert-danger" id="msg" role="alert">Esse jogador já adicionado!</div>')
			}
		})
	})
})
//get all players from database and screens in a table
$(document).ready(function(){
	$.ajax({
		datatype: 'json',
		url: './home/stats',
		type: 'get'
	}).done(function(json){
		jsonHandle(json);
	})
})

//get all players ordered by goals when goal th has clicked
$(document).ready(function(){
	$('#b-goal').on('click', function(){
		$.ajax({
			datatype: 'json',
			url: './home/stats',
			type: 'get'
		}).done(function(json){
			jsonHandle(json);
		})

	})
})


//get all players by assists when click in the assists th
$(document).ready(function(){
	$('#b-assist').on('click', function(){
		$.ajax({
			datatype: 'json',
			url: './home/byAssists',
			type: 'get'
		}).done(function(json){
			$('#stats').replaceWith('');
			jsonHandle(json);
		})

	})
})

//get all players by average when click in the Media th
$(document).ready(function(){
	$('#b-avrg').on('click', function(){
		$.ajax({
			datatype: 'json',
			url: './home/byScore',
			type: 'get'
		}).done(function(json){
			jsonHandle(json);
		})

	})
})

//get all players by matches number when click in the Partidas th
$(document).ready(function(){
	$('#b-match').on('click', function(){
		$.ajax({
			datatype: 'json',
			url: './home/byMatches',
			type: 'get'
		}).done(function(json){
			jsonHandle(json);
		})
	})
})

