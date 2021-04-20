<div style="width: 8.27in; padding:20px; margin-left: auto; margin-right: auto; position: relative; border:thin solid #CCC; ">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
	  <td align="center">
          <b style="font-size:14px;">
          Life Target PT, P.C<BR>
          37-41 77st, Jackson Heights, NY, 11372<BR>
          Phone: 718-406-9588 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fax: 718-799-1063
          </b>
	  </td>
	</tr>
	<tr>
		<td align="center">&nbsp;</td>
	</tr>
	<tr>
		<td align="center"><h2>INITIAL EXAMINATION</h2></td>
	</tr>
	<tr>
		<td align="center">&nbsp;</td>
	</tr>
	<tr>
		<td align="center">&nbsp;</td>
	</tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td><b>Date of Service:</b></td>
        <td></td>
        <td><b>Date of Birth:</b></td>
        <td><input type="text" name="p1_2" value="<?php echo @$re['p1_2']; ?>" /></td>
    </tr>
    <tr>
        <td><b>Patient Name:</b></td>
        <td><input type="text" name="p1_3" value="<?php echo @$re['p1_3']; ?>" /></td>
        <td><b>Date of Accident:</b></td>
        <td><input type="text" name="p1_4" value="<?php echo @$re['p1_4']; ?>" /></td>
    </tr>
    <tr>
        <td><b>Sex:</b></td>
        <td colspan="3">
            <input type="checkbox" name="p1_5" <?php if(@$re['p1_5']==1){ echo 'checked'; } ?> /> <label for="p1_5">M</label>
            <input type="checkbox" name="p1_6" <?php if(@$re['p1_6']==1){ echo 'checked'; } ?> /> <label for="p1_6">F</label>
        </td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td><u><b>Accident History:</b></u></td>
    </tr>
    <tr>
        <td><textarea name="p1_7" id="p1_7" rows="4" style="width:100%"><?php echo @$re['p1_7']; ?></textarea></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><u><b>Occupational Status:</b></u></td>
    </tr>
    <tr>
        <td>Currently, the patient is <input type="checkbox" name="p1_8" <?php if(@$re['p1_8']==1){ echo 'checked'; } ?> /> working <input type="checkbox" name="p1_8" <?php if(@$re['p1_8']==1){ echo 'checked'; } ?> /> not working</td>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><u><b>Past Medical History:</b></u></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="p1_9" <?php if(@$re['p1_9']==1){ echo 'checked'; } ?> /> The patient has no prior medical history</td>
    </tr>
    <tr>
        <td>
        	<input type="checkbox" name="p1_10" <?php if(@$re['p1_10']==1){ echo 'checked'; } ?> /> The patient is taking
        	<input type="checkbox" name="p1_11" <?php if(@$re['p1_11']==1){ echo 'checked'; } ?> /> Tylenol
        	<input type="checkbox" name="p1_12" <?php if(@$re['p1_12']==1){ echo 'checked'; } ?> /> Advil
        	<input type="checkbox" name="p1_13" <?php if(@$re['p1_13']==1){ echo 'checked'; } ?> /> Blood Pressure Medication
        	<input type="checkbox" name="p1_14" <?php if(@$re['p1_14']==1){ echo 'checked'; } ?> /> Diabetes Medication
        	<input type="checkbox" name="p1_15" <?php if(@$re['p1_15']==1){ echo 'checked'; } ?> /> Thyroid Medication
        	<input type="checkbox" name="p1_16" <?php if(@$re['p1_16']==1){ echo 'checked'; } ?> /> Cholesterol Medication
        	<input type="checkbox" name="p1_17" <?php if(@$re['p1_17']==1){ echo 'checked'; } ?> /> Depression medication
        	<input type="checkbox" name="p1_17" <?php if(@$re['p1_17']==1){ echo 'checked'; } ?> /> <input type="text" name="p1_4" value="<?php echo @$re['p1_4']; ?>" />
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><u><b>Past Surgical History:</b></u></td>
    </tr>
    <tr>
        <td><textarea name="p1_18" id="p1_18" rows="4" style="width:100%"><?php echo @$re['p1_18']; ?></textarea></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><u><b>Chief complaints:</b></u></td>
    </tr>
    <tr>
        <td>
            The patient complains of
            <input type="checkbox" name="p1_19" <?php if(@$re['p1_19']==1){ echo 'checked'; } ?> /> pain
            <input type="checkbox" name="p1_20" <?php if(@$re['p1_20']==1){ echo 'checked'; } ?> /> Weakness
            <input type="checkbox" name="p1_21" <?php if(@$re['p1_21']==1){ echo 'checked'; } ?> /> Spasm
            <input type="checkbox" name="p1_22" <?php if(@$re['p1_22']==1){ echo 'checked'; } ?> /> limited ROM
            <input type="checkbox" name="p1_23" <?php if(@$re['p1_23']==1){ echo 'checked'; } ?> /> Stiffness
            <input type="checkbox" name="p1_24" <?php if(@$re['p1_24']==1){ echo 'checked'; } ?> /> Swelling due to
            <input type="checkbox" name="p1_25" <?php if(@$re['p1_25']==1){ echo 'checked'; } ?> /> work related injury
            <input type="checkbox" name="p1_26" <?php if(@$re['p1_26']==1){ echo 'checked'; } ?> /> work related motor vehicle accident injury, affecting the following part(s)
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="p1_27" <?php if(@$re['p1_27']==1){ echo 'checked'; } ?> /> Right Shoulder
            <input type="checkbox" name="p1_28" <?php if(@$re['p1_28']==1){ echo 'checked'; } ?> /> Right Elbow
            <input type="checkbox" name="p1_29" <?php if(@$re['p1_29']==1){ echo 'checked'; } ?> /> Right Wrist
            <input type="checkbox" name="p1_30" <?php if(@$re['p1_30']==1){ echo 'checked'; } ?> /> Right Hand
            <input type="checkbox" name="p1_31" <?php if(@$re['p1_31']==1){ echo 'checked'; } ?> /> Right Finger
            <input type="checkbox" name="p1_32" <?php if(@$re['p1_32']==1){ echo 'checked'; } ?> /> Right Hip
            <input type="checkbox" name="p1_33" <?php if(@$re['p1_33']==1){ echo 'checked'; } ?> /> Right Knee
            <input type="checkbox" name="p1_34" <?php if(@$re['p1_34']==1){ echo 'checked'; } ?> /> Right Ankle
            <input type="checkbox" name="p1_35" <?php if(@$re['p1_35']==1){ echo 'checked'; } ?> /> Right Foot
            <input type="checkbox" name="p1_36" <?php if(@$re['p1_36']==1){ echo 'checked'; } ?> /> Right Toe
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="p1_37" <?php if(@$re['p1_37']==1){ echo 'checked'; } ?> /> Left Shoulder
            <input type="checkbox" name="p1_38" <?php if(@$re['p1_38']==1){ echo 'checked'; } ?> /> Left Elbow
            <input type="checkbox" name="p1_39" <?php if(@$re['p1_39']==1){ echo 'checked'; } ?> /> Left Wrist
            <input type="checkbox" name="p1_40" <?php if(@$re['p1_40']==1){ echo 'checked'; } ?> /> Left Hand
            <input type="checkbox" name="p1_41" <?php if(@$re['p1_41']==1){ echo 'checked'; } ?> /> Left Finger
            <input type="checkbox" name="p1_42" <?php if(@$re['p1_42']==1){ echo 'checked'; } ?> /> Left Hip
            <input type="checkbox" name="p1_43" <?php if(@$re['p1_43']==1){ echo 'checked'; } ?> /> Left Knee
            <input type="checkbox" name="p1_44" <?php if(@$re['p1_44']==1){ echo 'checked'; } ?> /> Left Ankle
            <input type="checkbox" name="p1_45" <?php if(@$re['p1_45']==1){ echo 'checked'; } ?> /> Left Foot
            <input type="checkbox" name="p1_46" <?php if(@$re['p1_46']==1){ echo 'checked'; } ?> /> Left Toe
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>The patient described the pain as
            <input type="checkbox" name="p1_47" <?php if(@$re['p1_47']==1){ echo 'checked'; } ?> /> constant
            <input type="checkbox" name="p1_48" <?php if(@$re['p1_48']==1){ echo 'checked'; } ?> /> intermittent
            <input type="checkbox" name="p1_49" <?php if(@$re['p1_49']==1){ echo 'checked'; } ?> /> dull aching
            <input type="checkbox" name="p1_50" <?php if(@$re['p1_50']==1){ echo 'checked'; } ?> /> sharp
            <input type="checkbox" name="p1_51" <?php if(@$re['p1_51']==1){ echo 'checked'; } ?> /> burning.
      </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>


