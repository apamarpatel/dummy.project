<?php
//echo validation_errors();
?>
<form method="post">
    <table border="1" align="center">
        <tr>
            <td>first name</td>
            <td>
<input type="text" name="fnm"
       value="<?php echo set_value('fnm'); ?>" >                
<?php echo form_error('fnm'); ?>
            </td>
        </tr>
        <tr>
            <td>gender</td>
            <td>
<input type="radio" name="gender"
       value="<?php echo set_value('gender'); ?>">male
<input type="radio" name="gender"
       value="<?php echo set_value('gender'); ?>">female
<?php echo form_error('gender'); ?>
            </td>
        </tr>
        <tr>
            <td>mobile no.</td>
            <td>
<input type="text" name="mno"
  value="<?php echo set_value('mno'); ?>">                
<?php echo form_error('mno'); ?>
            </td>
        </tr>
        <tr>
            <td>email id</td>
            <td>
<input type="text" name="emailid"
       value="<?php echo set_value('emailid'); ?>">                
<?php echo form_error('emailid'); ?>
            </td>
        </tr>
        <tr>
            <td>password</td>
            <td>
<input type="password" name="pwd"
  value="<?php echo set_value('pwd'); ?>">                
<?php echo form_error('pwd'); ?>
            </td>
        </tr>
       <tr>
            <td>
<input type="submit" name="save" value="register me">                
            </td>
        </tr> 
    </table>
    
    
</form>
