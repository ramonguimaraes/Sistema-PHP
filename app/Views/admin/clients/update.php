<h1>Insere Cliente</h1>

<form action="<?= base_url("admin/clients/update-action/{$client['idClient']}")?>" method=POST enctype="multipart/form-data">

  <div class="form-group">
    <div>
      <label for="idClient">ID: </label>
      <input type="text" name="idClient" class="form-control" value="<?= $client['idClient'] ?>"
        readonly="readonly">
    </div>

    <div>
      <label for="name">Nome: </label>
      <input type="text" name="name" class="form-control" value="<?= $client['name'] ?>">
    </div>

    <div>
      <label for="email">Email: </label>
      <input type="email" name="email" class="form-control" value="<?= $client['email'] ?>">
    </div>

    <div>
      <label for="phone">Phone: </label>
      <input type="text" name="phone" class="form-control" value="<?= $client['phone'] ?>">
    </div>

    <div>
      <label for="address">Endereço: </label>
      <input type="text" name="address" class="form-control" value="<?= $client['address'] ?>">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-success">Salvar</button>
  </div>
</form>