<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Select
if(isset($_GET['id'])):
    $id         = mysql_escape_string($connection, $_GET['id']);
    $sql        = "SELECT * FROM clientes WHERE id = 'id'";
    $resultado  = mysqli_query($connect, $sql);
    $dados      = mysqli_fetch_array($resultado);
endif;    
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Cliente </h3>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                <label for="nome">Nome Completo</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="apelido" id="apelido" value="<?php echo $dados['apelido'];?>>
                <label for="apelido">Nome Fantasia/Apelido</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf'];?>>
                <label for="cpf">CPF</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone'];?>>
                <label for="telefone">Nome Completo</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email'];?>>
                <label for="email">Email</label>
            </div>

            <!-- Aqui inserir um título ENDEREÇO -->
            <div class="input-field col s12">
                <input type="text" name="cep" id="cep" value="<?php echo $dados['cep'];?>>
                <label for="cep">CEP</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco'];?>>
                <label for="endereco">Endereço</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="estado" id="estado" value="<?php echo $dados['estado'];?>>
                <label for="estado">Estado</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="complemento" id="complemento" value="<?php echo $dados['complemento'];?>>
                <label for="complemento">Complemento</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade'];?>>
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="numero" id="numero" value="<?php echo $dados['numero'];?>>
                <label for="numero">Número</label>
            </div>

            <!-- Aqui inserir um título CONTATOS -->
            <div class="input-field col s12">
                <input type="text" name="nome_contato" id="nome_contato" value="<?php echo $dados['nome_contato'];?>>
                <label for="nome_contato">Nome Completo</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone_contato_contato" id="telefone_contato" value="<?php echo $dados['telefone_contato'];?>>
                <label for="telefone_contato">Telefone</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email_contato" id="email_contato" value="<?php echo $dados['email_contato'];?>>
                <label for="email_contato">Email</label>
            </div>

            <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
            <a href="index.php" type="submit" class="btn green"> Lista de Clientes </a>
        </form>
    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>