<!DOCTYPE html>
<html>

<head>
    <title>Biodata Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        padding: 20px;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: -6px 2px 20px 8px #A89D9D;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        width: 30%;
    }

    .profile-img {
        width: 250px;
        height: 350px;
        border-radius: 10%;
        object-fit: cover;
        object-position: center;
        box-shadow: -6px 2px 20px 8px #A89D9D;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .btn-container button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-container button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Biodata Pribadi</h1>

        <table>
            <tr>
                <td rowspan="8"><img src="<?= base_url('images/' . $foto1) ?>" class="profile-img">
                </td>
                <th>Nama Lengkap</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>
                    <?= $nim; ?>
                </td>
            </tr>
            <tr>
                <th>Asal Prodi</th>
                <td>
                    <?= $prodi; ?>
                </td>
            </tr>
            <tr>
            <tr>
                <th>Cita-cita</th>
                <td>
                    <?= $citacita; ?>
                </td>
            </tr>
            <tr>
                <th>Hobi</th>
                <td>
                    <?= $hobi; ?>
                </td>
            </tr>
            <tr>
                <th>skill</th>
                <td>
                    <?= $skill; ?>
                </td>
            </tr>
            <th>Motivasi</th>
            <td>
                <?= $motivasi; ?>
            </td>
            </tr>
        </table>
    </div>
    <div class="btn-container">

        <form action="/home/index">
            <button>Beranda</button>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>