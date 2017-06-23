<?php
    require_once APP_PATH . '/CardapioCadastro.php';

    /**
     *  Titulo e descrição da página
     */
    $title = "BUSCADOR DE RESTAURANTES";
    $description = "BUSCADOR DE RESTAURANTES";


    $cardapioCadastro = new CardapioCadastro();
    $cardapio = $cardapioCadastro->getById();
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cardapio as $key => $value) { ?>
            <tr>
                <td><?= $value["nome_prato"] ?></td>
                <td><?= $value["preco"] ?> Reais</td>
            </tr>
        <?php } ?>
    </tbody>
</table>
