<div class="container">
	<div class="row" id="selects">
		<div class="" id="div1">
			<select class="sel select-team" id="sel1" style="float:left;">
				<option value="" selected disabled>Selecione um time ...</option>

				<?php foreach ($viewData as $team) {
				 ?>
				<option value="<?php echo $team['team_name']; ?>"><?php echo $team['team_name']; ?></option>
				<?php } ?>
			</select> 
		</div>

		<div class="" id="xis">
			<p>X</p>
		</div>

		<div class="" id="div2">
			<select id="sel2" class="sel select-team" >
				<option value="" selected disabled> Selecione um time ...</option>

				 <?php foreach ($viewData as $team) {
				 ?>
				<option value="<?php echo $team['team_name']; ?>"><?php echo $team['team_name']; ?></option>
				<?php } ?>
			</select> 
		</div>
		
	</div>
	<?php if(isset($_GET['insert'])){?>
		<div class="row"><div class="alert alert-success" role="alert" id="msg" >Dados salvos com Sucesso!</div></div>
	<?php } ?>
<div class="row">
	<div>
	<form method="POST" action="<?php echo BASE_URL; ?>match/addstats">
		<table class="table" id="table1" style="width: 460px; margin-top: 60px;  display: inline-table;">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Rate</th>
		      <th scope="col">Goals</th>
		      <th scope="col">Assists</th>
		    </tr>
		  </thead>
		  <tbody id="tables1">
		  </tbody>
		</table>
		
		<table class="table" id="table2" style="width: 460px; margin-top: 60px; margin-left: 100px; display: inline-table;">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Rate</th>
		      <th scope="col">Goals</th>
		      <th scope="col">Assists</th>
		    </tr>
		  </thead>
		  <tbody id="tables2">
		    
		  </tbody>
		</table>
		<div class="submit2"><input type="submit" style="margin-top: 20px; margin-left: 120px;" value="Salvar Partida"></div>
	</div>

	</form>
	
</div>
</div>