
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Employee Name</td>
            <td><form method='post' id='emp-SaveForm' action="#" class='form-control'>
                <select name='employee_name'>
                    <option value='Jacob Chisale'>Jacob Chisale</option>
                    <option value='Mphatso Chintedza'>Mphatso Chintedza</option>
                    <option value='Bryan Munkhuna'>Bryan Munkhuna</option>
                    <option value='Tamara Jere'>Tamara Jere</option>
                </select></td>
            
            </form></td></td>
        </tr>
 
        <tr>
            <td>Week Commercing</td>
            <td><input type='date' name='week_start' class='form-control' placeholder='EX : 27/07/2018' required></td>
        </tr>
 
        <tr>
            <td>Monday</td>
            <td><input type='text' name='monday' class='form-control' placeholder='EX : 08:00 - 16:00 or Off ' required></td>
        </tr>
 
        

        <tr>
            <td>Tuesday</td>
            <td><input type='text' name='tuesday' class='form-control' placeholder='EX : 08:00 - 16:00 or Off' required></td>
        </tr>

        <tr>
            <td>Wednesday</td>
            <td><input type='text' name='wednesday' class='form-control' placeholder='EX : 08:00 - 16:00 or Off' required></td>
        </tr>

        <tr>
            <td>Thursday</td>
            <td><input type='text' name='thursday' class='form-control' placeholder='EX : 08:00 - 16:00 or Off' required></td>
        </tr>

        <tr>
            <td>Friday</td>
            <td><input type='text' name='friday' class='form-control' placeholder='EX : 08:00 - 16:00 or Off' required></td>
        </tr>

        <tr>
            <td>Saturday</td>
            <td><input type='text' name='saturday' class='form-control' placeholder='EX : 08:00 - 16:00 or Off' required></td>
        </tr>

        <tr>
            <td>Sunday</td>
            <td><input type='text' name='sunday' class='form-control' placeholder='EX : 08:00 - 16:00 or Off' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-upload"></span> Upload Schedule
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
