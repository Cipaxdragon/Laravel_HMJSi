<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="shortcut icon" href="./image/android-chrome-192x192.png" type="image/x-icon">
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <!-- Tambahkan custom CSS untuk animasi -->
    <style>

        /* Menengahkan konten dalam kontainer */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Menambahkan animasi scaling saat hover pada input */

        input:focus {
            border-bottom: 2px solid blue;
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }


        /* Menambahkan animasi scaling saat tombol ditekan */
        button:hover {
            transform: scale(1.09);
            transition: transform 0.3s ease;
        }
        button:active {
            transform: scale(1.19);
            transition: transform 0.3s ease;
        }


        .text-animation {
  position: relative;
  display: inline-block;
  font-size: 34px;
  font-weight: bold;
}

.text-animation::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  width: 100%;
  height: 2px;
  background-color: blue;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease-in-out;
}

.text-animation:hover::after {
  transform: scaleX(1);
}
    </style>
</head>
<body class="bg-gray-200">
    <div class="container">
        <h1 class="text-4xl text-center font-bold text-blue-700 mb-8 text-animation">Rido Punya Kuasa</h1>

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="/submit">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" autocomplete="off">

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password" autocomplete="off">

            </div>
            <div class="flex items-center justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Login Ki Kanda
                </button>
            </div>
        </form>

    </div>
</body>
</html>
