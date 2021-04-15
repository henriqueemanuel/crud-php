<?php
//Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo Cliente </h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome Completo</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="apelido" id="apelido">
                <label for="apelido">Nome Fantasia/Apelido</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cpf" id="cpf">
                <label for="cpf">CPF</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>

            
            <h3 class="light"> Endereço </h3>
            <div class="input-field col s12">
                <input type="text" name="cep" id="cep">
                <label for="cep">CEP</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco">
                <label for="endereco">Endereço</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="estado" id="estado">
                <label for="estado">Estado</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="complemento" id="complemento">
                <label for="complemento">Complemento</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="numero" id="numero">
                <label for="numero">Número</label>
            </div>

            
            <h3 class="light"> Informações Contato </h3>
            <div class="input-field col s12">
                <input type="text" name="nome_contato" id="nome_contato">
                <label for="nome_contato">Nome Completo Contato</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone_contato" id="telefone_contato">
                <label for="telefone_contato">Telefone Contato</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email_contato" id="email_contato">
                <label for="email_contato">Email Contato</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
            <a href="index.php" type="submit" class="btn green"> Lista de Clientes </a>
        </form>
    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>