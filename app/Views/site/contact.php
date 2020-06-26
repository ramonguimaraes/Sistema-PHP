<h1>Contato</h1>

<form action="controllers/addUsuario.php">

  <div class="form-group">
    <label for="inpNome">Nome</label>
    <input type="text" name="inpNome" class="form-control">
  </div>

  <br>

  <div class="form-group">
    <label for="inpNome">Email</label>
    <input type="text" name="inpEmail" class="form-control">
  </div>

  <br>

  <div class="form-group">
    <label for="inpTextArea1">Sua mensagem</label>
    <textarea class="form-control" rows="5"></textarea>
  </div>

  <input type="hidden" name="acao" value="adicionar">
  <input type="submit" class="btn-primary" value="adicionar">

</form>