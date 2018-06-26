<br>
<section class="content">
    <div class="row justify-content-center align-items-center">
        <div class="col-4">
            <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
                <h4 class="card-title">Entrada de Veículos</h4>
            </div>
            <!-- /.card-header -->
<?php 
include_once ("../models/movimento.php");
$movimento = new Movimento();

if (isset($_GET["id"])){
    $movimento = new Movimento($_GET["id"]);
}
 ?>
            <!-- form start -->
            <form name="form1" role="form" method="POST" action="../controllers/movimento_controller.php">
                <input type="hidden" name="txtId" value="<?php echo $movimento->id ?>">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Placa</label>
                                <input type="text" class="form-control form-control-sm" name="txtPlaca" value="<?php echo $movimento->placa ?>">
                            </div>
                        </div>               
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tipo do Veículo</label>
                                <select class="form-control form-control-sm" name="cboTipoVeiculo">
                                </select>                            
                            </div>
                        </div>               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Marca</label>
                                <select class="form-control form-control-sm" name="cboTipoVeiculo">
                                    <option id=0>SELECIONE A MARCA</option>
                                    <?php
                                   foreach ($lstMarca as $marca){
                                      echo '<option id="' . $marca["id"] . '">' . $marca["nome"] . '</option>';
                                    }
                                    ?>
                                </select>                            
                            </div>
                        </div>               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" class="form-control form-control-sm" name="txtModelo">
                            </div>
                        </div>               
                    </div> -->

                </div>

                <div class="card-footer">
                <button type="submit" name="btnGravar" class="btn btn-sm btn-primary">Registrar Entrada</button>                
                <a href="/estacionamento/classes/controllers/movimento_controller.php?action=lista_ativos" class="btn btn-sm btn-success">Veículos no Patio</a>
                <a href="/estacionamento/" class="btn btn-outline-secondary btn-sm">Voltar</a>
                </div>            
            </form>
            <!-- /.Form end -->

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    document.form1.txtPlaca.focus();
</script>

