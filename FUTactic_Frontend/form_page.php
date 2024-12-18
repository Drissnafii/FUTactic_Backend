<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Joueur - FUT Champions Ultimate Team</title>
    <link rel="stylesheet" href="form_page.css">
    <!-- taildwind  -->
    <script src="https://cdn.tailwindcss.com"></script>
<script>
    module.exports = {
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
      },
    },
  },
  variants: {},
  plugins: [],
}
</script>
</head>
<body>
<div class="bg-[#F2F1E9] flex justify-between items-center py-4 px-6 shadow-sm border-b border-[#E2DDCC]">
    <div>
        <a href="form_page.php" class="text-[#BD5D3A] hover:text-opacity-80 transition-colors duration-300 font-medium text-sm px-4 py-2 rounded-md hover:bg-[#E2DDCC]/30">
            Ajouter un Joueur
        </a>
        <a href="list_page.php" class="text-[#BD5D3A] hover:text-opacity-80 transition-colors duration-300 font-medium text-sm px-4 py-2 rounded-md hover:bg-[#E2DDCC]/30">
            Liste des Joueurs
        </a>
        <a href="edit_page.php" class="text-[#BD5D3A] hover:text-opacity-80 transition-colors duration-300 font-medium text-sm px-4 py-2 rounded-md hover:bg-[#E2DDCC]/30">
            Modifier un Joueur
        </a>
    </div>
    <button class="text-[#BD5D3A] bg-[#E2DDCC] px-4 py-2 rounded-md hover:bg-opacity-80 transition-colors duration-300">
    <a  href="Controle_table.php" class="text-[#BD5D3A] hover:text-opacity-80 transition-colors duration-300 font-medium text-sm px-4 py-2 rounded-md hover:bg-[#E2DDCC]/30">
        Table Control
        </a>
    </button>
</div>

    <div class="form-container">
        <h2 class="form-title">Ajouter un Nouveau Joueur</h2>
        
        <form class="player-form" action="add_player.php" method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Nom du Joueur</label>
                    <input type="text" id="name" name="name" required placeholder="Ex: Lionel Messi">
                </div>
                <div class="form-group">
                    <label for="club">Club</label>
                    <input type="text" id="club" name="club" required placeholder="Ex: Inter Miami">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nationality">Nationalité</label>
                    <input type="text" id="nationality" name="nationality" required placeholder="Ex: Argentine">
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <select id="position" name="position" required>
                        <option value="">Sélectionner Position</option>
                        <option value="GK">Gardien</option>
                        <option value="RW">Ailier Droit</option>
                        <option value="LW">Ailier Gauche</option>
                        <option value="ST">Attaquant</option>
                        <option value="CM">Milieu</option>
                        <option value="CB">Défenseur Central</option>
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
                        <input type="number" id="rating" name="rating" min="1" max="99" required>
                    </div>
                    <div class="form-group">
                        <label for="pace">Vitesse</label>
                        <input type="number" id="pace" name="pace" min="1" max="99" required>
                    </div>
                    <div class="form-group">
                        <label for="shooting">Tir</label>
                        <input type="number" id="shooting" name="shooting" min="1" max="99" required>
                    </div>
                </div>
                <div class="stats-row">
                    <div class="form-group">
                        <label for="passing">Passe</label>
                        <input type="number" id="passing" name="passing" min="1" max="99" required>
                    </div>
                    <div class="form-group">
                        <label for="dribbling">Dribble</label>
                        <input type="number" id="dribbling" name="dribbling" min="1" max="99" required>
                    </div>
                    <div class="form-group">
                        <label for="defending">Défense</label>
                        <input type="number" id="defending" name="defending" min="1" max="99" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="submit-btn">Ajouter le Joueur</button>
        </form>
    </div>

    <!-- back button  -->
    <div id="logoutButton">
    <h1 class="text-3xl font-bold underline flex items-center justify-center h-[7vh] bg-gray-200 p-4 hover:text-blue-600 hover:underline transition duration-300 cursor-pointer">
        User Board
    </h1>
    </div>
</body>
</html>