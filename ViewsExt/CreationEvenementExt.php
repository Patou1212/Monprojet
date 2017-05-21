<?php

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

            <form class="form-horizontal" action="CreationEventExt.php" method="post" enctype="multipart/form-data">
                <fieldset>

                    <!-- Form Name -->
                    <legend><h1>Création d'événement</h1></legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="TitreEventExt">Nom de l'événement</label>
                        <div class="col-md-4">
                            <input id="TitreEventExt" name="TitreEventExt" placeholder="Nom de votre événement"
                                   class="form-control input-md" required="" type="text"
                                   onblur="this.value=this.value.Majuscule()">

                        </div>
                    </div>

                    <!-- DatePicker -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="TitreEventExt">Date de votre événement</label>

                        <div class="col-md-4" id="datepicker"><input type="text" hidden value="" id="inputDate"
                                                                     name="inputDate"/></div>

                    </div>
             
                    <!-- Upload File -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="affiche">Sélection de l'affiche</label>
                        <div class="col-md-4">
                            <span class="fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Choisissez un fichier</span>
                                <input type="file" size="32" name="uploadAffiche" value="">
                                <input type="hidden" name="upload" value="simple"/>
                            </span>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ValiderCreationEventExt"></label>
                        <div class="col-md-4">
                            <button id="ValiderCreationEventExt" name="ValiderCreationEventExt" class="btn btn-primary">
                                Valider
                            </button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
    <!-- /.row -->

<?php include '../Assets/includes/backOffice/footer-b.php'; ?>