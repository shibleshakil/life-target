<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

// echo $_POST['sex'];

$data = '';
$data .= ' <table width="100%" border="0" cellpadding="0" cellspacing="0">
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
                        <h2><u>INITIAL EXAMINATION</u></h2>
                    </td>
                </tr>
                <tr>
                    <td align="center">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center">&nbsp;</td>
                </tr>
            </table>';


$data.= '<table width="100%" border="0" cellpadding="0" cellspacing="0"> <tr><td>Date of Service:  '.$_POST['p1_1'].'</td>
    <td>Date of Birth:   '.$_POST['p1_2'].'</td></tr> 
    <tr><td>Patient Name:  '.$_POST['p1_3'].'</td> <td>Date of Service:  '.$_POST['p1_4'].'</td></tr> </table>'; 

$data .= 'Sex :';

if(isset($_POST['sex']) && $_POST['sex'] == "M"){
    $data .= '<input type="checkbox" checked="checked" > M'.'<input type="checkbox" >  F';
}elseif(isset($_POST['sex']) && $_POST['sex'] == "F"){
    $data .= '<input type="checkbox" >  M'.'<input type="checkbox" checked="checked"  > F';
}else{
    $data .= '<input type="checkbox" >  M'.'<input type="checkbox" > F';
}

$data .= '<br>';$data .= '<br>';
$data .= '<u><b>Accident History :</b></u>'.'<br>';
if(isset($_POST['p1_7']) && $_POST['p1_7']){
    $data .= '<table><tr><td style="border:1px solid black;padding:2px; width:100%; height:auto">'.$_POST['p1_7'].'</td></tr></table>';
}
$data .= '<br>';
$data .= '<u><b>Occupational Status :</b></u>'.'<br>';
$data .= 'Currently, the patient is';
if(isset($_POST['occupation']) && $_POST['occupation'] == "working"){
    $data .= '<input type="checkbox" checked="checked" > working '.'<input type="checkbox" >  not working ';
}elseif(isset($_POST['occupation']) && $_POST['occupation'] == "not working"){
    $data .= '<input type="checkbox" >  working '.'<input type="checkbox" checked="checked"  > not working ';
}else{
    $data .= '<input type="checkbox" >  working '.'<input type="checkbox" > not working';
}

$data .= '<br>'.'<br>';

$data .= '<u><b>Past Medical History :</b></u>'.'<br>';
if(isset($_POST['p1_9']) && $_POST['p1_9'] == "Yes"){
    $data .= '<input type="checkbox" checked="checked" > The patient has no prior medical history';
}else{
    $data .= '<input type="checkbox"> The patient has no prior medical history';
}

$data .= '<br>'.'The patient is taking';

if(isset($_POST['p1_11']) && $_POST['p1_11'] == "Tylenol"){
    $data .= '<input type="checkbox" checked="checked" > Tylenol ';
}else{
    $data .= '<input type="checkbox"> Tylenol';
}

if(isset($_POST['p1_12']) && $_POST['p1_12'] == "Advil"){
    $data .= '<input type="checkbox" checked="checked" > Advil ';
}else{
    $data .= '<input type="checkbox"> Advil';
}

if(isset($_POST['p1_13']) && $_POST['p1_13'] == "Blood Pressure"){
    $data .= '<input type="checkbox" checked="checked" > Blood Pressure Medication ';
}else{
    $data .= '<input type="checkbox"> Blood Pressure Medication ';
}

if(isset($_POST['p1_14']) && $_POST['p1_14'] == "Diabetes Medication"){
    $data .= '<input type="checkbox" checked="checked" > Diabetes Medication ';
}else{
    $data .= '<input type="checkbox"> Diabetes Medication ';
}
$data .= '<br>';

if(isset($_POST['p1_15']) && $_POST['p1_15'] == "Thyroid Medication"){
    $data .= '<input type="checkbox" checked="checked" > Thyroid Medication ';
}else{
    $data .= '<input type="checkbox"> Thyroid Medication ';
}

if(isset($_POST['p1_16']) && $_POST['p1_16'] == "Cholesterol Medication"){
    $data .= '<input type="checkbox" checked="checked" > Cholesterol Medication ';
}else{
    $data .= '<input type="checkbox"> Cholesterol Medication ';
}

if(isset($_POST['p1_17']) && $_POST['p1_17'] == "Depression Medication"){
    $data .= '<input type="checkbox" checked="checked" > Depression Medication ';
}else{
    $data .= '<input type="checkbox"> Depression Medication ';
}
$data .= '<br>';$data .= '<br>';
$data .= '<u><b>Past Surgical History :</b></u>'.'<br>';
if(isset($_POST['p1_18']) && $_POST['p1_18']){
    $data .= '<table><tr><td style="border:1px solid black;padding:2px; width:100%; height:auto">'.$_POST['p1_18'].'</td></tr></table>';
}

$data .= '<br>';
$data .= '<u><b>Chief complaints :</b></u>'.'<br>'.'The patient complains of';
if(isset($_POST['p1_19']) && $_POST['p1_19'] == "Pain"){
    $data .= '<input type="checkbox" checked="checked" > Pain ';
}else{
    $data .= '<input type="checkbox"> pain';
}

if(isset($_POST['p1_20']) && $_POST['p1_20'] == "Weakness"){
    $data .= '<input type="checkbox" checked="checked" > Weakness ';
}else{
    $data .= '<input type="checkbox"> Weakness';
}

if(isset($_POST['p1_21']) && $_POST['p1_21'] == "Spasm"){
    $data .= '<input type="checkbox" checked="checked" > Spasm ';
}else{
    $data .= '<input type="checkbox"> Spasm';
}

if(isset($_POST['p1_22']) && $_POST['p1_22'] == "limited ROM"){
    $data .= '<input type="checkbox" checked="checked" > limited ROM ';
}else{
    $data .= '<input type="checkbox"> limited ROM';
}

if(isset($_POST['p1_23']) && $_POST['p1_23'] == "Stiffness"){
    $data .= '<input type="checkbox" checked="checked" > Stiffness ';
}else{
    $data .= '<input type="checkbox"> Stiffness';
}

if(isset($_POST['p1_24']) && $_POST['p1_24'] == "Swelling due to"){
    $data .= '<input type="checkbox" checked="checked" > Swelling due to ';
}else{
    $data .= '<input type="checkbox"> Swelling due to';
}
$data .= '<br>';
if(isset($_POST['p1_25']) && $_POST['p1_25'] == "work related injury"){
    $data .= '<input type="checkbox" checked="checked" > work related injury ';
}else{
    $data .= '<input type="checkbox"> work related injury';
}

if(isset($_POST['p1_26']) && $_POST['p1_26'] == "work related major"){
    $data .= '<input type="checkbox" checked="checked" > work related motor vehicle accident injury, affecting the following part(s) ';
}else{
    $data .= '<input type="checkbox"> work related motor vehicle accident injury, affecting the following part(s)';
}

$data .= '<br>'.'<br>';

if(isset($_POST['p1_27']) && $_POST['p1_27'] == "Right Shoulder"){
    $data .= '<input type="checkbox" checked="checked" > Right Shoulder ';
}else{
    $data .= '<input type="checkbox"> Right Shoulder';
}

if(isset($_POST['p1_28']) && $_POST['p1_28'] == "Right Elbow"){
    $data .= '<input type="checkbox" checked="checked" > Right Elbow ';
}else{
    $data .= '<input type="checkbox"> Right Elbow';
}

if(isset($_POST['p1_29']) && $_POST['p1_29'] == "Right Wrist"){
    $data .= '<input type="checkbox" checked="checked" > Right Wrist ';
}else{
    $data .= '<input type="checkbox"> Right Wrist';
}

if(isset($_POST['p1_30']) && $_POST['p1_30'] == "Right Hand"){
    $data .= '<input type="checkbox" checked="checked" > Right Hand ';
}else{
    $data .= '<input type="checkbox"> Right Hand';
}

