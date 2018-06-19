<br>
    <!-- Main content -->
    <form role="form" action="">
    <section class="content">
      <div class="row justify-content-center align-items-center">
        <div class="col-6">
          <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
              <h4 class="card-title">Lista de Usuários</h4>
            </div>
            <!-- /.card-header -->
            <!-- card-body -->             
            <div class="card-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th>Login</th>
                  <th width="30px">Ação</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  /*                  
                  foreach ($lista as $row){
                    echo '<tr>';
                    echo '<td>' . $row["nome"] . '</td>';
                    echo '<td>' . $row["login"] . '</td>';
                    echo '<td align="center" >';
                    echo '<a href="../controllers/usuario_controller.php?action=editar&id=' . $row["id"] .  '" class="btn-sm btn-success fa fa-edit" class="confirmation" >Editar</a>';
                    echo '</tr>';
                  }
                  */
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <a href="/estacionamento/classes/controllers/usuario_controller.php?action=novo" class="btn btn-primary">Novo</a>
            </div>             
          </div>
        </div>
      </div>

    </section>
    </form>
    <!-- Main content -->

<script type="text/javascript">
  $('#tbCandidate').DataTable( {
    responsive: true
} );
</script>

<!-- page script -->