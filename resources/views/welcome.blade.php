<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Arsip Digital - Solusi Arsip Digital Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="min-h-screen bg-yellow-50 flex flex-col">
    <header class="bg-yellow-400 shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">

                <span class="text-2xl font-bold text-yellow-900">Arsip Digital</span>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#home" class="text-yellow-900 hover:text-yellow-700">Beranda</a></li>
                    <li><a href="#fitur" class="text-yellow-900 hover:text-yellow-700">Fitur</a></li>
                    <li><a href="#kontak" class="text-yellow-900 hover:text-yellow-700">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        <section id="home" class="py-20">
            <div class="container ml-0 lg:ml-16 mx-auto px-4 flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10  lg:mb-0">
                    <h1 class="text-4xl lg:text-5xl font-bold text-yellow-900 mb-6">
                        Arsip Digital Modern untuk Masa Depan
                    </h1>
                    <p class="text-xl text-yellow-800 mb-8">
                        Simpan, kelola, dan akses dokumen penting Anda dengan mudah dan aman menggunakan Arsip Digital.
                    </p>
                    <a href="/admin/login"
                        class="bg-yellow-500 text-yellow-900 px-8 py-3 rounded-full text-lg font-semibold hover:bg-yellow-600 transition duration-300 inline-block">
                        Mulai Sekarang
                    </a>
                </div>
                <div class="relative lg:w-1/2 flex justify-center">
                    {{-- <div
                        class="w-64 h-64 bg-yellow-300 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-archive text-6xl text-yellow-900"></i>
                    </div> --}}
                    <svg viewBox="0 0 200 200" class="w-96  relative " xmlns="http://www.w3.org/2000/svg">
                        <path fill="#facc15"
                            d="M32.8,-58C43,-51,51.8,-43,59.4,-33.2C67,-23.4,73.3,-11.7,71.4,-1.1C69.5,9.5,59.4,19,52.3,29.7C45.2,40.3,41.1,52.2,32.9,63.7C24.6,75.2,12.3,86.4,0.5,85.6C-11.4,84.7,-22.7,71.9,-30,59.8C-37.3,47.8,-40.4,36.5,-48.7,26.6C-57,16.8,-70.5,8.4,-68.7,1C-66.9,-6.4,-50,-12.7,-43,-24.8C-36,-36.9,-39,-54.8,-33.5,-64.4C-28,-74.1,-14,-75.4,-1.3,-73.1C11.4,-70.9,22.7,-64.9,32.8,-58Z"
                            transform="translate(100 100)" />
                        <i class="fas fa-archive top-44 text-6xl absolute text-yellow-900"></i>
                    </svg>

                </div>
            </div>
        </section>

        <section id="fitur" class="py-20 bg-yellow-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-yellow-900 mb-12">Fitur Unggulan</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                        <i class="fas fa-search text-4xl text-yellow-500 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2 text-yellow-900">Pencarian Cepat</h3>
                        <p class="text-yellow-800">Temukan dokumen dalam hitungan detik dengan pencarian canggih kami.
                        </p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                        <i class="fas fa-shield-alt text-4xl text-yellow-500 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2 text-yellow-900">Keamanan Terjamin</h3>
                        <p class="text-yellow-800">Lindungi arsip Anda dengan enkripsi tingkat lanjut.</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                        <i class="fas fa-clock text-4xl text-yellow-500 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2 text-yellow-900">Akses 24/7</h3>
                        <p class="text-yellow-800">Akses arsip Anda kapan saja dan di mana saja.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section id="kontak" class="py-20 bg-yellow-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-yellow-900 mb-12">Hubungi Kami</h2>
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-8">
                <form>
                    <div class="mb-6">
                        <label for="nama" class="block text-yellow-900 font-semibold mb-2">Nama</label>
                        <input type="text" id="nama" name="nama"
                            class="w-full px-3 py-2 border border-yellow-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-yellow-900 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-2 border border-yellow-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="pesan" class="block text-yellow-900 font-semibold mb-2">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="4"
                            class="w-full px-3 py-2 border border-yellow-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
                            required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-yellow-500 text-yellow-900 px-6 py-2 rounded-full font-semibold hover:bg-yellow-600 transition duration-300">Kirim
                            Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </main>

    <footer class="bg-yellow-400 text-yellow-900 py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-lg font-semibold mb-2">Arsip Digital</h3>
                    <p class="text-sm">Solusi Arsip Digital Terpercaya</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-yellow-700">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-yellow-700">Syarat dan Ketentuan</a>
                    <a href="#" class="hover:text-yellow-700">Kontak</a>
                </div>
            </div>
            <div class="mt-8 text-center text-sm">
                © <span id="current-year"></span> Arsip Digital. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</body>

</html>
