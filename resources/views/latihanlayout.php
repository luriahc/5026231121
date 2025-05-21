<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperfind Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #18548c;
            position: fixed;
            left: 0;
            top: 0;
            transition: 0.3s;
            padding: 15px;
            color: white;
        }
        .sidebar.hide {
            left: -250px;
        }
        .toggle-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: transparent;
            border: none;
            font-size: 20px;
            color: white;
            cursor: pointer;
        }
        .sidebar.hide .toggle-btn {
            left: 250px;
            color: #18548c;
            background-color: white;
            border-radius: 50%;
            padding: 5px 10px;
        }
        .user-info {
            display: flex;
            align-items: center;
        }
        .user-info img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }
        .user-info div {
            margin-left: 10px;
        }
        .btn-custom {
        background-color: #18548c;
        color: white;
        border: none;
        }
        .btn-custom:hover {
        background-color: #144272;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <button class="toggle-btn" id="toggle-btn">&#171;</button>
    
    <div class="user-info mt-4">
        <img src="materialD/materialD/Frame 627275.png" alt="User Image">
        <div>
            <h6 class="mb-0">User</h6>
            <p class="mb-0 text-light">user@mail.com</p>
        </div>
    </div>

    <ul class="list-unstyled mt-4">
        <li class="mb-3"><a href="#" class="text-white"><i class="fas fa-clipboard-list"></i> Helperlog</a></li>
        <li class="mb-3"><a href="#" class="text-white"><i class="fas fa-search"></i> Helperfind</a></li>
        <li><a href="#" class="text-white"><i class="fas fa-comments"></i> Helperassist</a></li>
    </ul>
</div>

<!-- Konten utama -->
<div class="content" style="margin-left: 250px; padding: 20px;">
    <h2 class="mt-4">Helperfind Dashboard</h2>
    <p>Filter PRT Berdasarkan</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex">
                    <!-- Container Kiri (Foto Profil) -->
                    <div class="flex-shrink-0">
                        <img src="materialD/materialD/image-3.png"  alt="Profile" style="height: 150px; object-fit: cover;">
                    </div>
        
                    <!-- Container Kanan (Informasi & Tombol) -->
                    <div class="ml-3 flex-grow-1">
                        <h5 class="card-title mb-1"> <b>Intan Permata</b></h5>
                        <p class="text-muted mb-1"><i class="fas fa-user text-primary"></i> Baby Sitter</p>
                        <p class="text-muted mb-1"><i class="fas fa-map-marker-alt text-danger"></i> Surabaya</p>
                        <p class="text-muted mb-2"><i class="fas fa-star text-warning"></i> 4.5/5.0</p>

                        <!-- Tombol Selengkapnya -->
                        <a href="#" class="btn btn-custom btn-sm w-100">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex">
                    <!-- Container Kiri (Foto Profil) -->
                    <div class="flex-shrink-0">
                        <img src="materialD/materialD/image-3.png"  alt="Profile" style="height: 150px; object-fit: cover;">
                    </div>
        
                    <!-- Container Kanan (Informasi & Tombol) -->
                    <div class="ml-3 flex-grow-1">
                        <h5 class="card-title mb-1"> <b>Sumairi</b></h5>
                        <p class="text-muted mb-1"><i class="fas fa-user text-primary"></i> Perawat Lansia</p>
                        <p class="text-muted mb-1"><i class="fas fa-map-marker-alt text-danger"></i> Pasuruan</p>
                        <p class="text-muted mb-2"><i class="fas fa-star text-warning"></i> 4.5/5.0</p>

                        <!-- Tombol Selengkapnya -->
                        <a href="#" class="btn btn-custom btn-sm w-100">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex">
                    <!-- Container Kiri (Foto Profil) -->
                    <div class="flex-shrink-0">
                        <img src="materialD/materialD/image-3.png"  alt="Profile" style="height: 150px; object-fit: cover;">
                    </div>
        
                    <!-- Container Kanan (Informasi & Tombol) -->
                    <div class="ml-3 flex-grow-1">
                        <h5 class="card-title mb-1"> <b>Rofiq</b></h5>
                        <p class="text-muted mb-1"><i class="fas fa-user text-primary"></i> Sopir Pribadi</p>
                        <p class="text-muted mb-1"><i class="fas fa-map-marker-alt text-danger"></i> Surabaya</p>
                        <p class="text-muted mb-2"><i class="fas fa-star text-warning"></i> 4.5/5.0</p>

                        <!-- Tombol Selengkapnya -->
                        <a href="#" class="btn btn-custom btn-sm w-100">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex">
                    <!-- Container Kiri (Foto Profil) -->
                    <div class="flex-shrink-0">
                        <img src="materialD/materialD/image-3.png"  alt="Profile" style="height: 150px; object-fit: cover;">
                    </div>
        
                    <!-- Container Kanan (Informasi & Tombol) -->
                    <div class="ml-3 flex-grow-1">
                        <h5 class="card-title mb-1"> <b>Nagisa Natsumi</b></h5>
                        <p class="text-muted mb-1"><i class="fas fa-user text-primary"></i> Baby Sitter</p>
                        <p class="text-muted mb-1"><i class="fas fa-map-marker-alt text-danger"></i> Surabaya</p>
                        <p class="text-muted mb-2"><i class="fas fa-star text-warning"></i> 4.5/5.0</p>

                        <!-- Tombol Selengkapnya -->
                        <a href="#" class="btn btn-custom btn-sm w-100">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex">
                    <!-- Container Kiri (Foto Profil) -->
                    <div class="flex-shrink-0">
                        <img src="materialD/materialD/image-3.png"  alt="Profile" style="height: 150px; object-fit: cover;">
                    </div>
        
                    <!-- Container Kanan (Informasi & Tombol) -->
                    <div class="ml-3 flex-grow-1">
                        <h5 class="card-title mb-1"> <b>Andri Wulan</b></h5>
                        <p class="text-muted mb-1"><i class="fa-solid fa-user text-primary"></i> PRT</p>
                        <p class="text-muted mb-1"><i class="fas fa-map-marker-alt text-danger"></i> Surabaya</p>
                        <p class="text-muted mb-2"><i class="fas fa-star text-warning"></i> 4.5/5.0</p>

                        <!-- Tombol Selengkapnya -->
                        <a href="#" class="btn btn-custom btn-sm w-100">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex">
                    <!-- Container Kiri (Foto Profil) -->
                    <div class="flex-shrink-0">
                        <img src="materialD/materialD/image-3.png"  alt="Profile" style="height: 150px; object-fit: cover;">
                    </div>
        
                    <!-- Container Kanan (Informasi & Tombol) -->
                    <div class="ml-3 flex-grow-1">
                        <h5 class="card-title mb-1"> <b>Roniah</b></h5>
                        <p class="text-muted mb-1"><i class="fa-solid fa-user text-primary"></i> Baby Sitter</p>
                        <p class="text-muted mb-1"><i class="fa-solid fa-map-marker-alt text-danger"></i> Surabaya</p>
                        <p class="text-muted mb-2"><i class="fa-solid fa-star text-warning"></i> 4.5/5.0</p>

                        <!-- Tombol Selengkapnya -->
                        <a href="#" class="btn btn-custom btn-sm w-100">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- Script untuk Toggle Sidebar -->
<script>
    $(document).ready(function(){
        $("#toggle-btn").click(function(){
            $("#sidebar").toggleClass("hide");

            // Ubah arah panah saat sidebar di-hide atau ditampilkan
            if ($("#sidebar").hasClass("hide")) {
                $("#toggle-btn").html("&#187;"); // Panah kanan
            } else {
                $("#toggle-btn").html("&#171;"); // Panah kiri
            }
        });
    });
</script>


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
