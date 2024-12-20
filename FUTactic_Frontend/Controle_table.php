<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Table | Admin</title>
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
<br>
<br>
</div>
      <div class="bg-[#F2F1E9] p-4 overflow-x-auto">
                <table class="w-full bg-white shadow-sm rounded-lg overflow-hidden">
                    <thead class="bg-[#E2DDCC]">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">ID</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Name</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Photo</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Nationality</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Club</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Statistics</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Position</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#E2DDCC]">

                        <?php 
                            require_once './includes/db_connection.php';

                            // read all rows from DB table 
                            $sql = "SELECT * FROM players
                            JOIN clubs ON players.club_id = clubs.club_id
                            JOIN nationalities on players.nationality_id = nationalities.nationality_id
                            JOIN positions on players.position_id = positions.position_id
                            JOIN statistics on players.statistics_id = statistics.statistics_id
                            ";
                            $result = $conn->query($sql);

                            //read data from the table
                            while ($row = $result->fetch_assoc()) {
                                echo"
                                <tr class='hover:bg-[#E2DDCC]/20 transition-colors duration-200' >
                                    <td>$row[player_id]</td>
                                    <td>$row[player_name]</td>
                                    <td><img src='$row[player_photo]' height='30' width='50'></td>
                                    <td><img src='$row[nationality_flag]' height='30' width='50'></td>
                                    <td><img src='$row[club_logo]' height='30' width='50'></td>
                                    <td>$row[statistics_id]</td>
                                    <td>$row[position_name]</td>
                                    <td>
                                        <a href='edit_page.php?id=$row[player_id]' class='text-[#BD5D3A] hover:text-opacity-80 mr-3 transition-colors duration-200'>Edit</a>
                                        <a href='delete_page.php?id=$row[player_id]' class='text-[#BD5D3A] hover:text-opacity-80 mr-3 transition-colors duration-200'>Delete</a>
                                    </td>
                                </tr>
                                ";
                            }
                        
                        
                        ?>

                    </tbody>
                </table>
                
        </div>

</body>
</html>