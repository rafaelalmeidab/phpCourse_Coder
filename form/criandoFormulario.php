<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<div class="titulo">Criando Formulário</div>

<h2>Cadastro</h2>

<?php
    if(count($_POST)>0){
        $erros[] = '';
        
        if(!filter_input(INPUT_POST, 'nome')){
            // echo "<script>alert('Campo Nome é obrigatório!')</script>";
            $erros['nome'] = "Campo Nome é obrigatório!";
        }
        if(filter_input(INPUT_POST, 'nascimento')){
            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
            if(!$data){
                // echo "<script>alert('Data não segue modelo dd/mm/aaaa!')</script>";
                $erros['nascimento'] = "Data não segue modelo dd/mm/aaaa.";
            }
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            // echo "<script>alert('Email inválido!')</script>";
            $erros['email'] = "Email inválido!";
        }
        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
            // echo "<script>alert('Site inválido!')</script>";
            $erros['site'] = "Site inválido!";
        }

        $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];
        if((!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig)) && $_POST['filhos'] != 0){
            // echo "<script>alert('Quantidade de filhos inválida!')</script>";
            $erros['filhos'] = "Quantidade de filhos inválida! (0-20)";
        }

        $salarioConfig = ["options" => ["decimal" => ","]];
        if((!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $filhosConfig)) && $_POST['salario'] < 0){
            // echo "<script>alert('Salário inválido!')</script>";
            $erros['salario'] = "Salário inválido!";
        }
        if($_POST['estadoCivil'] == ''){
            // echo "<script>alert('Campo Nome é obrigatório!')</script>";
            $erros['estadoCivil'] = "Campo Estado Civil é obrigatório!";
        }
    }
?>

<form action="#" method="post">
    <div class="row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : ''; ?>" id="inputNome" name="nome" placeholder="nome" value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback"><?= $erros['nome']; ?></div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''; ?>" id="inputNascimento" name="nascimento" placeholder="nascimento" value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento']; ?></div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : ''; ?>" id="inputEmailNome" name="email" placeholder="email" value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email']; ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : ''; ?>" id="inputSite" name="site" placeholder="site" value="<?= $_POST['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site']; ?></div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-3">
            <label for="filhos">Quantidade Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : ''; ?>" id="inputFilhos" name="filhos" placeholder="filhos" value="<?= $_POST['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos']; ?></div>
        </div>
        <div class="form-group col-md-3">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : ''; ?>" id="inputSalario" name="salario" placeholder="salário" value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario']; ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="estadoCivil">Estado Civil</label>
            <input type="text" class="form-control <?= $erros['estadoCivil'] ? 'is-invalid' : ''; ?>" id="inputEstadoCivil" name="estadoCivil" placeholder="estadoCivil" value="<?= $_POST['estadoCivil'] ?>">
            <div class="invalid-feedback"><?= $erros['estadoCivil']; ?></div>
        </div>
    </div>
    <button class="btn btn-primary">Enviar</button>
</form>