if(isset($_POST['p1_31']) && $_POST['p1_31'] == "Right Finger"){
    $data .= '<input type="checkbox" checked="checked" > Right Finger ';
}else{
    $data .= '<input type="checkbox"> Right Finger';
}

if(isset($_POST['p1_32']) && $_POST['p1_32'] == "Right Hip"){
    $data .= '<input type="checkbox" checked="checked" > Right Hip ';
}else{
    $data .= '<input type="checkbox"> Right Hip';
}
$data .= '<br>';
if(isset($_POST['p1_33']) && $_POST['p1_33'] == "Right Knee"){
    $data .= '<input type="checkbox" checked="checked" > Right Knee ';
}else{
    $data .= '<input type="checkbox"> Right Knee';
}

if(isset($_POST['p1_34']) && $_POST['p1_34'] == "Right Ankle"){
    $data .= '<input type="checkbox" checked="checked" > Right Ankle ';
}else{
    $data .= '<input type="checkbox"> Right Ankle';
}

if(isset($_POST['p1_35']) && $_POST['p1_35'] == "Right Foot"){
    $data .= '<input type="checkbox" checked="checked" > Right Foot ';
}else{
    $data .= '<input type="checkbox"> Right Foot';
}

if(isset($_POST['p1_36']) && $_POST['p1_36'] == "Right Toe"){
    $data .= '<input type="checkbox" checked="checked" > Right Toe ';
}else{
    $data .= '<input type="checkbox"> Right Toe';
}

$data .= '<br>'.'<br>';

if(isset($_POST['p1_37']) && $_POST['p1_37'] == "Left Shoulder"){
    $data .= '<input type="checkbox" checked="checked" > Left Shoulder ';
}else{
    $data .= '<input type="checkbox"> Left Shoulder';
}

if(isset($_POST['p1_38']) && $_POST['p1_38'] == "Left Elbow"){
    $data .= '<input type="checkbox" checked="checked" > Left Elbow ';
}else{
    $data .= '<input type="checkbox"> Left Elbow';
}

if(isset($_POST['p1_39']) && $_POST['p1_39'] == "Left Wrist"){
    $data .= '<input type="checkbox" checked="checked" > Left Wrist ';
}else{
    $data .= '<input type="checkbox"> Right Left';
}

if(isset($_POST['p1_30']) && $_POST['p1_30'] == "Left Hand"){
    $data .= '<input type="checkbox" checked="checked" > Left Hand ';
}else{
    $data .= '<input type="checkbox"> Left Hand';
}

if(isset($_POST['p1_31']) && $_POST['p1_31'] == "Left Finger"){
    $data .= '<input type="checkbox" checked="checked" > Left Finger ';
}else{
    $data .= '<input type="checkbox"> Left Finger';
}

if(isset($_POST['p1_32']) && $_POST['p1_32'] == "Left Hip"){
    $data .= '<input type="checkbox" checked="checked" > Left Hip ';
}else{
    $data .= '<input type="checkbox"> Left Hip';
}

if(isset($_POST['p1_43']) && $_POST['p1_43'] == "Left Knee"){
    $data .= '<input type="checkbox" checked="checked" > Left Knee ';
}else{
    $data .= '<input type="checkbox"> Left Knee';
}
$data .= '<br>';
if(isset($_POST['p1_44']) && $_POST['p1_44'] == "Left Ankle"){
    $data .= '<input type="checkbox" checked="checked" > Left Ankle ';
}else{
    $data .= '<input type="checkbox"> Left Ankle';
}

if(isset($_POST['p1_45']) && $_POST['p1_45'] == "Left Foot"){
    $data .= '<input type="checkbox" checked="checked" > Left Foot ';
}else{
    $data .= '<input type="checkbox"> Left Foot';
}

if(isset($_POST['p1_46']) && $_POST['p1_46'] == "Left Toe"){
    $data .= '<input type="checkbox" checked="checked" > Left Toe ';
}else{
    $data .= '<input type="checkbox"> Left Toe';
}

$data .= '<br>'.'<br>';

$data .= 'The patient described the pain as ';
if(isset($_POST['p1_47']) && $_POST['p1_47'] == "constant"){
    $data .= '<input type="checkbox" checked="checked" > constant ';
}else{
    $data .= '<input type="checkbox"> constant';
}

if(isset($_POST['p1_48']) && $_POST['p1_48'] == "intermittent"){
    $data .= '<input type="checkbox" checked="checked" > intermittent ';
}else{
    $data .= '<input type="checkbox"> intermittent';
}

if(isset($_POST['p1_49']) && $_POST['p1_49'] == "dull aching"){
    $data .= '<input type="checkbox" checked="checked" > dull aching ';
}else{
    $data .= '<input type="checkbox"> dull aching';
}

if(isset($_POST['p1_50']) && $_POST['p1_50'] == "sharp"){
    $data .= '<input type="checkbox" checked="checked" > sharp ';
}else{
    $data .= '<input type="checkbox"> sharp';
}

if(isset($_POST['p1_51']) && $_POST['p1_51'] == "burning"){
    $data .= '<input type="checkbox" checked="checked" > burning ';
}else{
    $data .= '<input type="checkbox"> burning';
}

$data .= '<br>'.'<br>';

$data .= '<u><b>Progress :</b></u>';

$data .= '<br>'.'<br>';

$data .= '<u>The patient stated improvement in pain and daily activities while :</u>'.'<br>';
if(isset($_POST['Dressing']) && $_POST['Dressing'] == "Dressing"){
    $data .= '<input type="checkbox" checked="checked" > Dressing ';
}else{
    $data .= '<input type="checkbox"> Dressing';
} 

if(isset($_POST['bathing']) && $_POST['bathing'] == "bathing"){
    $data .= '<input type="checkbox" checked="checked" > bathing ';
}else{
    $data .= '<input type="checkbox"> bathing';
}

if(isset($_POST['combing_hair']) && $_POST['combing_hair'] == "combing hair"){
    $data .= '<input type="checkbox" checked="checked" > combing hair ';
}else{
    $data .= '<input type="checkbox"> combing hair';
}

if(isset($_POST['reaching']) && $_POST['reaching'] == "reaching"){
    $data .= '<input type="checkbox" checked="checked" > reaching ';
}else{
    $data .= '<input type="checkbox"> reaching';
}

if(isset($_POST['doing_overhead_activities']) && $_POST['doing_overhead_activities'] == "doing overhead activities"){
    $data .= '<input type="checkbox" checked="checked" > doing overhead activities ';
}else{
    $data .= '<input type="checkbox"> doing overhead activities ';
}

if(isset($_POST['pulling']) && $_POST['pulling'] == "pulling"){
    $data .= '<input type="checkbox" checked="checked" > pulling ';
}else{
    $data .= '<input type="checkbox"> pulling ';
}

if(isset($_POST['pushing']) && $_POST['pushing'] == "pushing"){
    $data .= '<input type="checkbox" checked="checked" > pushing ';
}else{
    $data .= '<input type="checkbox"> pushing ';
}

$data .= '<br>';

if(isset($_POST['carrying']) && $_POST['carrying'] == "carrying"){
    $data .= '<input type="checkbox" checked="checked" > carrying ';
}else{
    $data .= '<input type="checkbox"> carrying ';
}

if(isset($_POST['weights']) && $_POST['weights']){
    $data .= '<u> '.$_POST['weights'].' </u>'.'weights,';
}

if(isset($_POST['carrying']) && $_POST['carrying'] == "carrying"){
    $data .= '<input type="checkbox" checked="checked" > carrying ';
}else{
    $data .= '<input type="checkbox"> carrying ';
}

if(isset($_POST['weights']) && $_POST['weights']){
    $data .= '<u> '.$_POST['weights'].' </u>'.'weights,';
}else{
    $data .= '____________'. ' weights, ';
}

