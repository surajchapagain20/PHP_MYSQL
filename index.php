<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Nepallfie Repair and Requisition Form.!!! </title>

</head>
<style>
body {
	font-family: Arial;
	color: #ffff;
	font-size: 0.95em;
	background-image: url("../login/view/images/bg.jpeg");
}




*{
    margin: 0; 
      padding: 0; 
      box-sizing: border-box;
}
 
#content{
    width: 50%;
    justify-content: center;
    align-items: center;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
 
#display-image{
    width: 100%;
    justify-content: center;
    padding: 5px;
    margin: 15px;
}
img{
    margin: 5px;
    width: 350px;
    height: 250px;
}


</style>
<body>
<b><center><h3>Nepallife Password/Email and Repair Requisition Form</h3></center></b>

<button>
<a href="../../repair/"> Repair and Requisition Form</a>
</button>
<button>
<a href="../../userid/"> For Email and UserId </a>
</button>
<button>
<a href="../../repair/i_upload.php"> Upload Image </a>
</button>
<button>
<a href="../../repair/image/index.php"> Upload Image with Display </a>
</button>


<h3>

<form method="post" action="conn.php">
<table border="1">
<th colspan="4"> Fixed Assets Repair and Upgradation Requisition Form </th>
<tr> <td colspan="4">Date: <input type="date" name="r_date" id="r_date"></td> </tr>
<tr> <td colspan="4">Items Description: <input type="text" name="i_desc" id="i_desc"></td> </tr>
<tr> <td>Model & SI NO: <input type="text" name="model_no" id="model_no"></td>
<td>Date Of Purchase: <input type="date" name="p_date" id="p_date"></td></tr>
<tr> <td>Purchased Value: <input type="text" name="p_value" id="p_value"></td>
<td>Branch: <input type="text" name="branch" id="branch"></td></tr>
<tr> <td>Asset Code: <input type="text" name="a_code" id="a_code"></td>
<td>Department: <input type="text" name="dept" id="dept"></td></tr>
<tr> <td>Full Name: <input type="text" name="username" id="username"></td>
<td>Userid: <input type="text" name="userid" id="userid"></td></tr>
<tr> <td colspan="4">Reason for Repair / Upgrade: <input type="text" name="repair" id="repair"></td> </tr>
<tr> <td colspan="4">Approved By Branch/Department Head: <input type="text" name="approve" id="approve"></td> </tr>
<tr> <td colspan="4">Recommended By IT Department: <input type="text" name="recomm" id="recomm"></td> </tr>
<tr> <td colspan="4">Approved By GSD: <input type="text" name="a_gsd" id="a_gsd"></td> </tr>
</table><br>
<input type="submit" value="Login" />&nbsp;&nbsp;<input type="reset" value="Cancel" />
</form>

<hr>
</h3>

</body>
</html>