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
<div class="row">
	<form id="form1">
		<table class="table" id="table1" style="width: 460px; margin-top: 60px;">
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
		<div class=""><input type="submit" style="margin-top: 20px;" value="Salvar Dados"></div>
	</form>
	<form id="form2">
		<table class="table" id="table2" style="width: 460px; margin-top: 60px; margin-left: 100px;">
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
		<div class=""><input type="submit" style="margin-top: 20px; margin-left:110px" value="Salvar Dados"></div>
	</form>
</div>
</div>