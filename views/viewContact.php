<?php $this->_t = 'Contact'; ?>

<div class="container p-5">
    <h1 class="font-weight-bold">Contact</h1>
    <form method="POST" action="/Contribooks/Contact">
        <div><label>Votre nom:</label></div>
        <div><input type="text" name="Name" class="form-control" required/></div>
        <br>
        <div><label>Votre email:</label></div>
        <div><input type="email" name="Email" class="form-control" required/></div>
        <br>


        <div><label>Sujet:</label></div>
        <div><input type="text" name="Reason" class="form-control" required/></div>
        <br>

        <div><label>Message:</label></div>
        <div><textarea cols="40" rows="5" name="Message" class="form-control" required></textarea></div>
        <br>

        <input type="submit" value="Send" class="btn btn-primary form-control"/>
    </form>
</div>


