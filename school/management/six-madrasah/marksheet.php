
<?php
	//include '../elements/header.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header('Location:../index.php');
	}
	$ses = $_SESSION['user'];
	$sesa = $ses['id'];
	//echo var_dump($sesa);
	include '../config/db_connection.php';

  $query_setting = "SELECT * FROM setting WHERE user_id = $sesa";
  $setting = mysqli_fetch_array(mysqli_query($con, $query_setting));
  $semester = $setting['semester'];
  $year = $setting['year'];

	$sql = "SELECT * FROM six_madrasah WHERE admin_id = '$sesa' and semester = '$semester' and year = '$year' and delete_status = '0' ORDER BY gpa DESC, total_mark DESC";
	$result = mysqli_query($con, $sql);
	
		if(isset($_POST['document'])){
			header("Content-type: application/vnd.ms-word");
			$filename = "marksheet_general.doc";
			header("Content-Disposition: attachment; Filename =".$filename);
		}
	
?>
<!DOCTYPE html>
<html>
<head>
  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Aceademic Transcript</title>
<style type="text/css">

<!--
.style2 {font-size: 36px}
.style3 {font-size: 24px}
.style5 {font-size: 14px}
.style6 {
	font-size: 12px;
	font-weight: bold;
}
.style7 {font-size: 9px}
.style9 {font-size: 12px}
-->
</style>
</head>

