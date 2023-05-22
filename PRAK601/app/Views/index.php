<!DOCTYPE html>
<html>

<head>
    <title>Halaman Index</title>
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 350px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
        color: #ff4f5a;
    }

    img {
        width: 230px;
        margin: auto;
    }

    table {
        margin-top: 20px;
        margin-bottom: 20px;
        width: 100%;
        justify-content: center;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        width: 10%;
        
    }

    th {
        text-align: right;
    }

    .btn-container {
        display: flex;
        justify-content: center;
    }

    button {
        margin-top: 10px;
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
        position: relative;
        overflow: hidden;
        background-color: #ff4f5a;
    }

    button:hover {
        background-color: #ae3039;
    }
    </style>

</head>

<body>
    <div class="container">
        <h1>Beranda</h1>
        <img src="https://img.freepik.com/free-vector/designer-concept-illustration_114360-676.jpg?size=626&ext=jpg" alt="">
        <table>
            <tr>
                <th>Nama :</th>
                <td>
                    <?= $nama ?>
                </td>
            </tr>
            <tr>
                <th>NIM :</th>
                <td>
                    <?= $nim ?>
                </td>
            </tr>
        </table>
        <div class="btn-container">
            <form action="/home/biodata">
                <button>
                    Biodata
                </button>
            </form>
        </div>
    </div>
</body>

</html>