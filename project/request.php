	<html>
	<head>
		<title>
			Sample submission form
		</title>
	
	<?php
	require_once("../project/includes/initialize.php");
 	include("../project/includes/subrequest.php");
	include('../project/layouts/header.php');
	/**
	 * @author:Cyrus Bondo 
 	* @copyright 2014
 	*/
	 ?>
 	 <?php
	if (isset($_POST['submit'])){
		//form has been submitted
		//error_reporting(E_ALL^E_NOTICE);
     if ($_FILES['userfile']['size']>0 && $_FILES['userfile']['name']!='')
     {
        $fileName = $_FILES['userfile']['name'];
        	$filePath  = $_FILES['userfile']['tmp_name'];
        		$fileSize = $_FILES['userfile']['size'];
        			$fileType = $_FILES['userfile']['type'];
        				$fileType=(get_magic_quotes_gpc()==0 ? mysql_real_escape_string($_FILES['userfile']['type']) :mysql_real_escape_string(stripslashes ($_FILES['userfile'])));
        					$fp      = fopen($filePath, 'r');
        					$content = fread($fp, filesize($filePath));
        				$content = addslashes($content);
        			fclose($fp);
              if(!get_magic_quotes_gpc())
                {
                       $fileName = addslashes($fileName);
                }
		
		$target = "upload/"; 
        	$target = $target . basename( $_FILES['userfile']['name']) ; 
           		$ok=1; 
             if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target)) 
               {
              		 echo "The file ". basename( $_FILES['userfile']['name']). " has been uploaded";
                } 
                 else {
                 			 echo "Sorry, there was a problem uploading your file.";
                 }
          }
		  $service_no= trim($_POST['serviceno']);
			$date_recieved= trim($_POST['date1']);
				$date_logged = trim($_POST['date2']);
					$date_archive= trim($_POST['date3']);
						$date_returned= trim($_POST['date4']);
							$special_instruction= trim($_POST['specinstra']);
								$submit_by = trim($_POST['submitby']);
									$scientist= trim($_POST['scientist']);
        								$organization	= trim($_POST['organ']);
											$project	= trim($_POST['proj']);
												$report_to = trim($_POST['report2']);
											$site= trim($_POST['site']);
										$country= trim($_POST['country']);
									$invoice_to = trim($_POST['invoice2']);
								$phone= trim($_POST['phone']);
        					$region	= trim($_POST['region']);
						$email	= trim($_POST['email']);
					$soil= trim($_POST['soil']);
				$water= trim($_POST['water']);
			$plant = trim($_POST['plant']);
		$other= trim($_POST['other']);
		if(isset($_POST['sampdes']))
			{ 
				$sample_design = trim(implode(".",$_POST['sampdes']));
		
					}
		if(isset($_POST['samstatus']))
			{ 
				$sample_status = trim(implode(".",$_POST['samstatus']));
		
					}
		if(isset($_POST['sampdes']))
			{ 
				$sample_design = trim(implode(".",$_POST['sampdes']));
		
					}
		if(isset($_POST['indivana']))
			{ 
				$indiv_ana = trim(implode(".",$_POST['indivana']));
		
					}
		if(isset($_POST['anapack']))
			{ 
				$analytical_pack = trim(implode(".",$_POST['anapack']));
		
					}
		if(isset($_POST['chemsuite']))
			{ 
				$chem_suite = trim(implode(".",$_POST['chemsuite']));
		
					}
		if(isset($_POST['basicsp']))
			{ 
				$basic_sp = trim(implode(".",$_POST['basicsp']));
		
					}
		if(isset($_POST['disposal']))
			{ 
				$dispose = trim(implode(".",$_POST['disposal']));
		
					}
					$add_info= trim($_POST['addinfo']);
        				$author_by	= trim($_POST['authorz']);
		
		//are all the required fields filled
			
		if($service_no == '' || $date_recieved == '' || $date_logged == ''  || $submit_by == ''|| $scientist == ''|| $organization == '' ||        $project == '' || $report_to == '' || $site == '' || $invoice_to == '' || $phone == '' || $region == '' || $email == '' || 	$sample_design == '' || $dispose == '' || $author_by == '' || $country == '' ) {
		$warn = "";
		if($service_no == '') $warn .= " provide service number!";
			if($date_recieved == '') $warn .= " provide recieved date!";
				if($date_logged == '') $warn .= " provide date logged!";
					if($submit_by == '') $warn .= " submitted by?";
						if($scientist == '') $warn .= " scientist?";
							if($organization == '') $warn .= " provide organization!";
								if($project == '') $warn .= " provide project!";
									if($date_recieved == '') $warn .= " reported to?";
								if($site == '') $warn .= " site?";
							if($invoice_to == '') $warn .= " invoiced to?";
						if($phone == '') $warn .= " phone no?!";
					if($region == '') $warn .= " region?";
				if($email == '') $warn .= " provide email";
			if($author_by == '') $warn .= " authorized by?";
		if($country == '') $warn .= " country?";
		echo($warn);
                        }else{
      	$subrequest= new Subrequest();
	    	$subrequest->service_no=$service_no;
				$subrequest->date_recieved=$date_recieved;
					$subrequest->date_logged=$date_logged;
						$subrequest->date_archive=$date_archive;
							$subrequest->date_returned=$date_returned;
								$subrequest->special_instruction=$special_instruction;
									$subrequest->submit_by=$submit_by;
										$subrequest->scientist=$scientist;
      										$subrequest->organization=$organization;
												$subrequest->project=$project;
													$subrequest->country=$country;
														$subrequest->site=$site;
		$subrequest->region=$region;
			$subrequest->report_to=$report_to;
				$subrequest->invoice_to=$invoice_to;
					$subrequest->phone=$phone;
						$subrequest->email=$email;
							$subrequest->sample_design=$sample_design;
								$subrequest->soil=$soil;
									$subrequest->water=$water;
										$subrequest->plant=$plant;
											$subrequest->other=$other;
											$subrequest->sample_status=$sample_status;
										$subrequest->indiv_ana=$indiv_ana;
									$subrequest->analytical_pack=$analytical_pack;
								$subrequest->chem_suite=$chem_suite;
							$subrequest->basic_sp=$basic_sp;
						$subrequest->add_info=$add_info;
      				$subrequest->author_by=$author_by;
				$subrequest->dispose=$dispose;
			$subrequest->cond="due";
			$subrequest->name=$fileName;
			$subrequest->type=$fileType;
			$subrequest->size=$fileSize;
			$subrequest->content=$content;
	  $istrue = $subrequest->create();
		
	  if($istrue){
         $sql="SELECT service_no,site,indiv_ana FROM formtb ORDER BY service_no  DESC LIMIT 1";
		       $result = mysql_query($sql) or die ("Error in query: $sql. ".mysql_error());
			       global $indiv_ana1;
	  while($rows = mysql_fetch_array($result))

		{

			$service_no1 = $rows['service_no'];
				$site1 = $rows['site'];
					$indiv_ana1 = explode(".",$rows['indiv_ana']);
						}
                             $querysrec="INSERT IGNORE INTO reception (job_no,site,type,status,recby,recdate) VALUES ('{$service_no1}','{$site1}','','','','')";
	                              $result = mysql_query($querysrec) or die(mysql_error());
	                                    $success = "Form submitted and saved!";
		                                     echo($success);
			                                      header("location:index.php");
				}
				else
                   {
	   				              $fail = "submission failed!";
						echo($fail);
                      echo(mysql_error());
					//header("location:request.php");
	       }
	 }
				
}
	else
	 {
		
		$service_no = "";
			$date_recieved = "";
				$date_logged = "";
					$date_archive = "";
						$date_returned = "";
							$special_instruction = "";
								$submit_by = "";
									$scientist = "";
        								$organization = "";
											$project = "";
												$report_to = "";
													$site = "";
														$invoice_to = "";
															$phone = "";
        														$region	= "";
																	$email = "";
																$sample_design = "";
															$soil = "";
														$water = "";
													$plant = "";
												$other = "";
											$sample_design = "";
										$sample_status = "";
									$indiv_ana = "";
								$analytical_pack = "";
							$chem_suite = "";
						$basic_sp = "";
					$add_info = "";
                $author_by	= "";
			$dispose	= "";
		$country = "";
		$fileName="";
		$fileType="";
		$fileSize="";
		$content="";
	}
	?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/jquery.h5validate.js"></script>
	<script>
	$(document).ready(function () {
    $('form').h5Validate();
	});
	</script>
		<link rel="stylesheet" href="../formelement/css/foundation.css" />
			<script src="../formelement/js/vendor/modernizr.js"></script>
				<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
					<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script>
