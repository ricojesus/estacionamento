<br>
<section class="content">
    <div class="row justify-content-center align-items-center">
        <div class="col-5">
            <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
                <h4 class="card-title">Cadastro de Usuários</h4>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form name="form1" role="form" method="POST" action="../controllers/usuario_controller.php">
                <input type="hidden" name="txtId" value="<?php echo $usuario->id ?>">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control form-control-sm" name="txtNome" value="<?php  ?>">
                            </div>
                        </div>               
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Login</label>
                                <input type="text" class="form-control form-control-sm" name="txtLogin" value="<?php  ?>">
                            </div>
                        </div> 
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control form-control-sm" name="txtSenha" value="<?php  ?>">
                            </div>
                        </div>       
                    </div>        
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm. Senha</label>
                                <input type="password" class="form-control form-control-sm" name="txtConfSenha" value="<?php  ?>">
                            </div>
                        </div>      
                    </div>         
                </div>

                <div class="card-footer">
                <button type="submit" name="btnGravar" class="btn btn-sm btn-primary">Gravar</button>
                <a href="/estacionamento/classes/controllers/usuario_controller.php" class="btn btn-outline-secondary btn-sm">Voltar</a>
                </div>            
            </form>
            <!-- /.Form end -->

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    document.form1.txtDescricao.focus();
</script>

