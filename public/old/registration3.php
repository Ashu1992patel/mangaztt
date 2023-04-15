<form name="upload" method="post" action="upload.php" enctype="multipart/form-data">

<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
<tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Upload Photos</strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	
	<tr valign="top">
        <td height="30" align="right"><p><strong>Photo 1: </strong></p></td>
        <td height="30"><p><strong>
        <input name="pic[]" type="file" id="pic" required/>
           
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Photo 2: </strong></p></td>
        <td height="30"><p><strong>
        <input name="pic[]" type="file" id="pic" />
            
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Photo 3: </strong></p></td>
        <td height="30"><p><strong>
        <input name="pic[]" type="file" id="pic" />
            
		</td>
		<br>
		<td><input type="submit" name="upload" value="Upload" /></td>
	</tr>
	
</form>