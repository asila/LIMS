$todo=$_POST['todo'];
if(isset($todo) and $todo=="search")
{
    $query    = $_POST['query'];    # The values the user is searching for
    $type    = $_POST['type'];    # Type arrives as 'all', 'exact' or 'any'
   
    # Check for an empty string and display a message.
    if ($query == "")
    {
        echo '<p>Please enter a search...</p>
            <form><input type="button" value="Back" name="B3" onClick="javascript:history.back(1)"></form>';    # Button to send them back
        exit;
    }

    $query    = trim($query);        # Trim off the whitespace
    $query = mysqli_real_escape_string($cxn,$query);    # 'escape' the string to allow for searching with the ' character   
    # echo $query,'<p>';        # Some test code should it be required (remove the leading #)
   
    # START THE SQL
    if ($type=="all")
    {
        $sql = "select webfilename, caption, gallery, countrycounty, location, EssentialKeywords, MainKeywords, filename from images where ";    # For 'all' I need to read in every field I'm searching, not just the fields I want to display
    }
    else
    {
        $sql = "select webfilename, caption from images where ";    # The common part and start of my query string
    }
    $sql_end = " AND imagepublished AND (imageremoved IS NULL or imageremoved = '0000-00-00 00:00:00') order by webfilename";

    if($type=="exact")
    {
        $sql = $sql."(filename like \"%$query%\" or caption like \"%$query%\" or countrycounty like \"%$query%\" or location like \"%$query%\") ".$sql_end;
    }
    else
    {
        # This section is used for 'type'= 'all' and 'any'.
        $query_word_array = split(" ",$query);    # Break the string into an array of words
        # echo "<pre> dump of query word array "; var_dump($query_word_array);    echo "</pre>";  # Some test code should it be required (remove the  leading #)
        $sql_middle = '(';            # Need to start by opening the brackets, which are closed after the while loop
        # Now let us generate the middle part of the sql.  We will cycle once through this loop for each word searched on
        while(list($key,$val)=each($query_word_array))
        {
            if($val<>" " and strlen($val) > 0)
            {   
                # A long edit required here. Can't be helped. Watch for typos!
                $sql_middle .= "webfilename like '%$val%' or caption like '%$val%' or gallery like '%$val%' or countrycounty like '%$val%' or location like '%$val%' or EssentialKeywords like '%$val%' or MainKeywords like '%$val%' or filename like '%$val%' or "; # Note the required space after the last 'or'
            }
        }
        $sql_middle=substr($sql_middle,0,(strLen($sql_middle)-3));        # This will remove the last 'or' from the string.
        $sql = $sql.$sql_middle.')'.$sql_end;                            # Lets stick it all together.  Including that trailing bracket.
    }     # The end of if else based on 'type' value

    if(!$result = mysqli_query($cxn,$sql))                    # Remember $result here is a POINTER to where the data is, NOT the data itself.
    {
        echo "<p>Failed at selecting 'image database inside search_results.inc'.</p>";
        echo "mysqli_error returned:  ",mysqli_error($fun_cxn);
        exit();
    }
   
    $total=mysqli_num_rows($result);        # Get the number of returned results

    if ($type=="all")
    {
        $count = 0;
        while($row = mysqli_fetch_row($result))
        {
            $hits_array[$count]        = 1;                    # This array will be used to decide which of the results_array records to display; 1 = will display
            reset($query_word_array);                        # We did an 'each' on this array earlier, so the pointer needs to be reset
            while(list($key,$val)=each($query_word_array))
            {
                if($val<>" " and strlen($val) > 0)
                {
                    if(!stripos($input_string,$val))    # The case insensitive version of string search
                    {
                        $hits_array[$count] = 0;    # $val not found.  Mark the $hits_array. We wont display records with a '0' set against them
                    }
                }
            }
            $count++;    # Increment the counter
        }
        mysqli_data_seek($result, 0);    # We need to reset the counter to the beginning of the returned results before we can display the data later
        $count = 0;
        while($count!=$total)            # We'll count the number of hits we've had
        {
            if($hits_array[$count]==1)
            {    $new_total++;    }
            $count++;
        }
        $total = $new_total;    # Replace the old total count so the right value gets displayed later.
    }        # End of 'type=all' if statement
    #echo "<pre> dump of hits_array "; var_dump($hits_array);    echo "</pre>";        # Some test code should it be required (remove the leading #)
    if ($total<=1)
    { $total = 0;    }        # Get $total to display a zero if no records are found (Otherwise we just get 'images found is: .')
    echo '<form><p class="TextType1">The total number of records found is: ',$total,'.&nbsp;&nbsp;&nbsp;&nbsp; <input type="button" value="Search Again" name="B3" onClick="javascript:history.back(1)"></p></form>';    # Button to send them back';
    if ($total==0)            # No point going on to a table if there's no data to display
    {    exit;    }
}
echo '<table width="94%" border="1">
    <th width="60%" scope="col">Image Name</th>
    <th width="40%" scope="col">Caption</th></tr>';

$count = 0;
while($row = mysqli_fetch_row($result))
{
    if(!$hits_array[$count] and $type=='all')    # If the hits array is false on this pass and we're displaying 'all' we dont want to display it
    {    $count++;    }
    else
    {
        # Row 0 = webfilename, 1 = caption
        echo '<tr><td>',$row[0],'</td><td>',$row[1],'</td></tr>';
        $count++;
        }
}
echo '</table><p><form><p class="TextType1">The total number of records found is: ',$total,'.&nbsp;&nbsp;&nbsp;&nbsp; <input type="button" value="Search Again" name="B3" onClick="javascript:history.back(1)"></p></form><br/>';    # Button to send them back';