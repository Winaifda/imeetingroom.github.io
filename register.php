<html>
<head>
<title>Meeting Booking</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="save_register.php">
  <table width="400" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;ชื่อสมาชิก</td>
        <td width="180">
          <input name="txtUsername" type="text" id="txtUsername" size="20">        </td>
      </tr>
      <tr>
        <td> &nbsp;รหัสผ่าน</td>
        <td><input name="txtPassword" type="password" id="txtPassword">        </td>
      </tr>
      <tr>
        <td> &nbsp;ยืนยันรหัสผ่าน</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword">        </td>
      </tr>
      <tr>
        <td>&nbsp;ชื่อ - สกุล</td>
        <td><input name="txtName" type="text" id="txtName" size="35"></td>
      </tr>
      <tr>
        <td>สิทธิการใช้งาน</td>
        <td><select name="status" id="status">
          <option value="admin">admin</option>
          <option value="member">member</option>
        </select></td>
      </tr>
      <tr>
        <td> &nbsp;สถานะ</td>
        <td><select name="active" id="active">
          <option value="Y">Y</option>
          <option value="N">N</option>
        </select></td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save">
</form>
</body>
</html>