<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Joueurs - FUT Champions Ultimate Team</title>
    <link rel="stylesheet" href="list_page.css">

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
    <div class="player-list">
        <!-- Player Card -->
        <div class="player-card">
            <img src="https://cdn.sofifa.net/players/158/023/25_120.png" alt="Lionel Messi">
            <h3>Lionel Messi</h3>
            <p>Club: Inter Miami</p>
            <p>Rating: 93</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=158023" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=158023" class="btn-delete">Delete</a>
            </div>
        </div>
        <!-- additionales... -->
        
        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>        <div class="player-card">
            <img src="player2.jpg" alt="Player 2">
            <h3>Player 2 Name</h3>
            <p>Club: Club 2</p>
            <p>Rating: 88</p>
            <div class="player-buttons">
                <a href="edit_player.php?player_id=456" class="btn-edit">Edit</a>
                <a href="delete_player.php?player_id=456" class="btn-delete">Delete</a>
            </div>
        </div>
        
        
       
    </div>

    <div id="logoutButton">
    <h1 class="text-3xl font-bold underline flex items-center justify-center h-[7vh] bg-gray-200 p-4 hover:text-blue-600 hover:underline transition duration-300 cursor-pointer">
        User Board
    </h1>
    </div>
</div>
</body>
</html>
