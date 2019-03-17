<!DOCTYPE html>
<html lang="en">
    <head>
        <title>bootstrap-imageupload</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/bootstrap-imageupload.css" rel="stylesheet">
    </head>
    <body class="container-fluid">
        <form action="">
		<div class="thumbnail">
			<div class="row container ">
			
				<h3 class="text-center text-success">Primary Information</h3><br>
				<div class="col-md-8">
					<input type="text" name="name" class="form-control" placeholder="Name"/><br>
					<input type="text" name="fname" class="form-control" placeholder="Father's Name"/><br>
					<input type="text" name="mname" class="form-control" placeholder="Mother's Name"/><br>
					<input type="email" name="email" class="form-control" placeholder="Email ID"/><br>
					<input type="number" name="phone" class="form-control" placeholder="Phone Number"/><br>
					<input type="date" name="dateofbirth" class="form-control" placeholder="Mother's Name"/><br>
				</div>
				<div class="col-md-3" >
						<!-- bootstrap-imageupload. -->
						<div class="imageupload panel panel-default">
							
							<div class="file-tab panel-body" style="height:311px; width:300px; margin-left: -10px; margin-top: -12px;">
								<label class="btn btn-default btn-file" >
									<span>Browse</span>
									<!-- The file is stored here. -->
									<input type="file" name="image-file">
								</label>
								<button type="button" class="btn btn-default">Remove</button>
							</div>
							
						</div>	
				</div>
			</div>
			<div class="row container">
				<div class="col-md-3">
					<select name="" id="" class="form-control">
						<option>Gender</option>
						<option value="Mail">Mail</option>
						<option value="Femail">Femail</option>
						<option value="Other">Other</option>
					</select>
				</div>
				<div class="col-md-3">
					<select name="" id="" class="form-control">
						<option>Nationality</option>
						<option value="Bangladeshi">Bangladeshi</option>
						<option value="Indian">Indian</option>
					</select>
				</div>
				<div class="col-md-3">
					<select name="" id="" class="form-control"> 
						<option>Religious</option>
						<option value="Islam">Islam</option>
						<option value="Hindu">Hindu</option>
						<option value="Buddo">Buddo</option>
						<option value="Other">Other</option>
					</select>
				</div>
				<div class="col-md-3">
					<select name="" id="" class="form-control">
						<option>Quota</option>
						<option value="None Quota">None Quota</option>
						<option value="Freedom Fighter">Freedom Fighter</option>
						<option value="Answar B.D.P">Answar B.D.P</option>
						<option value="Other">Other</option>
						
					</select>
				</div>
			</div>
		</div>
		<div class="thumbnail">
			<h3 class="text-center">Present Address</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option>Select Current Country</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Bangladesh">India</option>
							<option value="Bangladesh">USA</option>
							<option value="Bangladesh">UK</option>
							<option value="Bangladesh">Canada</option>
							<option value="Bangladesh">Katar</option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder="Present District" />
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder="Present Tana/Upozila" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<input type="text" name="union" class="form-control" placeholder="Present Union/City" />
				</div>
				<div class="col-md-3">
					<input type="text" name="village" class="form-control" placeholder="Present word/village" />
				</div>
				<div class="col-md-3">
					<input type="text" name="postoffice" class="form-control" placeholder="Present Post office(with Code no)" />
				</div>
				<div class="col-md-3">
					<input type="text" name="contact" class="form-control" placeholder="Present Contact No" />
				</div>
			</div>
		</div>
		<div class="thumbnail">
			<h3 class="text-center">Parmanent Address</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option>Select Current Country</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Bangladesh">India</option>
							<option value="Bangladesh">USA</option>
							<option value="Bangladesh">UK</option>
							<option value="Bangladesh">Canada</option>
							<option value="Bangladesh">Katar</option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder="Present District" />
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder="Present Tana/Upozila" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<input type="text" name="union" class="form-control" placeholder="Present Union/City" />
				</div>
				<div class="col-md-3">
					<input type="text" name="village" class="form-control" placeholder="Present word/village" />
				</div>
				<div class="col-md-3">
					<input type="text" name="postoffice" class="form-control" placeholder="Present Post office(with Code no)" />
				</div>
				<div class="col-md-3">
					<input type="text" name="contact" class="form-control" placeholder="Present Contact No" />
				</div>
			</div>
		</div>
		<div class="thumbnail">
			<h3 class="text-center">Educational Information <small>(Diploma)</small></h3>
			<div class="row">
				<div class="col-md-4"> 
					<select name="" id="" class="form-control">
						<option>Institute Name</option>
						<option value="Sylhet Polytechnic Institute">Sylhet Polytechnic INstitute</option>
						<option value="Dhaka Polytechnic Institute">Dhaka Polytechnic INstitute</option>
						<option value="Mymensingh Polytechnic Institute">Mymensingh Polytechnic INstitute</option>
						<option value="Bogra Polytechnic Institute">Bogra Polytechnic INstitute</option>
						<option value="Hobigonj Polytechnic Institute">Hobigonj Polytechnic INstitute</option>
					</select>
				</div>
				<div class="col-md-4">
					<select name="" id="" class="form-control">
						<option>Select Your Technology</option>
						<option value="cmt">Computer Technology</option>
						<option value="civil">Civil Technology</option>
						<option value="emt">Electro-Medical Technology</option>
						<option value="power">Power Technology</option>
						<option value="ent">Electronics Technology</option>
						<option value="mt">Mechnical Technology</option>
						<option value="et">Electrical Technology</option>
					</select>
				</div>
				<div class="col-md-4">
					<select name="" id="" class="form-control">
						<option>Your Session</option>
						<option value="2004-2005">2004-2005</option>
						<option value="2005-2006">2005-2006</option>
						<option value="2006-2007">2006-2007</option>
						<option value="2007-2008">2007-2008</option>
						<option value="2008-2009">2008-2009</option>
						<option value="2009-2010">2009-2010</option>
						<option value="2010-11">2010-11</option>
						<option value="2011-12">2011-12</option>
						<option value="2012-13">2012-13</option>
						<option value="2013-14">2013-14</option>
						<option value="2014-15">2014-15</option>
						<option value="2015-16">2015-16</option>
						<option value="2016-17">2016-17</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-3">
					<select name="" id="" class="form-control">
						<option>Passing Year</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="Running">Running</option>
					</select>
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder="Roll No" />
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder="Registration No" />
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder="GPA" />
				</div>
			</div>
		</div>
		<div class="thumbnail">
			<h3 class="text-center">Higer Education Information <small>(if any)</small></h3>
			<div class="row">
				<div class="col-md-4">
					<input type="text" name="" class="form-control" placeholder="University Name" />
				</div>
				<div class="col-md-4">
					<select name="" id="" class="form-control">
						<option>Department</option>
						<option value="CSE">Computer Science & Technology</option>
					</select>
				</div>
				<div class="col-md-4">
					<input type="text" name="" class="form-control" />
				</div>
			</div>
		</div>
		<div class="thumbnail">
			<h3 class="text-center">Profssional Skill</h3>
			<div class="row">
				<div class="col-md-4">
					<input type="text" name="" class="form-control" placeholder="Skill Subject Name" />
				</div>
				<div class="col-md-4">
					<input type="text" name="" class="form-control" placeholder="Company/Institute Name" />
				</div>
				<div class="col-md-4">
					<input type="text" name="" class="form-control" placeholder="skill Year" />
				</div>
			</div>
		</div>
		<div class="thumbnail">
			<h3 class="text-center">Employment Information</h3>
			<div class="row">
				<div class="col-md-4">
					<input type="text" name="" class="form-control" placeholder="Company/Institute Name" />
				</div>
				<div class="col-md-4">
					<input type="text" name="" class="form-control" placeholder="Degination" />
				</div>
				<div class="col-md-4">
					<input type="text" name="" class="form-control" placeholder="Department" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				<button class="btn btn-lg btn-block btn-info">Update</button>
			</div>
			<div class="col-md-3">
				<button class="btn btn-lg btn-block btn-success">Submit</button>
			</div>
			<div class="col-md-3">
				
			</div>
		</div><br>
		</form>

        <script src="../js/jquery-1.12.4.min.js"></script>
        <script src="../js/bootstrap.min.js" ></script>
        <script src="dist/js/bootstrap-imageupload.js"></script>

        <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('#imageupload-disable').on('click', function() {
                $imageupload.imageupload('disable');
                $(this).blur();
            })

            $('#imageupload-enable').on('click', function() {
                $imageupload.imageupload('enable');
                $(this).blur();
            })

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
        </script>

    </body>

</html>
