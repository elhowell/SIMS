<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Student</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		
		<div class="detail-box animated fadeInUp">
			<div class="box-header">
				<h2>Student Detail</h2>
			</div>
			<table width="100%" border="0">
			<tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>Student Id :</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['student_id']?></td>
			  </tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>Name :</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['f_name']?> <?=$studentdetail[0]['surname']?></td>
			  </tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>City :</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['city']?></td>
			  </tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>Country :</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['country']?></td>
			  </tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>Date of birth :</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['date_of_birth']?></td>
			  </tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>Email :</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['email']?></td>
			  </tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>Courses :</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['courses']?></td>
			  </tr>
			  <tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
				<td width="50%" align="right"><b>Exam score 1:</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['exam_score_1']?></td>
			  </tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>Exam score 2:</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['exam_score_2']?></td>
			  </tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>Exam score 3:</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['exam_score_3']?></td>
			  </tr>
			  <tr>
			    <td colspan="2" align="right" >&nbsp;</td>
		      </tr>
			  <tr>
				<td width="50%" align="right"><b>GPA :</b></td>
				<td width="50%" align="left"><?=$studentdetail[0]['gpa']?></td>
			  </tr>
			</table>
			<br/>
			<a href="logout">LOG OUT</a>
			<br/>
		</div>
	</div>
</body>
</html>