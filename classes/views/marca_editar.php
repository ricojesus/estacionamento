<?php
include_once ("../models/marca.php");
$marca = new marca();

if (isset($_GET["id"])){
    $marca = new marca($_GET["id"]);
}

?>

<br>
<section class="content">
    <div class="row justify-content-center align-items-center">
        <div class="col-6">
            <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
                <h4 class="card-title">Cadastro de Marcas de Fabricantes</h4>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form name="form1" role="form" method="POST" action="../controllers/marca_controller.php">
                <input type="hidden" name="txtId" value="<?php echo $marca->id ?>">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control form-control-sm" name="txtNome" value="<?php echo $marca->nome ?>">
                            </div>
                        </div>               
                    </div>
                </div>

                <div class="card-footer">
                <button type="submit" name="btnGravar" class="btn btn-sm btn-primary">Gravar</button>
                <a href="/estacionamento/classes/controllers/marca_controller.php" class="btn btn-outline-secondary btn-sm">Voltar</a>
                </div>            
            </form>
            <!-- /.Form end -->

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    document.form1.txtNome.focus();
</script>

