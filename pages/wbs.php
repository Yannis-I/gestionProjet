<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="autor" content="Yannis IKHELEF" />
    <link rel="stylesheet" href="../assets/index.min.css" type="text/css" />
    <title>WBS</title>
  </head>
  <body>
    <?php include "../templates/header.php" ?>

    <div class="main-container">
      <h1>
        <span>Work Breakdown Structure</span><br />
        DIPLÔME DÉVELOPPEUR FULLSTACK
      </h1>

      <div class="diagram">

<div class="diagram-header">
    <div class="case cdp">
        <p>DIPLÔME</p>
    </div>
    <div class="header-link header-link--wbs"></div>
</div>

<div class="diagram-breakdown">

    <div class="col">
        <div class="row head">
            <div class="case cdc1">
                <p>Participer aux modules</p>
            </div>
        </div>
        <div class="sub">
            <div class="row">
                <div class="case">
                    <div class="link first"></div>
                    <p>Suivre les cours des modules</p>
                </div>
            </div>
            <div class="row">
                <div class="case">
                    <div class="link next"></div>
                    <p>Réaliser les TP des modules</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="row head">
            <div class="case cdc2">
                <p>Développer des projets</p>
            </div>
        </div>
        <div class="sub">
            <div class="row">
                <div class="case">
                    <div class="link first"></div>
                        <p>Développer le projet fil rouge</p>
                </div>
            </div>
            <div class="sub">
                <div class="row">
                    <div class="case">
                        <div class="link first"></div>
                            <p>Trouver une idée de projet</p>
                    </div>
                </div>

                <div class="row">
                    <div class="case">
                        <div class="link next"></div>
                            <p>Concevoir le projet</p>
                    </div>
                </div>


                <div class="row">
                    <div class="case">
                        <div class="link next"></div>
                            <p>Réaliser le projet</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="case">
                    <div class="link custom-link"></div>
                        <p>Développer le projet IOT</p>
                </div>
            </div>
            <div class="sub">
                <div class="row">
                    <div class="case">
                        <div class="link first"></div>
                        <p>Trouver un projet en lien avec le fil rouge</p>
                    </div>
                </div>
                <div class="row">
                    <div class="case">
                        <div class="link next"></div>
                            <p>Concevoir le projet</p>
                    </div>
                </div>
                <div class="row">
                    <div class="case">
                        <div class="link next"></div>
                            <p>Réaliser le projet</p>
                    </div>
                </div>
                <div class="row">
                    <div class="case">
                        <div class="link next"></div>
                            <p>Intégrer le projet au fil rouge</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="case">
                    <div class="link custom-link"></div>
                        <p>Développer des projets persos</p>
                </div>
            </div>
            <div class="sub">
                <div class="row">
                    <div class="case">
                        <div class="link first"></div>
                        <p>Développer un jeu de dames en ligne</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="row head">
            <div class="case cdc3">
                <p>Réaliser un stage</p>
            </div>
        </div>
        <div class="sub">
            <div class="row">
                <div class="case">
                    <div class="link first"></div>
                    <p>Trouver un stage</p>
                </div>
            </div>
            <div class="sub">
                <div class="row">
                    <div class="case">
                        <div class="link first"></div>
                        <p>Campagne de distribution de CV</p>
                    </div>
                </div>
                <div class="row">
                    <div class="case">
                        <div class="link next"></div>
                        <p>Visibilité web (linkedin, indeed...)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="case">
                    <div class="link custom-link"></div>
                    <p>Participer à un projet au sein du stage</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="row head">
            <div class="case cdc4">
                <p>Concevoir les livrables</p>
            </div>
        </div>
        <div class="sub">
            <div class="row">
                <div class="case">
                    <div class="link first"></div>
                    <p>Rédiger le dossier de soutenance</p>
                </div>
            </div>
            <div class="sub">
                <div class="row">
                    <div class="case">
                        <div class="link first"></div>
                        <p>Identifier tous les blocs de compétences</p>
                    </div>
                </div>
                <div class="row">
                    <div class="case">
                        <div class="link next"></div>
                        <p>Illustrer avec les réalisations dans les projets</p>
                    </div>
                </div>

                <div class="row">
                    <div class="case">
                        <div class="link next"></div>
                        <p>Relier proprement le dossier</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="case">
                    <div class="link next"></div>
                    <p>Préparer une presentation orale</p>
                </div>
            </div>

            <div class="row">
                <div class="case">
                    <div class="link custom-link"></div>
                    <p>Concevoir un diaporama</p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
      
    </div>
  </body>
  <script type="text/javascript" src="../assets/script.js"></script>
</html>
    