$(function() {
   $( "#date1" ).datepicker();
   $( "#date2" ).datepicker();
   $( "#date3" ).datepicker();
   $( "#date4" ).datepicker();
});
</script>
	</head>
	<body>
	<table class="responsive" style="width:100%;">
   	
		<tr align="center">
			<td>
				<a href="viewstatuscentre.php">Home</a>
				 	</td>
						<td>
							<h2>Analysis Request Submission Form</h2>
								</td>
									</tr>
										</table>	
	<form name="submission" id="submission" action="request.php" method="post" >
	<table name="tbl1" id="tbl1" width="100%" >

		<tr>
			<td>For laboratory Use only</td>
				</tr>
					<tr>
						<td>Date Recieved:</td>
							<td><input type="text" size="20" id="date1" name="date1"  value="" /> </td>

								<td>Date logged:</td>
										<td><input type="text" size="20" id="date2" name="date2"  value="0000-00-00"/></td>

											<td>Job No:</td>
												<td><input type="text" size="20" id="serviceno" name="serviceno"  value="000000" /></td>

													<td>Date Archived:</td>
												<td><input type="text" size="20" id="date3" name="date3"  value="0000-00-00" /></td>

										<td>Date Return:</td>
									<td><input type="text" size="20" id="date4" name="date4"  value="0000-00-00" /> </td>

								<td>Special instructions:</td>
							<td><textarea cols="30" rows="3" maxlength="100" id="specinstra" name="specinstra" ></textarea></td>
						</tr>

					<tr>
				<td colspan="12"><h3 align="center">ICRAF SOIL-PLANT SPECTRAL DIAGNOSTICS LABORATORY: SAMPLE SUBMISSION AND SERVICES 							REQUEST FORM</h3></td>
			</tr>
		<tr>
	<td colspan="6">
    Contact Details:<br />
    Telephone: +254 (20) 7224000/4235/4279/4163<br />
    Email: icraf-speclab@cgiar.org<br />
    Laboratory Manager, Mercy Nyambura (m.nyambura@cgiar.org)<br />
    Website: www. http://worldagroforestry.org/research/land-health
    </td>
    <td colspan="6">
    Address Details:<br />
    World Agroforestry Centre,<br />
    Mailing: P.O Box 30677-00100 Nairobi, Kenya<br />
    Physical address: United Nations Avenue<br />
    Off Limuru Road, Gigiri, Nairobi, Kenya
    </td>
	</tr>
	<tr>
	<td colspan="12"><div align="center">Please refer to the shipping instructions and procedures (Page 3) for shipping requirement and contacts</div></td>
	
		</tr>
		<h3>Upload Any additional information document here,kindly give it the name of the site for proper document management.</h3>
