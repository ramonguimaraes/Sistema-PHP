<h1><?=$title?></h1>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($clients as $client): ?>
        <tr>
            <td><?=$client['idClient']?></td>
            <td><?=$client['name']?></td>
            <td><a class="btn btn-primary" href="<?= base_url('clients/'.$client['idClient'])?>">DETALHES</a></td>
        </tr>
    <?php endforeach; ?>
</table>
