<!DOCTYPE html>
<html>
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <meta charset="utf-8">
        <style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
    </head>
    <body>
     
        <table id="datatable" style="border: 1px solid">
            <h1>Quản lý cầu thủ</h1>
            <thead>
                <tr role="row">
                    <th>ID</th>
                    <th>Tên cầu thủ</th>
                    <th>Tuổi</th>
                    <th>Quốc tịch</th>
                    <th>Vị trí</th>
                    <th>Lương</th>
                    <th style="width: 7%;">Edit</th>
                    <th style="width: 10%;">Delete</th>
                </tr>
            </thead>
            <tbody>

            @foreach($data_cauthu as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->ten_cau_thu }}</td>
                    <td>{{ $value->tuoi }}</td>
                    <td>{{ $value->quoc_tich }}</td>
                    <td>{{ $value->vi_tri }}</td>
                    <td>{{ $value->luong }}</td>
                    <td>
                        <!-- Nút Edit -->
                        <a href="{{url('/trangEdit')}}"><button id="button">Edit</button></a>
                           
                       
                    </td>
                    <th style="width: 10%;">Delete</th>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="{{url('/trangAdd')}}"><button id="button">Thêm cầu thủ</button></a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>