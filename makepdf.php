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
$data .= '<u><b>Objectives :</b></u>'.'<br>';
if(isset($_POST['pre_date']) && $_POST['pre_date']){
    $data .= 'Previous date '.'<u> '.$_POST['pre_date'].' </u>';
}else{
    $data .= 'Previous date '.'____________';
}
$data .= '<br>'.'<br>';

if(isset($_POST['Neck']) && $_POST['Neck'] == "Neck"){
    $data .= '<input type="checkbox" checked="checked" > Neck ';
}else{
    $data .= '<input type="checkbox"> Neck ';
}

$data .= '<br>'.'<br>';

if(isset($_POST['NeckPainlevel']) && $_POST['NeckPainlevel']){
    $data .= 'Pain level (VAS) : '.'<u> '.$_POST['NeckPainlevel'].' </u>'.'/10';
}else{
    $data .= 'Pain level (VAS) : '.'____________'.'/10';
}
$data .= '<br>';

if(isset($_POST['NeckPrevious']) && $_POST['NeckPrevious']){
    $data .= 'Previous (VAS) : '.'<u> '.$_POST['NeckPrevious'].' </u>'.'/10';
}else{
    $data .= 'Previous (VAS) : '.'____________'.'/10';
}
$data .= '<br>';

if(isset($_POST['NeckGoal']) && $_POST['NeckGoal']){
    $data .= 'Goal (6-8 weeks) : Decrease pain level to  '.'<u> '.$_POST['NeckGoal'].' </u>'.'/10';
}else{
    $data .= 'Goal (6-8 weeks) : Decrease pain level to  '.'____________'.'/10';
}

$data .= '<br>'.'<br>';
$data .= '<u><b>AROM</b></u>';
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

$data .= '<br>'.'<br>';
$data .= '<u><b>Manual muscle test</b></u>';
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


echo $data;
die;
// $mpdf->SetFont('Arial','B',16);
$mpdf->WriteHTML($data);
$mpdf->Output('data.pdf', 'D');


