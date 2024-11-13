<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class = "container">
    <h1 class = "mt-3 text-center">Cadastro de Produtos</h1>
    
        <form name="nome" method="post" action="cadastrar_produtos.php">
          <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text"></div>
          </div>

          <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" class="form-control" id="preco" name="preco" required>
          </div>
          
          <div class="mb-3">
              <label class="estoque" for="form-label">Estoque</label>
              <input type="email" class="form-control" id="estoque" name="estoque" required>
          </div>
          <!--Nunca esquecer de colocar os names!-->

          <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary" class="btn btn-primary">Cadastrar</button>
            <input type="reset"  class="btn btn-warning"value="Limpar">
          </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>