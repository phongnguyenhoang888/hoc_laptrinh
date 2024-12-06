<h2>Chỉnh Sửa Cầu Thủ</h2>

<form  method="POST">
    @csrf
    @method('POST')

    <div>
        <label for="name">Tên Cầu Thủ:</label><br>
        <input type="text" id="name" name="name" value="{{ $value->name }}" required><br>
    </div><br>

    <div>
        <label for="date">Ngày Sinh:</label><br>
        <input type="date" id="date" name="date" value="{{ $value->date }}" required><br>
    </div><br>

    <div>
        <label for="vi_tri">Vị Trí:</label><br>
        <input type="text" id="vi_tri" name="vi_tri" value="{{ $value->vi_tri }}" required><br>
    </div><br>

    <div>
        <label for="quoc_tich">Quốc Tịch:</label><br>
        <input type="text" id="quoc_tich" name="quoc_tich" value="{{ $value->quoc_tich }}" required><br>
    </div><br>

    <div>
        <label for="luong">Lương:</label><br>
        <input type="number" id="luong" name="luong" value="{{ $value->luong }}" required><br>
    </div><br>

    <button type="submit">Cập Nhật</button>
</form>
