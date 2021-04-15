<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Mensagem
include_once 'includes/mensagem.php';
?>



<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Clientes </h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>Nome Fantasia/Apelido</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['apelido']; ?></td>
                    <td><?php echo $dados['telefone']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                
                    <!-- Modal Structure (Materialize.css) -->
                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content">
                        <p>Devagar, amigão!</p>
                        <p>Você tem certeza que deseja excluir esse cliente?</p>
                        </div>
                        <div class="modal-footer">
                        
                        
                        <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                            <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                        
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Não, mudei de ideia</a>
                        </form>

                        </div>
                    </div>

                </tr>
                <?php endwhile; 
                      else: ?>

                      <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>

                      <?php
                      endif;
                      ?>
            </tbody>
            </thead>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>