<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td><u><b>Progress:</b></u></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><u>The patient stated improvement in pain and daily activities while;</u></td>
    </tr>
    <tr>
        <td>
          <input type="checkbox" name="p2_1" <?php if(@$re['p2_1']==1){ echo 'checked'; } ?> /> Dressing,
            <input type="checkbox" name="p2_2" <?php if(@$re['p2_2']==1){ echo 'checked'; } ?> /> bathing,
            <input type="checkbox" name="p2_3" <?php if(@$re['p2_3']==1){ echo 'checked'; } ?> /> combing hair
            <input type="checkbox" name="p2_4" <?php if(@$re['p2_4']==1){ echo 'checked'; } ?> /> reaching,
            <input type="checkbox" name="p2_5" <?php if(@$re['p2_5']==1){ echo 'checked'; } ?> /> doing overhead activities,
            <input type="checkbox" name="p2_6" <?php if(@$re['p2_6']==1){ echo 'checked'; } ?> /> pulling,
            <input type="checkbox" name="p2_7" <?php if(@$re['p2_7']==1){ echo 'checked'; } ?> /> pushing,
            <input type="checkbox" name="p2_8" <?php if(@$re['p2_8']==1){ echo 'checked'; } ?> /> carrying <input type="text" name="p2_9" value="<?php echo @$re['p2_9']; ?>" /> weights,
          <input type="checkbox" name="p2_10" <?php if(@$re['p2_10']==1){ echo 'checked'; } ?> /> lifting up to <input type="text" name="p2_11" value="<?php echo @$re['p2_11']; ?>" /> pounds,
          <input type="checkbox" name="p2_12" <?php if(@$re['p2_12']==1){ echo 'checked'; } ?> /> driving up to <input type="text" name="p2_13" value="<?php echo @$re['p2_13']; ?>" /> hour(s).
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
        <input type="checkbox" name="p2_14" <?php if(@$re['p2_14']==1){ echo 'checked'; } ?> /> Standing for up to <input type="text" name="p2_15" value="<?php echo @$re['p2_15']; ?>" /> minutes),
        <input type="checkbox" name="p2_16" <?php if(@$re['p2_16']==1){ echo 'checked'; } ?> /> doing transfer,
            <input type="checkbox" name="p2_17" <?php if(@$re['p2_17']==1){ echo 'checked'; } ?> /> squatting,
            <input type="checkbox" name="p2_18" <?php if(@$re['p2_18']==1){ echo 'checked'; } ?> /> walking for up to <input type="text" name="p2_19" value="<?php echo @$re['p2_19']; ?>" /> block(s),
        <input type="checkbox" name="p2_20" <?php if(@$re['p2_20']==1){ echo 'checked'; } ?> /> climbing up to <input type="text" name="p2_21" value="<?php echo @$re['p2_21']; ?>" /> stairs,
        <input type="checkbox" name="p2_22" <?php if(@$re['p2_22']==1){ echo 'checked'; } ?> /> bending and kneeling,
        <input type="checkbox" name="p2_23" <?php if(@$re['p2_23']==1){ echo 'checked'; } ?> /> driving for up to <input type="text" name="p2_24" value="<?php echo @$re['p2_24']; ?>" /> hour(s).
      </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
      <td><u>However, the patient stated pain in daily activities while;</u></td>
    </tr>
    <tr>
      <td>
        <input type="checkbox" name="p2_25" <?php if(@$re['p2_25']==1){ echo 'checked'; } ?> /> Dressing,
        <input type="checkbox" name="p2_26" <?php if(@$re['p2_26']==1){ echo 'checked'; } ?> /> bathing,
        <input type="checkbox" name="p2_27" <?php if(@$re['p2_27']==1){ echo 'checked'; } ?> /> combing hair,
        <input type="checkbox" name="p2_28" <?php if(@$re['p2_28']==1){ echo 'checked'; } ?> /> reaching,
        <input type="checkbox" name="p2_29" <?php if(@$re['p2_29']==1){ echo 'checked'; } ?> /> doing overhead activities,
        <input type="checkbox" name="p2_30" <?php if(@$re['p2_30']==1){ echo 'checked'; } ?> /> pulling,
        <input type="checkbox" name="p2_31" <?php if(@$re['p2_31']==1){ echo 'checked'; } ?> /> pushing,
        <input type="checkbox" name="p2_32" <?php if(@$re['p2_32']==1){ echo 'checked'; } ?> /> carrying <input type="text" name="p2_33" value="<?php echo @$re['p2_33']; ?>" /> weights,
        <input type="checkbox" name="p2_34" <?php if(@$re['p2_34']==1){ echo 'checked'; } ?> /> lifting more than <input type="text" name="p2_35" value="<?php echo @$re['p2_35']; ?>" /> pounds,
        <input type="checkbox" name="p2_36" <?php if(@$re['p2_36']==1){ echo 'checked'; } ?> /> driving for more than <input type="text" name="p2_37" value="<?php echo @$re['p2_37']; ?>" /> hour(s).
      </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
        <input type="checkbox" name="p2_38" <?php if(@$re['p2_38']==1){ echo 'checked'; } ?> /> Standing for more than <input type="text" name="p2_39" value="<?php echo @$re['p2_39']; ?>" /> minutes,
        <input type="checkbox" name="p2_40" <?php if(@$re['p2_40']==1){ echo 'checked'; } ?> /> doing transfer,
        <input type="checkbox" name="p2_41" <?php if(@$re['p2_41']==1){ echo 'checked'; } ?> /> squatting,
        <input type="checkbox" name="p2_42" <?php if(@$re['p2_42']==1){ echo 'checked'; } ?> /> walking for more than <input type="text" name="p2_43" value="<?php echo @$re['p2_43']; ?>" /> block(s),
        <input type="checkbox" name="p2_44" <?php if(@$re['p2_44']==1){ echo 'checked'; } ?> /> climbing more than <input type="text" name="p2_45" value="<?php echo @$re['p2_45']; ?>" /> stairs,
        <input type="checkbox" name="p2_46" <?php if(@$re['p2_46']==1){ echo 'checked'; } ?> /> bending and kneeling,
        <input type="checkbox" name="p2_47" <?php if(@$re['p2_47']==1){ echo 'checked'; } ?> /> driving for more than <input type="text" name="p2_48" value="<?php echo @$re['p2_48']; ?>" /> hour(s).
      </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
      <td>The patient stated the pain diminishes the capacity to carry out both occupational and recreational daily activities including (social, self-care, life-support activities and family/home responsibilities).</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>