if(isset($_POST['lifting_up_to']) && $_POST['lifting_up_to'] == "lifting up to"){
    $data .= '<input type="checkbox" checked="checked" > lifting up to ';
}else{
    $data .= '<input type="checkbox"> lifting up to ';
}

if(isset($_POST['pounds']) && $_POST['pounds']){
    $data .= '<u> '.$_POST['pounds'].' </u>'.'pounds,';
}else{
    $data .= '____________'. ' pounds, ';
}

if(isset($_POST['driving_up_to']) && $_POST['driving_up_to'] == "driving up to"){
    $data .= '<input type="checkbox" checked="checked" > driving up to ';
}else{
    $data .= '<input type="checkbox"> driving up to ';
}

if(isset($_POST['hour']) && $_POST['hour']){
    $data .= '<u> '.$_POST['hour'].' </u>'.'hour(s).';
}else{
    $data .= '____________'. ' hour(s). ';
}
$data .= '<br>'.'<br>';

if(isset($_POST['Standing_for_up']) && $_POST['Standing_for_up'] == "Standing for up"){
    $data .= '<input type="checkbox" checked="checked" > Standing for up ';
}else{
    $data .= '<input type="checkbox"> Standing for up ';
}

if(isset($_POST['minute']) && $_POST['minute']){
    $data .= '<u> '.$_POST['minute'].' </u>'.'minute(s),';
}else{
    $data .= '____________'. ' minute(s), ';
}

if(isset($_POST['doing_transfer']) && $_POST['doing_transfer'] == "doing transfer"){
    $data .= '<input type="checkbox" checked="checked" > doing transfer, ';
}else{
    $data .= '<input type="checkbox"> doing transfer, ';
}

if(isset($_POST['squatting']) && $_POST['squatting'] == "squatting"){
    $data .= '<input type="checkbox" checked="checked" > squatting, ';
}else{
    $data .= '<input type="checkbox"> squatting, ';
}

if(isset($_POST['walking_for_up']) && $_POST['walking_for_up'] == "Standing for up"){
    $data .= '<input type="checkbox" checked="checked" > walking for up to ';
}else{
    $data .= '<input type="checkbox"> walking for up to ';
}

if(isset($_POST['block']) && $_POST['block']){
    $data .= '<u> '.$_POST['block'].' </u>'.'block(s),';
}else{
    $data .= '____________'. ' block(s), ';
}

if(isset($_POST['climbing_up_to']) && $_POST['climbing_up_to'] == "climbing up to"){
    $data .= '<input type="checkbox" checked="checked" > climbing up to ';
}else{
    $data .= '<input type="checkbox"> climbing up to ';
}

if(isset($_POST['stair']) && $_POST['stair']){
    $data .= '<u> '.$_POST['stair'].' </u>'.'stair(s),';
}else{
    $data .= '____________'. ' stair(s), ';
}

if(isset($_POST['bending_and_kneeling']) && $_POST['bending_and_kneeling'] == "bending and kneeling"){
    $data .= '<input type="checkbox" checked="checked" > bending and kneeling, ';
}else{
    $data .= '<input type="checkbox"> bending and kneeling, ';
}

if(isset($_POST['driving_for_up']) && $_POST['driving_for_up'] == "driving for up"){
    $data .= '<input type="checkbox" checked="checked" > driving for up to ';
}else{
    $data .= '<input type="checkbox"> driving for up to ';
}

if(isset($_POST['driving_hour']) && $_POST['driving_hour']){
    $data .= '<u> '.$_POST['driving_hour'].' </u>'.'hour(s).';
}else{
    $data .= '____________'. ' hour(s). ';
}
$data .= '<br>'.'<br>';
$data .= '<u>However, the patient stated pain in daily activities while: </u>'.'<br>';
if(isset($_POST['DressingW']) && $_POST['DressingW'] == "DressingW"){
    $data .= '<input type="checkbox" checked="checked" > Dressing, ';
}else{
    $data .= '<input type="checkbox"> Dressing, ';
}

if(isset($_POST['bathingW']) && $_POST['bathingW'] == "bathingW"){
    $data .= '<input type="checkbox" checked="checked" > bathing, ';
}else{
    $data .= '<input type="checkbox"> bathing, ';
}

if(isset($_POST['combing_hairW']) && $_POST['combing_hairW'] == "combing hairW"){
    $data .= '<input type="checkbox" checked="checked" > combing hair, ';
}else{
    $data .= '<input type="checkbox"> combing hair, ';
}

if(isset($_POST['reachingW']) && $_POST['reachingW'] == "reachingW"){
    $data .= '<input type="checkbox" checked="checked" > reaching, ';
}else{
    $data .= '<input type="checkbox"> reaching, ';
}

if(isset($_POST['doing_overhead_activitiesW']) && $_POST['doing_overhead_activitiesW'] == "doing overhead activitiesW"){
    $data .= '<input type="checkbox" checked="checked" > doing overhead activities, ';
}else{
    $data .= '<input type="checkbox"> doing overhead activities, ';
}

if(isset($_POST['pullingW']) && $_POST['pullingW'] == "pullingW"){
    $data .= '<input type="checkbox" checked="checked" > pulling, ';
}else{
    $data .= '<input type="checkbox"> pulling, ';
}
$data .= '<br>';
if(isset($_POST['pushingW']) && $_POST['pushingW'] == "pushingW"){
    $data .= '<input type="checkbox" checked="checked" > pushing, ';
}else{
    $data .= '<input type="checkbox"> pushing, ';
}

if(isset($_POST['carryingW']) && $_POST['carryingW'] == "carryingW"){
    $data .= '<input type="checkbox" checked="checked" > carrying ';
}else{
    $data .= '<input type="checkbox"> carrying ';
}
if(isset($_POST['weightsW']) && $_POST['weightsW']){
    $data .= '<u> '.$_POST['weightsW'].' </u>'.'weights,';
}else{
    $data .= '____________'. ' weights, ';
}

if(isset($_POST['lifting_more_thanW']) && $_POST['lifting_more_thanW'] == "lifting more thanW"){
    $data .= '<input type="checkbox" checked="checked" > lifting more than ';
}else{
    $data .= '<input type="checkbox"> lifting more than ';
}
if(isset($_POST['poundW']) && $_POST['poundW']){
    $data .= '<u> '.$_POST['poundW'].' </u>'.'pounds,';
}else{
    $data .= '____________'. ' pounds, ';
}

if(isset($_POST['driving_for_more_thanW']) && $_POST['driving_for_more_thanW'] == "driving for more thanW"){
    $data .= '<input type="checkbox" checked="checked" > driving for more than ';
}else{
    $data .= '<input type="checkbox"> driving for more than ';
}
if(isset($_POST['hourW']) && $_POST['hourW']){
    $data .= '<u> '.$_POST['hourW'].' </u>'.'hour(s).';
}else{
    $data .= '____________'. ' hour(s). ';
}
$data .= '<br>'.'<br>';

if(isset($_POST['standing']) && $_POST['standing'] == "standing"){
    $data .= '<input type="checkbox" checked="checked" > Standing for more than ';
}else{
    $data .= '<input type="checkbox"> Standing for more than ';
}
if(isset($_POST['standing_minute']) && $_POST['standing_minute']){
    $data .= '<u> '.$_POST['standing_minute'].' </u>'.'minute(s),';
}else{
    $data .= '____________'. ' minute(s), ';
}

if(isset($_POST['doing_transfer']) && $_POST['doing_transfer'] == "doing transfer"){
    $data .= '<input type="checkbox" checked="checked" > doing transfer, ';
}else{
    $data .= '<input type="checkbox"> doing transfer, ';
}

if(isset($_POST['standing_squatting']) && $_POST['standing_squatting'] == "squatting"){
    $data .= '<input type="checkbox" checked="checked" > squatting, ';
}else{
    $data .= '<input type="checkbox"> squatting, ';
}

