<div class="container torneio">

	<div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col" style="">Team</th>
      <th scope="col" style="cursor: pointer;">Matches</th>
      <th scope="col" style="cursor: pointer;">Gols</th>
      <th scope="col" style="cursor: pointer;">Assists</th>
      <th scope="col" style="cursor: pointer;">Avrg</th>
    </tr>
  </thead>
  <?php
    foreach ($viewData as $p) {
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $p['name']; ?></th>
      <td><?php echo $p['matches']; ?></td>
      <td><?php echo $p['matches']; ?></td>
      <td><?php echo $p['goals']; ?></td>
      <td><?php echo $p['assists']; ?></td>
      <td><?php echo $p['average']; ?></td>
    </tr>
    <tr>
  </tbody>
  <?php } ?>
</table>
	</div>

</div>

