<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Joueur - FUT Champions Ultimate Team</title>
    <link rel="stylesheet" href="edit_page.css">
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
        <a href="Controle_table.php" class="text-[#BD5D3A] hover:text-opacity-80">Table Control</a>
    </button>
</div>

<!-- the form  -->
<div class="form-container bg-[#F2F1E9] rounded-lg p-6 mt-6">
    <div class="player-preview">
        <img src="https://cdn.sofifa.net/players/158/023/25_120.png" alt="Lionel Messi">
        <h2 class="text-[#BD5D3A] font-semibold text-lg text-center mb-6">Modifier Lionel Messi</h2>
    </div>

    <form class="player-form" action="edit_player.php" method="post">
        <input type="hidden" name="player_id" value="158023">

        <div class="form-row">
            <div class="form-group">
                <label for="name" class="block text-sm font-medium text-[#BD5D3A] mb-2">Nom du Joueur</label>
                <input type="text" id="name" name="name" required
                   class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
            </div>
            <div class="form-group">
                <label for="photo" class="block text-sm font-medium text-[#BD5D3A] mb-2">Photo</label>
                <input type="file" id="photo" name="photo"
                   class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="position" class="block text-sm font-medium text-[#BD5D3A] mb-2">Position</label>
                <select id="position" name="position" required
                   class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                    <option value="">Sélectionner Position</option>
                    <option value="GK">Gardien</option>
                    <option value="RB">Arrière Droit</option>
                    <option value="CB">Défenseur Central</option>
                    <option value="LB">Arrière Gauche</option>
                    <option value="CDM">Milieu Défensif</option>
                    <option value="CM">Milieu Central</option>
                    <option value="CAM">Milieu Offensif</option>
                    <option value="RW">Ailier Droit</option>
                    <option value="LW">Ailier Gauche</option>
                    <option value="ST">Attaquant</option>
                </select>
            </div>
             <div class="form-group">
                <label for="nationality" class="block text-sm font-medium text-[#BD5D3A] mb-2">Nationalité</label>
                <select id="nationality" name="nationality" required
                   class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                    <option value="">Sélectionner Nationalité</option>
                    <option value="FR">France</option>
                    <option value="BR">Brésil</option>
                    <option value="AR">Argentine</option>
                    <option value="ES">Espagne</option>
                    <option value="DE">Allemagne</option>
                    <option value="IT">Italie</option>
                    <option value="PT">Portugal</option>
                    <option value="NL">Pays-Bas</option>
                    <option value="BE">Belgique</option>
                    <option value="EN">Angleterre</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="club" class="block text-sm font-medium text-[#BD5D3A] mb-2">Club</label>
                <select id="club" name="club" required
                     class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                    <option value="">Sélectionner Club</option>
                    <option value="1">Real Madrid</option>
                    <option value="2">Barcelona</option>
                    <option value="3">Manchester City</option>
                    <option value="4">Paris Saint-Germain</option>
                    <option value="5">Bayern Munich</option>
                    <option value="6">Liverpool</option>
                    <option value="7">Manchester United</option>
                    <option value="8">Juventus</option>
                    <option value="9">AC Milan</option>
                    <option value="10">Inter Milan</option>
                </select>
            </div>
              <div class="form-group">
                <label for="status" class="block text-sm font-medium text-[#BD5D3A] mb-2">Statut</label>
                <select id="status" name="status" required
                   class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                    <option value="">Sélectionner Statut</option>
                    <option value="1">Actif</option>
                    <option value="2">Blessé</option>
                    <option value="3">Suspendu</option>
                    <option value="4">En Prêt</option>
                    <option value="5">Transféré</option>
                    <option value="6">Retraité</option>
                    <option value="7">Formation</option>
                    <option value="8">Réserve</option>
                    <option value="9">International</option>
                    <option value="10">Capitaine</option>
                </select>
            </div>
         </div>
    
          <div class="stats-section">
                <h3 class="text-[#BD5D3A] font-semibold text-lg text-center mb-6">Statistiques du Joueur</h3>
                 <div class="stats-row">
                    <div class="form-group">
                        <label for="rating" class="block text-sm font-medium text-[#BD5D3A] mb-2">
                            Note Générale
                        </label>
                        <input
                            type="number"
                            id="rating"
                            name="rating"
                            min="1"
                            max="99"
                            required
                            class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent"
                        >
                    </div>
                   <div class="form-group">
                        <label for="pace" class="block text-sm font-medium text-[#BD5D3A] mb-2">
                            Vitesse
                        </label>
                        <input
                            type="number"
                            id="pace"
                            name="pace"
                            min="1"
                            max="99"
                            required
                            class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent"
                        >
                    </div>
                    <div class="form-group">
                        <label for="shooting" class="block text-sm font-medium text-[#BD5D3A] mb-2">
                            Tir
                        </label>
                        <input
                            type="number"
                            id="shooting"
                            name="shooting"
                            min="1"
                            max="99"
                            required
                           class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent"
                       >
                    </div>
                </div>
                 <div class="stats-row">
                    <div class="form-group">
                        <label for="passing" class="block text-sm font-medium text-[#BD5D3A] mb-2">
                            Passe
                        </label>
                        <input
                            type="number"
                            id="passing"
                            name="passing"
                            min="1"
                            max="99"
                            required
                            class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent"
                        >
                    </div>
                     <div class="form-group">
                        <label for="dribbling" class="block text-sm font-medium text-[#BD5D3A] mb-2">
                            Dribble
                        </label>
                       <input
                            type="number"
                            id="dribbling"
                            name="dribbling"
                            min="1"
                            max="99"
                            required
                           class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent"
                        >
                    </div>
                     <div class="form-group">
                         <label for="defending" class="block text-sm font-medium text-[#BD5D3A] mb-2">
                            Défense
                         </label>
                        <input
                            type="number"
                            id="defending"
                            name="defending"
                           min="1"
                           max="99"
                           required
                           class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent"
                         >
                      </div>
                  </div>
             </div>
        

        <div class="mt-8 flex justify-end">
            <button type="submit" class="bg-[#BD5D3A] text-white px-6 py-2 rounded-md hover:bg-opacity-90 transition-colors duration-200">
                Mettre à Jour le Joueur
            </button>
        </div>
    </form>
</div>

<div id="logoutButton">
    <h1 class="text-3xl font-bold underline flex items-center justify-center h-[7vh] bg-gray-200 p-4 hover:text-blue-600 hover:underline transition duration-300 cursor-pointer">
        User Board
    </h1>
</div>
</body>
</html>