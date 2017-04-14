<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 06/10/2016
 * Time: 09:12
 */
include '../Assets/includes/backOffice/header-b.php';
?>
    <!-- Page Content -->
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
            if (isset($message)) {
                echo
                    //<!-- Message -->
                "<div class='col-md-4 col-md-offset-4 alert alert-success fade in'>
                         <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                         <strong>$message</strong>
                    </div>";
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <form class="form-horizontal" action="CreationEvent.php" method="post" enctype="multipart/form-data">
                <fieldset>

                    <!-- Form Name -->
                    <legend><h1>Création d'événement</h1></legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="TitreEvent">Nom de l'événement</label>
                        <div class="col-md-4">
                            <input id="TitreEvent" name="TitreEvent" placeholder="Titre événement"
                                   class="form-control input-md" required="" type="text"
                                   onblur="this.value=this.value.Majuscule()">

                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-md-4 control-label" for="TitreEvent">Date de l'événement</label>

                        <div class="col-md-4" id="datepicker"><input type="text" hidden value="" id="inputDate"
                                                                     name="inputDate"/></div>

                    </div>

                      <div class="form-group">
                        <label class="col-md-4 control-label" for="TitreEvent">Adresse</label>
                        <div class="col-md-4">
                            <input id="TitreEvent" name="TitreEvent" placeholder="Adresse Lieu"
                                   class="form-control input-md" required="" type="text"
                                   onblur="this.value=this.value.Majuscule()">

                        </div>
                    </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="TitreEvent">Superficie</label>
                        <div class="col-md-4">
                            <input id="TitreEvent" name="TitreEvent" placeholder="Superficie Lieu"
                                   class="form-control input-md" required="" type="text"
                                   onblur="this.value=this.value.Majuscule()">

                        </div>
                    </div>

                
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ValiderCreationEventext"></label>
                        <div class="col-md-4">
                            <button id="ValiderCreationEventext" name="ValiderCreationEventext" class="btn btn-primary">
                                Valider
                            </button>
                        </div>
                    </div>
        </div>
    </div>
    <!-- /.row -->

<?php include '../Assets/includes/backOffice/footer-b.php'; ?>