if(isset($_POST['standing_walking']) && $_POST['standing_walking'] == "standing walking"){
    $data .= '<input type="checkbox" checked="checked" > walking for more than ';
}else{
    $data .= '<input type="checkbox"> walking for more than ';
}
if(isset($_POST['standing_block']) && $_POST['standing_block']){
    $data .= '<u> '.$_POST['standing_block'].' </u>'.'block(s),';
}else{
    $data .= '____________'. ' block(s), ';
}

if(isset($_POST['standing_climbing']) && $_POST['standing_climbing'] == "standing climbing"){
    $data .= '<input type="checkbox" checked="checked" > climbing more than ';
}else{
    $data .= '<input type="checkbox"> climbing more than ';
}
if(isset($_POST['standing_stairs']) && $_POST['standing_stairs']){
    $data .= '<u> '.$_POST['standing_stairs'].' </u>'.'stair(s),';
}else{
    $data .= '____________'. ' stair(s), ';
}

if(isset($_POST['standing_bending']) && $_POST['standing_bending'] == "standing bending"){
    $data .= '<input type="checkbox" checked="checked" > bending and kneeling, ';
}else{
    $data .= '<input type="checkbox"> bending and kneeling, ';
}
$data .='<br>';
if(isset($_POST['standing_driving']) && $_POST['standing_driving'] == "standing driving"){
    $data .= '<input type="checkbox" checked="checked" > driving for more than ';
}else{
    $data .= '<input type="checkbox"> driving for more than ';
}
if(isset($_POST['standing_hour']) && $_POST['standing_hour']){
    $data .= '<u> '.$_POST['standing_hour'].' </u>'.'hour(s),';
}else{
    $data .= '____________'. ' hour(s), ';
}
$data .= '<br>'.'<br>';
$data .= 'The patient stated the pain diminishes the capacity to carry out both occupational and recreational daily activities including (social, self-care, life-support activities and family/home  responsibilities).';

$data .= '<br>'.'<br>';
if(isset($_POST['pre_date']) && $_POST['pre_date']){
    $pre_date = 'Previous date '.'<u> '.$_POST['pre_date'].' </u>';
}else{
    $pre_date = 'Previous date '.'____________';
}

if(isset($_POST['Neck']) && $_POST['Neck'] == "Neck"){
    $Neck = '<input type="checkbox" checked="checked" > Neck ';
}else{
    $Neck = '<input type="checkbox"> Neck ';
}


if(isset($_POST['NeckPainlevel']) && $_POST['NeckPainlevel']){
    $NeckPainlevel = 'Pain level (VAS) : '.'<u> '.$_POST['NeckPainlevel'].' </u>'.'/10';
}else{
    $NeckPainlevel = 'Pain level (VAS) : '.'____________'.'/10';
}

if(isset($_POST['NeckPrevious']) && $_POST['NeckPrevious']){
    $NeckPrevious = 'Previous (VAS) : '.'<u> '.$_POST['NeckPrevious'].' </u>'.'/10';
}else{
    $NeckPrevious = 'Previous (VAS) : '.'____________'.'/10';
}

if(isset($_POST['NeckGoal']) && $_POST['NeckGoal']){
    $NeckGoal = 'Goal (6-8 weeks) : Decrease pain level to  '.'<u> '.$_POST['NeckGoal'].' </u>'.'/10.';
}else{
    $NeckGoal = 'Goal (6-8 weeks) : Decrease pain level to  '.'____________'.'/10.';
}

$data .= '<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td><u><b>Objectives:</b></u> '.$pre_date.'</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="color:red">'.$Neck.'</td>
    </tr>
    <tr>
        <td>
            <div>'.$NeckPainlevel.'</div>
            <div>'.$NeckPrevious.'</div>
            <div>'.$NeckGoal.'</div>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>';

$data .= '<u><b>AROM :</b></u>';
$data .= '<br>'.'<br>';
$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
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
        <td>'.$_POST['FlexPre'].'</td>
        <td>'.$_POST['FlexCurr'].'</td>
        <td>45</td>
        <td rowspan="6">Increase AROM by 10%</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['extPre'].'</td>
        <td>'.$_POST['extCurr'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>R Rot</td>
        <td>'.$_POST['rRotPre'].'</td>
        <td>'.$_POST['rRotCurr'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>L Rot</td>
        <td>'.$_POST['lRotPre'].'</td>
        <td>'.$_POST['lRotCurr'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>R Side bending</td>
        <td>'.$_POST['rsbPre'].'</td>
        <td>'.$_POST['rsbCurr'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>L Side bending</td>
        <td>'.$_POST['lsbPre'].'</td>
        <td>'.$_POST['lsbCurr'].'</td>
        <td>45</td>
    </tr>
</table>';

$data .= '<br>';
$data .= '<u><b>Manual muscle test :</b></u>';
$data .= '<br>'.'<br>';

$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
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
        <td>'.$_POST['FlexPreManual'].'</td>
        <td>'.$_POST['FlexCurrManual'].'</td>
        <td>45</td>
        <td rowspan="6">Improve muscle strength by 1 grade</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['extPreManual'].'</td>
        <td>'.$_POST['extCurrManual'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>R Rot</td>
        <td>'.$_POST['rRotPreManual'].'</td>
        <td>'.$_POST['rRotCurrManual'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>L Rot</td>
        <td>'.$_POST['lRotPreManual'].'</td>
        <td>'.$_POST['lRotCurrManual'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>R Side bending</td>
        <td>'.$_POST['rsbPreManual'].'</td>
        <td>'.$_POST['rsbCurrManual'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>L Side bending</td>
        <td>'.$_POST['lsbPreManual'].'</td>
        <td>'.$_POST['lsbCurrManual'].'</td>
        <td>45</td>
    </tr>
</table>';

if(isset($_POST['cctPositive']) && $_POST['cctPositive'] == "cctPositive"){
    $cctPositive = '<input type="checkbox" checked="checked" > Positve ';
}else{
    $cctPositive = '<input type="checkbox"> Positve ';
}
if(isset($_POST['cctNegative']) && $_POST['cctNegative'] == "cctNegative"){
    $cctNegative = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $cctNegative = '<input type="checkbox"> Negative ';
}

if(isset($_POST['cdtPositive']) && $_POST['cdtPositive'] == "cdtPositive"){
    $cdtPositive = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $cdtPositive = '<input type="checkbox"> Positive ';
}
if(isset($_POST['cdtNegative']) && $_POST['cdtNegative'] == "cdtNegative"){
    $cdtNegative = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $cdtNegative = '<input type="checkbox"> Negative ';
}

if(isset($_POST['stPositive']) && $_POST['stPositive'] == "stPositive"){
    $stPositive = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $stPositive = '<input type="checkbox"> Positive ';
}
if(isset($_POST['stNegative']) && $_POST['stNegative'] == "stNegative"){
    $stNegative = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $stNegative = '<input type="checkbox"> Negative ';
}

$data .= '<div style="margin:15px 0;"><u><b>Special tests :</b></u></div>';
$data .= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="2">Test</td>
        <td colspan="2">Neck Findings</td>
    </tr>
    <tr>
        <td>Current</td>
    </tr>
    <tr>
        <td>Cervical compression Test</td>
        <td>'.$cctPositive.' '.$cctNegative.'</td>
    </tr>
    <tr>
        <td>Cervical distraction Test</td>
        <td>'.$cdtPositive.' '.$cdtNegative.'</td>
    </tr>
    <tr>
        <td>Spurling’s test</td>
        <td>'.$stPositive.' '.$stNegative.'</td>
    </tr>
</table>';
$data .= '<br>';

if(isset($_POST['lowBack']) && $_POST['lowBack'] == "lowBack"){
    $lowBack = '<input type="checkbox" checked="checked" > Low Back ';
}else{
    $lowBack = '<input type="checkbox"> Low Back ';
}

