<div class="container">
    <?php //echo $errorMsg ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1 style="font-size: 100px;">
                        Oops!</h1>
                    <h2 style="font-size: 90px;">
                        404 Not Found</h2>
                    <div style="font-size: 50px;" class="error-details">
                        Sorry, an error has occured, Requested page not found!
                    </div>
                    <div class="error-actions">
                        <a href="/Contribooks/" class="btn btn-primary btn-lg"><span
                                    class="glyphicon glyphicon-home"></span>
                            Take Me Home </a><a href="/Contribooks/Contact" class="btn btn-default btn-lg"><span
                                    class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .error-template {
        padding: 40px 15px;
        text-align: center;
    }

    .error-actions {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .error-actions .btn {
        margin-right: 10px;
    }
</style>