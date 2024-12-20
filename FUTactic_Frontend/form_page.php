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

<div class="form-container bg-[#F2F1E9] rounded-lg p-6 mt-6">
    <h2 class="text-[#BD5D3A] font-semibold text-lg text-center mb-6">Ajouter un Nouveau Joueur</h2>

    <form class="player-form" action="add_player.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
             <div class="form-group">
                <label for="name" class="block text-sm font-medium text-[#BD5D3A] mb-2">Nom du Joueur</label>
                <input type="text" id="name" name="name" required placeholder="Ex: Lionel Messi"
                       class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
            </div>
             <div class="form-group">
                <label for="photo" class="block text-sm font-medium text-[#BD5D3A] mb-2">Photo du Joueur</label>
                <input type="file" id="photo" name="photo" accept="image/*" 
                       class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
           </div>
        </div>
        <div class="form-row">
              <div class="form-group">
                <label for="nationality" class="block text-sm font-medium text-[#BD5D3A] mb-2">Nationalité</label>
                     <select name="nationality_id" id="nationality"
                           class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                          <option value="">Sélectionner Nationalité</option>
                        <?php
                            include './includes/db_connection.php';
                            $sql = "SELECT nationality_id, nationality_name FROM nationalities";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['nationality_id']. "'>" . $row['nationality_name']. "</option>";
                                }
                            }
                            $conn-> close();
                        ?>
                    </select>
            </div>
              <div class="form-group">
                <label for="position" class="block text-sm font-medium text-[#BD5D3A] mb-2">Position</label>
                 <select id="position" name="position_id" required
                           class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                        <option value="">Sélectionner Position</option>
                        <?php
                           include './includes/db_connection.php';
                           $sql = "SELECT position_id, position_name FROM positions";
                           $result = $conn->query($sql);
                           if ($result->num_rows > 0) {
                               while ($row = $result->fetch_assoc()) {
                                   echo "<option value='" . $row['position_id']. "'>" . $row['position_name']. "</option>";
                               }
                           }
                           $conn-> close();
                        ?>
                    </select>
             </div>
        </div>
         <div class="form-row">
            <div class="form-group">
                <label for="club" class="block text-sm font-medium text-[#BD5D3A] mb-2">Club</label>
                <select id="club" name="club_id" required
                      class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                       <option value="">Sélectionner Club</option>
                        <?php
                         include './includes/db_connection.php';
                         $sql = "SELECT club_id, club_name FROM clubs";
                         $result = $conn->query($sql);
                         if ($result->num_rows > 0) {
                             while ($row = $result->fetch_assoc()) {
                                  echo "<option value='" . $row['club_id']. "'>" . $row['club_name']. "</option>";
                             }
                         }
                        $conn-> close();
                       ?>
                 </select>
             </div>
            <div class="form-group">
                <label for="status" class="block text-sm font-medium text-[#BD5D3A] mb-2">Statistics</label>
                <select id="status" name="statistics_id" required
                       class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                    <option value="">Sélectionner Statistiques</option>
                    <?php
                         include './includes/db_connection.php';
                         $sql = "SELECT statistics_id FROM statistics";
                         $result = $conn->query($sql);
                         if ($result->num_rows > 0) {
                             while ($row = $result->fetch_assoc()) {
                                 echo "<option value='" . $row['statistics_id']. "'>" . $row['statistics_id']. "</option>";
                                }
                            }
                         $conn-> close();
                    ?>
                 </select>
           </div>
      </div>

        <div class="stats-section">
            <h3 class="text-[#BD5D3A] font-semibold text-lg text-center mb-6">Statistiques du Joueur</h3>
            <div class="stats-row">
               <div class="form-group">
                    <label for="rating" class="block text-sm font-medium text-[#BD5D3A] mb-2">Note Générale</label>
                    <input type="number" id="rating" name="rating" min="1" max="99" required
                           class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
               </div>
               <div class="form-group">
                   <label for="pace" class="block text-sm font-medium text-[#BD5D3A] mb-2">Vitesse</label>
                   <input type="number" id="pace" name="pace" min="1" max="99" required
                          class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
               </div>
                 <div class="form-group">
                    <label for="shooting" class="block text-sm font-medium text-[#BD5D3A] mb-2">Tir</label>
                     <input type="number" id="shooting" name="shooting" min="1" max="99" required
                          class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                 </div>
            </div>
            <div class="stats-row">
                <div class="form-group">
                    <label for="passing" class="block text-sm font-medium text-[#BD5D3A] mb-2">Passe</label>
                    <input type="number" id="passing" name="passing" min="1" max="99" required
                           class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                </div>
                <div class="form-group">
                    <label for="dribbling" class="block text-sm font-medium text-[#BD5D3A] mb-2">Dribble</label>
                     <input type="number" id="dribbling" name="dribbling" min="1" max="99" required
                            class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                 </div>
               <div class="form-group">
                    <label for="defending" class="block text-sm font-medium text-[#BD5D3A] mb-2">Défense</label>
                    <input type="number" id="defending" name="defending" min="1" max="99" required
                           class="w-full p-2 border border-[#E2DDCC] rounded-md focus:ring-2 focus:ring-[#BD5D3A] focus:border-transparent">
                </div>
             </div>
       </div>

        <button type="submit" class="bg-[#BD5D3A] text-white px-6 py-2 rounded-md hover:bg-opacity-90 transition-colors duration-200">Ajouter le Joueur</button>
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