<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><u><b>Objectives:</b></u> Previous date <input type="text" name="p3_1" value="<?php echo @$re['p3_1']; ?>" /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="checkbox" name="p3_2" <?php if(@$re['p3_2']==1){ echo 'checked'; } ?> /> Neck</td>
    </tr>
    <tr>
      <td>
            <div>Pain level (VAS): <input type="text" name="p3_3" value="<?php echo @$re['p3_3']; ?>" />/10</div>
            <div>Previous (VAS): <input type="text" name="p3_4" value="<?php echo @$re['p3_4']; ?>" />/10</div>
            <div>Goal (6-8 weeks): Decrease pain level to <input type="text" name="p3_5" value="<?php echo @$re['p3_5']; ?>" />/10.</div>
      </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>


<div style="margin:15px 0;"><u><b>AROM</b></u></div>
<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="2">Movement</td>
        <td colspan="2">Range</td>
        <td rowspan="2">Normal</td>
        <td rowspan="2">Goal (6-8 weeks)</td>
    </tr>
    <tr>
        <td>Previous</td>
        <td>Current</td>
    </tr>
    <tr>
        <td>Flex</td>
        <td><input type="text" name="p4_1" value="<?php echo @$re['p4_1']; ?>" /></td>
        <td><input type="text" name="p4_2" value="<?php echo @$re['p4_2']; ?>" /></td>
        <td>45</td>
        <td rowspan="6">Increase AROM by 10%</td>
    </tr>
    <tr>
      <td>Ext</td>
      <td><input type="text" name="p4_3" value="<?php echo @$re['p4_3']; ?>" /></td>
      <td><input type="text" name="p4_4" value="<?php echo @$re['p4_4']; ?>" /></td>
      <td>45</td>
    </tr>
    <tr>
      <td>R Rot</td>
      <td><input type="text" name="p4_5" value="<?php echo @$re['p4_5']; ?>" /></td>
      <td><input type="text" name="p4_6" value="<?php echo @$re['p4_6']; ?>" /></td>
      <td>80-90</td>
    </tr>
    <tr>
      <td>L Rot</td>
      <td><input type="text" name="p4_7" value="<?php echo @$re['p4_7']; ?>" /></td>
      <td><input type="text" name="p4_8" value="<?php echo @$re['p4_8']; ?>" /></td>
      <td>80-90</td>
    </tr>
    <tr>
      <td>R Side bending</td>
      <td><input type="text" name="p4_9" value="<?php echo @$re['p4_9']; ?>" /></td>
      <td><input type="text" name="p4_10" value="<?php echo @$re['p4_10']; ?>" /></td>
      <td>45</td>
    </tr>
    <tr>
      <td>L Side bending</td>
      <td><input type="text" name="p4_11" value="<?php echo @$re['p4_11']; ?>" /></td>
      <td><input type="text" name="p4_12" value="<?php echo @$re['p4_12']; ?>" /></td>
      <td>45</td>
    </tr>
