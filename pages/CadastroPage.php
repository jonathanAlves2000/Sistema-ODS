<?php
require './../db/redirectComLogin.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DooAraras</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./../assets/css/global.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg  da-header" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./../index.php">
                <img src="../assets/img/logoAraras.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                DooAraras
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./../index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Doações</a>
                    </li>
                </ul>
                <a class="btn btn-outline-warning" href="./loginPage.php">Entrar</a>
            </div>
        </div>
    </nav>
    <main class="container d-flex justify-content-center mt-3 da-text-color">
        <div class="border rounded p-4 bg-white shadow-sm" style="width: 500px; height: fit-content;">
            <h1>Cadastro</h1>
            <form action="./../db/cadastrarUser.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" placeholder="somente numeros" id="cpf" name="cpf" required maxlength="11">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required maxlength="11">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="cargo" class="form-label">Cargo</label>
                    <select name="cargo" id="cargo" class="form-select" required>
                        <option value="A">Administrador</option>
                        <option value="U" selected>Usuário Padrão</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>

                <p><a class="link-opacity-100" href="termosUsoPage.php">Termos de Uso</a></p>

                <hr>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="check" name="check" required>
                    <label class="form-check-label" for="check">Li e aceito os termos de uso</label>
                </div>
                <button type="submit" class="btn btn-success mb-3">Cadastrar</button>
            </form>
        </div>
    </main>
    <footer class="da-footer mt-3">
        <p>&copy; 2025 DooAraras.</p>
    </footer>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>