<?php
include_once "../Model/JokeList.php";
$blagues = new JokeList();
$jokes = $blagues->readJokes();
?>
<div class="table-responsive mx-auto">
    <table id="dataTableId" class="display table table-light table-hover" style="width:100%">
        <thead>
            <tr>
                <th scope="col" style="width: 50px;">N°</th>
                <th scope="col">Blague</th>
                <th scope="col" style="width: 120px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($jokes as $joke) {
            ?>
            <tr id="<?php echo $melodie["ID"]?>" texte="<?php echo $melodie["texte"]?>"> 
                <th scope="row"><?php echo $melodie["ID"]?></th>
                <td><?php echo $melodie["texte"]?></td>
                    <td class="d-flex">
                        <button type="button" class="btn mx-1" style="background-color: #3C6255;color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn" style="background-color: #8E415B;color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></button>
                    </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>