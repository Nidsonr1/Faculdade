<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="./_cdn/style.css">
  <title>API Gateway</title>
</head>
<body>
  <div class="container">
    <h1>Aplicação APIGateway</h1>

    <form action="calculaValores.php" method="POST"> 
      <div class="mb-3 my-3">
        <label for="exampleInputEmail1" class="form-label">Entre com o primeiro valor</label>
        <input type="number" class="form-control" name="valor1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Entre com o segundo valor</label>
        <input type="number" class="form-control" name="valor2">
      </div>
      <div class="mb-3">
        <select name="operacao">
          <option value="1">Somar</option>
          <option value="2">Multiplicar</option>
        </select>
      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>
    </form>
   
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>