if(isset($_POST['lowBackPainlevel']) && $_POST['lowBackPainlevel']){
    $lowBackPainlevel = 'Pain level (VAS) : '.'<u> '.$_POST['lowBackPainlevel'].' </u>'.'/10';
}else{
    $lowBackPainlevel = 'Pain level (VAS) : '.'____________'.'/10';
}

if(isset($_POST['lowBackPrevious']) && $_POST['lowBackPrevious']){
    $lowBackPrevious = 'Previous (VAS) : '.'<u> '.$_POST['lowBackPrevious'].' </u>'.'/10';
}else{
    $lowBackPrevious = 'Previous (VAS) : '.'____________'.'/10';
}

if(isset($_POST['lowBackGoal']) && $_POST['lowBackGoal']){
    $lowBackGoal = 'Goal (6-8 weeks) : Decrease pain level to  '.'<u> '.$_POST['lowBackGoal'].' </u>'.'/10';
}else{
    $lowBackGoal = 'Goal (6-8 weeks) : Decrease pain level to  '.'____________'.'/10';
}

$data .= '<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td style="color:red">'.$lowBack.'</td>
    </tr>
    <tr>
        <td>
            <div>'.$lowBackPainlevel.'</div>
            <div>'.$lowBackPrevious.'</div>
            <div>'.$lowBackGoal.'</div>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>';

$data .= '<u><b>AROM :</b></u>';
$data .= '<br>'.'<br>';
$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
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
        <td>'.$_POST['lowBackFlexPre'].'</td>
        <td>'.$_POST['lowBackFlexCurr'].'</td>
        <td>45</td>
        <td rowspan="6">Increase AROM by 10%</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['lowBackextPre'].'</td>
        <td>'.$_POST['lowBackextCurr'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>R Rot</td>
        <td>'.$_POST['lowBackrRotPre'].'</td>
        <td>'.$_POST['lowBackrRotCurr'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>L Rot</td>
        <td>'.$_POST['lowBacklRotPre'].'</td>
        <td>'.$_POST['lowBacklRotCurr'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>R Side bending</td>
        <td>'.$_POST['lowBackrsbPre'].'</td>
        <td>'.$_POST['lowBackrsbCurr'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>L Side bending</td>
        <td>'.$_POST['lowBacklsbPre'].'</td>
        <td>'.$_POST['lowBacklsbCurr'].'</td>
        <td>45</td>
    </tr>
</table>';

$data .= '<br>';
$data .= '<u><b>Manual muscle test :</b></u>';
$data .= '<br>'.'<br>';

$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
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
        <td>'.$_POST['lowBackFlexPreManual'].'</td>
        <td>'.$_POST['lowBackFlexCurrManual'].'</td>
        <td>45</td>
        <td rowspan="6">Improve muscle strength by 1 grade</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['lowBackextPreManual'].'</td>
        <td>'.$_POST['lowBackextCurrManual'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>R Rot</td>
        <td>'.$_POST['lowBackrRotPreManual'].'</td>
        <td>'.$_POST['lowBackrRotCurrManual'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>L Rot</td>
        <td>'.$_POST['lowBacklRotPreManual'].'</td>
        <td>'.$_POST['lowBacklRotCurrManual'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>R Side bending</td>
        <td>'.$_POST['lowBackrsbPreManual'].'</td>
        <td>'.$_POST['lowBackrsbCurrManual'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>L Side bending</td>
        <td>'.$_POST['lowBacklsbPreManual'].'</td>
        <td>'.$_POST['lowBacklsbCurrManual'].'</td>
        <td>45</td>
    </tr>
</table>';

$data .= '<br>';
if(isset($_POST['lowBackcctPositive']) && $_POST['lowBackcctPositive'] == "lowBackcctPositive"){
    $lowBackcctPositive = '<input type="checkbox" checked="checked" > Positve ';
}else{
    $lowBackcctPositive = '<input type="checkbox"> Positve ';
}
if(isset($_POST['lowBackcctNegative']) && $_POST['lowBackcctNegative'] == "lowBackcctNegative"){
    $lowBackcctNegative = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $lowBackcctNegative = '<input type="checkbox"> Negative ';
}

if(isset($_POST['lowBackcdtPositive']) && $_POST['lowBackcdtPositive'] == "lowBackcdtPositive"){
    $lowBackcdtPositive = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $lowBackcdtPositive = '<input type="checkbox"> Positive ';
}
if(isset($_POST['lowBackcdtNegative']) && $_POST['lowBackcdtNegative'] == "lowBackcdtNegative"){
    $lowBackcdtNegative = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $lowBackcdtNegative = '<input type="checkbox"> Negative ';
}

if(isset($_POST['lowBackstPositive']) && $_POST['lowBackstPositive'] == "lowBackstPositive"){
    $lowBackstPositive = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $lowBackstPositive = '<input type="checkbox"> Positive ';
}
if(isset($_POST['lowBackstNegative']) && $_POST['lowBackstNegative'] == "lowBackstNegative"){
    $lowBackstNegative = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $lowBackstNegative = '<input type="checkbox"> Negative ';
}

$data .= '<div style="margin:15px 0;"><u><b>Special tests :</b></u></div>';
$data .= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="2">Test</td>
        <td colspan="2">Neck Findings</td>
    </tr>
    <tr>
        <td>Current</td>
    </tr>
    <tr>
        <td>Cervical compression Test</td>
        <td>'.$lowBackcctPositive.' '.$lowBackcctNegative.'</td>
    </tr>
    <tr>
        <td>Cervical distraction Test</td>
        <td>'.$lowBackcdtPositive.' '.$lowBackcdtNegative.'</td>
    </tr>
    <tr>
        <td>Spurling’s test</td>
        <td>'.$lowBackstPositive.' '.$lowBackstNegative.'</td>
    </tr>
</table>';
//right left Shoulder
$data .= '<br>';

if(isset($_POST['RightShoulder']) && $_POST['RightShoulder'] == "RightShoulder"){
    $RightShoulder = '<input type="checkbox" checked="checked" > Right Shoulder ';
}else{
    $RightShoulder = '<input type="checkbox"> Right Shoulder ';
}
if(isset($_POST['LeftShoulder']) && $_POST['LeftShoulder'] == "LeftShoulder"){
    $LeftShoulder = '<input type="checkbox" checked="checked" > Left Shoulder ';
}else{
    $LeftShoulder = '<input type="checkbox"> Left Shoulder ';
}

if(isset($_POST['rightPainlevel']) && $_POST['rightPainlevel']){
    $rightPainlevel ='<u> '.$_POST['rightPainlevel'].' </u>'.'/10';
}else{
    $rightPainlevel = '____________'.'/10';
}
if(isset($_POST['leftPainlevel']) && $_POST['leftPainlevel']){
    $leftPainlevel = '<u> '.$_POST['leftPainlevel'].' </u>'.'/10.';
}else{
    $leftPainlevel = '____________'.'/10.';
}
if(isset($_POST['rlGoal']) && $_POST['rlGoal']){
    $rlGoal = '<u> '.$_POST['rlGoal'].' </u>'.'/10.';
}else{
    $rlGoal = '____________'.'/10.';
}

$data .= '<table>
    <tr>
        <td style="color:red">'.$RightShoulder.''.$LeftShoulder.'</td>
    </tr>
    <td>
        <div>Pain level (VAS): Right '.$rightPainlevel.' 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Left '.$leftPainlevel.'
        </div>
        <div>Goal (6-8 weeks): Decrease pain level to '.$rlGoal.'
        </div>
    </td>
</table>';

