<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="autor" content="Yannis IKHELEF" />
    <link rel="stylesheet" href="../assets/index.min.css" type="text/css" />
    <title>Risques</title>
  </head>
  <body>
    <?php include "../templates/header.php" ?>

    <div class="main-container">
      <h1>
        <span>GESTION DES RISQUES</span><br />
        DIPLÔME DÉVELOPPEUR FULLSTACK
      </h1>

      <section>
          <h2>Tableau des risques éventuels et leurs criticités</h2>
          
            <table class="risk-table">
              <thead>
                  <tr>
                      <th>Risques</th>
                      <div class="stats">
                          <th>❓</th>
                          <th>❗</th>
                          <th>🔥</th>
                        </div>
                        <th>Gestion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="risque">Le courant ne passe pas avec le jury</td>
                        <td class="proba stats p2">2</td>
                        <td class="grave stats p4">4</td>
                        <td class="critik stats p3">8</td>
                        <td class="gestion">Tenue professionnelle, Bien travailler la présentation</td>
                    </tr>
                    
                    <tr>
                        <td class="risque">Problème technique avec le matériel de présentation</td>
                        <td class="proba stats p3">3</td>
                        <td class="grave stats p4">4</td>
                        <td class="critik stats p4">12</td>
                        <td class="gestion">Apporter un ordinateur et éventuellement un projecteur portable. Un mobile pour du partage de connexion.</td>
                    </tr>

                    <tr>
                        <td class="risque">Être malade ou en méforme lors de la présentation</td>
                        <td class="proba stats p3">3</td>
                        <td class="grave stats p2">2</td>
                        <td class="critik stats p2">6</td>
                        <td class="gestion">Manger sainement la semaine précédente. Prendre des vitamines. Bien se couvrir et bien dormir</td>
                    </tr>

                    <tr>
                        <td class="risque">Problème de transport, voiture en panne, grève des raffineries</td>
                        <td class="proba stats p2">2</td>
                        <td class="grave stats p4">4</td>
                        <td class="critik stats p3">8</td>
                        <td class="gestion">Faire une révision au mois d'octobre, faire le plein d'essence trois jours avant. Et prévoir un vélo.</td>
                    </tr>

                    <tr>
                        <td class="risque">Imprévu sur le trajet (travaux, contrôles, mouvement sociaux, accidents, météo)</td>
                        <td class="proba stats p4">4</td>
                        <td class="grave stats p4">4</td>
                        <td class="critik stats p4">16</td>
                        <td class="gestion">Prévoir de venir 1h à l'avance</td>
                    </tr>
                </tbody>
            </table>
            <div class="legende">
                <div class="item">
                    <div class="label">❓ : </div>
                    <div class="value"> Probabilité (/4)</div>
                </div>
                <div class="item">
                    <div class="label">❗ : </div>
                    <div class="value"> Gravité (/4)</div>
                </div>
                <div class="item">
                    <div class="label">🔥 : </div>
                    <div class="value"> Criticité (/16) = (Probabilité x Gravité)</div>
                </div>
            </div>
        </section>
    </div>

</body>
</html>
