<!DOCTYPE >
<html>
<head>
    <style>
        h2{text-align: center}
        table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}
        td, th {border: 1px solid #dddddd;text-align: left;padding: 8px;}
        tr:nth-child(even) {background-color: #dddddd;}
        input{margin-left: 40%; margin-top: 20px; height: 30px;}
    </style>
</head>
<body>
    <div style="width: 700px; height: 400px; margin-left: 25%; border: 1px solid black; padding: 0 10px">
        <h2>Lưu trữ dữ liệu</h2>
        <table>
            <tr>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Nội dung liên hệ</th>
            </tr>
            <tr>
                <td>Nguyễn Minh Đức</td>
                <td>17december520@gmail.com</td>
                <td>0352982935</td>
                <td>HelloWorld!!!</td>
            </tr>
            <tr>
                <td>{{$name}}</td>
                <td>{{$email}}</td>
                <td>{{$telephone}}</td>
                <td>{{$comments}}</td>
            </tr>
        </table>
        <input type="button" value="Quay lại trang trước" onclick="history.back(-1)" />
    </div>
</body>
</html>

