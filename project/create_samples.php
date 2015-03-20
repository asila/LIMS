<?php
	require_once("../project/includes/initialize.php");
    include('../project/layouts/header.php');
    include('stationtitle.php');
    include('pro_dropdown_2.html');
	$sample = "select * from sample_details order by desc ssn limit 1,1";
?>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
         $(function() {
            $( "#tabs-9" ).tabs({
               event:"mouseover"
            });
         });
</script>
<style>
         #tabs-9{font-size: 14px; widows: 100%;}
         .ui-widget-header {
            background:#b9cd6d;
            border: 1px solid #b9cd6d;
            color: #FFFFFF;
            font-weight: bold;


         }
         #tabs-9 ul li  {
    margin-left: 450px;
             }
         #tabs-9 label  {
    font-size: 12px;
            }
</style>
<?php

	if (isset($_POST['submit']))
	{
		

        $loglab=$_POST['loglab1'];
        $ossn=$_POST['ossn1'];
        $cluster=$_POST['cluster1'];
        $plot=$_POST['plot1'];
        $depstd=$_POST['depstd1'];
        $deptop=$_POST['deptop1'];
        $depbottom=$_POST['depbottom1'];
        $type=$_POST['mat1'];
		$loglab=$_POST['loglab2'];
        $ossn=$_POST['ossn2'];
        $plotcd=$_POST['plotcd2'];
        $plot=$_POST['plot2'];
        $treat=$_POST['treat2'];
        $deptop=$_POST['deptop2'];
        $depbottom=$_POST['depbottom2'];
        $type=$_POST['mat2'];
		
		
			 $sample= new Sample();
			 $sample->Study		              = $Study;
			 $sample->SSN			= $SSN;
			 $sample->Country 		= $Country;
			 $sample->Site 			= $Site;
          $sample->Cluster		              = $Cluster;
			 $sample->Plot			= $Plot;
			 $sample->DStd 			= $DStd;
			 $sample->Dcm			= $Dcm;
          $sample->Date			= $Date;
          $sample->sampletype		= $sampletype;
			 $sample->analysis		= $analysis;
			$sample->Bay			= $Bay;
             $sample->Tray		= $Tray;
			 $sample->Pos		= $Pos;
			$sample->Wt		= $Wt;
			 $istrue = $sample->create();
			 if($istrue){?>
				<script type="text/javascript">
					alert("New sample has successfully added!");
					window.location = "index.php";
				</script>
				<?php
			}else{
				 echo "Inserting Failed!";
			 }
		}	
	else
	{
		$Study	= "";
		$SSN	= "";
		$Country	= "";
		$Site	= "";
                            $Cluster	= "";
		$Plot	= "";
		$DStd	= "";
		$Dcm	= "";
                            $Date	= "";
                           $Bay	= "";
		$Tray	= "";
		$Pos	= "";
                            $Wt= "";
                           
	}

?>
<table class="responsive" style="width:100%;">
<tr>
<td align="center">
<a href="#" >Back</a>
<h2>Sample Details Entry </h2>
        </td>
   </tr>
   <tr>
   <td>
<form id="search" action="#" method="POST" >
<input type="button" name="searchs" id="searchs" value="search"/>
</form>
</tr>
  <tr>
  <td>
<table class="app_listing" style="width:100%;">
      <tr>
         <th align="left" >SSN</th>
         <th align="left" >Or.SSN</th>
         <th align="left" >Job No</th>
         <th align="left" >Scientist</th>
         <th align="left" >Study</th>
         <th align="left" >Site</th>
          <th align="left" >Sampling</th>
         <th align="left" >Country</th>
         <th align="left" >Region</th>
         <th align="left" >Cluster</th>
         <th align="left" >Plot</th>
         <th align="left" >Depth_STD</th>
         <th align="left" >Top</th>
         <th align="left" >Bottom</th>
         <th align="left" >Treatment</th>
         <th align="left" >Depth_CUM</th>
          <th align="left" >Material</th>
          <th align="left" >Lab-analysis</th>   

          <?php
