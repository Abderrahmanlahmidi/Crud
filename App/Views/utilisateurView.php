<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salles</title>
  <link rel="stylesheet" href="style.css">

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-poppins">

  <!-- Main container -->
  <div class="grid grid-cols-12 h-screen">

    <!-- Sidebar -->
    <aside id="default-sidebar" class="col-span-2 w-64 bg-gray-50 p-4 h-screen transition-transform border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
      <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-4">Dashboard</h2>
      
      <nav>
          <ul class="space-y-2">
              <li>
                  <a href="#" class="block p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                      Utilisateur
                  </a>
              </li>
              <li>
                  <a href="#" class="block p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                      Articale
                  </a>
              </li>
          </ul>
      </nav>
    </aside>
  
    <!-- Main content area -->
    <div class="col-span-10 p-6">
      <!-- Create New Room Button -->
      <button id="createRoomButton" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 hover:bg-blue-600">
        Créer une nouvelle salle
      </button>

      <!-- Modal Overlay -->
      <div id="modalOverlay" class="fixed z-40 flex inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
          <h2 class="text-lg font-semibold mb-4">Créer une nouvelle salle</h2>

          <form id="createRoomForm">
            <div class="mb-4">
              <label for="roomName" class="block text-sm font-medium text-gray-700">Nom</label>
              <input type="text" id="roomName" name="roomName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
              <label for="password" class="block text-sm font-medium text-gray-700">password</label>
              <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex justify-end">
              <button type="button" id="closeModalButton" class="bg-gray-500 text-white px-4 py-2 rounded mr-2 hover:bg-gray-600">Annuler</button>
              <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Créer</button>
            </div>
          </form>

        </div>
      </div>

      <!-- Table -->
      <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">Nom</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Salle A
                    </th>
                    <td class="px-6 py-4">insert nome her</td>
                    <td class="px-6 py-4">insert email her</td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-4">Supprimer</a>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<script src="script.js"></script>
</html>