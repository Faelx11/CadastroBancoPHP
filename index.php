<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-dark">
                    <div class="container-fluid">
                        <a href="index.php" class="navbar-brand" style="color: #000">
                            <img src="img/bootstrap-solid.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            <font color="white">
                                Sistema Web
                            </font>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Cadastro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consulta.php">Consulta</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand">Cadastro do Usuario</span>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" class="row g-3" action="controller/ControllerCadastro.php?funcao=cadastro" id="form" name="form">
                    <div class="col-md-6">
                        <label for="txtEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="txtEmail" name="txtEmail" required>
                    </div>
                    <div class="col-md-6">
                        <label for="txtSenha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="txtSenha" name="txtSenha" required>
                    </div>
                    <div class="col-md-6">
                        <label for="txtEndereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="txtEndereco" name="txtEndereco" required>
                    </div>
                    <div class="col-md-6">
                        <label for="txtBairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="txtBairro" name="txtBairro" required>
                    </div>
                    <div class="col-md-6">
                        <label for="txtCep" class="form-label">Cep</label>
                        <input type="text" class="form-control" id="txtCep" name="txtCep" required>
                    </div>
                    <div class="col-md-6">
                        <label for="txtCidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="txtCidade" name="txtCidade" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cboEstado" class="form-label">Estado</label>
                        <select class="form-select" id="cboEstado" name="cboEstado">
                            <option selected disabled>Escolha</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>