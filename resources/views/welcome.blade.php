<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mini Sidebar Toggle Presisi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        body {
            overflow-x: hidden;
        }

        /* Lebar standar sidebar (terbuka) */
        #sidebar {
            width: 250px;
            transition: all 0.3s ease;
            z-index: 1050;
            flex-shrink: 0;
        }

        /* Mode Mini-Sidebar (hanya ikon) */
        #sidebar.mini {
            width: 70px;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }

        /* NEW: Perataan Tombol Toggle di mode mini */
        #sidebar.mini #sidebarToggle {
            margin: 0 !important;
            padding: 0 !important;
            width: 100%;
            height: 40px;
            /* Atur tinggi agar seragam dengan tautan menu */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* NEW: Atur ikon toggle agar ukurannya konsisten */
        #sidebarToggle i {
            font-size: 1.5rem !important;
        }

        /* Sembunyikan judul "My App" di mode mini */
        #sidebar.mini .sidebar-title {
            display: none;
        }

        /* Sembunyikan tulisan menu di mode mini */
        #sidebar.mini .nav-link span {
            display: none;
        }

        /* Pusatkan ikon di mode mini */
        #sidebar.mini .nav-link {
            justify-content: center;
            padding: 0.75rem 0.5rem !important;
            /* Padding vertikal untuk menyeimbangkan */
            text-align: center;
        }

        /* Tambahkan margin kanan pada ikon saat sidebar terbuka agar ada jarak dengan teks */
        #sidebar:not(.mini) .nav-link i {
            margin-right: 0.75rem !important;
        }


        /* Konten: Margin saat sidebar terbuka */
        #content {
            margin-left: 250px;
            transition: all 0.3s ease;
            flex-grow: 1;
            width: 100%;
        }

        /* Konten: Margin saat sidebar menjadi mini */
        #sidebar.mini~#content {
            margin-left: 70px;
        }

        /* Ubah kursor tombol toggle */
        #sidebarToggle {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav id="sidebar" class="bg-dark text-white vh-100 position-fixed d-flex flex-column p-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0 text-truncate sidebar-title">My App</h5>
            <button id="sidebarToggle" class="btn btn-sm btn-outline-light border-0" title="Toggle Sidebar">
                <i class="bi bi-list fs-5"></i>
            </button>
        </div>

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ url('/login') }}" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-house fs-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-people fs-5"></i>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-gear fs-5"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </nav>

    <div id="content">
        <main class="p-4">
            <h1>Konten Utama</h1>
            <p>
                Sidebar sekarang beralih antara tampilan penuh dan tampilan ikon
                mini dengan perataan yang lebih presisi.
            </p>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const sidebar = document.getElementById("sidebar");
        const toggleBtn = document.getElementById("sidebarToggle");
        const sidebarTitle = document.querySelector(".sidebar-title");

        toggleBtn.addEventListener("click", () => {
            // Toggle kelas 'mini' pada sidebar
            sidebar.classList.toggle("mini");

            // Logika: Sembunyikan/Tampilkan Judul "My App"
            if (sidebar.classList.contains("mini")) {
                sidebarTitle.style.display = "none";
            } else {
                sidebarTitle.style.display = "block";
            }
        });
    </script>
</body>

</html>