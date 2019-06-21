      <section class="ftco-section">
        <div class="container mt-5">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Ce que je sais faire</span>
              <h2>Mes compétences</h2>
            </div>
          </div>
          <div class="row">
            <?php foreach($icons as $icon => $value) : ?> <!-- Boucle Foreach pour changer les icones fontAwesome automatiquement-->
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><?= $value["icone"] ?></div>
                <div class="media-body">
                  <h3 class="heading"><?=$value["texte"]?></h3>
                </div>
              </div>    
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>