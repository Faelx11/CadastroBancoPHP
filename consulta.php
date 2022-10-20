<?php
require_once("controller/ControllerCadastro.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        function confirmDelete(delUrl) {
            if (confirm("Deseja apagar o registro?")) {
                document.location = delUrl;
                //var url_string = "http://localhost/agendamento-mysql/" + delUrl;
                //var url = new URL(url_string);
                //var data = url.searchParams.get("id"); //pega o value
            }
        }
    </script>
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
                                    <a class="nav-link" aria-current="page" href="index.php">Cadastro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="consulta.php">Consulta</a>
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
                        <span class="navbar-brand">Consulta do Usuario</span>
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
                <?php
                $controller = new ControllerCadastro();
                $resultado = $controller->listar(0);
                //print("ola");
                if (count($resultado) <= 0) {
                } else {

                ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">Senha</th>
                                <th class="remove-endereco" scope="col">Endereco</th>
                                <th class="remove-bairro" scope="col">Bairro</th>
                                <th class="remove-cep" scope="col">Cep</th>
                                <th class="remove-cidade" scope="col">Cidade</th>
                                <th class="remove-estado" scope="col">Estado</th>
                                <th class="" scope="col"></th>
                            </tr>
                        </thead>
                        <!--
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <button type="button" class="btn btn-dark">Editar</button>
                                <button type="button" class="btn btn-dark">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>
                                <button type="button" class="btn btn-dark">Editar</button>
                                <button type="button" class="btn btn-dark">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>
                                <button type="button" class="btn btn-dark">Editar</button>
                                <button type="button" class="btn btn-dark">Excluir</button>
                            </td>
                        </tr>
                    </tbody>
                    -->

                        <tbody id=TableData>
                            <?php
                            $controller = new ControllerCadastro();
                            $resultado = $controller->listar(0);
                            //print("ola");

                            for ($i = 0; $i < count($resultado); $i++) {
                            ?>
                                <tr>
                                    <td scope="col"><?php echo $resultado[$i]['email']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['senha']; ?></td>
                                    <td class="remove-endereco" scope="col"><?php echo $resultado[$i]['endereco']; ?></td>
                                    <td class="remove-bairro" scope="col"><?php echo $resultado[$i]['bairro']; ?></td>
                                    <td class="remove-cep" scope="col"><?php echo $resultado[$i]['cep']; ?></td>
                                    <td class="remove-cidade" scope="col"><?php echo $resultado[$i]['cidade']; ?></td>
                                    <td class="remove-estado" scope="col"><?php echo $resultado[$i]['estado']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary" onclick="location.href='editar.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
                                        <button type="button" class="btn btn-outline-primary" onclick="javascript:confirmDelete('excluir.php?id=<?php echo $resultado[$i]['id']; ?>')" style="width: 72px;">Excluir</button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    <div class="col-12">
                        <a class="nav-link" href="index.php"><button class="btn btn-dark">Voltar</button></a>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>