$data .= '<br>';
$data .= '<u><b>AROM :</b></u>';
$data .= '<br>'.'<br>';
$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Shoulder</td>
        <td colspan="1">Left Shoulder</td>
        <td colspan="1">Normal</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr> 
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlFlexPre'].'</td>
        <td>'.$_POST['rlFlexCurr'].'</td>
        <td>170-180</td>
        <td rowspan="6">Increase AROM by 10%</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlextPre'].'</td>
        <td>'.$_POST['rlextCurr'].'</td>
        <td>40</td>
    </tr>
    <tr>
        <td>Abd</td>
        <td>'.$_POST['rlrRotPre'].'</td>
        <td>'.$_POST['rlrRotCurr'].'</td>
        <td>170-180</td>
    </tr>
    <tr>
        <td>Add</td>
        <td>'.$_POST['rllRotPre'].'</td>
        <td>'.$_POST['rllRotCurr'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>ER</td>
        <td>'.$_POST['rlrsbPre'].'</td>
        <td>'.$_POST['rlrsbCurr'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>IR</td>
        <td>'.$_POST['rllsbPre'].'</td>
        <td>'.$_POST['rllsbCurr'].'</td>
        <td>80-90</td>
    </tr>
</table>';

$data .= '<br>';
$data .= '<u><b>Manual muscle test :</b></u>';
$data .= '<br>'.'<br>';

$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Shoulder</td>
        <td colspan="1">Left Shoulder</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr>
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlFlexPreManual'].'</td>
        <td>'.$_POST['rlFlexCurrManual'].'</td>
        <td rowspan="6">Improve muscle strength by 1 grade</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlextPreManual'].'</td>
        <td>'.$_POST['rlextCurrManual'].'</td>
    </tr>
    <tr>
        <td>Abd</td>
        <td>'.$_POST['rlrRotPreManual'].'</td>
        <td>'.$_POST['rlrRotCurrManual'].'</td>
    </tr>
    <tr>
        <td>Add</td>
        <td>'.$_POST['rllRotPreManual'].'</td>
        <td>'.$_POST['rllRotCurrManual'].'</td>
    </tr>
    <tr>
        <td>ER</td>
        <td>'.$_POST['rleRotPreManual'].'</td>
        <td>'.$_POST['rleRotCurrManual'].'</td>
    </tr>
    <tr>
        <td>L Side bending</td>
        <td>'.$_POST['rlrsbPreManual'].'</td>
        <td>'.$_POST['rlrsbCurrManual'].'</td>
    </tr>
</table>';

$data .= '<br>';
if(isset($_POST['rlcdtPositiveR']) && $_POST['rlcdtPositiveR'] == "rlcdtPositiveR"){
    $rlcdtPositiveR = '<input type="checkbox" checked="checked" > Positve ';
}else{
    $rlcdtPositiveR = '<input type="checkbox"> Positve ';
}
if(isset($_POST['rlcdtNegativeR']) && $_POST['rlcdtNegativeR'] == "rlcdtNegativeR"){
    $rlcdtNegativeR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlcdtNegativeR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlcdtPositiveL']) && $_POST['rlcdtPositiveL'] == "rlcdtPositiveL"){
    $rlcdtPositiveL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlcdtPositiveL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlcdtNegativeL']) && $_POST['rlcdtNegativeL'] == "rlcdtNegativeL"){
    $rlcdtNegativeL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlcdtNegativeL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlcdtPositiveER']) && $_POST['rlcdtPositiveER'] == "rlcdtPositiveER"){
    $rlcdtPositiveER = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlcdtPositiveER = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlcdtNegativeER']) && $_POST['rlcdtNegativeER'] == "rlcdtNegativeER"){
    $rlcdtNegativeER = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlcdtNegativeER = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlcdtPositiveEL']) && $_POST['rlcdtPositiveEL'] == "rlcdtPositiveEL"){
    $rlcdtPositiveEL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlcdtPositiveEL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlcdtNegativeEL']) && $_POST['rlcdtNegativeEL'] == "rlcdtNegativeEL"){
    $rlcdtNegativeEL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlcdtNegativeEL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlstPositiveSR']) && $_POST['rlstPositiveSR'] == "rlstPositiveSR"){
    $rlstPositiveSR = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlstPositiveSR = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlstNegativeSR']) && $_POST['rlstNegativeSR'] == "rlstNegativeSR"){
    $rlstNegativeSR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlstNegativeSR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlstPositiveSL']) && $_POST['rlstPositiveSL'] == "rlstPositiveSL"){
    $rlstPositiveSL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlstPositiveSL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlstNegativeSL']) && $_POST['rlstNegativeSL'] == "rlstNegativeSL"){
    $rlstNegativeSL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlstNegativeSL = '<input type="checkbox"> Negative ';
}

$data .= '<div style="margin:15px 0;"><u><b>Special tests :</b></u></div>';
$data .= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Test</td>
        <td colspan="1">Right Shoulder Findings</td>
        <td colspan="1">Left Shoulder Findings</td>
    </tr>
    <tr>
        <td>Hawkin’s / Neer’s test</td>
        <td>'.$rlcdtPositiveR.' '.$rlcdtNegativeR.'</td>
        <td>'.$rlcdtPositiveL.' '.$rlcdtNegativeL.'</td>
    </tr>
    <tr>
        <td>Empty Can test</td>
        <td>'.$rlcdtPositiveER.' '.$rlcdtNegativeER.'</td>
        <td>'.$rlcdtPositiveEL.' '.$rlcdtNegativeEL.'</td>
    </tr>
    <tr>
        <td>Speed’s test</td>
        <td>'.$rlstPositiveSR.' '.$rlstNegativeSR.'</td>
        <td>'.$rlstPositiveSL.' '.$rlstNegativeSL.'</td>
    </tr>
</table>';

//Objective Findings /Problems list :

if(isset($_POST['Mild']) && $_POST['Mild'] == "Mild"){
    $Mild = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $Mild = '<input type="checkbox"> Mild ';
}
if(isset($_POST['Mild2']) && $_POST['Mild2'] == "Mild2"){
    $Mild2 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $Mild2 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['Mild3']) && $_POST['Mild3'] == "Mild3"){
    $Mild3 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $Mild3 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['Mild4']) && $_POST['Mild4'] == "Mild4"){
    $Mild4 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $Mild4 = '<input type="checkbox"> Mild ';
}

if(isset($_POST['Moderate']) && $_POST['Moderate'] == "Moderate"){
    $Moderate = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $Moderate = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['Moderate2']) && $_POST['Moderate2'] == "Moderate2"){
    $Moderate2 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $Moderate2 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['Moderate3']) && $_POST['Moderate3'] == "Moderate3"){
    $Moderate3 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $Moderate3 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['Moderate4']) && $_POST['Moderate4'] == "Moderate4"){
    $Moderate4 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $Moderate4 = '<input type="checkbox"> Moderate ';
}

if(isset($_POST['severemuscle']) && $_POST['severemuscle'] == "severemuscle"){
    $severemuscle = '<input type="checkbox" checked="checked" > severe muscle spasm at the ';
}else{
    $severemuscle = '<input type="checkbox"> severe muscle spasm at the ';
}
if(isset($_POST['severemuscle2']) && $_POST['severemuscle2'] == "severemuscle2"){
    $severemuscle2 = '<input type="checkbox" checked="checked" > severe Limited AROM at ';
}else{
    $severemuscle2 = '<input type="checkbox"> severe Limited AROM at ';
}
if(isset($_POST['severemuscle3']) && $_POST['severemuscle3'] == "severemuscle3"){
    $severemuscle3 = '<input type="checkbox" checked="checked" > severe Restricted mobility at the ';
}else{
    $severemuscle3 = '<input type="checkbox"> severe Restricted mobility at the ';
}
if(isset($_POST['severemuscle4']) && $_POST['severemuscle4'] == "severemuscle4"){
    $severemuscle4 = '<input type="checkbox" checked="checked" > severe Decreased functional activities. ';
}else{
    $severemuscle4 = '<input type="checkbox"> severe Decreased functional activities. ';
}

