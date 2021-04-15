<?php 
//Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>

//Mensagem de erro
<script>
    window.onload = function() {
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
    };
</script>

<?php 
endif;
session_unset();
?>