<div class="container">
	<form>
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
	</form>
</div>