if(isset($_POST['RightShouldermuscles']) && $_POST['RightShouldermuscles'] == "RightShouldermuscles"){
    $RightShouldermuscles = '<input type="checkbox" checked="checked" > Right Shoulder muscles ';
}else{
    $RightShouldermuscles = '<input type="checkbox"> Right Shoulder muscles ';
}
if(isset($_POST['RightShouldermuscles2']) && $_POST['RightShouldermuscles2'] == "RightShouldermuscles2"){
    $RightShouldermuscles2 = '<input type="checkbox" checked="checked" > Right Shoulder joint ';
}else{
    $RightShouldermuscles2 = '<input type="checkbox"> Right Shoulder joint ';
}
if(isset($_POST['RightShouldermuscles3']) && $_POST['RightShouldermuscles3'] == "RightShouldermuscles3"){
    $RightShouldermuscles3 = '<input type="checkbox" checked="checked" > Right Shoulder joint ';
}else{
    $RightShouldermuscles3 = '<input type="checkbox"> Right Shoulder joint. ';
}

if(isset($_POST['LeftShouldermuscles']) && $_POST['LeftShouldermuscles'] == "LeftShouldermuscles"){
    $LeftShouldermuscles = '<input type="checkbox" checked="checked" > Left Shoulder muscles ';
}else{
    $LeftShouldermuscles = '<input type="checkbox"> Left Shoulder muscles ';
}
if(isset($_POST['LeftShouldermuscles2']) && $_POST['LeftShouldermuscles2'] == "LeftShouldermuscles2"){
    $LeftShouldermuscles2 = '<input type="checkbox" checked="checked" > Left Shoulder joint ';
}else{
    $LeftShouldermuscles2 = '<input type="checkbox"> Left Shoulder joint ';
}
if(isset($_POST['LeftShouldermuscles3']) && $_POST['LeftShouldermuscles3'] == "LeftShouldermuscles3"){
    $LeftShouldermuscles3 = '<input type="checkbox" checked="checked" > Left Shoulder joint ';
}else{
    $LeftShouldermuscles3 = '<input type="checkbox"> Left Shoulder joint. ';
}

$data .= '<div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>';
$data .= '<table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
    <tr>
        <td> - '.$Mild.''.$Moderate.''.$severemuscle.''.$RightShouldermuscles.''.$LeftShouldermuscles.'</td>
    </tr>
    <tr>
        <td> - '.$Mild2.''.$Moderate2.''.$severemuscle2.''.$RightShouldermuscles2.''.$LeftShouldermuscles2.'</td>
    </tr>
    <tr>
        <td> - '.$Mild3.''.$Moderate3.''.$severemuscle3.''.$RightShouldermuscles3.''.$LeftShouldermuscles3.'</td>
    </tr>
    <tr>
        <td> - '.$Mild4.''.$Moderate4.''.$severemuscle4.'</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>';

//right left Elbow

if(isset($_POST['RightElbow']) && $_POST['RightElbow'] == "RightElbow"){
    $RightElbow = '<input type="checkbox" checked="checked" > Right Elbow ';
}else{
    $RightElbow = '<input type="checkbox"> Right Elbow ';
}
if(isset($_POST['LeftElbow']) && $_POST['LeftElbow'] == "LeftElbow"){
    $LeftElbow = '<input type="checkbox" checked="checked" > Left Elbow ';
}else{
    $LeftElbow = '<input type="checkbox"> Left Elbow ';
}

if(isset($_POST['rightElowPainlevel']) && $_POST['rightElowPainlevel']){
    $rightElowPainlevel ='<u> '.$_POST['rightElowPainlevel'].' </u>'.'/10';
}else{
    $rightElowPainlevel = '____________'.'/10';
}
if(isset($_POST['leftElowPainlevel']) && $_POST['leftElowPainlevel']){
    $leftElowPainlevel = '<u> '.$_POST['leftElowPainlevel'].' </u>'.'/10.';
}else{
    $leftElowPainlevel = '____________'.'/10.';
}
if(isset($_POST['rlElbowGoal']) && $_POST['rlElbowGoal']){
    $rlElbowGoal = '<u> '.$_POST['rlElbowGoal'].' </u>'.'/10.';
}else{
    $rlElbowGoal = '____________'.'/10.';
}

$data .= '<table>
    <tr>
        <td style="color:red">'.$RightElbow.''.$LeftElbow.'</td>
    </tr>
    <td>
        <div>Pain level (VAS): Right '.$rightElowPainlevel.' 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Left '.$leftElowPainlevel.'
        </div>
        <div>Goal (6-8 weeks): Decrease pain level to '.$rlElbowGoal.'
        </div>
    </td>
</table>';

$data .= '<br>';
$data .= '<u><b>AROM :</b></u>';
$data .= '<br>'.'<br>';
$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Elbow</td>
        <td colspan="1">Left Elbow</td>
        <td colspan="1">Normal</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr> 
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlElbowFlexPre'].'</td>
        <td>'.$_POST['rlElbowFlexCurr'].'</td>
        <td>170-180</td>
        <td rowspan="6">Increase AROM by 10%</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlElbowextPre'].'</td>
        <td>'.$_POST['rlElbowextCurr'].'</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Supination</td>
        <td>'.$_POST['rlElbowrRotPre'].'</td>
        <td>'.$_POST['rlElbowrRotCurr'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>Pronation</td>
        <td>'.$_POST['rlElbowlRotPre'].'</td>
        <td>'.$_POST['rlElbowlRotCurr'].'</td>
        <td>80</td>
    </tr>
</table>';

$data .= '<br>';
$data .= '<u><b>Manual muscle test :</b></u>';
$data .= '<br>'.'<br>';

$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Elbow</td>
        <td colspan="1">Left Elbow</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr>
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlElbowFlexPreManual'].'</td>
        <td>'.$_POST['rlElbowFlexCurrManual'].'</td>
        <td rowspan="6">Improve muscle strength by 1 grade</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlElbowextPreManual'].'</td>
        <td>'.$_POST['rlElbowextCurrManual'].'</td>
    </tr>
    <tr>
        <td>Supination</td>
        <td>'.$_POST['rlElbowrRotPreManual'].'</td>
        <td>'.$_POST['rlElbowrRotCurrManual'].'</td>
    </tr>
    <tr>
        <td>Pronation</td>
        <td>'.$_POST['rlElbowlRotPreManual'].'</td>
        <td>'.$_POST['rlElbowlRotCurrManual'].'</td>
    </tr>
</table>';

$data .= '<br>';
if(isset($_POST['rlElbowcdtPositiveR']) && $_POST['rlElbowcdtPositiveR'] == "rlElbowcdtPositiveR"){
    $rlElbowcdtPositiveR = '<input type="checkbox" checked="checked" > Positve ';
}else{
    $rlElbowcdtPositiveR = '<input type="checkbox"> Positve ';
}
if(isset($_POST['rlElbowcdtNegativeR']) && $_POST['rlElbowcdtNegativeR'] == "rlElbowcdtNegativeR"){
    $rlElbowcdtNegativeR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlElbowcdtNegativeR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlElbowcdtPositiveL']) && $_POST['rlElbowcdtPositiveL'] == "rlElbowcdtPositiveL"){
    $rlElbowcdtPositiveL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlElbowcdtPositiveL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlElbowcdtNegativeL']) && $_POST['rlElbowcdtNegativeL'] == "rlElbowcdtNegativeL"){
    $rlElbowcdtNegativeL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlElbowcdtNegativeL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlElbowcdtPositiveER']) && $_POST['rlElbowcdtPositiveER'] == "rlElbowcdtPositiveER"){
    $rlElbowcdtPositiveER = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlElbowcdtPositiveER = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlElbowcdtNegativeER']) && $_POST['rlElbowcdtNegativeER'] == "rlElbowcdtNegativeER"){
    $rlElbowcdtNegativeER = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlElbowcdtNegativeER = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlElbowcdtPositiveEL']) && $_POST['rlElbowcdtPositiveEL'] == "rlElbowcdtPositiveEL"){
    $rlElbowcdtPositiveEL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlElbowcdtPositiveEL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlElbowcdtNegativeEL']) && $_POST['rlElbowcdtNegativeEL'] == "rlElbowcdtNegativeEL"){
    $rlElbowcdtNegativeEL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlElbowcdtNegativeEL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlElbowstPositiveSR']) && $_POST['rlElbowstPositiveSR'] == "rlElbowstPositiveSR"){
    $rlElbowstPositiveSR = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlElbowstPositiveSR = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlElbowstNegativeSR']) && $_POST['rlElbowstNegativeSR'] == "rlElbowstNegativeSR"){
    $rlElbowstNegativeSR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlElbowstNegativeSR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlElbowstPositiveSL']) && $_POST['rlElbowstPositiveSL'] == "rlElbowstPositiveSL"){
    $rlElbowstPositiveSL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlElbowstPositiveSL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlElbowstNegativeSL']) && $_POST['rlElbowstNegativeSL'] == "rlElbowstNegativeSL"){
    $rlElbowstNegativeSL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlElbowstNegativeSL = '<input type="checkbox"> Negative ';
}

