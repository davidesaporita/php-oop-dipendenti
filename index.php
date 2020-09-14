<?php
include_once __DIR__ . '/partials/data/data.php';
include_once __DIR__ . '/partials/templates/head.php';
include_once __DIR__ . '/partials/templates/header.php';
?> 

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Managers</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cognome</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Data Assunzione</th>
                            <th scope="col">Ruolo</th>
                            <th scope="col">Office</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>                       
                  <?php foreach($managers as $manager){ ?>
                        <tr>
                            <th scope="row"><?php echo $manager->last_name; ?></th>
                            <th scope="row"><?php echo $manager->first_name; ?></th>
                            <td><?php echo $manager->hire_date; ?></td>
                            <td><?php echo $manager->role; ?></td>
                            <td><?php echo $manager->office; ?></td>
                            <td><?php echo $manager->status; ?></td>
                        </tr>
                  <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>Dipendenti</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cognome</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Data Assunzione</th>
                            <th scope="col">Ruolo</th>
                            <th scope="col">Office</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>                       
                  <?php foreach($dipendenti as $dipendente){ ?>
                        <tr>
                            <th scope="row"><?php echo $dipendente->last_name; ?></th>
                            <th scope="row"><?php echo $dipendente->first_name; ?></th>
                            <td><?php echo $dipendente->hire_date; ?></td>
                            <td><?php echo $dipendente->role; ?></td>
                            <td><?php echo $dipendente->office; ?></td>
                            <td><?php echo $dipendente->status; ?></td>
                        </tr>
                  <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</main>

<?php
include_once __DIR__ . '/partials/templates/footer.php';