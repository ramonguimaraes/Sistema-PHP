<h1>Insere Cliente</h1>

<form action="<?= base_url('admin/clients/insert-action')?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Nome: </label>
      <input type="text" name="name" class="form-control" >
    </div>

    <div class="form-group">
      <label for="email">Email: </label>
      <input type="email" name="email" class="form-control" >
    </div>

    <div class="form-group">
      <label for="phone">Telefone: </label>
      <input type="tel" name="phone" class="form-control" >
    </div>

    <div class="form-group">
      <label for="address">Endereço: </label>
      <input type="text" name="address" class="form-control" >
    </div>

    <br>
    <br>
    
    <button type="submit" class="btn btn-success">Salvar</button>
</form>