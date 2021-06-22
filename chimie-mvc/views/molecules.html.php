<!doctype html>
<html lang="en">

<head>
    <title>Chimie</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
 
    <div class="container">

        <ul class="nav nav-tabs" id="nav">
            <li class="nav-item">
                <a href="<?= url('/molecules') ?>" class="nav-link">Molécules</a>
            </li>

            <?php if (isset($_SESSION['is_connected']) && $_SESSION['is_connected'] === true) : ?>
                <li class="nav-item">
                    <a href="<?= url('/creer-molecule') ?>" class="nav-link">Ajouter une molécule</a>
                </li>
                <li class="nav-item">
                    <a href="<?= url('/deconnecter') ?>" class="nav-link">Se déconnecter</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a href="<?=url('/connecter') ?>" class="nav-link">Se connecter</a>
                </li>
            <?php endif; ?>
        </ul>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Molécule</th>
                    <th>Formule</th>
                    <th>En savoir +</th>
                    <th>Vers la suppression</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($molecules as $m) : ?>
                    <tr>
                        <td scope="row"><?= $m['id'] ?></td>
                        <td><?= $m['nom'] ?></td>
                        <td><?= $m['formule'] ?></td>
                        <td><a href="<?= url('/detail-molecule').'?id='.$m['id']?>" type="button" class="btn btn-primary">Composition</a></td>
                        <td><a href="<?= url('/supprimer-molecule').'?id='.$m['id']?>" type="button" class="btn btn-danger">Supprimer</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>