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
  
    <?php 
    $servername = "localhost";
    $username = "root";
    $password "";
    $database = "futactic";
    // establiching connection with DB
    $connection = new mysali($servername, $username, $password, $database)
    if ($connection -> connection_error) {
        die("conection faild: ". $connection->connection_error);
    }

    // read all rows from DB table 
    $sql = "";

    ?>

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
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Email</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Phone</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Address</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Created At</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-[#BD5D3A] uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#E2DDCC]">
                        <tr class="hover:bg-[#E2DDCC]/20 transition-colors duration-200">
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">10</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Brahim Dyaz</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">dyazz@gmail.com</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">0666783278</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">New York, USA</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">13/05/2022</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="/FUTactic_Frontend/edit_player.php" class="text-[#BD5D3A] hover:text-opacity-80 mr-3 transition-colors duration-200">Edit</a>
                                <a href="/FUTactic_Frontend/delete_player.php" class="text-[#BD5D3A] hover:text-opacity-80 transition-colors duration-200">Delete</a>
                            </td>
                        </tr>
                        <!-- You can add more rows here following the same pattern -->
                    </tbody>
                </table>
                
        </div>

</body>
</html>