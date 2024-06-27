<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center p-5">Thông tin sinh viên</h1>
       
        <?php foreach($SinhVien as $value): ?>
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{ $value['name'] }}</h4>
              <p class="card-text">ID:{{ $value['id'] }}</p>
              <p class="card-text">Marjor:{{ $value['major'] }}</p>
              <p class="card-text">Age:{{ $value['age'] }}</p>
              <p class="card-text">Phone number:{{ $value['phonenumber'] }}</p>
              <p class="card-text">Address:{{ $value['address'] }}</p>
              {{-- <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a> --}}
            </div>
          
          </div>
          <?php endforeach; ?>

    </div>
</body>
</html>