<input type="hidden" name="MAX_FILE_SIZE"value="16000000000000000000000000000000">
<input name="userfile" type="file" id="userfile"> 

			<tr>
				<td colspan="12"><h3 align="center">Contact /Billing Information</h3></td>
    				</tr>
						<tr>
							<td colspan="6"><h4 align="center">Client/Report information</h4></td>
								<td colspan="6"><h4 align="center">Project/Sampling information</h4></td>

									</tr>
										<tr>
											<td colspan="3">Submitted by:</td>
												<td colspan="3"><input type="text" size="20" id="submitby" name="submitby"  value="" /></td>
													<td colspan="4">Scientist:</td>
														<td colspan="2"><input type="text" size="20" id="scientist" name="scientist"  value="" />
                                                        </td>
													</tr>
												<tr>
											<td colspan="3">Organization:</td>
										<td colspan="3"><input type="text" size="20" id="organ" name="organ"  value="" /></td>
									<td colspan="4">Project:</td>
								<td colspan="2"><input type="text" size="20" id="proj" name="proj"  value="" /></td>
							</tr>
						<tr>
					<td colspan="3">Report to:</td>
				<td colspan="3"><input type="text" size="20" id="report2" name="report2"  value="" /></td>
			<td colspan="4">Site:</td>
		<td colspan="2"><input type="text" size="20" id="site" name="site"  value="" /></td>
	</tr>
	<tr>
	<td colspan="3">Invoice To:</td>
		<td colspan="3"><input type="text" size="20" id="invoice2" name="invoice2"  value="" /></td>
			<td colspan="4">Country:</td>
				<td colspan="2"><input type="text" size="20" id="country" name="country" value="" /></td>
					</tr>
						<tr>
							<td colspan="3">Phone:</td>
								<td colspan="3"><input type="text"  size="20" id="phone" name="phone"  value="" /></td>
									<td colspan="4">Region:</td>
										<td colspan="2"><input type="text" size="20" id="region" name="region"  value="" /></td>
											</tr>
												<tr>
   													 <td colspan="3">Email:</td>
														<td colspan="3"><input type="email" size="20" id="email" name="email"  value="" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(?:[a-zA-Z]{5}|com|org|net|edu|gov|mil|
biz|info|mobi|name|aero|asia|jobs|museum|ac|jp)$"/>
                                                        </td>
															<td colspan="4">Sampling Design:</td>
														<td colspan="2"><input type="radio"  name="sampdes[]" value="ldsf" />&nbsp;&nbsp;&nbsp;LDSF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="sampdes[]" value="nldsf" />&nbsp;&nbsp;&nbsp;NON-LDSF
                                                      </td>
												</tr>
											<tr>
										<td colspan="12"><h3 align="center">Samples Information</h3></td>
									</tr>
								<tr>
							<td colspan="6">Samples Quantities (tick type)</td>
						<td></td>
					<td colspan="6">Samples Status (tick type)</td>
				<td></td>
			</tr>
	<tr>
		<td colspan="3"><label>Soil:</label><input type="text" size="20" id="soil" name="soil"  value="" /></td>
			<td colspan="3"><label>Water:</label><input type="text" size="20" id="water" name="water" value="" /></td>
				<td colspan="3"><label>Wet:</label><input type="checkbox" size="20" name="samstatus[]" value="wet"/></td>
					<td colspan="3"><label>Dry:</label><input type="checkbox" size="20" name="samstatus[]" value="dry"/></td>
	</tr>
	<tr>
		<td colspan="3"><label>Plant:</label><input type="text" size="20" id="plant" name="plant"  value="" /></td>
    		<td colspan="3"><label>Other:</label><input type="text" size="20" id="other" name="other"  value="" /></td>
				<td colspan="3"><label>Processed:</label><input type="checkbox" size="20" name="samstatus[]" value="processed" /></td>
					<td colspan="3"><label>Unprocessed:</label><input type="checkbox" size="20" name="samstatus[]" value="unprocessed" />
                    	</td>
							</tr>
	<tr>
		<td colspan="12">Please indicate the quantity of sample in the box</td>
			</tr>
	<tr>
		<td><h5>*Items to include with the samples</h5></td>
			</tr>
	<tr>
		<td colspan="12">
			<ul>
    			<li>Digital/soft sample inventory in MS excel compatible format</li>
					<li>Paper copy of above</li>
						</ul>
							</td>
								</tr>
	<tr>
		<td colspan="12">Please see instructions (Page 2) for each sample logging requirements to include in the inventory</td>
			</tr>
	<tr>
		<td colspan="12"><h3 align="center">Laboratory Tests</h3></td>
			</tr>
	<tr>
		<td colspan="12"><h5>Individual Analysis (tick test)</h5></td>
			</tr>
	<tr>
		<td colspan="2"><label>MIR-Alpha</label><input type="checkbox" name="indivana[]" value="mira" /></td>
			<td colspan="2"><label>NIR</label><input type="checkbox" name="indivana[]" value="nir" /></td>
    			<td colspan="3"><label>CN Organic</label><input type="checkbox" name="indivana[]" value="cnO" /></td>
    				<td colspan="3"><label>CN Total</label><input type="checkbox" name="indivana[]" value="cnT" /></td>
    					<td colspan="2"><label>LDPSA</label><input type="checkbox" name="indivana[]" value="ldpsa" /></td>
	</tr>
	<tr>
           <td colspan="2"><label>MIR-Htsxt</label><input type="checkbox" name="indivana[]" value="mirh" /></td>
		<td colspan="2"><label>TXRF</label><input type="checkbox" name="indivana[]" value="txrf" /></td>
			<td colspan="3"><label>HHXRF</label><input type="checkbox" name="indivana[]" value="hhxrf" /></td>
    			<td colspan="3"><label>XRD</label><input type="checkbox" name="indivana[]" value="xrd" /></td>
    				<td colspan="2"><label>Other</label><input type="checkbox" name="indivana[]" value="iaother" /></td>
							</tr>
	<tr>
		<td colspan="12"><h5>Analytical Packages (tick test)</h5></td>
			</tr>
	<tr>
		<td colspan="3"><label>Sentinel Soil Reference full</label><input type="checkbox" name="anapack[]" value="ssrf" /></td>
			<td colspan="3"><label>Sentinel Soil Reference light</label><input type="checkbox" name="anapack[]" value="ssrl" /></td>
    			<td colspan="3"><label>Cummass</label><input type="checkbox" name="anapack[]" value="cm" /></td>
    				<td colspan="3"><label>Engineering Properties Suite</label><input type="checkbox" name="anapack[]" value="eps" /></td>
						</tr>
	<tr>
		<td colspan="3"><label>Sentinel Soil MIR</label><input type="checkbox" name="anapack[]" value="ssm" /></td>
			<td colspan="3"><label>Full CRP6 Sentinel Landscapes</label><input type="checkbox" name="anapack[]" value="fcsl" /></td>
    			<td colspan="3"><label>Other</label><input type="checkbox" name="anapack[]" value="apother" /></td>
					<td colspan="3"><label>Soil Physics Suite</label><input type="checkbox" name="anapack[]" value="sps" /></td>
						</tr>
	<tr>
		<td colspan="12"><label><h5>AfSIS wet chemistry suite:</h5></label></td>
			</tr>
	<tr>
		<td colspan="4"><label>Soil:</label><input type="checkbox" name="chemsuite[]" value="awcss" /></td>
    		<td colspan="4"><label>Plant:</label><input type="checkbox" name="chemsuite[]" value="awcsp" /></td>
    			<td colspan="4"><label>other:</label><input type="checkbox" name="chemsuite[]" value="awcso" /></td>
					</tr>
	<tr>
		<td colspan="12"><label><h5>Basic soil processing:</h5></label></td>
			</tr>
	<tr>
		<td colspan="4"><label>Soil:</label><input type="checkbox" name="basicsp[]" value="bsps" /></td>
    		<td colspan="4"><label>Plant:</label><input type="checkbox" name="basicsp[]" value="bspp" /></td>
    			<td colspan="4"><label>other:</label><input type="checkbox" name="basicsp[]" value="bspo" /></td>
					</tr>
	<tr>
		<td colspan="12"><div align="center">Please refer to the laboratory tests details (Page 2) for test names, cost and requirements.</div>		
      		</td>
				</tr>
	<tr>
		<td colspan="12"><label>Additional Information:</label>
			<textarea cols="30" rows="3" maxlength="100" id="addinfo" name="addinfo"></textarea></td>
				</tr>
	<tr>
		<td colspan="6"><label>Testing Authorized by:</label></td>
			<td colspan="6"><input type="text" size="20" name="authorz" id="authorz"/></td>
				</tr>
   <tr>
		<td colspan="12"><label>*Disposal of Surplus Samples</label></td>
			</tr>
				<tr>
					<td colspan="12"><input type="checkbox" name="disposal[]" value="Archive" /><label>Archive at ICRAF Systems</label></td>
						</tr>
	<tr>
		<td colspan="12"><input type="checkbox" name="disposal[]" value="RTS" /><label>Return To Sender</label></td>
			</tr>
	<tr>
		<td colspan="12"><input type="checkbox" name="disposal[]" value="Dispose" /><label>Dispose</label></td>
			</tr>
<tr>
	<td colspan="12"><div align="center">Surplus foreign samples will be autoclaved before disposal</div></td>
		</tr>

</table>
	<input type="submit" value="SAVE" name="submit" id="submit" style="width:120px; height:40px;" />
</form>
