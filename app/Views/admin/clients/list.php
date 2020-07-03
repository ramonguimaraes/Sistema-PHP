<h1><?=$title?></h1>
 
<form action="<?= base_url('admin/clients/search')?>" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="Pesquise na lista de clientes">
        <div class="input-group-append">
            <button type="submit" class="btn btn-outline-secondary">Pesquisar</button>
        </div>
    </div> 
</form>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th colspan='3'>Ações</th>
    </tr>
    <?php foreach ($clients as $client): ?>
        <tr>
            <td>
                <?=$client['idClient']?>
            </td>
            
            <td>
                <?=$client['name']?>
            </td>
           
            <td>
                <a class="btn btn-primary" href="<?= base_url("admin/clients/details/{$client['idClient']}")?>">DETALHES</a>
            </td>
            
            <td>
                <a class="btn btn-warning" href="<?= base_url("admin/clients/update/{$client['idClient']}")?>">EDITAR</a>
            </td>
            
            <td>
                <a class="btn btn-danger" href="<?= base_url("admin/clients/delete/{$client['idClient']}")?>">REMOVER</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
