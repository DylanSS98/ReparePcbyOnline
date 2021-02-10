



                    <br>
                    <h5 style="color: #d31e44">Les étapes à suivre :</h5>
                <ul class="card arrow">
                    <li>
                        <p><img src="img/fleche_droite.png" alt=""> Sélectionner un centre</p>
                    </li>

                    <li>
                        <p><img src="img/fleche_droite.png" alt=""> Cliquer sur "Contacter".</p>
                    </li>

                    <li>
                         <p><img src="img/fleche_droite.png" alt=""> Remplissez le formulaire puis envoyer le.</p>
                    </li>

                    <li>
                        <p><img src="img/fleche_droite.png" alt=""> Un conseiller vous contactera par la suite.</p>
                    </li>
                </ul>


                    <div id="maCarte">

                    </div>

                    <?php
                    if (isset($erreur)) {
                        echo "<div class='alert alert-danger' role='alert'>
  $erreur
</div>";
                    }
                    if (isset($succes)) {
                        echo "<div class='alert alert-success' role='alert'>
  $succes
</div>";
                    }
                    ?>

