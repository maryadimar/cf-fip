<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Show Hide Elements Using Checkboxes</title>
<style type="text/css">
    .box{
        color: #fff;
        padding: 5px;
        display: none;
        margin-top: 5px;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });
});
</script>
</head>
<body>
    <div>
	<table>
        <tr>
        	<td>
            	<td>Apakah siswa terlihat termotivasi?</td>
                <td><input type="checkbox" name="colorCheckbox" value="G1"> yes<td>
                <td>
                	<div class="G1 box">
                    <input type="text" name="KG1" value='1' required>
                    <input type="text" name="G1" placeholder='Tingkat keyakinan 0~1' required>
                    </div>
                </td>
            </td>
        </tr>
        
        <tr>
        	<td>
            	<td>Apakah siswa terlihat termotivasi?</td>
                <td><input type="checkbox" name="colorCheckbox" value="G2"> yes<td>
                <td>
                	<div class="G1 box">
                    <input type="text" name="KG2" value='2' required>
                    <input type="text" name="NG2" placeholder='Tingkat keyakinan 0~1' required>
                    </div>
                </td>
            </td>
        </tr>
        
		<tr>
        	<td>
            	<td>Apakah siswa terlihat termotivasi?</td>
                <td><input type="checkbox" name="colorCheckbox" value="G1"> yes<td>
                <td>
                	<div class="G1 box">
                    <input type="text" name="KG1" value='3' required>
                    <input type="text" name="NG3" placeholder='Tingkat keyakinan 0~1' required>
                    </div>
                </td>
            </td>
        </tr>
	</table>
    </div>
</body>
</html>