<?php include_once("includes/header.php") ?>

<div class="bg-hero">
    <div class="bg-overlay"></div>
    <div class="bg-cover" data-stellar-background-ratio="0.5">
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <div class="tabulation">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a role="tab" data-toggle="tab">Informações Comprador</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="passagens">
                                    <form id="formClient" action='compras.php' method='post'>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-field">
                                                    <label for="from">Nome do Comprador:</label>
                                                    <input type="text" class="form-control" id="nome" name="nome" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-field">
                                                    <label for="from">CPF / CNPJ:</label>
                                                    <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-field">
                                                    <label for="from">Telefone:</label>
                                                    <input type="text" class="form-control" id="telefone" name="telefone" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-field">
                                                    <label for="from">Email:</label>
                                                    <input type="text" class="form-control" id="email" name="email" />
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="from">CEP:</label>
                                                <input type="text" class="form-control" id="cep" name="cep" />
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-field">
                                                    <label for="from">Endereço:</label>
                                                    <input type="text" class="form-control" id="endereco" name="endereco" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-field">
                                                    <label for="from">Número:</label>
                                                    <input type="text" class="form-control" name="numero" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="input-field">
                                                    <label for="from">Bairro:</label>
                                                    <input type="text" class="form-control" id="bairro" name="bairro" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-field">
                                                    <label for="from">Cidade:</label>
                                                    <input type="text" class="form-control" id="cidade" name="cidade" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-field">
                                                    <label for="from">UF:</label>
                                                    <input type="text" class="form-control" id="uf" name="uf" />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="hidden-inputs">
                                            <input type="hidden" id='origem' name='origem' value="<?php echo $_GET['origem'] ?>" />
                                            <input type="hidden" id='destino' name='destino' value="<?php echo $_GET['destino'] ?>" />
                                            <input type="hidden" id='data_ida' name='data_ida' value="<?php echo $_GET['data_ida'] ?>" />
                                            <input type="hidden" id='data_volta' name='data_volta' value="<?php echo $_GET['data_volta'] ?>" />
                                            <input type="hidden" id='classe' name='classe' value="<?php echo $_GET['classe'] ?>" />
                                            <input type="hidden" id='adultos' name='adultos' value="<?php echo $_GET['adultos'] ?>" />
                                            <input type="hidden" id='criancas' name='criancas' value="<?php echo $_GET['criancas'] ?>" />
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Concluir">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("includes/footer.php") ?>