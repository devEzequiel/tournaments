<div class="container my-5">
    <form action="">
        <div class="row">
            <div class="col-md-5 mb-3 sel">
                <select class="form-select" aria-label="Default select example" id="sel1">
                    <option value="" selected disabled>Selecione um time ...</option>

                    <?php foreach ($viewData as $team) {
                        ?>
                        <option value="<?php echo $team['team_name']; ?>"><?php echo $team['team_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-2 mb-3" style="margin: auto">
                <h3>X</h3>
            </div>
            <div class="col-md-5 sel" style="">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="sel2">
                    <option value="" selected disabled>Selecione um time ...</option>

                    <?php foreach ($viewData as $team) {
                        ?>
                        <option value="<?php echo $team['team_name']; ?>"><?php echo $team['team_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php if (isset($_GET['insert'])) { ?>
                <div class="row mt-3 ml-3">
                    <div class="alert alert-success" role="alert" id="msg3">Dados salvos com Sucesso!</div>
                </div>
            <?php } ?>
    </form>
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

                <table class="table" id="table2"
                       style="width: 460px; margin-top: 60px; margin-left: 100px; display: inline-table;">
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
                <div class="submit2"><input type="submit" id="subbut" style="margin-top: 20px; margin-left: 120px;"
                                            value="Salvar Partida"></div>
        </div>

        </form>

    </div>
</div>