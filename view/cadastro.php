<!DOCTYPE HTML>
<html>

<?php include("header.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do Aluno" required autofocus>
                <input class="form-control" type="text" id="nascimento" name="nascimento" placeholder="Data de nascimento" required>
                <input class="form-control" type="text" id="disciplina" name="disciplina" placeholder="Sua disciplina" required>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

    <script language="javascript" type="text/javascript">
        

    </script>
</body>

</html>
