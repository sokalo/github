
<!DOCTYPE html>
<html>
<head>
 <title>E-Recruitment UMG</title>
<!--	<link rel="stylesheet" href="css/style.css">

	<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
	<script src="js/incrementing.js"></script>-->
	
<style>
table, td {
    border: 0px solid black;
}
</style>
<script type="text/javascript">
// for education high school
 

</script>
</head>
<body>

	<table width="50%" align="center">
	<form method="post" action="application_action.php" enctype="multipart/form-data">
		<tr>
		<th colspan="2" align="left"><h2>APPLICATION FORM</h3></th>
		</tr>
		<tr>
			<td>Job Position:</td>
			<td>
			<select name="jobposition">
			<option>Any Position</option>
			<option>Other Position</option>
			</select>
		</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td>
			<input type="text" name="txtname"/>
			</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td>
			<input type="text" name="txtaddress" width="50"/>
			</td>
		</tr>
		<tr>
			<td>Place & Date of Birth:</td>
			<td>
			<input type="text" name="txtdob" />
			</td>
		</tr>
		<tr>
			<td>NRC/Passport Number:</td>
			<td>
			<input type="text" name="txtnrc" />
			</td>
		</tr>
		<tr>
			<td>Phone No:</td>
			<td>
			<input type="text" name="txtphoneno" />
			</td>
		</tr>
		<tr>
			<td>Email Address:</td>
			<td>
			<input type="email" name="txtemail" />
			</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>
			<select name="gender">
			<option>Male</option>
			<option>Female</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Marrital Status:</td>
			<td>
			<select name="marritalstatus">
			<option>Married</option>
			<option>Not Married</option>
			</select> 
			</td>
		</tr>
		<tr>
			<td colspan="2"><h3>Education:</h3></td>
		</tr>
		<tr>
			<td colspan="2">
			<div>
				<h3>High School</h3>
				<table>
					<tr>
						<th>School Name</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Place Of School</th>
						<th><input type="button" value="Add a Row" onclick="myFunction()"></th>
						<th><input type="button" value="Delete" onclick="myDeleteFunction()"></th>
						
					</tr>
					<tr>
					<td colspan="4">
				
					<table id="myTable">
								  <tr>
									<td><input type="text" name="highschool[0]"></td>
									<td><input type="date" id="startdate" name="highschool[1]"></td>
									<td><input type="date" id="enddate" name="highschool[2]" onChange="return checkdate()"></td>
									<td><input type="text" name="highschool[3]"></td>
									
								  </tr>
								 
								</table>

					</td>
					</tr>
				</table>
			
				<br>
				<h3>University</h3>
				<table>
					<tr>
						<th>School Name</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Place Of School</th>
						<th><input type="button" value="Add Row" onclick="myFunction1()"></th>
						<th><input type="button" value="Delete Row" onclick="myDeleteFunction1()"></th>
					</tr>
					
					<tr>
						<td colspan="4">

							<table id="myTable1">
								  <tr>
										<td><input type="text" name="uni[0]"></td>
										<td><input type="date" id="startdate" name="uni[1]"></td>
										<td><input type="date" id="enddate" name="uni[2]" onChange="return checkdate()"></td>
										<td><input type="text" name="uni[3]"></td>
								  </tr>
								</table>

						</td>
					
					</tr>
					
				</table>
				<h3>Others</h3>
				<table>
					<tr>
						<th>School Name</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Place Of School</th>
						<th><input type="button" value="Add Row" onclick="myFunction2()"></th>
						<th><input type="button" value="Delete Row" onclick="myDeleteFunction2()"></th>
					</tr>
					<tr>
						<td colspan="4">

						<table id="myTable2">
								  <tr>
										<td><input type="text" name="other[0]"></td>
										<td><input type="date" id="startdate" name="other[1]"></td>
										<td><input type="date" id="enddate" name="other[2]" onChange="return checkdate()"></td>
										<td><input type="text" name="other[3]"></td>
								  </tr>
								</table>

						</td>
					
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td colspan="2"><h3>Foreign Language:</h3></td>
		</tr>
		<tr>
			<td colspan="2">
			<div>
				
				<table>
					<tr>
						<th>Languages</th>
						<th>Speaking</th>
						<th>Reading</th>
						<th>Writing</th>
						<th><input type="button" value="Add Row" onclick="myFunction3()"></th>
						<th><input type="button" value="Delete Row" onclick="myDeleteFunction3()"></th>
					</tr>
					<tr>
						<td colspan="4">

								<table id="myTable3">
								  <tr>
									<td><input type="text" name="foreignlanguage[0]"></td>
									<td><input type="text" name="foreignlanguage[1]"></td>
									<td><input type="text" name="foreignlanguage[2]"></td>
									<td><input type="text" name="foreignlanguage[3]"></td>
								
								  </tr>
								</table>

						</td>
					
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td colspan="2"><h3>Working Experiences:</h3></td>
		</tr>
		<tr>
			<td colspan="2">
			<div>
				
				<table>
					<tr>
						<th>Company Name</th>
						<th>Latest Position</th>
						<th>Period</th>
						<th>Latest Salary</th>
						<th>Reason For Leaving</th>
						<th><input type="button" value="Add Row" onclick="myFunction4()"></th>
						<th><input type="button" value="Delete Row" onclick="myDeleteFunction4()"></th>
					</tr>
					<tr>
						<td colspan="5">

								<table id="myTable4" align="left">
								  <tr>
										<td><input type="text" name="workexperience[0]"></td>
										<td><input type="text" name="workexperience[1]"></td>
										<td><input type="text" name="workexperience[2]"></td>
										<td><input type="text" name="workexperience[3]"></td>
										<td><input type="text" name="workexperience[4]"></td>
									
								  </tr>
								</table>

						</td>
					
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td colspan="2"><h3>References:</h3></td>
		</tr>
		<tr>
			<td colspan="3">
			<div>
				
				<table>
					<tr>
						<th>Name</th>
						<th>Relationship</th>
						<th>Phone/Address</th>
						<th><input type="button" value="Add a Row" onclick="myFunction5()"></th>
						<th><input type="button" value="Delete Row" onclick="myDeleteFunction5()"></th>
					</tr>
					<tr>
						<td colspan="3">

								<table id="myTable5" align="left">
								  <tr>
										<td><input type="text" name="reference[0]"></td>
										<td><input type="text" name="reference[1]"></td>
										<td><input type="text" name="reference[2]"></td>
														
								  </tr>
								</table>

						</td>
					
					</tr>
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td>Reason To Join UMG:</td>
			<td>
			<input type="text" name="txtjoinumg" width="50px"/>
			</td>
		</tr>
		<tr>
			<td>Expected Salary:</td>
			<td>
			<input type="text" name="txtexpectedsalary" width="50px"/>
			</td>
		</tr>
		<tr>
			<td>Strong Point:</td>
			<td>
			<textarea name="strongpoint" col="150" rows="5"></textarea>
			</td>
		</tr>
		<tr>
			<td>Weak Point:</td>
			<td>
			<textarea name="weakpoint" col="150" rows="5"></textarea>
			</td>
		</tr>
		
		<tr>
			<td>Attachment:</td>
			<td>
			<input type="file" name="certificatecopy"/>
			
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="btnapply" value="Apply Now"></td>
			
		</tr>
	</form>
	
					
</table>
	

				
</body>

</html>