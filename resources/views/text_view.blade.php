<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ Form đầy đủ</title>
</head>
<body>
    <h2>Form Đăng Ký</h2>
    <form action="" method="POST">
    @csrf
        <!-- Text input -->
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required><br><br>

        <!-- Password input -->
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br><br>

        <!-- Email input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <!-- Number input -->
        <label for="age">Tuổi:</label>
        <input type="number" id="age" name="age" min="18" max="100"><br><br>

        <!-- Date input -->
        <label for="birthday">Ngày sinh:</label>
        <input type="date" id="birthday" name="birthday"><br><br>

        <!-- Radio buttons -->
        <label>Giới tính:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Nam</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Nữ</label><br><br>

        <!-- Checkbox -->
        <label>Sở thích:</label><br>
        <input type="checkbox" id="music" name="hobby" value="music">
        <label for="music">Âm nhạc</label><br>
        <input type="checkbox" id="sports" name="hobby" value="sports">
        <label for="sports">Thể thao</label><br><br>

        <!-- Dropdown select -->
        <label for="country">Quốc gia:</label>
        <select id="country" name="country">
            <option value="vn">Việt Nam</option>
            <option value="us">Hoa Kỳ</option>
            <option value="uk">Anh</option>
        </select><br><br>

        <!-- Textarea -->
        <label for="comments">Ghi chú:</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>

        <!-- Submit button -->
        <button type="submit">Gửi</button>
    </form>
</body>
</html>
