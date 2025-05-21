<html>
<head>
    <title>Kalkulator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function formvalidation() {
            var nrp = document.getElementById("nrp").value.trim();
            var nama = document.getElementById("nama").value.trim();

            if(nrp.length == 0)
            {
                Swal.fire({
                title: "Pesan Kesalahan",
                text: "NRP harus diisi",
                icon: "error"
                });
                return false;           
            }

            
            if (!/^[A-Za-z\s]+$/.test(nama)) {
                Swal.fire({
                    title: "Pesan Kesalahan",
                    text: "Nama harus diisi dan tidak boleh mengandung angka",
                    icon: "error"
                });
                return false;
            }

            return true; // jika semua valid
        }
    </script>
</head>
<body>
    <div class="container mt-4">
        <h3>Form Pendaftaran ISE</h3>
        <form id="frmpendaftaran" action="https://google.com" method="get" onsubmit="return formvalidation();">
            <label>NRP:</label>
            <input type="text" id="nrp" class="form-control" 
                placeholder="Silahkan isi NRP, 10 digit angka, tidak boleh kosong" name="nrp">
            <br>
            <label>Nama:</label>
            <input type="text" id="nama" class="form-control" 
                placeholder="Silahkan isi Nama, tidak boleh kosong" name="nama">
            <br>
            <input type="submit" class="btn btn-primary" value="Daftar">
        </form>
    </div>
</body>
</html>
