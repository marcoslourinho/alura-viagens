<?php include_once("includes/header.php") ?>

<div class="bg-hero">
    <div class="bg-overlay"></div>
    <div class="bg-cover">
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="info2">
                        <div class="col-sm-6">
                            <h2>Alura Viagens</h2>
                            <h3>Encontre passagens aéreas com os melhores preços na Alura Viagens</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="tabulation">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a role="tab" data-toggle="tab">Passagens</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="passagens">
                                    <form id="formTrip" action='cliente.php' method='get'>
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Origem:</label>
                                                    <input type="text" class="form-control" id="origem" name="origem" placeholder="São Paulo, SP" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Destino:</label>
                                                    <input type="text" class="form-control" id="destino" name="destino" placeholder="Rio de Janeiro, RJ" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Ida:</label>
                                                    <input type="date" class="form-control" id="data_ida" name="data_ida" placeholder="dd/mm/yyyy" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Volta:</label>
                                                    <input type="date" class="form-control" id="data_volta" name="data_volta" placeholder="dd/mm/yyyy" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Classe:</label>
                                                    <select class="cs-select cs-skin-border" id="classe" name="classe">
                                                        <option value="economica" selected>Econômica</option>
                                                        <option value="economica_premium">Econômica Premium</option>
                                                        <option value="executiva">Executiva / Business</option>
                                                        <option value="primeira_classe">Primeira Classe</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adultos:</label>
                                                    <select class="cs-select cs-skin-border" id="adultos" name="adultos">
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Crianças:</label>
                                                    <select class="cs-select cs-skin-border" id="criancas" name="criancas">
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <button type='submit' class="btn btn-primary btn-block">Comprar</button>
                                            </div>
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

    <?php include_once("includes/footer.php") ?>