</table>


<div style="margin:15px 0;"><u><b>Manual muscle test</b></u></div>
<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="2">Movement</td>
        <td colspan="2">Range</td>
        <td rowspan="2">Normal</td>
        <td rowspan="2">Goal (6-8 weeks)</td>
    </tr>
    <tr>
        <td>Previous</td>
        <td>Current</td>
    </tr>
    <tr>
        <td>Flex</td>
        <td><input type="text" name="p4_1" value="<?php echo @$re['p4_1']; ?>" /></td>
        <td><input type="text" name="p4_2" value="<?php echo @$re['p4_2']; ?>" /></td>
        <td>45</td>
        <td rowspan="6">Improve muscle strength by 1 grade</td>
    </tr>
    <tr>
      <td>Ext</td>
      <td><input type="text" name="p4_3" value="<?php echo @$re['p4_3']; ?>" /></td>
      <td><input type="text" name="p4_4" value="<?php echo @$re['p4_4']; ?>" /></td>
      <td>45</td>
    </tr>
    <tr>
      <td>R Rot</td>
      <td><input type="text" name="p4_5" value="<?php echo @$re['p4_5']; ?>" /></td>
      <td><input type="text" name="p4_6" value="<?php echo @$re['p4_6']; ?>" /></td>
      <td>80-90</td>
    </tr>
    <tr>
      <td>L Rot</td>
      <td><input type="text" name="p4_7" value="<?php echo @$re['p4_7']; ?>" /></td>
      <td><input type="text" name="p4_8" value="<?php echo @$re['p4_8']; ?>" /></td>
      <td>80-90</td>
    </tr>
    <tr>
      <td>R Side bending</td>
      <td><input type="text" name="p4_9" value="<?php echo @$re['p4_9']; ?>" /></td>
      <td><input type="text" name="p4_10" value="<?php echo @$re['p4_10']; ?>" /></td>
      <td>45</td>
    </tr>
    <tr>
      <td>L Side bending</td>
      <td><input type="text" name="p4_11" value="<?php echo @$re['p4_11']; ?>" /></td>
      <td><input type="text" name="p4_12" value="<?php echo @$re['p4_12']; ?>" /></td>
      <td>45</td>
    </tr>
</table>

</div>