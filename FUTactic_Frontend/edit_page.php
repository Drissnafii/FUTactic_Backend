<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Joueur - FUT Champions Ultimate Team</title>
    <link rel="stylesheet" href="edit_page.css">
</head>
<body>
    <div class="navigation">
        <a href="form_page.php">Ajouter un Joueur</a>
        <a href="list_page.php">Liste des Joueurs</a>
        <a href="edit_page.php">Modifier un Joueur</a>
    </div>
    <div class="form-container">
        <div class="player-preview">
            <img src="https://cdn.sofifa.net/players/158/023/25_120.png" alt="Lionel Messi">
            <h2 class="form-title">Modifier Lionel Messi</h2>
        </div>
        <form class="player-form" action="edit_player.php" method="post">
            <input type="hidden" name="player_id" value="158023">

            <div class="form-row">
                <div class="form-group">
                    <label for="name">Nom du Joueur</label>
                    <input type="text" id="name" name="name" value="Lionel Messi" required placeholder="Ex: Lionel Messi">
                </div>
                <div class="form-group">
                <label for="club">Club</label>
                <input type="text" id="club" name="club" required placeholder="Ex: Inter Miami" value="Inter Miami">
            </div>
             </div>

         <div class="form-row">
                <div class="form-group">
                    <label for="nationality">Nationalité</label>
                     <input type="text" id="nationality" name="nationality" required placeholder="Ex: Argentine" value="Argentine">
                </div>
                <div class="form-group">
                     <label for="position">Position</label>
                     <select id="position" name="position" required>
                        <option value="">Sélectionner Position</option>
                        <option value="GK" >Gardien</option>
                        <option value="RW" >Ailier Droit</option>
                        <option value="LW" >Ailier Gauche</option>
                        <option value="ST" selected>Attaquant</option>
                        <option value="CM" >Milieu</option>
                        <option value="CB" >Défenseur Central</option>
                     </select>
                 </div>
          </div>

            <div class="stats-section">
                <h3 style="
                text-align: center;
                margin: revert;
                background-color: wheat;
            ">Statistiques du Joueur</h3>
                <div class="stats-row">
                    <div class="form-group">
                        <label for="rating">Note Générale</label>
                        <input type="number" id="rating" name="rating" min="1" max="99" required value="93">
                    </div>
                     <div class="form-group">
                         <label for="pace">Vitesse</label>
                         <input type="number" id="pace" name="pace" min="1" max="99" required value="85">
                     </div>
                       <div class="form-group">
                        <label for="shooting">Tir</label>
                        <input type="number" id="shooting" name="shooting" min="1" max="99" required value="92">
                     </div>
                </div>
                 <div class="stats-row">
                     <div class="form-group">
                        <label for="passing">Passe</label>
                         <input type="number" id="passing" name="passing" min="1" max="99" required value="92">
                     </div>
                      <div class="form-group">
                        <label for="dribbling">Dribble</label>
                        <input type="number" id="dribbling" name="dribbling" min="1" max="99" required value="95">
                       </div>
                     <div class="form-group">
                        <label for="defending">Défense</label>
                         <input type="number" id="defending" name="defending" min="1" max="99" required value="35">
                      </div>
                 </div>
            </div>

            <button type="submit" class="submit-btn">Mettre à Jour le Joueur</button>
        </form>
    </div>
</body>
</html>