global $id;
$id=$_REQUEST['id'];
$page=$_REQUEST['page'];
$Prev_Page =($page>1)? $page-1:1;
$Next_Page = ($page<$Num_Rows)? $page+1:$Num_Rows;
$Page_Start = (($Per_Page*$page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
$Num_Pages =($Num_Rows/$Per_Page)+1;
$Num_Pages = (int)$Num_Pages;
}

$query = "SELECT  * FROM sample_details ORDER BY ssn DESC LIMIT 1 , 1";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$Num_Rows=mysql_num_rows($result1);
$col=0;  
         
         ?>
         
         <th align="left"><input name="Totalsamples" type="text" size="10" value="<?php echo $nosites; ?>" /></th>
         
         <?php

         while($rows = mysql_fetch_array($result1))
                  {
      $ssn=$rows['ssn'];
      $ossn=$rows['ossn'];
      $job_no=$rows['service_no'];
      $scientist=$rows['scientist'];
      $study=$rows['study'];
      $site=$rows['site'];
      $sdesign=$rows['sample_design'];
      $country=$rows['country'];
      $region=$rows['region'];
      $cluster=$rows['cluster'];
      $plot=$rows['plot'];
      $depth_std=$rows['depth_std'];
      $dtop=$rows['dtop'];
      $dbottom=$rows['dbottom'];
      $treat=$rows['treat'];
      $depth_cm=$rows['depth_cm'];
      $material=$rows['type'];
      $lab=$rows['lab'];
            
                  echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> '; @$odd = !$odd;
                  echo ' <td>';
                  echo '<span>'.$ssn.'</span>'; 
                  echo ' </td><td> ';
                  echo '<span>'.$ossn.'</span>'; 
                  echo ' </td><td> ';
                  echo '<span>'.$job_no.'</span>';             
                  echo ' </td><td> ';
                  echo '<span>'.$scientist.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$study.'</span>';
                  echo ' </td><td > ';
                  echo '<a href="samples_details.php?id='.$job_no.'"<span>'.$site.'</span>';
                  echo ' </td><td > ';
                  echo  '<span>'.$sdesign.'</span>';
                  echo ' </td><td> ';
                  echo  '<span>'.$country.'</span>';
                  echo ' </td><td> ';
                  echo  '<span>'.$region.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$cluster.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$plot.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$depth_std.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$dtop.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$dbottom.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$treat.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$depth_cm.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$material.'</span>';
                  echo ' </td><td> ';
                  echo '<span>'.$lab.'</span>';
                  echo ' </td><td> ';
                  echo ' <td align="center">';
                  echo '<a href="samples_details.php?id='.$job_no.'"<span>BACK TO <IMG SRC="images/arrow.PNG" ALT="BACK" height="25" width="30">'.$site.'</span>';

                        $col++;
                  echo ' </td>';

         }
        
      ?>
</t>
</table>
</td>
</tr>
</table>
<div class="footer">
</div>
<div id="tabs-9">
        
<?php
if($sdesign=="nldsf")
{ 
	$id=$job_no;
?>
            <ul><li><a href="#tabs-11">Non Land Degradation Surveillance Framework(non-LDSF)</a></li> </ul>
            <div id="tabs-11" style="margin-left:30px;margin-top:45px;">
            <form id="nonldsf" name="nonldsf" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" onsubmit="setTimeout('parent.location.reload()',5); return true;">
            <input type="hidden" id="job_no" name="job_no" value="<?php echo $job_no;  ?>">
            <input type="hidden" id="nldsf" name="nldsf" value="<?php echo $$sdesign;  ?>">
               <table>
               <tr><td>
               <label>Lab logging</label>
               <select id="loglab2" name="loglab2" style="width:120px;height:30px;">
               <option value="<?php echo $lab;  ?>"></option>
               <option>ICRAF</option>
               <option>Arusha</option>
               </select>
              </td><td>
              <label>SSN original</label>
              <input type="text" id="ossn2" name="ossn2" value="<?php echo $ossn;  ?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>Plot code</label>
              <input type="text" id="plotcd2" name="plotcd2" value="<?php echo $cluster;  ?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>Plot name</label>
              <input type="text" id="plot2" name="plot2" value="<?php echo $plot;  ?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>Treatment</label>
              <input type="text" id="treat2" name="treat2" value="<?php echo $treat;  ?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>top</label>
              <input type="text" id="deptop2" name="deptop2" value="<?php echo $dtop;  ?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>bottom</label>
              <input type="text" id="depbottom2" name="depbottom2" value="<?php echo $dbottom;  ?>"style="width:120px;height:30px; font-size:14px;"/>
               </td><td>
               <label>sample type</label>
               <select id="mat2" name="mat2" style="width:120px;height:30px;">
               <option>Soil</option>
               <option>Plant</option>
               <option>Water</option>
               <option>Other</option>
               </select>
              </td>
              </tr>
              <tr>
              <td>
               <input type="submit" id="submit" name="submit" value="Save" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;" />
               </td>
               <td>
               </td>
               <td>
               <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=<?php echo $page+1;?>&amp;nxt=<?php echo "rcdnx";?>"><input type="button" id="nxrecord2" name="nxrecord2" value="New record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               </tr>
               <tr>
               </tr>
               <td colspan="8">
               &nbsp;
               </td>
               <tr>
               <td>
                <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=1"><input type="button" id="frecord2" name="frecord2" value="Last record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               <td>
               <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=<?php echo $page=$Next_Page;?>"><input type="button" id="nxrecord2" name="nxrecord2" value="Previous record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               <td>
                <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=<?php echo $page = $Prev_Page; ?>"><input type="button" id="precord2" name="precord2" value="Next record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               <td>
               <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=<?php echo $nosites;?>"><input type="button" id="lrecord2" name="lrecord2" value="First record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               </tr>
               
               </table>
               
            </form>
         </div>
    <?php    
}
elseif ($sdesign=="ldsf") 
{
	$id=$job_no;
	?>
<ul><li><a href="#tabs-11">Land Degradation Surveillance Framework(LDSF) </a></li> </ul>
            <div id="tabs-11" style="margin-left:30px;margin-top:45px;">
            <form id="ldsf" name="ldsf" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" onsubmit="setTimeout('parent.location.reload()',5); return true;">
            <input type="hidden" id="job_no" name="job_no" value="<?php echo $job_no;  ?>">
            <input type="hidden" id="ldsf" name="ldsf" value="<?php echo $$sdesign;  ?>">
            <table>
               <tr><td>
               <label>Lab logging</label>
               <select id="loglab1" name="loglab1" style="width:120px;height:30px;">
               <option value="<?php echo $lab;  ?>"></option>
               <option>ICRAF</option>
               <option>Arusha</option>
               </select>
                 </td><td>
               <label>SSN original</label>
               <input type="text" id="ossn1" name="ossn1" value="<?php echo $ossn;  ?>" style="width:120px;height:30px; font-size:14px;"/>
                 </td><td> 
               <label>Cluster</label>
               <input type="text" id="cluster1" name="cluster1" value="<?php echo $cluster;  ?>" style="width:120px;height:30px; font-size:14px;"/>
                 </td><td>
               <label>Plot</label>
               <input type="text" id="plot1" name="plot1" value="<?php echo $plot;  ?>" style="width:120px;height:30px; font-size:14px;"/>
                 </td><td>
               <label>Depth STD</label>
               <select id="depstd1" name="depstd1"  style="width:120px;height:30px; font-size:14px;">
               <option value="<?php echo $depth_std;  ?>"></option>
               <option>Top Soil</option>
               <option>Sub Soil</option>
               </select>
                 </td><td>
               <label>top</label>
               <input type="text" id="deptop1" name="deptop1" value="<?php echo $dtop;  ?>" style="width:120px;height:30px; font-size:14px;"/>
                 </td><td>
               <label>bottom</label>
               <input type="text" id="depbottom1" name="depbottom1" value="<?php echo $dbottom;  ?>"style="width:120px;height:30px; font-size:14px;"/>
                </td><td>
               <label>sample type</label>
               <select id="mat1" name="mat1" style="width:120px;height:30px;">
               <option value="<?php echo $material;  ?>"></option>
               <option>Soil</option>
               <option>Plant</option>
               <option>Water</option>
               <option>Other</option>
               </select>
              </td>
              </tr>
              <tr>
              <td>
               <input type="submit" id="submit" name="submit" value="Save" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;" />
               </td>
               <td>
               </td>
               <td>
               <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=<?php echo $page+1;?>&amp;nxt=<?php echo "rcdnx";?>"><input type="button" id="nxrecord1" name="nxrecord1" value="New record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               </tr>
               <tr>
               </tr>
               <td colspan="8">
               &nbsp;
               </td>
               <tr>
               <td>
                <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=1"><input type="button" id="frecord1" name="frecord1" value="Last record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               <td>
               <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=<?php echo $page=$Next_Page;?>"><input type="button" id="nxrecord1" name="nxrecord1" value="Previous record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               <td>
                <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=<?php echo $page = $Prev_Page; ?>"><input type="button" id="precord1" name="precord1" value="Next record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               <td>
               <a href="creates_samples.php?id=<?php echo $id;?>&amp;page=<?php echo $Num_Rows;?>"><input type="button" id="lrecord1" name="lrecord1" value="First record" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;"/></a>
               </td>
               </tr>
               </table>
            </form>
         </div>
<?php
       }
       else
       {

       }
       ?>
 <div class="footer">
</div>
  