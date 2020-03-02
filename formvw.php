<?php
echo form_open()."<br>";
?>
<table border="1" align="center">
    <tr>
      <td><?php echo form_label("first name","fnm"); ?></td>
      <td>
          <?php
          $data1 = array('name'=> 'fnm');
echo form_input($data1)."<br>";
          ?>
      </td>
    </tr>
    
<?php


echo form_label("password","pass");
echo form_password()."<br>";
echo form_label("upload file","upload");
echo form_upload()."<br>";
echo form_label("address","add");
echo form_textarea()."<br>";
$a=array("1"=>"indore",
    "2"=>"bhopal",
    "3"=>"dewas");
echo form_dropdown("city",$a)."<br>";
echo form_checkbox('docs', TRUE)."Licence";
echo form_checkbox('docs', TRUE)."Passport"."<br>";
echo form_radio('gender',"male")."male";
echo form_radio('gender',"female")."female"."<br>";
echo form_close();
?>
</table>