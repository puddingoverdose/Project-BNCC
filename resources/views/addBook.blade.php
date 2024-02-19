<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h2>Add Employee</h2> 
    <form method="POST" action="/store/employee">
        @csrf

        <div class="mb-3">
          <label for="employee-name" class="form-label">Nama Karyawan</label>
          <input type="text" class="form-control" id="employee-name" name="nama" minlength="5" maxlength="20">
        </div>

        <div class="mb-3">
            <label for="employee-age" class="form-label">Umur Karyawan</label>
            <input type="number" id="employee-age" name="umur" min="20">
        </div>

        <div class="mb-3">
            <label for="employee-address" class="form-label">Alamat Karyawan</label>
            <input type="text" class="form-control" id="employee-address" name="alamat" minlength="10" maxlength="40">
        </div>

        <div class="mb-3">
            <label for="book-price" class="form-label">Book Price</label>
            <input type="number" class="form-control" id="book-price" name="harga">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>