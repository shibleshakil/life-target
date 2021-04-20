<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Targer | Initial Examination</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div
        style="width: 8.27in; padding:20px; margin-left: auto; margin-right: auto; position: relative; border:thin solid #CCC; ">

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
                <td align="center">
                    <h2>INITIAL EXAMINATION</h2>
                </td>
            </tr>
            <tr>
                <td align="center">&nbsp;</td>
            </tr>
            <tr>
                <td align="center">&nbsp;</td>
            </tr>
        </table>

        <form action="makepdf.php" method="post">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="margin-bottom:2px;"><b>Date of Service:</b></td>
                    <td><input type="text" name="p1_1" value="<?php echo @$re['p1_1']; ?>" /></td>
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
                        <input type="checkbox" name="sex" value="M" /> <label
                            for="p1_5">M</label>
                        <input type="checkbox" name="sex" value="F" /> <label
                            for="p1_6">F</label>
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
                    <td>Currently, the patient is <input type="checkbox" name="occupation" value="working" /> working <input type="checkbox" name="occupation" value="not working"/> not working</td>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><u><b>Past Medical History:</b></u></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="p1_9" value="Yes" /> The patient has no prior medical history</td>
                </tr>
                <tr>
                    <td>
                        The patient is taking
                        <input type="checkbox" name="p1_11" value="Tylenol" /> Tylenol
                        <input type="checkbox" name="p1_12" value="Advil" /> Advil
                        <input type="checkbox" name="p1_13" value="Blood Pressure" /> Blood Pressure Medication
                        <input type="checkbox" name="p1_14" value="Diabetes Medication" /> Diabetes Medication
                        <input type="checkbox" name="p1_15" value="Thyroid Medication" /> Thyroid Medication
                        <input type="checkbox" name="p1_16" value="Cholesterol Medication" /> Cholesterol Medication
                        <input type="checkbox" name="p1_17" value="Depression medication" /> Depression medication
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><u><b>Past Surgical History:</b></u></td>
                </tr>
                <tr>
                    <td><textarea name="p1_18" id="p1_18" rows="4" style="width:100%"><?php echo @$re['p1_18']; ?></textarea>
                    </td>
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
                        <input type="checkbox" name="p1_19" value="Pain" /> Pain
                        <input type="checkbox" name="p1_20" value="Weakness" /> Weakness
                        <input type="checkbox" name="p1_21" value="Spasm" /> Spasm
                        <input type="checkbox" name="p1_22" value="limited ROM" /> limited ROM
                        <input type="checkbox" name="p1_23" value="Stiffness" /> Stiffness
                        <input type="checkbox" name="p1_24" value="Swelling due to" /> Swelling due to
                        <input type="checkbox" name="p1_25" value="work related injury" /> work related injury
                        <input type="checkbox" name="p1_26" value="work related major" /> work related motor vehicle accident injury, affecting the following part(s)
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="p1_27" value="Right Shoulder" /> Right Shoulder
                        <input type="checkbox" name="p1_28" value="Right Elbow" /> Right Elbow
                        <input type="checkbox" name="p1_29" value="Right Wrist" /> Right Wrist
                        <input type="checkbox" name="p1_30" value="Right Hand" /> Right Hand
                        <input type="checkbox" name="p1_31" value="Right Finger" /> Right Finger
                        <input type="checkbox" name="p1_32" value="Right Hip" /> Right Hip
                        <input type="checkbox" name="p1_33" value="Right Knee" /> Right Knee
                        <input type="checkbox" name="p1_34" value="Right Ankle" /> Right Ankle
                        <input type="checkbox" name="p1_35" value="Right Foot" /> Right Foot
                        <input type="checkbox" name="p1_36" value="Right Toe" /> Right Toe
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="p1_37" value="Left Shoulder" /> Left Shoulder
                        <input type="checkbox" name="p1_38" value="Left Elbow" /> Left Elbow
                        <input type="checkbox" name="p1_39" value="Left Wrist" /> Left Wrist
                        <input type="checkbox" name="p1_40" value="Left Hand" /> Left Hand
                        <input type="checkbox" name="p1_41" value="Left Finger" /> Left Finger
                        <input type="checkbox" name="p1_42" value="Left Hip" /> Left Hip
                        <input type="checkbox" name="p1_43" value="Left Knee" /> Left Knee
                        <input type="checkbox" name="p1_44" value="Left Ankle" /> Left Ankle
                        <input type="checkbox" name="p1_45" value="Left Foot" /> Left Foot
                        <input type="checkbox" name="p1_46" value="Left Toe" /> Left Toe
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>The patient described the pain as
                        <input type="checkbox" name="p1_47" value="constant" /> constant
                        <input type="checkbox" name="p1_48" value="intermittent" /> intermittent
                        <input type="checkbox" name="p1_49" value="dull aching" /> dull aching
                        <input type="checkbox" name="p1_50" value="sharp" /> sharp
                        <input type="checkbox" name="p1_51" value="burning" /> burning.
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
                        <input type="checkbox" name="Dressing" value="Dressing" /> Dressing,
                        <input type="checkbox" name="bathing" value="bathing" /> bathing,
                        <input type="checkbox" name="combing_hair" value="combing hair" /> combing hair
                        <input type="checkbox" name="reaching" value="reaching" /> reaching,
                        <input type="checkbox" name="doing_overhead_activities" value="doing overhead activities" /> doing overhead activities,
                        <input type="checkbox" name="pulling" value="pulling" /> pulling,
                        <input type="checkbox" name="pushing" value="pushing" /> pushing,
                        <input type="checkbox" name="carrying" value="carrying" /> carrying 
                        <input type="text" name="weights"  /> weights,
                        <input type="checkbox" name="lifting_up_to" value="lifting up to" /> lifting up to
                        <input type="text" name="pounds" /> pounds,
                        <input type="checkbox" name="driving_up_to" value="driving up to" /> driving up to
                        <input type="text" name="hour" /> hour(s).
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Standing_for_up" value="Standing for up"/> Standing for up
                        to <input type="text" name="minute" value="" /> minute(s),
                        <input type="checkbox" name="doing_transfer" value="doing transfer" /> doing transfer,
                        <input type="checkbox" name="squatting" value="squatting" /> squatting,
                        <input type="checkbox" name="walking_for_up" value="walking for up" /> walking for up to 
                        <input type="text" name="block" value="" /> block(s),
                        <input type="checkbox" name="climbing_up_to" value="climbing up to" /> climbing up to
                        <input type="text" name="stair" value="" /> stairs,
                        <input type="checkbox" name="bending_and_kneeling" value="bending and kneeling" /> bending and kneeling,
                        <input type="checkbox" name="driving_for_up" value="driving for up" /> driving for up to 
                        <input type="text" name="driving_hour" value="" /> hour(s).
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
                        <input type="checkbox" name="DressingW" value="DressingW"/> Dressing,
                        <input type="checkbox" name="bathingW" value="bathingW"/> bathing,
                        <input type="checkbox" name="combing_hairW" value="combing hairW"/> combing hair,
                        <input type="checkbox" name="reachingW" value="reachingW"/> reaching,
                        <input type="checkbox" name="doing_overhead_activitiesW" value="doing overhead activitiesW"/> doing overhead activities,
                        <input type="checkbox" name="pullingW" value="pullingW"/> pulling,
                        <input type="checkbox" name="pushingW" value="pushingW"/> pushing,
                        <input type="checkbox" name="carryingW" value="carryingW"/> carrying 
                        <input type="text" name="weightsW" value="" /> weights,
                        <input type="checkbox" name="lifting_more_thanW" value="lifting more thanW"/> lifting more than 
                        <input type="text" name="poundW" value="" /> pounds,
                        <input type="checkbox" name="driving_for_more_thanW" value="driving for more thanW"/> driving for more than 
                        <input type="text" name="hourW" value="" /> hour(s).
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="standing" value="standing" /> Standing for more than 
                        <input type="text" name="standing_minute" value="" /> minutes,
                        <input type="checkbox" name="doing_transfer" value="doing transfer" /> doing transfer,
                        <input type="checkbox" name="standing_squatting" value="squatting" /> squatting,
                        <input type="checkbox" name="standing_walking" value="standing walking" /> walking for more than 
                        <input type="text" name="standing_block" value="" /> block(s),
                        <input type="checkbox" name="standing_climbing" value="standing climbing" /> climbing more than 
                        <input type="text" name="standing_stairs" value="" /> stairs,
                        <input type="checkbox" name="standing_bending" value="standing bending" /> bending and kneeling,
                        <input type="checkbox" name="standing_driving" value="standing driving" /> driving for more than 
                        <input type="text" name="standing_hour" value="" /> hour(s).
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>The patient stated the pain diminishes the capacity to carry out both occupational and recreational daily activities including (social, self-care, life-support activities and family/home  responsibilities).</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>


            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><u><b>Objectives:</b></u> Previous date <input type="text" name="pre_date"
                            value="" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="Neck" value="Neck" /> Neck</td>
                </tr>
                <tr>
                    <td>
                        <div>Pain level (VAS): <input type="text" name="NeckPainlevel" value="" />/10</div>
                        <div>Previous (VAS): <input type="text" name="NeckPrevious" value="" />/10</div>
                        <div>Goal (6-8 weeks): Decrease pain level to <input type="text" name="NeckGoal" value="" />/10.
                        </div>
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
                    <td><input type="text" name="p5_1" value="<?php echo @$re['p5_1']; ?>" /></td>
                    <td><input type="text" name="p5_2" value="<?php echo @$re['p5_2']; ?>" /></td>
                    <td>45</td>
                    <td rowspan="6">Improve muscle strength by 1 grade</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="p5_3" value="<?php echo @$re['p5_3']; ?>" /></td>
                    <td><input type="text" name="p5_4" value="<?php echo @$re['p5_4']; ?>" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>R Rot</td>
                    <td><input type="text" name="p5_5" value="<?php echo @$re['p5_5']; ?>" /></td>
                    <td><input type="text" name="p5_6" value="<?php echo @$re['p5_6']; ?>" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>L Rot</td>
                    <td><input type="text" name="p5_7" value="<?php echo @$re['p5_7']; ?>" /></td>
                    <td><input type="text" name="p5_8" value="<?php echo @$re['p5_8']; ?>" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>R Side bending</td>
                    <td><input type="text" name="p5_9" value="<?php echo @$re['p5_9']; ?>" /></td>
                    <td><input type="text" name="p5_10" value="<?php echo @$re['p5_10']; ?>" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>L Side bending</td>
                    <td><input type="text" name="p5_11" value="<?php echo @$re['p5_11']; ?>" /></td>
                    <td><input type="text" name="p5_12" value="<?php echo @$re['p5_12']; ?>" /></td>
                    <td>45</td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Create PDF" class="btn btn-primary">
        </form>

    </div>
</body>
</html>