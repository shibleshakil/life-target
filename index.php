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
                    <td><input type="text" name="p1_1" /></td>
                    <td><b>Date of Birth:</b></td>
                    <td><input type="text" name="p1_2" /></td>
                </tr>
                <tr>
                    <td><b>Patient Name:</b></td>
                    <td><input type="text" name="p1_3"/></td>
                    <td><b>Date of Accident:</b></td>
                    <td><input type="text" name="p1_4"/></td>
                </tr>
                <tr>
                    <td><b>Sex:</b></td>
                    <td colspan="3">
                        <input type="checkbox" name="sexM" value="sexM" /> <label
                            for="p1_5">M</label>
                        <input type="checkbox" name="sexF" value="sexF" /> <label
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
                    <td>Currently, the patient is <input type="checkbox" name="working" value="working" /> working <input type="checkbox" name="notworking" value="notworking"/> not working</td>
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
                    <input type="checkbox" name="rlWRiststNegativeSL" value="rlWRiststNegativeSL" /> Negative</td>
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

            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="color:red"><input type="checkbox" name="RightHip" value="RightHip" /> Right Hip  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="LeftHip" value="LeftHip" /> Left Hip</td>
                </tr>
                <tr>
                    <td>
                        <div>Pain level (VAS): Right<input type="text" name="rightHipPainlevel" value="" />/10 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Left<input type="text" name="leftHipPainlevel" value="" />/10
                        </div>
                        <div>Goal (6-8 weeks): Decrease pain level to <input type="text" name="rlHipGoal" value="" />/10.
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
                    <td colspan="1">Right Hip</td>
                    <td colspan="1">Left Hip</td>
                    <td colspan="1">Normal</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlHipFlexPre" value="" /></td>
                    <td><input type="text" name="rlHipFlexCurr" value="" /></td>
                    <td>170-180</td>
                    <td rowspan="6">Increase AROM by 10%</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlHipextPre" value="" /></td>
                    <td><input type="text" name="rlHipextCurr" value="" /></td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Abd</td>
                    <td><input type="text" name="rlHiprRotPre" value="" /></td>
                    <td><input type="text" name="rlHiprRotCurr" value="" /></td>
                    <td>170-180</td>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><input type="text" name="rlHiplRotPre" value="" /></td>
                    <td><input type="text" name="rlHiplRotCurr" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>ER</td>
                    <td><input type="text" name="rlHiprsbPre" value="" /></td>
                    <td><input type="text" name="rlHiprsbCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>IR</td>
                    <td><input type="text" name="rlHiplsbPre" value="" /></td>
                    <td><input type="text" name="rlHiplsbCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
            </table>


            <div style="margin:15px 0;"><u><b>Manual muscle test :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Movement</td>
                    <td colspan="1">Right Hip</td>
                    <td colspan="1">Left Hip</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlHipFlexPreManual" value="" /></td>
                    <td><input type="text" name="rlHipFlexCurrManual" value="" /></td>
                    <td rowspan="6">Improve muscle strength by 1 grade</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlHipextPreManual" value="" /></td>
                    <td><input type="text" name="rlHipextCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>Abd</td>
                    <td><input type="text" name="rlHiprRotPreManual" value="" /></td>
                    <td><input type="text" name="rlHiprRotCurrManual" value="" /></td>
                </tr>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><input type="text" name="rlHiplRotPreManual" value="" /></td>
                    <td><input type="text" name="rlHiplRotCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>ER</td>
                    <td><input type="text" name="rlHipeRotPreManual" value="" /></td>
                    <td><input type="text" name="rlHipeRotCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>IR</td>
                     <td><input type="text" name="rlHiprsbPreManual" value="" /></td>
                    <td><input type="text" name="rlHiprsbCurrManual" value="" /></td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Special tests :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Test</td>
                    <td colspan="1">Right Hip Findings</td>
                    <td colspan="1">Left Hip Findings</td>
                </tr>
                <tr>
                    <td>Scour test</td>
                    <td><input type="checkbox" name="rlHipcdtPositiveR" value="rlHipcdtPositiveR" /> Positive
                    <input type="checkbox" name="rlHipcdtNegativeR" value="rlHipcdtNegativeR"/> Negative</td>
                    <td><input type="checkbox" name="rlHipcdtPositiveL" value="rlHipcdtPositiveL" /> Positive
                    <input type="checkbox" name="rlHipcdtNegativeL" value="rlHipcdtNegativeL"/> Negative</td>
                </tr>
                <tr>
                    <td>Thomas test</td>
                    <td><input type="checkbox" name="rlHipcdtPositiveER" value="rlHipcdtPositiveER" /> Positive
                    <input type="checkbox" name="rlHipcdtNegativeER" value="rlHipcdtNegativeER"/> Negative</td>
                    <td><input type="checkbox" name="rlHipcdtPositiveEL" value="rlHipcdtPositiveEL" /> Positive
                    <input type="checkbox" name="rlHipcdtNegativeEL" value="rlHipcdtNegativeEL"/> Negative</td>
                </tr>
                <tr>
                    <td>FABER test</td>
                    <td><input type="checkbox" name="rlHipstPositiveSR" value="rlHipstPositiveSR" /> Positive
                    <input type="checkbox" name="rlHipstNegativeSR" value="rlHipstNegativeSR" /> Negative</td>
                    <td><input type="checkbox" name="rlHipstPositiveSL" value="rlHipstPositiveSL" /> Positive
                    <input type="checkbox" name="rlHipstNegativeSL" value="rlHipstNegativeSL" /> Negative</td>
                </tr>
            </table>

            <table width="100%" cellpadding="0" cellspacing="0" style="text-align:left; margin-top:20px;">
                <tr>
                    <td><input type="checkbox" name="GaitHip" value="GaitHip" /><u> Gait Analysis :</u> 
                        <input type="checkbox" name="NormalHip" value="NormalHip" /> Normal Gait
                        <input type="checkbox" name="AntalgicHip" value="AntalgicHip" /> Antalgic Gait  
                        <input type="checkbox" name="LimpingHip" value="LimpingHip" /> Limping Gait
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="DecreaseHip" value="DecreaseHip" /> Decrease cadence
                        <input type="checkbox" name="DecreaseStepHip" value="DecreaseStepHip" /> Decrease step length
                    </td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>
            <table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
                <tr>
                    <td>-
                        <input type="checkbox" name="MildHip" value="MildHip" /> Mild
                        <input type="checkbox" name="ModerateHip" value="ModerateHip" /> Moderate
                        <input type="checkbox" name="severemuscleHip" value="severemuscleHip" /> severe muscle spasm at the 
                        <input type="checkbox" name="RightHipmusclesHip" value="RightHipmusclesHip" /> Right Hip muscles
                        <input type="checkbox" name="LeftHipmusclesHip" value="LeftHipmusclesHip" /> Left Hip muscles
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildHip2" value="MildHip2" /> Mild
                        <input type="checkbox" name="ModerateHip2" value="ModerateHip2" /> Moderate
                        <input type="checkbox" name="severemuscleHip2" value="severemuscleHip2" /> severe Limited AROM at  
                        <input type="checkbox" name="RightHipmusclesHip2" value="RightHipmusclesHip2" /> Right Hip joint 
                        <input type="checkbox" name="LeftHipmusclesHip2" value="LeftHipmusclesHip2" /> Left Hip joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildHip3" value="MildHip3" /> Mild
                        <input type="checkbox" name="ModerateHip3" value="ModerateHip3" /> Moderate
                        <input type="checkbox" name="severemuscleHip3" value="severemuscleHip3" /> severe Restricted mobility at the   
                        <input type="checkbox" name="RightHipmusclesHip3" value="RightHipmusclesHip3" /> Right Hip joint 
                        <input type="checkbox" name="LeftHipmusclesHip3" value="LeftHipmusclesHip3" /> Left Hip joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildHip5" value="MildHip5" /> Mild
                        <input type="checkbox" name="ModerateHip5" value="ModerateHip5" /> Moderate
                        <input type="checkbox" name="severemuscleHip5" value="severemuscleHip5" /> severe Gait deviation
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildHip4" value="MildHip4" /> Mild
                        <input type="checkbox" name="ModerateHip4" value="ModerateHip4" /> Moderate
                        <input type="checkbox" name="severemuscleHip4" value="severemuscleHip4" /> severe Decreased functional activities.
                    </td>
                </tr>
            </table>
            <br>

            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="color:red"><input type="checkbox" name="RightKnee" value="RightKnee" /> Right Knee  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="LeftKnee" value="LeftKnee" /> Left Knee</td>
                </tr>
                <tr>
                    <td>
                        <div>Pain level (VAS): Right<input type="text" name="rightKneePainlevel" value="" />/10 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Left<input type="text" name="leftKneePainlevel" value="" />/10
                        </div>
                        <div>Goal (6-8 weeks): Decrease pain level to <input type="text" name="rlKneeGoal" value="" />/10.
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
                    <td colspan="1">Right Knee</td>
                    <td colspan="1">Left Knee</td>
                    <td colspan="1">Normal</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlKneeFlexPre" value="" /></td>
                    <td><input type="text" name="rlKneeFlexCurr" value="" /></td>
                    <td>170-180</td>
                    <td rowspan="6">Increase AROM by 10%</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlKneeextPre" value="" /></td>
                    <td><input type="text" name="rlKneeextCurr" value="" /></td>
                    <td>40</td>
                </tr>
                <!-- <tr>
                    <td>Abd</td>
                    <td><input type="text" name="rlKneerRotPre" value="" /></td>
                    <td><input type="text" name="rlKneerRotCurr" value="" /></td>
                    <td>170-180</td>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><input type="text" name="rlKneelRotPre" value="" /></td>
                    <td><input type="text" name="rlKneelRotCurr" value="" /></td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>ER</td>
                    <td><input type="text" name="rlKneersbPre" value="" /></td>
                    <td><input type="text" name="rlKneersbCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>IR</td>
                    <td><input type="text" name="rlKneelsbPre" value="" /></td>
                    <td><input type="text" name="rlKneelsbCurr" value="" /></td>
                    <td>80-90</td>
                </tr> -->
            </table>


            <div style="margin:15px 0;"><u><b>Manual muscle test :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Movement</td>
                    <td colspan="1">Right Knee</td>
                    <td colspan="1">Left Knee</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Flex</td>
                    <td><input type="text" name="rlKneeFlexPreManual" value="" /></td>
                    <td><input type="text" name="rlKneeFlexCurrManual" value="" /></td>
                    <td rowspan="6">Improve muscle strength by 1 grade</td>
                </tr>
                <tr>
                    <td>Ext</td>
                    <td><input type="text" name="rlKneeextPreManual" value="" /></td>
                    <td><input type="text" name="rlKneeextCurrManual" value="" /></td>
                </tr>
                <!-- <tr>
                    <td>Abd</td>
                    <td><input type="text" name="rlKneerRotPreManual" value="" /></td>
                    <td><input type="text" name="rlKneerRotCurrManual" value="" /></td>
                </tr>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><input type="text" name="rlKneelRotPreManual" value="" /></td>
                    <td><input type="text" name="rlKneelRotCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>ER</td>
                    <td><input type="text" name="rlKneeeRotPreManual" value="" /></td>
                    <td><input type="text" name="rlKneeeRotCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>IR</td>
                     <td><input type="text" name="rlKneersbPreManual" value="" /></td>
                    <td><input type="text" name="rlKneersbCurrManual" value="" /></td>
                </tr> -->
            </table>

            <div style="margin:15px 0;"><u><b>Special tests :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Test</td>
                    <td colspan="1">Right Knee Findings</td>
                    <td colspan="1">Left Knee Findings</td>
                </tr>
                <tr>
                    <td>Anterior Drawer test</td>
                    <td><input type="checkbox" name="rlKneecdtPositiveR" value="rlKneecdtPositiveR" /> Positive
                    <input type="checkbox" name="rlKneecdtNegativeR" value="rlKneecdtNegativeR"/> Negative</td>
                    <td><input type="checkbox" name="rlKneecdtPositiveL" value="rlKneecdtPositiveL" /> Positive
                    <input type="checkbox" name="rlKneecdtNegativeL" value="rlKneecdtNegativeL"/> Negative</td>
                </tr>
                <tr>
                    <td>Valgus Stress test</td>
                    <td><input type="checkbox" name="rlKneecdtPositiveER" value="rlKneecdtPositiveER" /> Positive
                    <input type="checkbox" name="rlKneecdtNegativeER" value="rlKneecdtNegativeER"/> Negative</td>
                    <td><input type="checkbox" name="rlKneecdtPositiveEL" value="rlKneecdtPositiveEL" /> Positive
                    <input type="checkbox" name="rlKneecdtNegativeEL" value="rlKneecdtNegativeEL"/> Negative</td>
                </tr>
                <tr>
                    <td>Varus Stress test</td>
                    <td><input type="checkbox" name="rlKneestPositiveSR" value="rlKneestPositiveSR" /> Positive
                    <input type="checkbox" name="rlKneestNegativeSR" value="rlKneestNegativeSR" /> Negative</td>
                    <td><input type="checkbox" name="rlKneestPositiveSL" value="rlKneestPositiveSL" /> Positive
                    <input type="checkbox" name="rlKneestNegativeSL" value="rlKneestNegativeSL" /> Negative</td>
                </tr>
                <tr>
                    <td>Patellar Tap Test</td>
                    <td><input type="checkbox" name="rlKneestPositiveSR2" value="rlKneestPositiveSR2" /> Positive
                    <input type="checkbox" name="rlKneestNegativeSR2" value="rlKneestNegativeSR2" /> Negative</td>
                    <td><input type="checkbox" name="rlKneestPositiveSL2" value="rlKneestPositiveSL2" /> Positive
                    <input type="checkbox" name="rlKneestNegativeSL2" value="rlKneestNegativeSL2" /> Negative</td>
                </tr>
            </table>

            <table width="100%" cellpadding="0" cellspacing="0" style="text-align:left; margin-top:20px;">
                <tr>
                    <td><input type="checkbox" name="GaitKnee" value="GaitKnee" /><u> Gait Analysis :</u> 
                        <input type="checkbox" name="NormalKnee" value="NormalKnee" /> Normal Gait
                        <input type="checkbox" name="AntalgicKnee" value="AntalgicKnee" /> Antalgic Gait  
                        <input type="checkbox" name="LimpingKnee" value="LimpingKnee" /> Limping Gait
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="DecreaseKnee" value="DecreaseKnee" /> Decrease cadence
                        <input type="checkbox" name="DecreaseStepKnee" value="DecreaseStepKnee" /> Decrease step length
                    </td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>
            <table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
                <tr>
                    <td>-
                        <input type="checkbox" name="MildKnee" value="MildKnee" /> Mild
                        <input type="checkbox" name="ModerateKnee" value="ModerateKnee" /> Moderate
                        <input type="checkbox" name="severemuscleKnee" value="severemuscleKnee" /> severe muscle spasm at the 
                        <input type="checkbox" name="RightKneemusclesKnee" value="RightKneemusclesKnee" /> Right Knee muscles
                        <input type="checkbox" name="LeftKneemusclesKnee" value="LeftKneemusclesKnee" /> Left Knee muscles
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildKnee2" value="MildKnee2" /> Mild
                        <input type="checkbox" name="ModerateKnee2" value="ModerateKnee2" /> Moderate
                        <input type="checkbox" name="severemuscleKnee2" value="severemuscleKnee2" /> severe Limited AROM at  
                        <input type="checkbox" name="RightKneemusclesKnee2" value="RightKneemusclesKnee2" /> Right Knee joint 
                        <input type="checkbox" name="LeftKneemusclesKnee2" value="LeftKneemusclesKnee2" /> Left Knee joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildKnee3" value="MildKnee3" /> Mild
                        <input type="checkbox" name="ModerateKnee3" value="ModerateKnee3" /> Moderate
                        <input type="checkbox" name="severemuscleKnee3" value="severemuscleKnee3" /> severe Restricted mobility at the   
                        <input type="checkbox" name="RightKneemusclesKnee3" value="RightKneemusclesKnee3" /> Right Knee joint 
                        <input type="checkbox" name="LeftKneemusclesKnee3" value="LeftKneemusclesKnee3" /> Left Knee joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildKnee5" value="MildKnee5" /> Mild
                        <input type="checkbox" name="ModerateKnee5" value="ModerateKnee5" /> Moderate
                        <input type="checkbox" name="severemuscleKnee5" value="severemuscleKnee5" /> severe Gait deviation
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildKnee4" value="MildKnee4" /> Mild
                        <input type="checkbox" name="ModerateKnee4" value="ModerateKnee4" /> Moderate
                        <input type="checkbox" name="severemuscleKnee4" value="severemuscleKnee4" /> severe Decreased functional activities.
                    </td>
                </tr>
            </table>
            <br>

            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="color:red"><input type="checkbox" name="RightAnkle" value="RightAnkle" /> Right Ankle  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="LeftAnkle" value="LeftAnkle" /> Left Ankle</td>
                </tr>
                <tr>
                    <td>
                        <div>Pain level (VAS): Right<input type="text" name="rightAnklePainlevel" value="" />/10 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Left<input type="text" name="leftAnklePainlevel" value="" />/10
                        </div>
                        <div>Goal (6-8 weeks): Decrease pain level to <input type="text" name="rlAnkleGoal" value="" />/10.
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
                    <td colspan="1">Right Ankle</td>
                    <td colspan="1">Left Ankle</td>
                    <td colspan="1">Normal</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Dorsi Flex</td>
                    <td><input type="text" name="rlAnkleFlexPre" value="" /></td>
                    <td><input type="text" name="rlAnkleFlexCurr" value="" /></td>
                    <td>170-180</td>
                    <td rowspan="6">Increase AROM by 10%</td>
                </tr>
                <tr>
                    <td>Planter Ext</td>
                    <td><input type="text" name="rlAnkleextPre" value="" /></td>
                    <td><input type="text" name="rlAnkleextCurr" value="" /></td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Inversion</td>
                    <td><input type="text" name="rlAnklerRotPre" value="" /></td>
                    <td><input type="text" name="rlAnklerRotCurr" value="" /></td>
                    <td>170-180</td>
                </tr>
                <tr>
                    <td>Eversion</td>
                    <td><input type="text" name="rlAnklelRotPre" value="" /></td>
                    <td><input type="text" name="rlAnklelRotCurr" value="" /></td>
                    <td>45</td>
                </tr>
                <!-- <tr>
                    <td>ER</td>
                    <td><input type="text" name="rlAnklersbPre" value="" /></td>
                    <td><input type="text" name="rlAnklersbCurr" value="" /></td>
                    <td>80-90</td>
                </tr>
                <tr>
                    <td>IR</td>
                    <td><input type="text" name="rlAnklelsbPre" value="" /></td>
                    <td><input type="text" name="rlAnklelsbCurr" value="" /></td>
                    <td>80-90</td>
                </tr> -->
            </table>


            <div style="margin:15px 0;"><u><b>Manual muscle test :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Movement</td>
                    <td colspan="1">Right Ankle</td>
                    <td colspan="1">Left Ankle</td>
                    <td rowspan="1">Goal (6-8 weeks)</td>
                </tr>
                <tr>
                    <td>Dorsi Flex</td>
                    <td><input type="text" name="rlAnkleFlexPreManual" value="" /></td>
                    <td><input type="text" name="rlAnkleFlexCurrManual" value="" /></td>
                    <td rowspan="6">Improve muscle strength by 1 grade</td>
                </tr>
                <tr>
                    <td>Planter Ext</td>
                    <td><input type="text" name="rlAnkleextPreManual" value="" /></td>
                    <td><input type="text" name="rlAnkleextCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>Inversion</td>
                    <td><input type="text" name="rlAnklerRotPreManual" value="" /></td>
                    <td><input type="text" name="rlAnklerRotCurrManual" value="" /></td>
                </tr>
                </tr>
                <tr>
                    <td>Eversion</td>
                    <td><input type="text" name="rlAnklelRotPreManual" value="" /></td>
                    <td><input type="text" name="rlAnklelRotCurrManual" value="" /></td>
                </tr>
                <!-- <tr>
                    <td>ER</td>
                    <td><input type="text" name="rlAnkleeRotPreManual" value="" /></td>
                    <td><input type="text" name="rlAnkleeRotCurrManual" value="" /></td>
                </tr>
                <tr>
                    <td>IR</td>
                     <td><input type="text" name="rlAnklersbPreManual" value="" /></td>
                    <td><input type="text" name="rlAnklersbCurrManual" value="" /></td>
                </tr> -->
            </table>

            <div style="margin:15px 0;"><u><b>Special tests :</b></u></div>
            <table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
                <tr>
                    <td rowspan="1">Test</td>
                    <td colspan="1">Right Ankle Findings</td>
                    <td colspan="1">Left Ankle Findings</td>
                </tr>
                <tr>
                    <td>Talar Tilt Test</td>
                    <td><input type="checkbox" name="rlAnklecdtPositiveR" value="rlAnklecdtPositiveR" /> Positive
                    <input type="checkbox" name="rlAnklecdtNegativeR" value="rlAnklecdtNegativeR"/> Negative</td>
                    <td><input type="checkbox" name="rlAnklecdtPositiveL" value="rlAnklecdtPositiveL" /> Positive
                    <input type="checkbox" name="rlAnklecdtNegativeL" value="rlAnklecdtNegativeL"/> Negative</td>
                </tr>
                <tr>
                    <td>Inversion stress Test</td>
                    <td><input type="checkbox" name="rlAnklecdtPositiveER" value="rlAnklecdtPositiveER" /> Positive
                    <input type="checkbox" name="rlAnklecdtNegativeER" value="rlAnklecdtNegativeER"/> Negative</td>
                    <td><input type="checkbox" name="rlAnklecdtPositiveEL" value="rlAnklecdtPositiveEL" /> Positive
                    <input type="checkbox" name="rlAnklecdtNegativeEL" value="rlAnklecdtNegativeEL"/> Negative</td>
                </tr>
                <tr>
                    <td>Eversion Stress Test</td>
                    <td><input type="checkbox" name="rlAnklestPositiveSR" value="rlAnklestPositiveSR" /> Positive
                    <input type="checkbox" name="rlAnklestNegativeSR" value="rlAnklestNegativeSR" /> Negative</td>
                    <td><input type="checkbox" name="rlAnklestPositiveSL" value="rlAnklestPositiveSL" /> Positive
                    <input type="checkbox" name="rlAnklestNegativeSL" value="rlAnklestNegativeSL" /> Negative</td>
                </tr>
                <tr>
                    <td>Patellar Tap Test</td>
                    <td><input type="checkbox" name="rlAnklestPositiveSR2" value="rlAnklestPositiveSR2" /> Positive
                    <input type="checkbox" name="rlAnklestNegativeSR2" value="rlAnklestNegativeSR2" /> Negative</td>
                    <td><input type="checkbox" name="rlAnklestPositiveSL2" value="rlAnklestPositiveSL2" /> Positive
                    <input type="checkbox" name="rlAnklestNegativeSL2" value="rlAnklestNegativeSL2" /> Negative</td>
                </tr>
            </table>
            <br>

            <table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;">
                <tr>
                    <td><input type="checkbox" name="GaitAnkle" value="GaitAnkle" /><u> Gait Analysis :</u> 
                        <input type="checkbox" name="NormalAnkle" value="NormalAnkle" /> Normal Gait
                        <input type="checkbox" name="AntalgicAnkle" value="AntalgicAnkle" /> Antalgic Gait  
                        <input type="checkbox" name="LimpingAnkle" value="LimpingAnkle" /> Limping Gait
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="DecreaseAnkle" value="DecreaseAnkle" /> Decrease cadence
                        <input type="checkbox" name="DecreaseStepAnkle" value="DecreaseStepAnkle" /> Decrease step length
                    </td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>
            <table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;">
                <tr>
                    <td>-
                        <input type="checkbox" name="MildAnkle" value="MildAnkle" /> Mild
                        <input type="checkbox" name="ModerateAnkle" value="ModerateAnkle" /> Moderate
                        <input type="checkbox" name="severemuscleAnkle" value="severemuscleAnkle" /> severe muscle spasm at the 
                        <input type="checkbox" name="RightAnklemusclesAnkle" value="RightAnklemusclesAnkle" /> Right Ankle muscles
                        <input type="checkbox" name="LeftAnklemusclesAnkle" value="LeftAnklemusclesAnkle" /> Left Ankle muscles
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildAnkle2" value="MildAnkle2" /> Mild
                        <input type="checkbox" name="ModerateAnkle2" value="ModerateAnkle2" /> Moderate
                        <input type="checkbox" name="severemuscleAnkle2" value="severemuscleAnkle2" /> severe Limited AROM at  
                        <input type="checkbox" name="RightAnklemusclesAnkle2" value="RightAnklemusclesAnkle2" /> Right Ankle joint 
                        <input type="checkbox" name="LeftAnklemusclesAnkle2" value="LeftAnklemusclesAnkle2" /> Left Ankle joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildAnkle3" value="MildAnkle3" /> Mild
                        <input type="checkbox" name="ModerateAnkle3" value="ModerateAnkle3" /> Moderate
                        <input type="checkbox" name="severemuscleAnkle3" value="severemuscleAnkle3" /> severe Restricted mobility at the   
                        <input type="checkbox" name="RightAnklemusclesAnkle3" value="RightAnklemusclesAnkle3" /> Right Ankle joint 
                        <input type="checkbox" name="LeftAnklemusclesAnkle3" value="LeftAnklemusclesAnkle3" /> Left Ankle joint 
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildAnkle5" value="MildAnkle5" /> Mild
                        <input type="checkbox" name="ModerateAnkle5" value="ModerateAnkle5" /> Moderate
                        <input type="checkbox" name="severemuscleAnkle5" value="severemuscleAnkle5" /> severe Gait deviation
                    </td>
                </tr>
                <tr>
                    <td>-
                        <input type="checkbox" name="MildAnkle4" value="MildAnkle4" /> Mild
                        <input type="checkbox" name="ModerateAnkle4" value="ModerateAnkle4" /> Moderate
                        <input type="checkbox" name="severemuscleAnkle4" value="severemuscleAnkle4" /> severe Decreased functional activities.
                    </td>
                </tr>
            </table>

            
            <div style="margin:15px 0;"><u><b>Diagnosis Codes :</b></u></div>
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:0px;">
                <tr>
                    <td><input type="checkbox" name="S13.4XXA" value="S13.4XXA" /> S13.4XXA</td>
                    <td>Cervical Sprain/Strain</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S33.5XXA" value="S33.5XXA" /> S33.5XXA</td>
                    <td>Lumbar Sprain/Strain</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S23.3XXA" value="S23.3XXA" /> S23.3XXA</td>
                    <td>Thoracic Sprain/Strain</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M54.12" value="M54.12" /> M54.12</td>
                    <td>Cervical Radiculopathy</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M54.16" value="M54.16" /> M54.16</td>
                    <td>Lumbar Radiculopathy</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M47.814" value="M47.814" /> M47.814</td>
                    <td>Thoracic Spondylosis</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S43.401A" value="S43.401A" /> S43.401A</td>
                    <td>Shoulder Sprain R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S43.402A" value="S43.402A" /> S43.402A</td>
                    <td>Shoulder Sprain L</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M24.819" value="M24.819" /> M24.819</td>
                    <td>Shoulder derangement</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M75.41" value="M75.41" /> M75.41</td>
                    <td>Impingement Shoulder R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S53.401A" value="S53.401A" /> S53.401A</td>
                    <td>Sprain of Elbow R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S53.402A" value="S53.402A" /> S53.402A</td>
                    <td>Sprain of Elbow L</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M24.83" value="M24.83" /> M24.83</td>
                    <td>Wrist derangement</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S63.501A" value="S63.501A" /> S63.501A</td>
                    <td>Sprain of Wrist/ Hand R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S63.502A" value="S63.502A" /> S63.502A</td>
                    <td>Sprain of Wrist/ Hand L</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S63.609 S" value="S63.609 S" /> S63.609 S</td>
                    <td>Sprain of thumb (L/R)</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=" G56.00	" value=" G56.00	" />  G56.00	</td>
                    <td>CTS</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S73.101A" value="S73.101A" /> S73.101A</td>
                    <td>Sprain of Hip R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S73.102A" value="S73.102A" /> S73.102A</td>
                    <td>Sprain of Hip L</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M24.85" value="M24.85" /> M24.85</td>
                    <td>Derangement of hip L/R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M23.90" value="M23.90" /> M23.90</td>
                    <td>Knee derangement</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S83.91XA" value="S83.91XA" /> S83.91XA</td>
                    <td>Knee Sprain R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S83.92XA" value="S83.92XA" /> S83.92XA</td>
                    <td>Knee Sprain L</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M79.606" value="M79.606" /> M79.606</td>
                    <td>Sprain in leg (L/R)</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S93.401A" value="S93.401A" /> S93.401A</td>
                    <td>Sprain of Ankle R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S93.402A" value="S93.402A" /> S93.402A</td>
                    <td>Sprain of Ankle L</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="M24.873" value="M24.873" /> M24.873</td>
                    <td>Ankle derangement L/R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S93.601S" value="S93.601S" /> S93.601S</td>
                    <td>Sprain of Foot R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S93.602S" value="S93.602S" /> S93.602S</td>
                    <td>Sprain of Foot L</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S93.501A" value="S93.501A" /> S93.501A</td>
                    <td>Sprain of Toe R</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="S93.502A" value="S93.502A" /> S93.502A</td>
                    <td>Sprain of Toe L</td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Short Term Goals :</b></u>(6-8) weeks</div>
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:0px;">
                <tr>
                    <td><input type="checkbox" name="stg1" value="stg1" /> Decrease pain level by 10% to be able to perform dressing, bathing and combing hair without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg2" value="stg2" /> Increase muscle strength by 1 grade to be able to carry and lift moderate to heavy weights.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg3" value="stg3" /> Increase AROM 10 % to be able to perform reaching &nbsp;<input type="checkbox" name="stg4" value="stg4" />  and to be able to drive for more than 8 hours without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg5" value="stg5" /> Pt will be independent with HEP.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg6" value="stg6" />  <b>Patient safely performs the duties of his job with fewer restrictions, pain and limitations. For example, to be able to operate a motor vehicle safely without causing injuries to themselves, their passengers, and other vehicles.</b>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg7" value="stg7" /> Decrease pain level by 10% to be able to stand for 3 hours without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg8" value="stg8" /> Increase muscle strength by 1 grade to be able to get up and to transfer from the chair without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg9" value="stg9" /> Increase AROM 10 %to be able to negotiate and climb 30 stairs without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg10" value="stg10" /> Improve gait to decrease risk of fall and to be able to safely ambulate (8) block(s).
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg11" value="stg11" /> Pt will be independent with HEP.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="stg12" value="stg12" /> <b>Patient safely performs the duties of his job with fewer restrictions, pain and limitations. For example, to be able to operate a motor vehicle safely without causing injuries to themselves, their passengers, and other vehicles.</b>
                    </td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Long Term Goals : </b></u>(12) weeks</div>
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:0px;">
                <tr>
                    <td><input type="checkbox" name="ltg1" value="ltg1" /> Decrease pain level to Zero/10 to be able to do overhead activities without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg2" value="ltg2" /> Increase muscle strength to 5/5 to be able to perform pulling, pushing and carrying moderate to heavy weights without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg3" value="ltg3" /> Increase AROM 100 % to be able to do lifting more than 40 pounds without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg5" value="ltg5" /> Pt will be able to perform HEP with 100% accuracy and independently.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg6" value="ltg6" />  <b>Improvement in ADL’s including [social, self-care, life- support activities, occupational/recreational activities and family/home responsibilities].</b>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg7" value="ltg7" /> Decrease pain level to   Zero/10 to be able to stand for 6 hours without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg8" value="ltg8" /> Increase muscle strength to 5/5 to be able to do full squat without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg9" value="ltg9" /> Increase AROM 100 % to be able to negotiate and climb 60 stairs without pain.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg10" value="ltg10" /> Improve gait to decrease risk of fall and to be able to safely ambulate for more than (12) block(s).
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg11" value="ltg11" /> Pt will be able to perform HEP with 100% accuracy and independently.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="ltg12" value="ltg12" /> Improvement in ADL’s including [social, self-care, life- support activities, occupational/recreational activities and family/home responsibilities].
                    </td>
                </tr>
            </table>

            <div style="margin:15px 0;"><b>Plan of Care : </b></div>
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:0px;">
                <tr>
                    <td><input type="checkbox" name="poc1" value="poc1" /> Hot/Cold Pack: To increase blood flow, decrease spasm and increase capillary permeability.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="poc2" value="poc2" /> Electrical stimulation (TENS/ Interferential): To relief pain, promote relaxation of the muscle spasm and to increase local blood circulation.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="poc3" value="poc3" /> Therapeutic Exercise; (Strengthening/Stretching/AROM/ PROM): To increase muscle strength and to improve functional mobility.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="poc5" value="poc5" /> Manual Therapy; (Jt Mobilization/ MFR/ STM): To relief pain and facilitate joint mobility and flexibility These techniques are applied to soft tissue as well as the joint for facilitation of fluid exchange, restoration of the joint movement and stretching of the shortened muscles.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="poc6" value="poc6" />  Therapeutic massage: To relief muscle spasm, increase lymphatic drainage and increase cutaneous circulation.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="poc7" value="poc7" /> Neuromuscular education: To improve coordination and performance of ADLs.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="poc8" value="poc8" /> Gait training: To decrease risk of fall and to be able to safely ambulate and negotiate the curbs and the stairs.
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="poc9" value="poc9" /> Home Exercise Program.
                    </td>
                </tr>
                <tr>
                    <td>The above modalities will be applied for the purpose of providing relief from acute post-traumatic pain. All parameters are set to the patient’s tolerance. 
                    </td>
                </tr>
                <tr>
                    <td><b>Frequency : 2-3 times a week for 6-8 weeks.</b></td>
                </tr>
            </table>

            <div style="margin:15px 0;"><u><b>Discussion/ Recommendations : </b></u></div>

            <div style="margin:15px 0;">
                <b>In my professional opinion based on the descriptions of the injury, the patient’s complaints and the current physical findings, the above recommendations are essential and medically necessary in order to stabilize and expedite recovery of the injuries.</b>
            </div>

            <div style="margin:15px 0;">
                The patient advised to avoid performing functional activities that causes additional stress and compression on the <input type="text" name="last1" id=""> and this includes, but is not limited to: moderate lifting [occupational or recreational], contact sports or any other type of action that would exert pressure or overexertion upon muscle and ligament tissues. The patient’s treatment plan is appropriate based on the examination. I am suggesting the patient comes in for a follow up in 6-8 weeks for a reevaluation. The patient was advised to start therapeutic home exercises and no heavy lifting greater than <input type="text" name="last2" id=""> pounds. 
                <b> The patient understands and agrees with the treatment plan.</b>
            </div>

            <div style="margin:10px 0;"><b>Total visits from initial visit : <input type="text" name="last3" id=""> visit(s).</b></div>

            <div style="margin-top:25px; margin-bottom:10px;">Sincerely,</div>

            <div style="margin:10px 0;"><img src="signature.png" alt="" width="180px" height="60px"> </div>
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:0px;">
                <tr>
                    <td>Dr. Ahmed Soliman, DPT</td>

                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    
                    <td>Date : <input type="text" name="date" id=""> </td>
                </tr>
            </table>


            <br>

            <br>
            <input type="submit" value="Create PDF" class="btn btn-primary">
        </form>

    </div>
</body>
</html>