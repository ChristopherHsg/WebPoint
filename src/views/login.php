<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>WebPoint</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
            <span class="font-weight-light"><strong>WebPoint </strong></span>
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email"
                        class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
                        value="<?= $email ?>"
                        placeholder="Informe o e-mail" autofocus>
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password"
                        class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>"
                        placeholder="Informe a senha">
                    <div class="invalid-feedback">
                        <?= $errors['password'] ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-primary">Entrar</button>
            </div>
        </div>
    </form>
</body>
</html>