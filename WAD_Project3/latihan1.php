<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form-control {
            padding-top: 15px;
        }

        .col-12{
            padding-top: 15px;
        }
    </style>

</head>
<body>
    <h1>Selamat Datang</h1>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Enter Your Ticket Number</span>
            <input type="number" name="inputAngka" class="form-control" >
        </div>

        <div class="form-group">
            <label for="dropdownMenu">Pilih Studio Foto Yang Kamu Pesan</label>
            <select class="form-control" id="dropdownMenu" name="option">
                <option value="option1">Studio Anggrek</option>
                <option value="option2">Studio Anyelir</option>
                <option value="option3">Studio Mawar</option>
                <option value="option4">Studio Melati</option>
            </select>
        </div>

        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle text-bg-info p-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Studio Foto Yang Kamu Pesan
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Studio Anggrek</a></li>
                <li><a class="dropdown-item" href="#">Studio Anyelir</a></li>
                <li><a class="dropdown-item" href="#">Studio Mawar</a></li>
                <li><a class="dropdown-item" href="#">Studio Melati</a></li>
            </ul>
        </div>

        <div class="col-12">
            <button class="btn btn-success" type="submit">Hitung</button>
        </div>
    </form>

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>