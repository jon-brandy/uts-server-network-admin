<!DOCTYPE html>
<html>

<head>
    <title>Redlock-web-2.0 - Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap');

        th {
            font-family: 'Poppins', sans-serif;
        }

        div {
            padding-top: 2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr class="table-warning">
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jabatan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                # 2540120603 - Nicolas Saputra Gunawan - LA07
                $host = '172.22.0.2'; # Ambil IPv4Address dari container image mysql.
                # parameter -> host, username, password, database_name.
                $connect = mysqli_connect($host, 'root', 'root', 'Redlock');

                if ($connect->connect_errno) {
                    echo "Connection Failed: " . $connect->connect_error;
                    exit();
                }
                # dump all data from users table.
                $get_all_user = "SELECT * FROM users";

                # Use the query.
                $query = mysqli_query($connect, $get_all_user);

                # Banner.
                #echo "==========================" . "<br>";
                #echo "REDLOCK-WEB-2.0 - DATABASE" . "<br>";
                #echo "==========================" . "<br>";
                $index = 1;
                while ($row = mysqli_fetch_array($query)) {
                    $index++;
                }
                echo "Jumlah user di database Redlock-web-2.0 --> " . $index . "<br>";
                ?>
            </tbody>
        </table>
</body>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>