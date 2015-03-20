<?php
			foreach ($cur as $object){	
			?>
			
			<form name="myform" id="myform">
			<input type="hidden" name="serviceno" id="serviceno" value='<?php echo $object->taskid;?>' />
			<?php
					  echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td align="center">';
						echo '<a href="viewrequest.php?id='.$object->taskid.'" class="app_listitem_key">'.$object->taskid.'</a>';		
						echo ' </td><td align="center"> ';
						echo $object->site;						
						echo ' </td><td align="center"> ';
						echo $object->priority;	
                  echo ' </td><td align="center"> ';
                  echo $object->status;	
						echo ' </td><td align="center"> ';
                  echo $object->assignto;	
						echo ' </td><td align="center"> ';
						echo $object->taskcreatedon;				
						echo ' </td><td align="center"> ';
						echo $object->estimation;
						if ($object->actualtime<date("Y-m-d") AND $object->status!="Complete") $diva="#FF9900"; else $diva="#73a049";
						echo ' </td><td align="center">';
					   echo '<div name="tima" id="tima" style="background-color:'.$diva.'">'.$object->actualtime.'</div>';
						echo ' </td><td align="center"> ';
						echo '<a href="logupdate.php?id='.$object->taskid.'" class="app_listitem_key"><IMG SRC="../images/button_edit.PNG" ALT="Edit"></A></a>';	
						echo ' </td>';
			}
		
			return $cur;
		}			

		?>