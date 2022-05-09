<!DOCTYPE >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
    <h2 style="text-align: center">Thông tin liên hệ</h2>
    <div style="width: 500px; height: 300px; background-color: lightgray; display: flex; justify-content: center; margin-left: 30%; padding-top: 20px">
        <form name="contactform" method="get" action="{{route('outputUser')}}">
            <table awidth="450px">
                <tr>
                    <td valign="top">
                        <label for="first_name">Họ và tên *</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="name" maxlength="50" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="email">Email *</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="email" maxlength="80" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="telephone">Số điện thoại</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="telephone" maxlength="30" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="comments">Nội dung liên hệ *</label>
                    </td>
                    <td valign="top">
                        <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>