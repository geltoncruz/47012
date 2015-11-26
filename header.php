<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <div>
    <header>
      <nav>
        <a href="#"><img src="images/logo.png" alt="Logotipo"></a>
        <a href="contato.html">Contato</a>
        <a href="servico.php">Serviço</a>
        <a href="sobre.html">Sobre</a>
        <a href="index.php" class="active">Home</a>
      </nav>
      <div class="banner banner-home">
        <form action="#" name="reserva">
          <h1>Faça sua Reserva!</h1>
          <label for="checkin">Chegada</label>
          <input type="date" name="checkin" required autofocus="" id="chkIn">
          <label for="checkout">Saída</label>
          <input type="date" name="checkout" required>
          <label for="qtdAdulto">Adultos</label>
          <input type="number" name ="qtdAdulto" required placeholder="0" min="1" max="4">
          <label for="optSuite">Suíte</label>
          <select name="" id="" required>
            <option value="" >Escolha sua suíte</option>
            <option value="luxo" >Luxo</option>
          </select>
          <button id="botao">Reserve Já</button>
        </form>
      </div>
    </header>