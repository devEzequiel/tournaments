//esconder as tabelas
$(document).ready(function(){
	$("#table1").hide();
	$("#table2").hide();
	$(".submit2").hide();
})
// receber a table do time 1
$(document).ready(function(){
	$("#sel1").on('change', function(){
		var time1 = this.value;
		$.ajax({
			data: {team: time1},
			datatype: 'json',
			url: 'http://localhost/GitHub/tournaments/match/showtable',
			type: 'GET'
		}).done(function(json){

			$("#table1").show();
			let count = json.length;
			console.log(json);
			let x;
			let html;
			for(x = 0; x<count; x++){
			html +=	'<tr><td scope="row">'+json[x]['name']+'</th><td><input class="text8" type="text" name="avrg'+json[x]['name']+'" placeholder="6.0"></td><td><input class="text8" type="text" name="goal'+json[x]['name']+'" placeholder="0"></td><td><input type="text" class="text8" name="assi'+json[x]['name']+'" placeholder="0"></td></tr>';
			}
			html += '<div class=""><input type="submit" class="btn"></div>';
			$("#tables1").html(html);
		});
	});
});

// receber a table do time 2
$(document).ready(function(){
	$("#sel2").on('change', function(){
		var time1 = this.value;
		$.ajax({
			data: {team: time1},
			datatype: 'json',
			url: 'http://localhost/GitHub/tournaments/match/showtable',
			type: 'GET'
		}).done(function(json){
			$("#table2").show();
			let count = json.length;
			let x;
			let html;
			for(x = 0; x<count; x++){
			html +=	'<tr><td scope="row">'+json[x]['name']+'</th><td><input class="text8" type="text" name="avrg'+json[x]['name']+'" placeholder="6.0"></td><td><input class="text8" type="text" name="goal'+json[x]['name']+'" placeholder="0"></td><td><input type="text" class="text8" name="assi'+json[x]['name']+'" placeholder="0"></td></tr>';
			}
			html += '<div class=""><input type="submit" class="btn"></div>';
			$("#tables2").html(html);
			$(".submit2").show();
		});
	});
});

//enviar dados do team1 para o backend