$data .= '<div style="margin:15px 0;"><u><b>Special tests :</b></u></div>';
$data .= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Test</td>
        <td colspan="1">Right Elbow Findings</td>
        <td colspan="1">Left Elbow Findings</td>
    </tr>
    <tr>
        <td>Cozen’s Lateral Epicondylitis test</td>
        <td>'.$rlElbowcdtPositiveR.' '.$rlElbowcdtNegativeR.'</td>
        <td>'.$rlElbowcdtPositiveL.' '.$rlElbowcdtNegativeL.'</td>
    </tr>
    <tr>
        <td>Tinel’s test at the cubital tunnel</td>
        <td>'.$rlElbowcdtPositiveER.' '.$rlElbowcdtNegativeER.'</td>
        <td>'.$rlElbowcdtPositiveEL.' '.$rlElbowcdtNegativeEL.'</td>
    </tr>
    <tr>
        <td>Golfer’s elbow test</td>
        <td>'.$rlElbowstPositiveSR.' '.$rlElbowstNegativeSR.'</td>
        <td>'.$rlElbowstPositiveSL.' '.$rlElbowstNegativeSL.'</td>
    </tr>
</table>';

//Objective Findings /Problems list :

if(isset($_POST['MildElbow']) && $_POST['MildElbow'] == "MildElbow"){
    $MildElbow = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildElbow = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildElbow2']) && $_POST['MildElbow2'] == "MildElbow2"){
    $MildElbow2 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildElbow2 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildElbow3']) && $_POST['MildElbow3'] == "MildElbow3"){
    $MildElbow3 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildElbow3 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildElbow4']) && $_POST['MildElbow4'] == "MildElbow4"){
    $MildElbow4 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildElbow4 = '<input type="checkbox"> Mild ';
}

if(isset($_POST['ModerateElbow']) && $_POST['ModerateElbow'] == "ModerateElbow"){
    $ModerateElbow = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateElbow = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateElbow2']) && $_POST['ModerateElbow2'] == "ModerateElbow2"){
    $ModerateElbow2 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateElbow2 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateElbow3']) && $_POST['ModerateElbow3'] == "ModerateElbow3"){
    $ModerateElbow3 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateElbow3 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateElbow4']) && $_POST['ModerateElbow4'] == "ModerateElbow4"){
    $ModerateElbow4 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateElbow4 = '<input type="checkbox"> Moderate ';
}

if(isset($_POST['severemuscleElbow']) && $_POST['severemuscleElbow'] == "severemuscleElbow"){
    $severemuscleElbow = '<input type="checkbox" checked="checked" > severe muscle spasm at the ';
}else{
    $severemuscleElbow = '<input type="checkbox"> severe muscle spasm at the ';
}
if(isset($_POST['severemuscleElbow2']) && $_POST['severemuscleElbow2'] == "severemuscleElbow2"){
    $severemuscleElbow2 = '<input type="checkbox" checked="checked" > severe Limited AROM at ';
}else{
    $severemuscleElbow2 = '<input type="checkbox"> severe Limited AROM at ';
}
if(isset($_POST['severemuscleElbow3']) && $_POST['severemuscleElbow3'] == "severemuscleElbow3"){
    $severemuscleElbow3 = '<input type="checkbox" checked="checked" > severe Restricted mobility at the ';
}else{
    $severemuscleElbow3 = '<input type="checkbox"> severe Restricted mobility at the ';
}
if(isset($_POST['severemuscleElbow4']) && $_POST['severemuscleElbow4'] == "severemuscleElbow4"){
    $severemuscleElbow4 = '<input type="checkbox" checked="checked" > severe Decreased functional activities. ';
}else{
    $severemuscleElbow4 = '<input type="checkbox"> severe Decreased functional activities. ';
}

if(isset($_POST['RightElbowmuscles']) && $_POST['RightShouldermuscles'] == "RightElbowmuscles"){
    $RightElbowmuscles = '<input type="checkbox" checked="checked" > Right Shoulder muscles ';
}else{
    $RightElbowmuscles = '<input type="checkbox"> Right Shoulder muscles ';
}
if(isset($_POST['RightElbowmuscles2']) && $_POST['RightElbowmuscles2'] == "RightElbowmuscles2"){
    $RightElbowmuscles2 = '<input type="checkbox" checked="checked" > Right Shoulder joint ';
}else{
    $RightElbowmuscles2 = '<input type="checkbox"> Right Shoulder joint ';
}
if(isset($_POST['RightElbowmuscles3']) && $_POST['RightElbowmuscles3'] == "RightElbowmuscles3"){
    $RightElbowmuscles3 = '<input type="checkbox" checked="checked" > Right Shoulder joint ';
}else{
    $RightElbowmuscles3 = '<input type="checkbox"> Right Shoulder joint. ';
}

if(isset($_POST['LeftElbowmuscles']) && $_POST['LeftElbowmuscles'] == "LeftElbowmuscles"){
    $LeftElbowmuscles = '<input type="checkbox" checked="checked" > Left Shoulder muscles ';
}else{
    $LeftElbowmuscles = '<input type="checkbox"> Left Shoulder muscles ';
}
if(isset($_POST['LeftElbowmuscles2']) && $_POST['LeftElbowmuscles2'] == "LeftElbowmuscles2"){
    $LeftElbowmuscles2 = '<input type="checkbox" checked="checked" > Left Shoulder joint ';
}else{
    $LeftElbowmuscles2 = '<input type="checkbox"> Left Shoulder joint ';
}
if(isset($_POST['LeftElbowmuscles3']) && $_POST['LeftElbowmuscles3'] == "LeftElbowmuscles3"){
    $LeftElbowmuscles3 = '<input type="checkbox" checked="checked" > Left Shoulder joint ';
}else{
    $LeftElbowmuscles3 = '<input type="checkbox"> Left Shoulder joint. ';
}

$data .= '<div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>';
$data .= '<table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
    <tr>
        <td> - '.$MildElbow.''.$ModerateElbow.''.$severemuscleElbow.''.$RightElbowmuscles.''.$LeftElbowmuscles.'</td>
    </tr>
    <tr>
        <td> - '.$MildElbow2.''.$ModerateElbow2.''.$severemuscleElbow2.''.$RightElbowmuscles2.''.$LeftElbowmuscles2.'</td>
    </tr>
    <tr>
        <td> - '.$MildElbow3.''.$ModerateElbow3.''.$severemuscleElbow3.''.$RightElbowmuscles3.''.$LeftElbowmuscles3.'</td>
    </tr>
    <tr>
        <td> - '.$MildElbow4.''.$ModerateElbow4.''.$severemuscleElbow4.'</td>
    </tr>
</table>';


echo $data;
die;
// $mpdf->SetFont('Arial','B',16);
$mpdf->WriteHTML($data);
$mpdf->Output('data.pdf', 'D');


