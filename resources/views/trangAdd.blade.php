
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Cầu Thủ</title>
</head>
<body>
    <h2>Thêm Cầu Thủ Mới</h2>
    <form method="POST">
        @csrf
        <div>
            <label for="name">Tên Cầu Thủ:</label> <br>
            <input type="text" id="name" name="name" > <br>
            
        </div>
        <div>
            <label for="date">tuoi</label> <br>
            <input type="text" id="date" name="tuoi"> <br>
          
        </div>
        <div>
            <label for="vi_tri">Vị Trí:</label><br> <br>
            <input type="text" id="vi_tri" name="vi_tri"> <br>
           
        </div><br>
        <div>
            <label for="quoc_tich">Quoc Tich:</label> <br>
            <input type="text" id="quoc_tich" name="quoc_tich" > <br>
           
        </div>
        <div>
            <label for="luong">luong:</label> <br>
            <input type="text" id="luong" name="luong" > <br>
          
        </div>
        <button type="submit" name="submit">Thêm Cầu Thủ</button><br>
    </form>
</body>
</html>