<body>
	<?php while($row = mysqli_fetch_array($result)){?>
	<form action="" method="post">
<table width="595" height="842" border="3" align="center">
  <tr>
    <td width="311" colspan="5"><table width="595" height="842" align="center" cellpadding="0" bordercolor="#FFFFFF" border="0">
      <caption align="top" class="text-center">
      <span class="style2"><span class="style3"><u>ACADEMIC TRANSCRIPT </u></span><br>
     <?php echo $ses['school_name']?> <!--Boroykandi Islamiya Alim Madrasah --></span><br />
	 <span class="style3">Post: Sylhet-3100, Dakshin Surma, Sylhet</span><br>
      <span class="style3"><?php echo $setting['semester']." Examination ".$setting['year']." (Class Six)" ?></span>
      </caption>
      <tr>
        <td width="157" height="90">&nbsp;</td>
        <td width="235"><table width="177" border="0">
          <tr>
            <td width="79">Student ID : </td>
            <td width="22"><em>10</em></td>
			<td width="22"><em>00</em></td>
            <td width="22"><em><?php echo $row['id']?></em></td>
          </tr>
        </table></td>
        <td colspan="2"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($ses['name']).'" alt="" width="144" height="107">'; ?></td>
        <td width="157">&nbsp;</td>
        <td width="175" rowspan="2"><table width="175" border="1" align="center">
            <tr>
              <td width="58" align="center"><span class="style5">Letter Grade </span></td>
              <td width="72" align="center"><span class="style5">Class Interval </span></td>
              <td width="23" align="center"><span class="style5">Grade Point </span></td>
            </tr>
            <tr>
              <td align="center">A+</td>
              <td align="center">80-100</td>
              <td align="center">5</td>
            </tr>
            <tr>
              <td align="center">A</td>
              <td align="center">70-79</td>
              <td align="center">4</td>
            </tr>
            <tr>
              <td align="center">A-</td>
              <td align="center">60-69</td>
              <td align="center">3.5</td>
            </tr>
            <tr>
              <td align="center">B</td>
              <td align="center">50-59</td>
              <td align="center">3</td>
            </tr>
            <tr>
              <td align="center">C</td>
              <td align="center">40-49</td>
              <td align="center">2</td>
            </tr>
            <tr>
              <td align="center">D</td>
              <td align="center">33-39</td>
              <td align="center">1</td>
            </tr>
            <tr>
              <td align="center">F</td>
              <td align="center">00-32</td>
              <td align="center">0</td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="104">&nbsp;</td>
        <td colspan="4" rowspan="2"><table width="455" height="124" border="0">
            <tr>
              <td width="131">Name</td>
              <td width="16">:</td>
              <td width="276"><b><?php echo $row['name']?></b></td>
            </tr>
            <tr>
              <td>Roll</td>
              <td>:</td>
              <td><?php echo $row['roll']?></td>
            </tr>
            <tr>
              <td>Institute</td>
              <td>:</td>
              <td><?php echo $ses['school_name']?> </td>
            </tr>
            <tr>
              <td>Group</td>
              <td>:</td>
              <td><?php echo $row['department']?></td>
            </tr>
            <tr>
              <td>Result Status </td>
              <td>:</td>
              <td><?php echo $row['status']?></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="23">&nbsp;</td>
        <td><p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="312">&nbsp;</td>
        <td colspan="5"><table width="629" border="1">
          <tr>
            <td width="42"><span class="style6">Sl. No</span></td>
            <td width="236" align="center"><span class="style6" >Name of Subject </span></td>
            <td width="83" align="center" valign="middle"><span class="style6">Letter Grade </span></td>
            <td width="78" align="center" valign="middle"><span class="style6">Grade Point </span></td>
            <td width="87" align="center" valign="middle"><span class="style6">GPA <span class="style7"> (without additional subject) </span></span></td>
            <td width="63" align="center" valign="middle"><span class="style6">GPA</span></td>
          </tr>
          <tr>
            <td align="center" valign="middle">1</td>
            <td>Quran Mazid </td>
            <td align="center" valign="middle"><?php echo $row['quran_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['quran_gpa']?></td>
            <td rowspan="9" align="center" valign="middle"><?php echo $row['gpa_without_extra']?></td>
            <td rowspan="11" align="center" valign="middle"><div align="center"><?php echo $row['gpa']?></div></td>
          </tr>
          <tr>
            <td align="center" valign="middle">2</td>
            <td>Arabic</td>
            <td align="center" valign="middle"><?php echo $row['arabic_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['arabic_gpa']?></td>
          </tr>
          <tr>
            <td align="center" valign="middle">3</td>
            <td>Aqaid and Fiqh </td>
            <td align="center" valign="middle"><?php echo $row['aqaid_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['aqaid_gpa']?></td>
          </tr>
          <tr>
            <td align="center" valign="middle">4</td>
            <td>English</td>
            <td align="center" valign="middle"><?php echo $row['english_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['english_gpa']?></td>
          </tr>
          <tr>
            <td align="center" valign="middle">5</td>
            <td>Bangla</td>
            <td align="center" valign="middle"><?php echo $row['bangla_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['bangla_gpa']?></td>
          </tr>
          <tr>
            <td align="center" valign="middle">6</td>
            <td>General Mathmatics </td>
            <td align="center" valign="middle"><?php echo $row['math_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['math_gpa']?></td>
          </tr>
          <tr>
            <td align="center" valign="middle">7</td>
            <td>General Science </td>
            <td align="center" valign="middle"><?php echo $row['science_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['science_gpa']?></td>
          </tr>
          <tr>
            <td align="center" valign="middle">8</td>
            <td>Bangladesh & Global Studies</td>
            <td align="center" valign="middle"><?php echo $row['bgs_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['bgs_gpa']?></td>
          </tr>
          <tr>
            <td align="center" valign="middle">9</td>
            <td>Information & C Technology </td>
            <td align="center" valign="middle"><?php echo $row['ict_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['ict_gpa']?></td>
          </tr>
          <tr>
            <td colspan="4"><em>Additional Subject: </em></td>
            <td align="center" valign="middle">GP above 2 </td>
          </tr>
          <tr>
            <td align="center">10</td>
            <td><?php echo $row['extra_subject'] ?> </td>
            <td align="center" valign="middle"><?php echo $row['extra_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['extra_gpa']?></td>
            <td align="center" valign="middle"><?php echo $row['extra_gpa_t']?></td>
          </tr>
		  <br><br>
		  <tr>
            <td align="center">11</td>
            <td><?php echo $row['pt_subject'] ?> </td>
            <td align="center" valign="middle"><?php echo $row['pt_gread']?></td>
            <td align="center" valign="middle"><?php echo $row['pt_gpa']?></td>
            <td align="center" valign="middle" colspan="2"><b>Non Additional Subject</b></td>
          </tr>
        </table></td>
    </table> 
	<table width="100%">
	<tr height="20"></tr>
  	<tr>
		<td><td>
		<td><em>Class Teacher</em></td>
		<td><td>
		<td align="right"><em>Principal</em></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="7" align="center"><p>Result Published on: <b><?php echo date("d-m-y")?></b></p></td> 
	</tr>
  </table>
  </tr>
  
</table><br><br>
	<?php }?>
	<button name="document" align="center">Download</button>
	<input type="button" onClick="window.print()" value="Print The Report"/>
	</br>
	</form>
</body>
</html>
<?php 

?>