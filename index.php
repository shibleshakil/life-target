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
                    <td style="color:red"><input type="checkbox" name="Neck" value="Neck" /> Neck</td>
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


            <div style="margin:15px 0;"><u><b>AROM :</b></u></div>
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
                    <td><input type="text" name="FlexPre" value="" /></td>
                    <td><input type="text" name="FlexCurr" value="" /></td>
                    <td>45</td>
                    <td rowspan="6">Increase AROM by 10%</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="extPre" value="" /></td>
                    <td><input type="text" name="extCurr" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>R Rot</td>
                    <td><input type="text" name="rRotPre" value="" /></td>
                    <td><input type="text" name="rRotCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>L Rot</td>
                    <td><input type="text" name="lRotPre" value="" /></td>
                    <td><input type="text" name="lRotCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>R Side bending</td>
                    <td><input type="text" name="rsbPre" value="" /></td>
                    <td><input type="text" name="rsbCurr" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>L Side bending</td>
                    <td><input type="text" name="lsbPre" value="" /></td>
                    <td><input type="text" name="lsbCurr" value="" /></td>
                    <td>45</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>Manual muscle test :</b></u></div>
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
                    <td><input type="text" name="FlexPreManual" value="" /></td>
                    <td><input type="text" name="FlexCurrManual" value="" /></td>
                    <td>45</td>
                    <td rowspan="6">Improve muscle strength by 1 grade</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="extPreManual" value="" /></td>
                    <td><input type="text" name="extCurrManual" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>R Rot</td>
                    <td><input type="text" name="rRotPreManual" value="" /></td>
                    <td><input type="text" name="rRotCurrManual" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>L Rot</td>
                    <td><input type="text" name="lRotPreManual" value="" /></td>
                    <td><input type="text" name="lRotCurrManual" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>R Side bending</td>
                     <td><input type="text" name="rsbPreManual" value="" /></td>
                    <td><input type="text" name="rsbCurrManual" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>L Side bending</td>
                    <td><input type="text" name="lsbPreManual" value="" /></td>
                    <td><input type="text" name="lsbCurrManual" value="" /></td>
                    <td>45</td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Special tests :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="2">Test</td>
                    <td colspan="2">Neck Findings</td>
                </tr>
                <tr>
                    <td>Current</td>
                </tr>
                <tr>
                    <td>Cervical compression Test</td>
                    <td><input type="checkbox" name="cctPositive" value="cctPositive" /> Positive
                    <input type="checkbox" name="cctNegative" value="cctNegative" /> Negative</td>
                </tr>
                <tr>
                    <td>Cervical distraction Test</td>
                    <td><input type="checkbox" name="cdtPositive" value="cdtPositive" /> Positive
                    <input type="checkbox" name="cdtNegative" value="cdtNegative"/> Negative</td>
                </tr>
                <tr>
                    <td>Spurling’s test</td>
                    <td><input type="checkbox" name="stPositive" value="stPositive" /> Positive
                    <input type="checkbox" name="stNegative" value="stNegative" /> Negative</td>
                </tr>
            </table>

            <br>
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="color:red"><input type="checkbox" name="lowBack" value="lowBack" /> Low back</td>
                </tr>
                <tr>
                    <td>
                        <div>Pain level (VAS): <input type="text" name="lowBackPainlevel" value="" />/10</div>
                        <div>Previous (VAS): <input type="text" name="lowBackPrevious" value="" />/10</div>
                        <div>Goal (6-8 weeks): Decrease pain level to <input type="text" name="lowBackGoal" value="" />/10.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>AROM :</b></u></div>
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
                    <td><input type="text" name="lowBackFlexPre" value="" /></td>
                    <td><input type="text" name="lowBackFlexCurr" value="" /></td>
                    <td>45</td>
                    <td rowspan="6">Increase AROM by 10%</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="lowBackextPre" value="" /></td>
                    <td><input type="text" name="lowBackextCurr" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>R Rot</td>
                    <td><input type="text" name="lowBackrRotPre" value="" /></td>
                    <td><input type="text" name="lowBackrRotCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>L Rot</td>
                    <td><input type="text" name="lowBacklRotPre" value="" /></td>
                    <td><input type="text" name="lowBacklRotCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>R Side bending</td>
                    <td><input type="text" name="lowBackrsbPre" value="" /></td>
                    <td><input type="text" name="lowBackrsbCurr" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>L Side bending</td>
                    <td><input type="text" name="lowBacklsbPre" value="" /></td>
                    <td><input type="text" name="lowBacklsbCurr" value="" /></td>
                    <td>45</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>Manual muscle test :</b></u></div>
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
                    <td><input type="text" name="lowBackFlexPreManual" value="" /></td>
                    <td><input type="text" name="lowBackFlexCurrManual" value="" /></td>
                    <td>45</td>
                    <td rowspan="6">Improve muscle strength by 1 grade</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="lowBackextPreManual" value="" /></td>
                    <td><input type="text" name="lowBackextCurrManual" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>R Rot</td>
                    <td><input type="text" name="lowBackrRotPreManual" value="" /></td>
                    <td><input type="text" name="lowBackrRotCurrManual" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>L Rot</td>
                    <td><input type="text" name="lowBacklRotPreManual" value="" /></td>
                    <td><input type="text" name="lowBacklRotCurrManual" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>R Side bending</td>
                     <td><input type="text" name="lowBackrsbPreManual" value="" /></td>
                    <td><input type="text" name="lowBackrsbCurrManual" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>L Side bending</td>
                    <td><input type="text" name="lowBacklsbPreManual" value="" /></td>
                    <td><input type="text" name="lowBacklsbCurrManual" value="" /></td>
                    <td>45</td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Special tests :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="2">Test</td>
                    <td colspan="2">Neck Findings</td>
                </tr>
                <tr>
                    <td>Current</td>
                </tr>
                <tr>
                    <td>Cervical compression Test</td>
                    <td><input type="checkbox" name="lowBackcctPositive" value="lowBackcctPositive" /> Positive
                    <input type="checkbox" name="lowBackcctNegative" value="lowBackcctNegative" /> Negative</td>
                </tr>
                <tr>
                    <td>Cervical distraction Test</td>
                    <td><input type="checkbox" name="lowBackcdtPositive" value="lowBackcdtPositive" /> Positive
                    <input type="checkbox" name="lowBackcdtNegative" value="lowBackcdtNegative"/> Negative</td>
                </tr>
                <tr>
                    <td>Spurling’s test</td>
                    <td><input type="checkbox" name="lowBackstPositive" value="lowBackstPositive" /> Positive
                    <input type="checkbox" name="lowBackstNegative" value="lowBackstNegative" /> Negative</td>
                </tr>
            </table>
            <br>

            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="color:red"><input type="checkbox" name="RightShoulder" value="RightShoulder" /> Right Shoulder  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="LeftShoulder" value="LeftShoulder" /> Left Shoulder</td>
                </tr>
                <tr>
                    <td>
                        <div>Pain level (VAS): Right<input type="text" name="rightPainlevel" value="" />/10 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Left<input type="text" name="leftPainlevel" value="" />/10
                        </div>
                        <div>Goal (6-8 weeks): Decrease pain level to <input type="text" name="rlGoal" value="" />/10.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>AROM :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Movement</td>
                    <td colspan="1">Right Shoulder</td>
                    <td colspan="1">Left Shoulder</td>
                    <td colspan="1">Normal</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlFlexPre" value="" /></td>
                    <td><input type="text" name="rlFlexCurr" value="" /></td>
                    <td>170-180</td>
                    <td rowspan="6">Increase AROM by 10%</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlextPre" value="" /></td>
                    <td><input type="text" name="rlextCurr" value="" /></td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Abd</td>
                    <td><input type="text" name="rlrRotPre" value="" /></td>
                    <td><input type="text" name="rlrRotCurr" value="" /></td>
                    <td>170-180</td>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><input type="text" name="rllRotPre" value="" /></td>
                    <td><input type="text" name="rllRotCurr" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>ER</td>
                    <td><input type="text" name="rlrsbPre" value="" /></td>
                    <td><input type="text" name="rlrsbCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>IR</td>
                    <td><input type="text" name="rllsbPre" value="" /></td>
                    <td><input type="text" name="rllsbCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>Manual muscle test :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Movement</td>
                    <td colspan="1">Right Shoulder</td>
                    <td colspan="1">Left Shoulder</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlFlexPreManual" value="" /></td>
                    <td><input type="text" name="rlFlexCurrManual" value="" /></td>
                    <td rowspan="6">Improve muscle strength by 1 grade</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlextPreManual" value="" /></td>
                    <td><input type="text" name="rlextCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>Abd</td>
                    <td><input type="text" name="rlrRotPreManual" value="" /></td>
                    <td><input type="text" name="rlrRotCurrManual" value="" /></td>
                </tr>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><input type="text" name="rllRotPreManual" value="" /></td>
                    <td><input type="text" name="rllRotCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>ER</td>
                    <td><input type="text" name="rleRotPreManual" value="" /></td>
                    <td><input type="text" name="rleRotCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>IR</td>
                     <td><input type="text" name="rlrsbPreManual" value="" /></td>
                    <td><input type="text" name="rlrsbCurrManual" value="" /></td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Special tests :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Test</td>
                    <td colspan="1">Right Shoulder Findings</td>
                    <td colspan="1">Left Shoulder Findings</td>
                </tr>
                <tr>
                    <td>Hawkin’s / Neer’s test</td>
                    <td><input type="checkbox" name="rlcdtPositiveR" value="rlcdtPositiveR" /> Positive
                    <input type="checkbox" name="rlcdtNegativeR" value="rlcdtNegativeR"/> Negative</td>
                    <td><input type="checkbox" name="rlcdtPositiveL" value="rlcdtPositiveL" /> Positive
                    <input type="checkbox" name="rlcdtNegativeL" value="rlcdtNegativeL"/> Negative</td>
                </tr>
                <tr>
                    <td>Empty Can test</td>
                    <td><input type="checkbox" name="rlcdtPositiveER" value="rlcdtPositiveER" /> Positive
                    <input type="checkbox" name="rlcdtNegativeER" value="rlcdtNegativeER"/> Negative</td>
                    <td><input type="checkbox" name="rlcdtPositiveEL" value="rlcdtPositiveEL" /> Positive
                    <input type="checkbox" name="rlcdtNegativeEL" value="rlcdtNegativeEL"/> Negative</td>
                </tr>
                <tr>
                    <td>Speed’s test</td>
                    <td><input type="checkbox" name="rlstPositiveSR" value="rlstPositiveSR" /> Positive
                    <input type="checkbox" name="rlstNegativeSR" value="rlstNegativeSR" /> Negative</td>
                    <td><input type="checkbox" name="rlstPositiveSL" value="rlstPositiveSL" /> Positive
                    <input type="checkbox" name="rlstNegativeSL" value="rlstNegativeSL" /> Negative</td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>
            <table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
                <tr>
                    <td>-
                        <input type="checkbox" name="Mild" value="Mild" /> Mild
                        <input type="checkbox" name="Moderate" value="Moderate" /> Moderate
                        <input type="checkbox" name="severemuscle" value="severemuscle" /> severe muscle spasm at the 
                        <input type="checkbox" name="RightShouldermuscles" value="RightShouldermuscles" /> Right Shoulder muscles
                        <input type="checkbox" name="LeftShouldermuscles" value="LeftShouldermuscles" /> Left Shoulder muscles
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="Mild2" value="Mild2" /> Mild
                        <input type="checkbox" name="Moderate2" value="Moderate2" /> Moderate
                        <input type="checkbox" name="severemuscle2" value="severemuscle2" /> severe Limited AROM at  
                        <input type="checkbox" name="RightShouldermuscles2" value="RightShouldermuscles2" /> Right Shoulder joint 
                        <input type="checkbox" name="LeftShouldermuscles2" value="LeftShouldermuscles2" /> Left Shoulder joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="Mild3" value="Mild3" /> Mild
                        <input type="checkbox" name="Moderate3" value="Moderate3" /> Moderate
                        <input type="checkbox" name="severemuscle3" value="severemuscle3" /> severe Restricted mobility at the   
                        <input type="checkbox" name="RightShouldermuscles3" value="RightShouldermuscles3" /> Right Shoulder joint 
                        <input type="checkbox" name="LeftShouldermuscles3" value="LeftShouldermuscles3" /> Left Shoulder joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="Mild4" value="Mild4" /> Mild
                        <input type="checkbox" name="Moderate4" value="Moderate4" /> Moderate
                        <input type="checkbox" name="severemuscle4" value="severemuscle4" /> severe Decreased functional activities.
                    </td>
                </tr>
            </table>
            <br>

            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="color:red"><input type="checkbox" name="RightElbow" value="RightElbow" /> Right Elbow  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="LeftElbow" value="LeftElbow" /> Left Elbow</td>
                </tr>
                <tr>
                    <td>
                        <div>Pain level (VAS): Right<input type="text" name="rightElowPainlevel" value="" />/10 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Left<input type="text" name="leftElowPainlevel" value="" />/10
                        </div>
                        <div>Goal (6-8 weeks): Decrease pain level to <input type="text" name="rlElbowGoal" value="" />/10.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>AROM :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Movement</td>
                    <td colspan="1">Right Elbow</td>
                    <td colspan="1">Left Elbow</td>
                    <td colspan="1">Normal</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlElbowFlexPre" value="" /></td>
                    <td><input type="text" name="rlElbowFlexCurr" value="" /></td>
                    <td>170-180</td>
                    <td rowspan="6">Increase AROM by 10%</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlElbowextPre" value="" /></td>
                    <td><input type="text" name="rlElbowextCurr" value="" /></td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Supination</td>
                    <td><input type="text" name="rlElbowrRotPre" value="" /></td>
                    <td><input type="text" name="rlElbowrRotCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>Pronation</td>
                    <td><input type="text" name="rlElbowlRotPre" value="" /></td>
                    <td><input type="text" name="rlElbowlRotCurr" value="" /></td>
                    <td>80</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>Manual muscle test :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Movement</td>
                    <td colspan="1">Right Elbow</td>
                    <td colspan="1">Left Elbow</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlElbowFlexPreManual" value="" /></td>
                    <td><input type="text" name="rlElbowFlexCurrManual" value="" /></td>
                    <td rowspan="6">Improve muscle strength by 1 grade</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlElbowextPreManual" value="" /></td>
                    <td><input type="text" name="rlElbowextCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>Supination</td>
                    <td><input type="text" name="rlElbowrRotPreManual" value="" /></td>
                    <td><input type="text" name="rlElbowrRotCurrManual" value="" /></td>
                </tr>
                </tr>
                <tr>
                    <td>Pronation</td>
                    <td><input type="text" name="rlElbowlRotPreManual" value="" /></td>
                    <td><input type="text" name="rlElbowlRotCurrManual" value="" /></td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Special tests :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Test</td>
                    <td colspan="1">Right Elbow Findings</td>
                    <td colspan="1">Left Elbow Findings</td>
                </tr>
                <tr>
                    <td>Cozen’s Lateral Epicondylitis test</td>
                    <td><input type="checkbox" name="rlElbowcdtPositiveR" value="rlElbowcdtPositiveR" /> Positive
                    <input type="checkbox" name="rlElbowcdtNegativeR" value="rlElbowcdtNegativeR"/> Negative</td>
                    <td><input type="checkbox" name="rlElbowcdtPositiveL" value="rlElbowcdtPositiveL" /> Positive
                    <input type="checkbox" name="rlElbowcdtNegativeL" value="rlElbowcdtNegativeL"/> Negative</td>
                </tr>
                <tr>
                    <td>Tinel’s test at the cubital tunnel</td>
                    <td><input type="checkbox" name="rlElbowcdtPositiveER" value="rlElbowcdtPositiveER" /> Positive
                    <input type="checkbox" name="rlElbowcdtNegativeER" value="rlElbowcdtNegativeER"/> Negative</td>
                    <td><input type="checkbox" name="rlElbowcdtPositiveEL" value="rlElbowcdtPositiveEL" /> Positive
                    <input type="checkbox" name="rlElbowcdtNegativeEL" value="rlElbowcdtNegativeEL"/> Negative</td>
                </tr>
                <tr>
                    <td>Golfer’s elbow test</td>
                    <td><input type="checkbox" name="rlElbowstPositiveSR" value="rlElbowstPositiveSR" /> Positive
                    <input type="checkbox" name="rlElbowstNegativeSR" value="rlElbowstNegativeSR" /> Negative</td>
                    <td><input type="checkbox" name="rlElbowstPositiveSL" value="rlElbowstPositiveSL" /> Positive
                    <input type="checkbox" name="rlElbowstNegativeSL" value="rlElbowstNegativeSL" /> Negative</td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>
            <table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
                <tr>
                    <td>-
                        <input type="checkbox" name="MildElbow" value="MildElbow" /> Mild
                        <input type="checkbox" name="ModerateElbow" value="ModerateElbow" /> Moderate
                        <input type="checkbox" name="severemuscleElbow" value="severemuscleElbow" /> severe muscle spasm at the 
                        <input type="checkbox" name="RightElbowmuscles" value="RightElbowmuscles" /> Right Elbow muscles
                        <input type="checkbox" name="LeftElbowmuscles" value="LeftElbowmuscles" /> Left Elbow muscles
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildElbow2" value="MildElbow2" /> Mild
                        <input type="checkbox" name="ModerateElbow2" value="ModerateElbow2" /> Moderate
                        <input type="checkbox" name="severemuscleElbow2" value="severemuscleElbow2" /> severe Limited AROM at  
                        <input type="checkbox" name="RightElbowmuscles2" value="RightElbowmuscles2" /> Right Elbow joint 
                        <input type="checkbox" name="LeftElbowmuscles2" value="LeftElbowmuscles2" /> Left Elbow joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildElbow3" value="MildElbow3" /> Mild
                        <input type="checkbox" name="ModerateElbow3" value="ModerateElbow3" /> Moderate
                        <input type="checkbox" name="severemuscleElbow3" value="severemuscleElbow3" /> severe Restricted mobility at the   
                        <input type="checkbox" name="RightElbowmuscles3" value="RightElbowmuscles3" /> Right Elbow joint 
                        <input type="checkbox" name="LeftElbowmuscles3" value="LeftElbowmuscles3" /> Left Elbow joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildElbow4" value="MildElbow4" /> Mild
                        <input type="checkbox" name="ModerateElbow4" value="ModerateElbow4" /> Moderate
                        <input type="checkbox" name="severemuscleElbow4" value="severemuscleElbow4" /> severe Decreased functional activities.
                    </td>
                </tr>
            </table>
            <br>

            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="color:red"><input type="checkbox" name="RightWrist" value="RightWrist" /> Right Wrist  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="LeftWrist" value="LeftWrist" /> Left Wrist</td>
                </tr>
                <tr>
                    <td>
                        <div>Pain level (VAS): Right<input type="text" name="rightWristPainlevel" value="" />/10 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Left<input type="text" name="leftWristPainlevel" value="" />/10
                        </div>
                        <div>Goal (6-8 weeks): Decrease pain level to <input type="text" name="rlWristGoal" value="" />/10.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>AROM :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Movement</td>
                    <td colspan="1">Right Wrist</td>
                    <td colspan="1">Left Wrist</td>
                    <td colspan="1">Normal</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlWristFlexPre" value="" /></td>
                    <td><input type="text" name="rlWristFlexCurr" value="" /></td>
                    <td>80-90</td>
                    <td rowspan="6">Increase AROM by 10%</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlWristextPre" value="" /></td>
                    <td><input type="text" name="rlWristextCurr" value="" /></td>
                    <td>70-85</td>
                </tr>
                <tr>
                    <td>RD</td>
                    <td><input type="text" name="rlWristrRotPre" value="" /></td>
                    <td><input type="text" name="rlWristrRotCurr" value="" /></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>UD</td>
                    <td><input type="text" name="rlWristlRotPre" value="" /></td>
                    <td><input type="text" name="rlWristlRotCurr" value="" /></td>
                    <td>30</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>Manual muscle test :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Movement</td>
                    <td colspan="1">Right Wrist</td>
                    <td colspan="1">Left Wrist</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlWristFlexPreManual" value="" /></td>
                    <td><input type="text" name="rlWristFlexCurrManual" value="" /></td>
                    <td rowspan="6">Improve muscle strength by 1 grade</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlWristextPreManual" value="" /></td>
                    <td><input type="text" name="rlWristextCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>RD</td>
                    <td><input type="text" name="rlWristrRotPreManual" value="" /></td>
                    <td><input type="text" name="rlWristrRotCurrManual" value="" /></td>
                </tr>
                </tr>
                <tr>
                    <td>UD</td>
                    <td><input type="text" name="rlWristlRotPreManual" value="" /></td>
                    <td><input type="text" name="rlWristlRotCurrManual" value="" /></td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Special tests :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Test</td>
                    <td colspan="1">Right Wrist Findings</td>
                    <td colspan="1">Left Wrist Findings</td>
                </tr>
                <tr>
                    <td>Phalen ‘s test</td>
                    <td><input type="checkbox" name="rlWristcdtPositiveR" value="rlWristcdtPositiveR" /> Positive
                    <input type="checkbox" name="rlWristcdtNegativeR" value="rlWristcdtNegativeR"/> Negative</td>
                    <td><input type="checkbox" name="rlWristcdtPositiveL" value="rlWristcdtPositiveL" /> Positive
                    <input type="checkbox" name="rlWristcdtNegativeL" value="rlWristcdtNegativeL"/> Negative</td>
                </tr>
                <tr>
                    <td>Tinel’s test at the cubital tunnel</td>
                    <td><input type="checkbox" name="rlWristcdtPositiveER" value="rlWristcdtPositiveER" /> Positive
                    <input type="checkbox" name="rlWristcdtNegativeER" value="rlWristcdtNegativeER"/> Negative</td>
                    <td><input type="checkbox" name="rlWristcdtPositiveEL" value="rlWristcdtPositiveEL" /> Positive
                    <input type="checkbox" name="rlWristcdtNegativeEL" value="rlWristcdtNegativeEL"/> Negative</td>
                </tr>
                <tr>
                    <td>Compression test</td>
                    <td><input type="checkbox" name="rlWriststPositiveSR" value="rlWriststPositiveSR" /> Positive
                    <input type="checkbox" name="rlWriststNegativeSR" value="rlWriststNegativeSR" /> Negative</td>
                    <td><input type="checkbox" name="rlWriststPositiveSL" value="rlWriststPositiveSL" /> Positive
                    <input type="checkbox" name="rlWriststNegativeSL" value="rlElbowstNegativeSL" /> Negative</td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>
            <table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
                <tr>
                    <td>-
                        <input type="checkbox" name="MildWrist" value="MildWrist" /> Mild
                        <input type="checkbox" name="ModerateWrist" value="ModerateWrist" /> Moderate
                        <input type="checkbox" name="severemuscleWrist" value="severemuscleWrist" /> severe muscle spasm at the 
                        <input type="checkbox" name="RightWristmuscles" value="RightWristmuscles" /> Right Wrist muscles
                        <input type="checkbox" name="LeftWristmuscles" value="LeftWristmuscles" /> Left Wrist muscles
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildWrist2" value="MildWrist2" /> Mild
                        <input type="checkbox" name="ModerateWrist2" value="ModerateWrist2" /> Moderate
                        <input type="checkbox" name="severemuscleWrist2" value="severemuscleWrist2" /> severe Limited AROM at  
                        <input type="checkbox" name="RightWristmuscles2" value="RightWristmuscles2" /> Right Wrist joint 
                        <input type="checkbox" name="LeftWristmuscles2" value="LeftWristmuscles2" /> Left Wrist joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildWrist3" value="MildWrist3" /> Mild
                        <input type="checkbox" name="ModerateWrist3" value="ModerateWrist3" /> Moderate
                        <input type="checkbox" name="severemuscleWrist3" value="severemuscleWrist3" /> severe Restricted mobility at the   
                        <input type="checkbox" name="RightWristmuscles3" value="RightWristmuscles3" /> Right Wrist joint 
                        <input type="checkbox" name="LeftWristmuscles3" value="LeftWristmuscles3" /> Left Wrist joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildWrist4" value="MildWrist4" /> Mild
                        <input type="checkbox" name="ModerateWrist4" value="ModerateWrist4" /> Moderate
                        <input type="checkbox" name="severemuscleWrist4" value="severemuscleWrist4" /> severe Decreased functional activities.
                    </td>
                </tr>
            </table>

            <br>
            <input type="submit" value="Create PDF" class="btn btn-primary">
        </form>

    </div>
</body>
</html>