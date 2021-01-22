<?php $this->_t = 'Report'; ?>
<?php if (isset($_SESSION['id'])): ?>
    <div class="container p-5">
        <h1 class="font-weight-bold">Signalement</h1>
        <form method="POST" action="/Contribooks/Report">
            <div><label>Sujet:</label></div>
            <div><input type="text" name="Reason" class="form-control" required/></div>
            <br>
            <div><label>Message:</label></div>
            <div><textarea cols="40" rows="5" name="Message" class="form-control" required></textarea></div>
            <br>
            <input type="submit" value="Send" class="btn btn-primary form-control"/>
        </form>
    </div>
<?php else: ?>
    <div>
        <?php
        header('Location: /Contribooks/Accueil');
        exit();
        ?>
    </div>
<?php endif; ?>
