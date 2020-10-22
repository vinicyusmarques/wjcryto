<!DOCTYPE html>
            <html lang="pt-BR">
            <head>
                <meta charset="UTF-8">
                <title>Nova Conta</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            </head>
            <body>
            <div class="container">
                <div class="jumbotron">
                    <h1>Nova Conta</h1>
                </div>
                <form action="/save" method="post">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="document">CPF</label>
                        <input type="text" id="document" name="document" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="documentAdd">RG</label>
                        <input type="text" id="documentAdd" name="documentAdd" class="form-control">
                    </div>
                    <label for="birthDate">Nascimento</label>
                    <input type="date" id="birthDate" name="birthDate" class="form-control">
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="andress">Endereço</label>
                        <input type="text" id="andress" name="andress" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="numberAccount">Número da Conta</label>
                        <input type="number" id="numberAccount" name="numberAccount" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="text" id="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                    <button class="btn btn-success" >Salvar</button>
                    </div>
                </form>
            </div>
            </body>
            </html>