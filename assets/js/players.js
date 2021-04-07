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