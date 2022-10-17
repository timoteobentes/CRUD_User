<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../components/css/style.css">

    <title>Sistema - Cadastro</title>
</head>
<body>
    <header>
        <img src="../../components/imgs/BENTECH_LOGO .png" class="logo" alt="Logo">
        <div class="user">
            <span>Usuário</span>
            <ion-icon name="power"></ion-icon>
        </div>
    </header>

    <main>
        <form action="../../controller/inserir.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" id="nome">
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="cpf">CPF</label>
                <input class="form-control" type="text" name="cpf" id="cpf">
            </div>
            <button class="btn btn-primary mb-3" type="submit">Cadastrar</button>
        </form>
    </main>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>