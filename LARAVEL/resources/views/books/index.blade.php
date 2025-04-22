<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('https://i.pinimg.com/474x/03/5e/7d/035e7d704d45a6e0276d07b57593aa15.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            background: rgba(187, 187, 187, 0.15);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            color:rgb(255, 200, 0);
            text-shadow: 1px 1px 10px #000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.05);
            color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        thead {
            background-color: rgba(249, 202, 36, 0.3);
        }

        tbody tr {
            transition: background 0.3s ease;
        }

        tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        th {
            font-weight: bold;
        }

        td {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logout-button {
            background-color: #f72585;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0 0 10px #f72585;
            transition: background 0.3s ease;
        }

        .logout-button:hover {
            background-color: #b5179e;
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            tr {
                margin-bottom: 15px;
                border-bottom: 2px solid rgba(255, 255, 255, 0.1);
            }

            td {
                text-align: right;
                position: relative;
                padding-left: 50%;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
                color: #f9ca24;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Daftar Buku</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul buku</th>
                    <th>Nama Penulis</th>
                    <th>Tahun terbit</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->Judulbuku }}</td>
                        <td>{{ $book->Namapenulis }}</td>
                        <td>{{ $book->Tahunterbit }}</td>
                        <td>{{ $book->Genrebuku }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="text-align:right; margin-top: 20px;">
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="logout-button">Logout</button>
            </form>
        </div>
    </div>

</body>
</html>
