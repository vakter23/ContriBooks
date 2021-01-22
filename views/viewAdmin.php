<?php if (isset($_SESSION['id']) && $_SESSION['id'] == 9): ?>
<div class="container">
    <div class="form-group">
        <select class="form-control" id="select" onchange="displayDiv(this)">
            <option value="0">Livres</option>
            <option value="1">Avis</option>
            <option value="2">Utilisateurs</option>
            <option value="3">Ticket de proposition de livres</option>
            <option value="4">Ticket de contact</option>
            <option value="5">Ticket report</option>
        </select>
    </div>

    <div class="Selector">
        <table class="table table-bordered table-book">
            <h3>Ticket de livre</h3>
            <thead>
            <tr>
                <th scope="col">ISBN</th>
                <th scope="col">Titre</th>
                <th scope="col">Synopsis</th>
                <th scope="col">Fonction</th>
                <th scope="col">Supprimé</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($Books as $book): ?>
                <form id="form" method="post" action="/ContriBooks/Admin">
                    <?php $ISBN = $book->getISBN(); ?>
                    <tr>
                        <th scope="row" name="ISBN" ISBN="<?= $ISBN ?>"><textarea name="ISBN"><?= $ISBN ?></textarea>
                        </th>
                        <td><textarea name="Title"><?= $book->getTitle_book(); ?></textarea></td>
                        <td><textarea name="Synopsis"><?= $book->getSynopsis_book(); ?></textarea></td>
                        <td><input type="submit" name="editBook" id="submit" value="Edit"></td>
                        <td>
                            <button type="submit" name="deleteBook" id="submit" value="<?= $ISBN ?>">Delete
                        </td>
                    </tr>
                </form>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <div class="Selector" style="display: none">
        <table class="table table-bordered table-review">
            <h3>Table d'avis</h3>
            <thead>
            <tr>
                <th scope="col">Utilisateur</th>
                <th scope="col">Livre</th>
                <th scope="col">Avis</th>
                <th scope="col">Supprimé</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($Review as $rev): ?>
                <form id="form" method="post" action="/ContriBooks/Admin">
                    <tr>
                        <th scope="row"><textarea name="IdUser"><?= $rev->getId_user(); ?></textarea></th>
                        <td><textarea name="ISBN"><?= $rev->getISBN(); ?></textarea></td>
                        <td><textarea name="Opinion"><?= $rev->getOpinion(); ?></textarea></td>
                        <td>
                            <button type="submit" name="deleteReview" id="submit">Delete
                        </td>
                    </tr>
                </form>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <div class="Selector" style="display: none">
        <table class="table table-bordered table-users">
            <h3>Utilisateurs</h3>
            <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Inscription</th>
                <th scope="col">Dernière connexion</th>
                <th scope="col">Supprimé</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($User as $use): ?>
                <form id="form" method="post" action="/ContriBooks/Admin">
                    <tr>
                        <th scope="row"><textarea name="Email"><?= $use->getEmail(); ?></textarea>
                        </td>
                        <td><textarea name="Username"><?= $use->getUsername(); ?></textarea></td>
                        <td><?= $use->getLast_connexion(); ?></td>
                        <td><?= $use->getDate_of_creation(); ?></td>
                        <td>
                            <button type="submit" name="deleteUser" id="submit">Delete
                        </td>
                    </tr>
                </form>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>


    <div class="Selector" style="display: none">

        <table class="table table-bordered table-ticket-book">
            <h3>Ticket de proposition de livre</h3>
            <thead>
            <tr>
                <th scope="col">ISBN</th>
                <th scope="col">Titre du livre</th>
                <th scope="col">Synopsis du livre</th>
                <th scope="col">Date de creation (Format A-M-J)</th>
                <th scope="col">Auteur</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($TicketBook as $ticboo): ?>
                <form id="form" method="post" action="/ContriBooks/Admin">
                    <tr>
                        <td><textarea name="ISBN"><?= $ticboo->getISBN(); ?></textarea></td>
                        <td><textarea name="Title"><?= $ticboo->getTitle_book(); ?></textarea></td>
                        <td><textarea name="Synopsis"><?= $ticboo->getSynopsis_book(); ?></textarea></td>
                        <td><textarea name="Date"><?= $ticboo->getDate_of_creation(); ?></textarea></td>
                        <td><textarea name="Author"><?= $ticboo->getAuthor(); ?></textarea></td>
                        <td>
                            <button type="submit" name="addNewBook" id="submit">Ajoutez
                        </td>
                        <td>
                            <button type="submit" name="deleteRequestBook" id="submit"
                                    value="<?php $ticboo->getId_ticket_book(); ?>">Supprimez
                        </td>
                    </tr>
                </form>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <div class="Selector" style="display: none">

        <table class="table table-bordered table-ticket-contact">
            <h3>Ticket de contact</h3>
            <thead>
            <tr>
                <th scope="col">Utilisateur</th>
                <th scope="col">Email</th>
                <th scope="col">Sujet</th>
                <th scope="col">Message</th>
                <th scope="col">Supprimé</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($TicketContact as $ticcon): ?>
                <form id="form" method="post" action="/ContriBooks/Admin">
                    <tr>
                        <td><textarea><?= $ticcon->getUsername(); ?></textarea></td>
                        <td><textarea><?= $ticcon->getEmail(); ?></textarea></td>
                        <td><textarea><?= $ticcon->getSubject(); ?></textarea></td>
                        <td><textarea><?= $ticcon->getMessage(); ?></textarea></td>
                        <td>
                            <button type="submit" name="deleteTicketContact" id="submit"
                                    value="<?= $ticcon->getId_ticket_contact(); ?>">Supprimez
                        </td>

                    </tr>
                </form>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>


    <div class="Selector" value="5" valix="U" style="display: none">


        <table class="table table-bordered table-ticket-report">
            <h3>Ticket de report</h3>
            <thead>
            <tr>
                <th scope="col">Utilisateur</th>
                <th scope="col">Livre</th>
                <th scope="col">Avis</th>
                <th scope="col">Autre utilisateur</th>
                <th scope="col">Sujet</th>
                <th scope="col">Raison</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($TicketReport as $ticrep): ?>
                <form id="form" method="post" action="/ContriBooks/Admin">
                    <tr>
                        <td><?= $ticrep->getId_user_send(); ?></td>
                        <td><?= $ticrep->getISBN(); ?></td>
                        <td><?= $ticrep->getId_review(); ?></td>
                        <td><?= $ticrep->getId_user_target(); ?></td>
                        <td><?= $ticrep->getTitle_report(); ?></td>
                        <td><?= $ticrep->getReason_report(); ?></td>
                    </tr>
                </form>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php
    else:
        header('Location: /Contribooks/Accueil');
        exit();
        ?>
    <?php endif; ?>
</div>

<script>
    function displayDiv(elementValue) {
        document.getElementsByClassName('Selector')[elementValue.value].style.display = 'contents';
        putInvisibleAll(elementValue.value);
    }

    function putInvisibleAll(elementValue) {
        for (let i = 0; i < document.getElementsByClassName('Selector').length; i++) {
            if (i != elementValue) {
                document.getElementsByClassName('Selector')[i].style.display = 'none';
            }
        }
    }
</script>
