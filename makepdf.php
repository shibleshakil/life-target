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

if(isset($_POST['p1_1']) && $_POST['p1_1']){
    $p1_1 =$_POST['p1_1'];
}else{
    $p1_1 = '';
}
if(isset($_POST['p1_2']) && $_POST['p1_2']){
    $p1_2 =$_POST['p1_2'];
}else{
    $p1_2 = '';
}
if(isset($_POST['p1_3']) && $_POST['p1_3']){
    $p1_3 =$_POST['p1_3'];
}else{
    $p1_3 = '';
}
if(isset($_POST['p1_4']) && $_POST['p1_4']){
    $p1_4 =$_POST['p1_4'];
}else{
    $p1_4 = '';
}

if(isset($_POST['sexM']) && $_POST['sexM'] == "sexM"){
    $sexM = '<input type="checkbox" checked="checked" > M ';
}else{
    $sexM = '<input type="checkbox"> M ';
}
if(isset($_POST['sexF']) && $_POST['sexF'] == "sexF"){
    $sexF = '<input type="checkbox" checked="checked" > F ';
}else{
    $sexF = '<input type="checkbox"> F ';
}

$data .= '<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td style="margin-bottom:2px;"><b>Date of Service:</b></td>
        <td>'.$p1_1.'</td>
        <td><b>Date of Birth:</b></td>
        <td>'.$p1_2.'</td>
    </tr>
    <tr>
        <td><b>Patient Name:</b></td>
        <td>'.$p1_3.'</td>
        <td><b>Date of Accident:</b></td>
        <td>'.$p1_4.'</td>
    </tr>
    <tr>
        <td><b>Sex:</b></td>
        <td colspan="0">
            '.$sexM.'  '.$sexF.'
        </td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
</table>';

$data .= '<br>';
$data .= '<u><b>Accident History :</b></u>'.'<br>';
if(isset($_POST['p1_7']) && $_POST['p1_7']){
    $data .= '<table><tr><td style="border:1px solid black;padding:2px; width:100%; height:auto">'.$_POST['p1_7'].'</td></tr></table>';
}
$data .= '<br>';

if(isset($_POST['working']) && $_POST['working'] == "working"){
    $working = '<input type="checkbox" checked="checked" > working ';
}else{
    $working = '<input type="checkbox"> working ';
}
if(isset($_POST['notworking']) && $_POST['notworking'] == "notworking"){
    $notworking = '<input type="checkbox" checked="checked" > not working ';
}else{
    $notworking = '<input type="checkbox"> not working ';
}

$data .= '<u><b>Occupational Status :</b></u>'.'<br>';
$data .= 'Currently, the patient is '.$working.' '.$notworking.' ';

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

if(isset($_POST['p1_17']) && $_POST['p1_17'] == "Depression medication"){
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

if(isset($_POST['p1_40']) && $_POST['p1_40'] == "Left Hand"){
    $data .= '<input type="checkbox" checked="checked" > Left Hand ';
}else{
    $data .= '<input type="checkbox"> Left Hand';
}

if(isset($_POST['p1_41']) && $_POST['p1_41'] == "Left Finger"){
    $data .= '<input type="checkbox" checked="checked" > Left Finger ';
}else{
    $data .= '<input type="checkbox"> Left Finger';
}

if(isset($_POST['p1_42']) && $_POST['p1_42'] == "Left Hip"){
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

if(isset($_POST['RightElbowmuscles']) && $_POST['RightElbowmuscles'] == "RightElbowmuscles"){
    $RightElbowmuscles = '<input type="checkbox" checked="checked" > Right Elbow muscles ';
}else{
    $RightElbowmuscles = '<input type="checkbox"> Right Elbow muscles ';
}
if(isset($_POST['RightElbowmuscles2']) && $_POST['RightElbowmuscles2'] == "RightElbowmuscles2"){
    $RightElbowmuscles2 = '<input type="checkbox" checked="checked" > Right Elbow joint ';
}else{
    $RightElbowmuscles2 = '<input type="checkbox"> Right Elbow joint ';
}
if(isset($_POST['RightElbowmuscles3']) && $_POST['RightElbowmuscles3'] == "RightElbowmuscles3"){
    $RightElbowmuscles3 = '<input type="checkbox" checked="checked" > Right Elbow joint ';
}else{
    $RightElbowmuscles3 = '<input type="checkbox"> Right Elbow joint. ';
}

if(isset($_POST['LeftElbowmuscles']) && $_POST['LeftElbowmuscles'] == "LeftElbowmuscles"){
    $LeftElbowmuscles = '<input type="checkbox" checked="checked" > Left Elbow muscles ';
}else{
    $LeftElbowmuscles = '<input type="checkbox"> Left Elbow muscles ';
}
if(isset($_POST['LeftElbowmuscles2']) && $_POST['LeftElbowmuscles2'] == "LeftElbowmuscles2"){
    $LeftElbowmuscles2 = '<input type="checkbox" checked="checked" > Left Elbow joint ';
}else{
    $LeftElbowmuscles2 = '<input type="checkbox"> Left Elbow joint ';
}
if(isset($_POST['LeftElbowmuscles3']) && $_POST['LeftElbowmuscles3'] == "LeftElbowmuscles3"){
    $LeftElbowmuscles3 = '<input type="checkbox" checked="checked" > Left Elbow joint ';
}else{
    $LeftElbowmuscles3 = '<input type="checkbox"> Left Elbow joint. ';
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

//right left Wrist

if(isset($_POST['RightWrist']) && $_POST['RightWrist'] == "RightWrist"){
    $RightWrist = '<input type="checkbox" checked="checked" > Right Wrist ';
}else{
    $RightWrist = '<input type="checkbox"> Right Wrist ';
}
if(isset($_POST['LeftWrist']) && $_POST['LeftWrist'] == "LeftWrist"){
    $LeftWrist = '<input type="checkbox" checked="checked" > Left Wrist ';
}else{
    $LeftWrist = '<input type="checkbox"> Left Wrist ';
}

if(isset($_POST['rightWristPainlevel']) && $_POST['rightWristPainlevel']){
    $rightWristPainlevel ='<u> '.$_POST['rightWristPainlevel'].' </u>'.'/10';
}else{
    $rightWristPainlevel = '____________'.'/10';
}
if(isset($_POST['leftWristPainlevel']) && $_POST['leftWristPainlevel']){
    $leftWristPainlevel = '<u> '.$_POST['leftWristPainlevel'].' </u>'.'/10.';
}else{
    $leftWristPainlevel = '____________'.'/10.';
}
if(isset($_POST['rlWristGoal']) && $_POST['rlWristGoal']){
    $rlWristGoal = '<u> '.$_POST['rlWristGoal'].' </u>'.'/10.';
}else{
    $rlWristGoal = '____________'.'/10.';
}
$data .= '<br>';
$data .= '<table>
    <tr>
        <td style="color:red">'.$RightWrist.''.$LeftWrist.'</td>
    </tr>
    <td>
        <div>Pain level (VAS): Right '.$rightWristPainlevel.' 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Left '.$leftWristPainlevel.'
        </div>
        <div>Goal (6-8 weeks): Decrease pain level to '.$rlWristGoal.'
        </div>
    </td>
</table>';

$data .= '<br>';
$data .= '<u><b>AROM :</b></u>';
$data .= '<br>'.'<br>';
$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Wrist</td>
        <td colspan="1">Left Wrist</td>
        <td colspan="1">Normal</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr> 
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlWristFlexPre'].'</td>
        <td>'.$_POST['rlWristFlexCurr'].'</td>
        <td>80-90</td>
        <td rowspan="6">Increase AROM by 10%</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlWristextPre'].'</td>
        <td>'.$_POST['rlWristextCurr'].'</td>
        <td>70-80</td>
    </tr>
    <tr>
        <td>RD</td>
        <td>'.$_POST['rlWristrRotPre'].'</td>
        <td>'.$_POST['rlWristrRotCurr'].'</td>
        <td>20</td>
    </tr>
    <tr>
        <td>UD</td>
        <td>'.$_POST['rlWristlRotPre'].'</td>
        <td>'.$_POST['rlWristlRotCurr'].'</td>
        <td>30</td>
    </tr>
</table>';

$data .= '<br>';
$data .= '<u><b>Manual muscle test :</b></u>';
$data .= '<br>'.'<br>';

$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Wrist</td>
        <td colspan="1">Left Wrist</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr>
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlWristFlexPreManual'].'</td>
        <td>'.$_POST['rlWristFlexCurrManual'].'</td>
        <td rowspan="6">Improve muscle strength by 1 grade</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlWristextPreManual'].'</td>
        <td>'.$_POST['rlWristextCurrManual'].'</td>
    </tr>
    <tr>
        <td>RD</td>
        <td>'.$_POST['rlWristrRotPreManual'].'</td>
        <td>'.$_POST['rlWristrRotCurrManual'].'</td>
    </tr>
    <tr>
        <td>UD</td>
        <td>'.$_POST['rlWristlRotPreManual'].'</td>
        <td>'.$_POST['rlWristlRotCurrManual'].'</td>
    </tr>
</table>';

$data .= '<br>';
if(isset($_POST['rlWristcdtPositiveR']) && $_POST['rlWristcdtPositiveR'] == "rlWristcdtPositiveR"){
    $rlWristcdtPositiveR = '<input type="checkbox" checked="checked" > Positve ';
}else{
    $rlWristcdtPositiveR = '<input type="checkbox"> Positve ';
}
if(isset($_POST['rlWristcdtNegativeR']) && $_POST['rlWristcdtNegativeR'] == "rlWristcdtNegativeR"){
    $rlWristcdtNegativeR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlWristcdtNegativeR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlWristcdtPositiveL']) && $_POST['rlWristcdtPositiveL'] == "rlWristcdtPositiveL"){
    $rlWristcdtPositiveL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlWristcdtPositiveL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlWristcdtNegativeL']) && $_POST['rlWristcdtNegativeL'] == "rlWristcdtNegativeL"){
    $rlWristcdtNegativeL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlWristcdtNegativeL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlWristcdtPositiveER']) && $_POST['rlWristcdtPositiveER'] == "rlWristcdtPositiveER"){
    $rlWristcdtPositiveER = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlWristcdtPositiveER = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlWristcdtNegativeER']) && $_POST['rlWristcdtNegativeER'] == "rlWristcdtNegativeER"){
    $rlWristcdtNegativeER = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlWristcdtNegativeER = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlWristcdtPositiveEL']) && $_POST['rlWristcdtPositiveEL'] == "rlWristcdtPositiveEL"){
    $rlWristcdtPositiveEL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlWristcdtPositiveEL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlWristcdtNegativeEL']) && $_POST['rlWristcdtNegativeEL'] == "rlWristcdtNegativeEL"){
    $rlWristcdtNegativeEL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlWristcdtNegativeEL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlWriststPositiveSR']) && $_POST['rlWriststPositiveSR'] == "rlWriststPositiveSR"){
    $rlWriststPositiveSR = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlWriststPositiveSR = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlWriststNegativeSR']) && $_POST['rlWriststNegativeSR'] == "rlWriststNegativeSR"){
    $rlWriststNegativeSR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlWriststNegativeSR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlWriststPositiveSL']) && $_POST['rlWriststPositiveSL'] == "rlWriststPositiveSL"){
    $rlWriststPositiveSL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlWriststPositiveSL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlWRiststNegativeSL']) && $_POST['rlWRiststNegativeSL'] == "rlWRiststNegativeSL"){
    $rlWRiststNegativeSL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlWRiststNegativeSL = '<input type="checkbox"> Negative ';
}

$data .= '<div style="margin:15px 0;"><u><b>Special tests :</b></u></div>';
$data .= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Test</td>
        <td colspan="1">Right Wrist Findings</td>
        <td colspan="1">Left Wrist Findings</td>
    </tr>
    <tr>
        <td>Phalen ‘s test</td>
        <td>'.$rlWristcdtPositiveR.' '.$rlWristcdtNegativeR.'</td>
        <td>'.$rlWristcdtPositiveL.' '.$rlWristcdtNegativeL.'</td>
    </tr>
    <tr>
        <td>Tinel’s test at the cubital tunnel</td>
        <td>'.$rlWristcdtPositiveER.' '.$rlWristcdtNegativeER.'</td>
        <td>'.$rlWristcdtPositiveEL.' '.$rlWristcdtNegativeEL.'</td>
    </tr>
    <tr>
        <td>Compression test</td>
        <td>'.$rlWriststPositiveSR.' '.$rlWriststNegativeSR.'</td>
        <td>'.$rlWriststPositiveSL.' '.$rlWRiststNegativeSL.'</td>
    </tr>
</table>';

//Objective Findings /Problems list :

if(isset($_POST['MildWrist']) && $_POST['MildWrist'] == "MildWrist"){
    $MildWrist = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildWrist = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildWrist2']) && $_POST['MildWrist2'] == "MildWrist2"){
    $MildWrist2 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildWrist2 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildWrist3']) && $_POST['MildWrist3'] == "MildWrist3"){
    $MildWrist3 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildWrist3 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildWrist4']) && $_POST['MildWrist4'] == "MildWrist4"){
    $MildWrist4 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildWrist4 = '<input type="checkbox"> Mild ';
}

if(isset($_POST['ModerateWrist']) && $_POST['ModerateWrist'] == "ModerateWrist"){
    $ModerateWrist = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateWrist = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateWrist2']) && $_POST['ModerateWrist2'] == "ModerateWrist2"){
    $ModerateWrist2 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateWrist2 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateWrist3']) && $_POST['ModerateWrist3'] == "ModerateWrist3"){
    $ModerateWrist3 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateWrist3 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateWrist4']) && $_POST['ModerateWrist4'] == "ModerateWrist4"){
    $ModerateWrist4 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateWrist4 = '<input type="checkbox"> Moderate ';
}

if(isset($_POST['severemuscleWrist']) && $_POST['severemuscleWrist'] == "severemuscleWrist"){
    $severemuscleWrist = '<input type="checkbox" checked="checked" > severe muscle spasm at the ';
}else{
    $severemuscleWrist = '<input type="checkbox"> severe muscle spasm at the ';
}
if(isset($_POST['severemuscleWrist2']) && $_POST['severemuscleWrist2'] == "severemuscleWrist2"){
    $severemuscleWrist2 = '<input type="checkbox" checked="checked" > severe Limited AROM at ';
}else{
    $severemuscleWrist2 = '<input type="checkbox"> severe Limited AROM at ';
}
if(isset($_POST['severemuscleWrist3']) && $_POST['severemuscleWrist3'] == "severemuscleWrist3"){
    $severemuscleWrist3 = '<input type="checkbox" checked="checked" > severe Restricted mobility at the ';
}else{
    $severemuscleWrist3 = '<input type="checkbox"> severe Restricted mobility at the ';
}
if(isset($_POST['severemuscleWrist4']) && $_POST['severemuscleWrist4'] == "severemuscleWrist4"){
    $severemuscleWrist4 = '<input type="checkbox" checked="checked" > severe Decreased functional activities. ';
}else{
    $severemuscleWrist4 = '<input type="checkbox"> severe Decreased functional activities. ';
}

if(isset($_POST['RightWristmuscles']) && $_POST['RightWristmuscles'] == "RightWristmuscles"){
    $RightWristmuscles = '<input type="checkbox" checked="checked" > Right Wrist muscles ';
}else{
    $RightWristmuscles = '<input type="checkbox"> Right Wrist muscles ';
}
if(isset($_POST['RightWristmuscles2']) && $_POST['RightWristmuscles2'] == "RightWristmuscles2"){
    $RightWristmuscles2 = '<input type="checkbox" checked="checked" > Right Wrist joint ';
}else{
    $RightWristmuscles2 = '<input type="checkbox"> Right Wrist joint ';
}
if(isset($_POST['RightWristmuscles3']) && $_POST['RightWristmuscles3'] == "RightWristmuscles3"){
    $RightWristmuscles3 = '<input type="checkbox" checked="checked" > Right Wrist joint ';
}else{
    $RightWristmuscles3 = '<input type="checkbox"> Right Wrist joint. ';
}

if(isset($_POST['LeftWristmuscles']) && $_POST['LeftWristmuscles'] == "LeftWristmuscles"){
    $LeftWristmuscles = '<input type="checkbox" checked="checked" > Left Wrist muscles ';
}else{
    $LeftWristmuscles = '<input type="checkbox"> Left Wrist muscles ';
}
if(isset($_POST['LeftWristmuscles2']) && $_POST['LeftWristmuscles2'] == "LeftWristmuscles2"){
    $LeftWristmuscles2 = '<input type="checkbox" checked="checked" > Left Wrist joint ';
}else{
    $LeftWristmuscles2 = '<input type="checkbox"> Left Wrist joint ';
}
if(isset($_POST['LeftWristmuscles3']) && $_POST['LeftWristmuscles3'] == "LeftWristmuscles3"){
    $LeftWristmuscles3 = '<input type="checkbox" checked="checked" > Left Wrist joint ';
}else{
    $LeftWristmuscles3 = '<input type="checkbox"> Left Wrist joint. ';
}

$data .= '<div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>';
$data .= '<table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
    <tr>
        <td> - '.$MildWrist.''.$ModerateWrist.''.$severemuscleWrist.''.$RightWristmuscles.''.$LeftWristmuscles.'</td>
    </tr>
    <tr>
        <td> - '.$MildWrist2.''.$ModerateWrist2.''.$severemuscleWrist2.''.$RightWristmuscles2.''.$LeftWristmuscles2.'</td>
    </tr>
    <tr>
        <td> - '.$MildWrist3.''.$ModerateWrist3.''.$severemuscleWrist3.''.$RightWristmuscles3.''.$LeftWristmuscles3.'</td>
    </tr>
    <tr>
        <td> - '.$MildWrist4.''.$ModerateWrist4.''.$severemuscleWrist4.'</td>
    </tr>
</table>';


//right left Hip
$data .= '<br>';

if(isset($_POST['RightHip']) && $_POST['RightHip'] == "RightHip"){
    $RightHip = '<input type="checkbox" checked="checked" > Right Hip ';
}else{
    $RightHip = '<input type="checkbox"> Right Hip ';
}
if(isset($_POST['LeftHip']) && $_POST['LeftHip'] == "LeftHip"){
    $LeftHip = '<input type="checkbox" checked="checked" > Left Hip ';
}else{
    $LeftHip = '<input type="checkbox"> Left Hip ';
}

if(isset($_POST['rightHipPainlevel']) && $_POST['rightHipPainlevel']){
    $rightHipPainlevel ='<u> '.$_POST['rightHipPainlevel'].' </u>'.'/10';
}else{
    $rightHipPainlevel = '____________'.'/10';
}
if(isset($_POST['leftHipPainlevel']) && $_POST['leftHipPainlevel']){
    $leftHipPainlevel = '<u> '.$_POST['leftHipPainlevel'].' </u>'.'/10.';
}else{
    $leftHipPainlevel = '____________'.'/10.';
}
if(isset($_POST['rlHipGoal']) && $_POST['rlHipGoal']){
    $rlHipGoal = '<u> '.$_POST['rlHipGoal'].' </u>'.'/10.';
}else{
    $rlHipGoal = '____________'.'/10.';
}

$data .= '<table>
    <tr>
        <td style="color:red">'.$RightHip.''.$LeftHip.'</td>
    </tr>
    <td>
        <div>Pain level (VAS): Right '.$rightHipPainlevel.' 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Left '.$leftHipPainlevel.'
        </div>
        <div>Goal (6-8 weeks): Decrease pain level to '.$rlHipGoal.'
        </div>
    </td>
</table>';

$data .= '<br>';
$data .= '<u><b>AROM :</b></u>';
$data .= '<br>'.'<br>';
$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Hip</td>
        <td colspan="1">Left Hip</td>
        <td colspan="1">Normal</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr> 
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlHipFlexPre'].'</td>
        <td>'.$_POST['rlHipFlexCurr'].'</td>
        <td>170-180</td>
        <td rowspan="6">Increase AROM by 10%</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlHipextPre'].'</td>
        <td>'.$_POST['rlHipextCurr'].'</td>
        <td>40</td>
    </tr>
    <tr>
        <td>Abd</td>
        <td>'.$_POST['rlHiprRotPre'].'</td>
        <td>'.$_POST['rlHiprRotCurr'].'</td>
        <td>170-180</td>
    </tr>
    <tr>
        <td>Add</td>
        <td>'.$_POST['rlHiplRotPre'].'</td>
        <td>'.$_POST['rlHiplRotCurr'].'</td>
        <td>45</td>
    </tr>
    <tr>
        <td>ER</td>
        <td>'.$_POST['rlHiprsbPre'].'</td>
        <td>'.$_POST['rlHiprsbCurr'].'</td>
        <td>80-90</td>
    </tr>
    <tr>
        <td>IR</td>
        <td>'.$_POST['rlHiplsbPre'].'</td>
        <td>'.$_POST['rlHiplsbCurr'].'</td>
        <td>80-90</td>
    </tr>
</table>';

$data .= '<br>';
$data .= '<u><b>Manual muscle test :</b></u>';
$data .= '<br>'.'<br>';

$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Hip</td>
        <td colspan="1">Left Hip</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr>
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlHipFlexPreManual'].'</td>
        <td>'.$_POST['rlHipFlexCurrManual'].'</td>
        <td rowspan="6">Improve muscle strength by 1 grade</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlHipextPreManual'].'</td>
        <td>'.$_POST['rlHipextCurrManual'].'</td>
    </tr>
    <tr>
        <td>Abd</td>
        <td>'.$_POST['rlHiprRotPreManual'].'</td>
        <td>'.$_POST['rlHiprRotCurrManual'].'</td>
    </tr>
    <tr>
        <td>Add</td>
        <td>'.$_POST['rlHiplRotPreManual'].'</td>
        <td>'.$_POST['rlHiplRotCurrManual'].'</td>
    </tr>
    <tr>
        <td>ER</td>
        <td>'.$_POST['rlHipeRotPreManual'].'</td>
        <td>'.$_POST['rlHipeRotCurrManual'].'</td>
    </tr>
    <tr>
        <td>L Side bending</td>
        <td>'.$_POST['rlHiprsbPreManual'].'</td>
        <td>'.$_POST['rlHiprsbCurrManual'].'</td>
    </tr>
</table>';

$data .= '<br>';
if(isset($_POST['rlHipcdtPositiveR']) && $_POST['rlHipcdtPositiveR'] == "rlHipcdtPositiveR"){
    $rlHipcdtPositiveR = '<input type="checkbox" checked="checked" > Positve ';
}else{
    $rlHipcdtPositiveR = '<input type="checkbox"> Positve ';
}
if(isset($_POST['rlHipcdtNegativeR']) && $_POST['rlHipcdtNegativeR'] == "rlHipcdtNegativeR"){
    $rlHipcdtNegativeR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlHipcdtNegativeR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlHipcdtPositiveL']) && $_POST['rlHipcdtPositiveL'] == "rlHipcdtPositiveL"){
    $rlHipcdtPositiveL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlHipcdtPositiveL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlHipcdtNegativeL']) && $_POST['rlHipcdtNegativeL'] == "rlHipcdtNegativeL"){
    $rlHipcdtNegativeL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlHipcdtNegativeL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlHipcdtPositiveER']) && $_POST['rlHipcdtPositiveER'] == "rlHipcdtPositiveER"){
    $rlHipcdtPositiveER = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlHipcdtPositiveER = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlHipcdtNegativeER']) && $_POST['rlHipcdtNegativeER'] == "rlHipcdtNegativeER"){
    $rlHipcdtNegativeER = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlHipcdtNegativeER = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlHipcdtPositiveEL']) && $_POST['rlHipcdtPositiveEL'] == "rlHipcdtPositiveEL"){
    $rlHipcdtPositiveEL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlHipcdtPositiveEL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlHipcdtNegativeEL']) && $_POST['rlHipcdtNegativeEL'] == "rlHipcdtNegativeEL"){
    $rlHipcdtNegativeEL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlHipcdtNegativeEL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlHipstPositiveSR']) && $_POST['rlHipstPositiveSR'] == "rlHipstPositiveSR"){
    $rlHipstPositiveSR = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlHipstPositiveSR = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlHipstNegativeSR']) && $_POST['rlHipstNegativeSR'] == "rlHipstNegativeSR"){
    $rlHipstNegativeSR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlHipstNegativeSR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlHipstPositiveSL']) && $_POST['rlHipstPositiveSL'] == "rlHipstPositiveSL"){
    $rlHipstPositiveSL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlHipstPositiveSL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlHipstNegativeSL']) && $_POST['rlHipstNegativeSL'] == "rlHipstNegativeSL"){
    $rlHipstNegativeSL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlHipstNegativeSL = '<input type="checkbox"> Negative ';
}

$data .= '<div style="margin:15px 0;"><u><b>Special tests :</b></u></div>';
$data .= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Test</td>
        <td colspan="1">Right Hip Findings</td>
        <td colspan="1">Left Hip Findings</td>
    </tr>
    <tr>
        <td>Scour test</td>
        <td>'.$rlHipcdtPositiveR.' '.$rlHipcdtNegativeR.'</td>
        <td>'.$rlHipcdtPositiveL.' '.$rlHipcdtNegativeL.'</td>
    </tr>
    <tr>
        <td>Thomas test</td>
        <td>'.$rlHipcdtPositiveER.' '.$rlHipcdtNegativeER.'</td>
        <td>'.$rlHipcdtPositiveEL.' '.$rlHipcdtNegativeEL.'</td>
    </tr>
    <tr>
        <td>FABER test</td>
        <td>'.$rlHipstPositiveSR.' '.$rlHipstNegativeSR.'</td>
        <td>'.$rlHipstPositiveSL.' '.$rlHipstNegativeSL.'</td>
    </tr>
</table>';

if(isset($_POST['GaitHip']) && $_POST['GaitHip'] == "GaitHip"){
    $GaitHip = '<input type="checkbox" checked="checked" > <u> Gait Analysis :</u>  ';
}else{
    $GaitHip = '<input type="checkbox"> <u> Gait Analysis :</u>  ';
}

if(isset($_POST['NormalHip']) && $_POST['NormalHip'] == "NormalHip"){
    $NormalHip = '<input type="checkbox" checked="checked" > Normal Gait  ';
}else{
    $NormalHip = '<input type="checkbox"> Normal Gait  ';
}

if(isset($_POST['AntalgicHip']) && $_POST['AntalgicHip'] == "AntalgicHip"){
    $AntalgicHip = '<input type="checkbox" checked="checked" > Antalgic Gait  ';
}else{
    $AntalgicHip = '<input type="checkbox"> Antalgic Gait  ';
}

if(isset($_POST['LimpingHip']) && $_POST['LimpingHip'] == "LimpingHip"){
    $LimpingHip = '<input type="checkbox" checked="checked" > Limping Gait ';
}else{
    $LimpingHip = '<input type="checkbox"> Limping Gait ';
}

if(isset($_POST['DecreaseHip']) && $_POST['DecreaseHip'] == "DecreaseHip"){
    $DecreaseHip = '<input type="checkbox" checked="checked" > Decrease cadence ';
}else{
    $DecreaseHip = '<input type="checkbox"> Decrease cadence ';
}

if(isset($_POST['DecreaseStepHip']) && $_POST['DecreaseStepHip'] == "DecreaseStepHip"){
    $DecreaseStepHip = '<input type="checkbox" checked="checked" > Decrease step length ';
}else{
    $DecreaseStepHip = '<input type="checkbox"> Decrease step length ';
}

$data .= '<table width="100%" cellpadding="0" cellspacing="0"   style="text-align:left; margin-top:20px;">
    <tr>
        <td>'.$GaitHip.' '.$NormalHip.''.$AntalgicHip.' '.$LimpingHip.'</td>
    </tr>
    <tr>
        <td>'.$DecreaseHip.' '.$DecreaseStepHip.'</td>
    </tr>
</table>';

//Objective Findings /Problems list :

if(isset($_POST['MildHip']) && $_POST['MildHip'] == "MildHip"){
    $MildHip = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildHip = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildHip2']) && $_POST['MildHip2'] == "MildHip2"){
    $MildHip2 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildHip2 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildHip3']) && $_POST['MildHip3'] == "MildHip3"){
    $MildHip3 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildHip3 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildHip4']) && $_POST['MildHip4'] == "MildHip4"){
    $MildHip4 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildHip4 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildHip5']) && $_POST['MildHip5'] == "MildHip5"){
    $MildHip5 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildHip5 = '<input type="checkbox"> Mild ';
}

if(isset($_POST['ModerateHip']) && $_POST['ModerateHip'] == "ModerateHip"){
    $ModerateHip = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateHip = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateHip2']) && $_POST['ModerateHip2'] == "ModerateHip2"){
    $ModerateHip2 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateHip2 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateHip3']) && $_POST['ModerateHip3'] == "ModerateHip3"){
    $ModerateHip3 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateHip3 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateHip4']) && $_POST['ModerateHip4'] == "ModerateHip4"){
    $ModerateHip4 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateHip4 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateHip5']) && $_POST['ModerateHip5'] == "ModerateHip5"){
    $ModerateHip5 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateHip5 = '<input type="checkbox"> Moderate ';
}

if(isset($_POST['severemuscleHip']) && $_POST['severemuscleHip'] == "severemuscleHip"){
    $severemuscleHip = '<input type="checkbox" checked="checked" > severe muscle spasm at the ';
}else{
    $severemuscleHip = '<input type="checkbox"> severe muscle spasm at the ';
}
if(isset($_POST['severemuscleHip2']) && $_POST['severemuscleHip2'] == "severemuscleHip2"){
    $severemuscleHip2 = '<input type="checkbox" checked="checked" > severe Limited AROM at ';
}else{
    $severemuscleHip2 = '<input type="checkbox"> severe Limited AROM at ';
}
if(isset($_POST['severemuscleHip3']) && $_POST['severemuscleHip3'] == "severemuscleHip3"){
    $severemuscleHip3 = '<input type="checkbox" checked="checked" > severe Restricted mobility at the ';
}else{
    $severemuscleHip3 = '<input type="checkbox"> severe Restricted mobility at the ';
}
if(isset($_POST['severemuscleHip4']) && $_POST['severemuscleHip4'] == "severemuscleHip4"){
    $severemuscleHip4 = '<input type="checkbox" checked="checked" > severe Decreased functional activities. ';
}else{
    $severemuscleHip4 = '<input type="checkbox"> severe Decreased functional activities. ';
}
if(isset($_POST['severemuscleHip5']) && $_POST['severemuscleHip5'] == "severemuscleHip5"){
    $severemuscleHip5 = '<input type="checkbox" checked="checked" > severe Decreased functional activities. ';
}else{
    $severemuscleHip5 = '<input type="checkbox"> severe Decreased functional activities. ';
}

if(isset($_POST['RightHipmusclesHip']) && $_POST['RightHipmusclesHip'] == "RightHipmusclesHip"){
    $RightHipmusclesHip = '<input type="checkbox" checked="checked" > Right Hip muscles ';
}else{
    $RightHipmusclesHip = '<input type="checkbox"> Right Hip muscles ';
}
if(isset($_POST['RightHipmusclesHip2']) && $_POST['RightHipmusclesHip2'] == "RightHipmusclesHip2"){
    $RightHipmusclesHip2 = '<input type="checkbox" checked="checked" > Right Hip joint ';
}else{
    $RightHipmusclesHip2 = '<input type="checkbox"> Right Hip joint ';
}
if(isset($_POST['RightHipmusclesHip3']) && $_POST['RightHipmusclesHip3'] == "RightHipmusclesHip3"){
    $RightHipmusclesHip3 = '<input type="checkbox" checked="checked" > Right Hip joint ';
}else{
    $RightHipmusclesHip3 = '<input type="checkbox"> Right Hip joint. ';
}

if(isset($_POST['LeftHipmusclesHip']) && $_POST['LeftHipmusclesHip'] == "LeftHipmusclesHip"){
    $LeftHipmusclesHip = '<input type="checkbox" checked="checked" > Left Hip muscles ';
}else{
    $LeftHipmusclesHip = '<input type="checkbox"> Left Hip muscles ';
}
if(isset($_POST['LeftHipmusclesHip2']) && $_POST['LeftHipmusclesHip2'] == "LeftHipmusclesHip2"){
    $LeftHipmusclesHip2 = '<input type="checkbox" checked="checked" > Left Hip joint ';
}else{
    $LeftHipmusclesHip2 = '<input type="checkbox"> Left Hip joint ';
}
if(isset($_POST['LeftHipmusclesHip3']) && $_POST['LeftHipmusclesHip3'] == "LeftHipmusclesHip3"){
    $LeftHipmusclesHip3 = '<input type="checkbox" checked="checked" > Left Hip joint ';
}else{
    $LeftHipmusclesHip3 = '<input type="checkbox"> Left Hip joint. ';
}

$data .= '<div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>';
$data .= '<table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
    <tr>
        <td> - '.$MildHip.''.$ModerateHip.''.$severemuscleHip.''.$RightHipmusclesHip.''.$LeftHipmusclesHip.'</td>
    </tr>
    <tr>
        <td> - '.$MildHip2.''.$ModerateHip2.''.$severemuscleHip2.''.$RightHipmusclesHip2.''.$LeftHipmusclesHip2.'</td>
    </tr>
    <tr>
        <td> - '.$MildHip3.''.$ModerateHip3.''.$severemuscleHip3.''.$RightHipmusclesHip3.''.$LeftHipmusclesHip3.'</td>
    </tr>
    <tr>
        <td> - '.$MildHip5.''.$ModerateHip5.''.$severemuscleHip5.'</td>
    </tr>
    <tr>
        <td> - '.$MildHip4.''.$ModerateHip4.''.$severemuscleHip4.'</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>';


//right left Knee
$data .= '<br>';

if(isset($_POST['RightKnee']) && $_POST['RightKnee'] == "RightKnee"){
    $RightKnee = '<input type="checkbox" checked="checked" > Right Knee ';
}else{
    $RightKnee = '<input type="checkbox"> Right Knee ';
}
if(isset($_POST['LeftKnee']) && $_POST['LeftKnee'] == "LeftKnee"){
    $LeftKnee = '<input type="checkbox" checked="checked" > Left Knee ';
}else{
    $LeftKnee = '<input type="checkbox"> Left Knee ';
}

if(isset($_POST['rightKneePainlevel']) && $_POST['rightKneePainlevel']){
    $rightKneePainlevel ='<u> '.$_POST['rightKneePainlevel'].' </u>'.'/10';
}else{
    $rightKneePainlevel = '____________'.'/10';
}
if(isset($_POST['leftKneePainlevel']) && $_POST['leftKneePainlevel']){
    $leftKneePainlevel = '<u> '.$_POST['leftKneePainlevel'].' </u>'.'/10.';
}else{
    $leftKneePainlevel = '____________'.'/10.';
}
if(isset($_POST['rlKneeGoal']) && $_POST['rlKneeGoal']){
    $rlKneeGoal = '<u> '.$_POST['rlKneeGoal'].' </u>'.'/10.';
}else{
    $rlKneeGoal = '____________'.'/10.';
}

$data .= '<table>
    <tr>
        <td style="color:red">'.$RightKnee.''.$LeftKnee.'</td>
    </tr>
    <td>
        <div>Pain level (VAS): Right '.$rightKneePainlevel.' 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Left '.$leftKneePainlevel.'
        </div>
        <div>Goal (6-8 weeks): Decrease pain level to '.$rlKneeGoal.'
        </div>
    </td>
</table>';

$data .= '<br>';
$data .= '<u><b>AROM :</b></u>';
$data .= '<br>'.'<br>';
$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Knee</td>
        <td colspan="1">Left Knee</td>
        <td colspan="1">Normal</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr> 
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlKneeFlexPre'].'</td>
        <td>'.$_POST['rlKneeFlexCurr'].'</td>
        <td>170-180</td>
        <td rowspan="6">Increase AROM by 10%</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlKneeextPre'].'</td>
        <td>'.$_POST['rlKneeextCurr'].'</td>
        <td>40</td>
    </tr>
</table>';

$data .= '<br>';
$data .= '<u><b>Manual muscle test :</b></u>';
$data .= '<br>'.'<br>';

$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Knee</td>
        <td colspan="1">Left Knee</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr>
    <tr>
        <td>Flex</td>
        <td>'.$_POST['rlKneeFlexPreManual'].'</td>
        <td>'.$_POST['rlKneeFlexCurrManual'].'</td>
        <td rowspan="6">Improve muscle strength by 1 grade</td>
    </tr>
    <tr>
        <td>Ext</td>
        <td>'.$_POST['rlKneeextPreManual'].'</td>
        <td>'.$_POST['rlKneeextCurrManual'].'</td>
    </tr>
</table>';

$data .= '<br>';
if(isset($_POST['rlKneecdtPositiveR']) && $_POST['rlKneecdtPositiveR'] == "rlKneecdtPositiveR"){
    $rlKneecdtPositiveR = '<input type="checkbox" checked="checked" > Positve ';
}else{
    $rlKneecdtPositiveR = '<input type="checkbox"> Positve ';
}
if(isset($_POST['rlKneecdtNegativeR']) && $_POST['rlKneecdtNegativeR'] == "rlKneecdtNegativeR"){
    $rlKneecdtNegativeR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlKneecdtNegativeR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlKneecdtPositiveL']) && $_POST['rlKneecdtPositiveL'] == "rlKneecdtPositiveL"){
    $rlKneecdtPositiveL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlKneecdtPositiveL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlKneecdtNegativeL']) && $_POST['rlKneecdtNegativeL'] == "rlKneecdtNegativeL"){
    $rlKneecdtNegativeL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlKneecdtNegativeL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlKneecdtPositiveER']) && $_POST['rlKneecdtPositiveER'] == "rlKneecdtPositiveER"){
    $rlKneecdtPositiveER = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlKneecdtPositiveER = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlKneecdtNegativeER']) && $_POST['rlKneecdtNegativeER'] == "rlKneecdtNegativeER"){
    $rlKneecdtNegativeER = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlKneecdtNegativeER = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlKneecdtPositiveEL']) && $_POST['rlKneecdtPositiveEL'] == "rlKneecdtPositiveEL"){
    $rlKneecdtPositiveEL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlKneecdtPositiveEL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlKneecdtNegativeEL']) && $_POST['rlKneecdtNegativeEL'] == "rlKneecdtNegativeEL"){
    $rlKneecdtNegativeEL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlKneecdtNegativeEL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlKneestPositiveSR']) && $_POST['rlKneestPositiveSR'] == "rlKneestPositiveSR"){
    $rlKneestPositiveSR = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlKneestPositiveSR = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlKneestNegativeSR']) && $_POST['rlKneestNegativeSR'] == "rlKneestNegativeSR"){
    $rlKneestNegativeSR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlKneestNegativeSR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlKneestPositiveSL']) && $_POST['rlKneestPositiveSL'] == "rlKneestPositiveSL"){
    $rlKneestPositiveSL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlKneestPositiveSL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlKneestNegativeSL']) && $_POST['rlKneestNegativeSL'] == "rlKneestNegativeSL"){
    $rlKneestNegativeSL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlKneestNegativeSL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlKneestPositiveSR2']) && $_POST['rlKneestPositiveSR2'] == "rlKneestPositiveSR2"){
    $rlKneestPositiveSR2 = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlKneestPositiveSR2 = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlKneestNegativeSR2']) && $_POST['rlKneestNegativeSR2'] == "rlKneestNegativeSR2"){
    $rlKneestNegativeSR2 = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlKneestNegativeSR2 = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlKneestPositiveSL2']) && $_POST['rlKneestPositiveSL2'] == "rlKneestPositiveSL2"){
    $rlKneestPositiveSL2 = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlKneestPositiveSL2 = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlKneestNegativeSL2']) && $_POST['rlKneestNegativeSL2'] == "rlKneestNegativeSL2"){
    $rlKneestNegativeSL2 = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlKneestNegativeSL2 = '<input type="checkbox"> Negative ';
}

$data .= '<div style="margin:15px 0;"><u><b>Special tests :</b></u></div>';
$data .= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Test</td>
        <td colspan="1">Right Knee Findings</td>
        <td colspan="1">Left Knee Findings</td>
    </tr>
    <tr>
        <td>Anterior Drawer test</td>
        <td>'.$rlKneecdtPositiveR.' '.$rlKneecdtNegativeR.'</td>
        <td>'.$rlKneecdtPositiveL.' '.$rlKneecdtNegativeL.'</td>
    </tr>
    <tr>
        <td>Valgus Stress test</td>
        <td>'.$rlKneecdtPositiveER.' '.$rlKneecdtNegativeER.'</td>
        <td>'.$rlKneecdtPositiveEL.' '.$rlKneecdtNegativeEL.'</td>
    </tr>
    <tr>
        <td>Varus Stress test</td>
        <td>'.$rlKneestPositiveSR.' '.$rlKneestNegativeSR.'</td>
        <td>'.$rlKneestPositiveSL.' '.$rlKneestNegativeSL.'</td>
    </tr>
    <tr>
        <td>Patellar Tap Test</td>
        <td>'.$rlKneestPositiveSR2.' '.$rlKneestNegativeSR2.'</td>
        <td>'.$rlKneestPositiveSL2.' '.$rlKneestNegativeSL2.'</td>
    </tr>
</table>';

if(isset($_POST['GaitKnee']) && $_POST['GaitKnee'] == "GaitKnee"){
    $GaitKnee = '<input type="checkbox" checked="checked" > <u> Gait Analysis :</u>  ';
}else{
    $GaitKnee = '<input type="checkbox"> <u> Gait Analysis :</u>  ';
}

if(isset($_POST['NormalKnee']) && $_POST['NormalKnee'] == "NormalKnee"){
    $NormalKnee = '<input type="checkbox" checked="checked" > Normal Gait  ';
}else{
    $NormalKnee = '<input type="checkbox"> Normal Gait  ';
}

if(isset($_POST['AntalgicKnee']) && $_POST['AntalgicKnee'] == "AntalgicKnee"){
    $AntalgicKnee = '<input type="checkbox" checked="checked" > Antalgic Gait  ';
}else{
    $AntalgicKnee = '<input type="checkbox"> Antalgic Gait  ';
}

if(isset($_POST['LimpingKnee']) && $_POST['LimpingKnee'] == "LimpingKnee"){
    $LimpingKnee = '<input type="checkbox" checked="checked" > Limping Gait ';
}else{
    $LimpingKnee = '<input type="checkbox"> Limping Gait ';
}

if(isset($_POST['DecreaseKnee']) && $_POST['DecreaseKnee'] == "DecreaseKnee"){
    $DecreaseKnee = '<input type="checkbox" checked="checked" > Decrease cadence ';
}else{
    $DecreaseKnee = '<input type="checkbox"> Decrease cadence ';
}

if(isset($_POST['DecreaseStepKnee']) && $_POST['DecreaseStepKnee'] == "DecreaseStepKnee"){
    $DecreaseStepKnee = '<input type="checkbox" checked="checked" > Decrease step length ';
}else{
    $DecreaseStepKnee = '<input type="checkbox"> Decrease step length ';
}

$data .= '<table width="100%" cellpadding="0" cellspacing="0"   style="text-align:left; margin-top:20px;">
    <tr>
        <td>'.$GaitKnee.' '.$NormalKnee.''.$AntalgicKnee.' '.$LimpingKnee.'</td>
    </tr>
    <tr>
        <td>'.$DecreaseKnee.' '.$DecreaseStepKnee.'</td>
    </tr>
</table>';

//Objective Findings /Problems list :

if(isset($_POST['MildKnee']) && $_POST['MildKnee'] == "MildKnee"){
    $MildKnee = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildKnee = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildKnee2']) && $_POST['MildKnee2'] == "MildKnee2"){
    $MildKnee2 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildKnee2 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildKnee3']) && $_POST['MildKnee3'] == "MildKnee3"){
    $MildKnee3 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildKnee3 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildKnee4']) && $_POST['MildKnee4'] == "MildKnee4"){
    $MildKnee4 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildKnee4 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildKnee5']) && $_POST['MildKnee5'] == "MildKnee5"){
    $MildKnee5 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildKnee5 = '<input type="checkbox"> Mild ';
}

if(isset($_POST['ModerateKnee']) && $_POST['ModerateKnee'] == "ModerateKnee"){
    $ModerateKnee = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateKnee = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateKnee2']) && $_POST['ModerateKnee2'] == "ModerateKnee2"){
    $ModerateKnee2 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateKnee2 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateKnee3']) && $_POST['ModerateKnee3'] == "ModerateKnee3"){
    $ModerateKnee3 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateKnee3 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateKnee4']) && $_POST['ModerateKnee4'] == "ModerateKnee4"){
    $ModerateKnee4 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateKnee4 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateKnee5']) && $_POST['ModerateKnee5'] == "ModerateKnee5"){
    $ModerateKnee5 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateKnee5 = '<input type="checkbox"> Moderate ';
}

if(isset($_POST['severemuscleKnee']) && $_POST['severemuscleKnee'] == "severemuscleKnee"){
    $severemuscleKnee = '<input type="checkbox" checked="checked" > severe muscle spasm at the ';
}else{
    $severemuscleKnee = '<input type="checkbox"> severe muscle spasm at the ';
}
if(isset($_POST['severemuscleKnee2']) && $_POST['severemuscleKnee2'] == "severemuscleKnee2"){
    $severemuscleKnee2 = '<input type="checkbox" checked="checked" > severe Limited AROM at ';
}else{
    $severemuscleKnee2 = '<input type="checkbox"> severe Limited AROM at ';
}
if(isset($_POST['severemuscleKnee3']) && $_POST['severemuscleKnee3'] == "severemuscleKnee3"){
    $severemuscleKnee3 = '<input type="checkbox" checked="checked" > severe Restricted mobility at the ';
}else{
    $severemuscleKnee3 = '<input type="checkbox"> severe Restricted mobility at the ';
}
if(isset($_POST['severemuscleKnee4']) && $_POST['severemuscleKnee4'] == "severemuscleKnee4"){
    $severemuscleKnee4 = '<input type="checkbox" checked="checked" > severe Decreased functional activities. ';
}else{
    $severemuscleKnee4 = '<input type="checkbox"> severe Decreased functional activities. ';
}
if(isset($_POST['severemuscleKnee5']) && $_POST['severemuscleKnee5'] == "severemuscleKnee5"){
    $severemuscleKnee5 = '<input type="checkbox" checked="checked" > severe Decreased functional activities. ';
}else{
    $severemuscleKnee5 = '<input type="checkbox"> severe Decreased functional activities. ';
}

if(isset($_POST['RightKneemusclesKnee']) && $_POST['RightKneemusclesKnee'] == "RightKneemusclesKnee"){
    $RightKneemusclesKnee = '<input type="checkbox" checked="checked" > Right Knee muscles ';
}else{
    $RightKneemusclesKnee = '<input type="checkbox"> Right Knee muscles ';
}
if(isset($_POST['RightKneemusclesKnee2']) && $_POST['RightKneemusclesKnee2'] == "RightKneemusclesKnee2"){
    $RightKneemusclesKnee2 = '<input type="checkbox" checked="checked" > Right Knee joint ';
}else{
    $RightKneemusclesKnee2 = '<input type="checkbox"> Right Knee joint ';
}
if(isset($_POST['RightKneemusclesKnee3']) && $_POST['RightKneemusclesKnee3'] == "RightKneemusclesKnee3"){
    $RightKneemusclesKnee3 = '<input type="checkbox" checked="checked" > Right Knee joint ';
}else{
    $RightKneemusclesKnee3 = '<input type="checkbox"> Right Knee joint. ';
}

if(isset($_POST['LeftKneemusclesKnee']) && $_POST['LeftKneemusclesKnee'] == "LeftKneemusclesKnee"){
    $LeftKneemusclesKnee = '<input type="checkbox" checked="checked" > Left Knee muscles ';
}else{
    $LeftKneemusclesKnee = '<input type="checkbox"> Left Knee muscles ';
}
if(isset($_POST['LeftKneemusclesKnee2']) && $_POST['LeftKneemusclesKnee2'] == "LeftKneemusclesKnee2"){
    $LeftKneemusclesKnee2 = '<input type="checkbox" checked="checked" > Left Knee joint ';
}else{
    $LeftKneemusclesKnee2 = '<input type="checkbox"> Left Knee joint ';
}
if(isset($_POST['LeftKneemusclesKnee3']) && $_POST['LeftKneemusclesKnee3'] == "LeftKneemusclesKnee3"){
    $LeftKneemusclesKnee3 = '<input type="checkbox" checked="checked" > Left Knee joint ';
}else{
    $LeftKneemusclesKnee3 = '<input type="checkbox"> Left Knee joint. ';
}

$data .= '<div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>';
$data .= '<table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
    <tr>
        <td> - '.$MildKnee.''.$ModerateKnee.''.$severemuscleKnee.''.$RightKneemusclesKnee.''.$LeftKneemusclesKnee.'</td>
    </tr>
    <tr>
        <td> - '.$MildKnee2.''.$ModerateKnee2.''.$severemuscleKnee2.''.$RightKneemusclesKnee2.''.$LeftKneemusclesKnee2.'</td>
    </tr>
    <tr>
        <td> - '.$MildKnee3.''.$ModerateKnee3.''.$severemuscleKnee3.''.$RightKneemusclesKnee3.''.$LeftKneemusclesKnee3.'</td>
    </tr>
    <tr>
        <td> - '.$MildKnee5.''.$ModerateKnee5.''.$severemuscleKnee5.'</td>
    </tr>
    <tr>
        <td> - '.$MildKnee4.''.$ModerateKnee4.''.$severemuscleKnee4.'</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>';

//right left Ankle start

if(isset($_POST['RightAnkle']) && $_POST['RightAnkle'] == "RightAnkle"){
    $RightAnkle = '<input type="checkbox" checked="checked" > Right Ankle ';
}else{
    $RightAnkle = '<input type="checkbox"> Right Ankle ';
}
if(isset($_POST['LeftAnkle']) && $_POST['LeftAnkle'] == "LeftAnkle"){
    $LeftAnkle = '<input type="checkbox" checked="checked" > Left Ankle ';
}else{
    $LeftAnkle = '<input type="checkbox"> Left Ankle ';
}

if(isset($_POST['rightAnklePainlevel']) && $_POST['rightAnklePainlevel']){
    $rightAnklePainlevel ='<u> '.$_POST['rightAnklePainlevel'].' </u>'.'/10';
}else{
    $rightAnklePainlevel = '____________'.'/10';
}
if(isset($_POST['leftAnklePainlevel']) && $_POST['leftAnklePainlevel']){
    $leftAnklePainlevel = '<u> '.$_POST['leftAnklePainlevel'].' </u>'.'/10.';
}else{
    $leftAnklePainlevel = '____________'.'/10.';
}
if(isset($_POST['rlAnkleGoal']) && $_POST['rlAnkleGoal']){
    $rlAnkleGoal = '<u> '.$_POST['rlAnkleGoal'].' </u>'.'/10.';
}else{
    $rlAnkleGoal = '____________'.'/10.';
}
$data .= '<br>';
$data .= '<table>
    <tr>
        <td style="color:red">'.$RightAnkle.''.$LeftAnkle.'</td>
    </tr>
    <td>
        <div>Pain level (VAS): Right '.$rightAnklePainlevel.' 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Left '.$leftAnklePainlevel.'
        </div>
        <div>Goal (6-8 weeks): Decrease pain level to '.$rlAnkleGoal.'
        </div>
    </td>
</table>';

$data .= '<br>';

//start arom tests
$data .= '<u><b>AROM :</b></u>';
$data .= '<br>'.'<br>';
$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Ankle</td>
        <td colspan="1">Left Ankle</td>
        <td colspan="1">Normal</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr> 
    <tr>
        <td>Dorsi Flex</td>
        <td>'.$_POST['rlAnkleFlexPre'].'</td>
        <td>'.$_POST['rlAnkleFlexCurr'].'</td>
        <td>80-90</td>
        <td rowspan="6">Increase AROM by 10%</td>
    </tr>
    <tr>
        <td>Planter Ext</td>
        <td>'.$_POST['rlAnkleextPre'].'</td>
        <td>'.$_POST['rlAnkleextCurr'].'</td>
        <td>70-80</td>
    </tr>
    <tr>
        <td>Inversion</td>
        <td>'.$_POST['rlAnklerRotPre'].'</td>
        <td>'.$_POST['rlAnklerRotCurr'].'</td>
        <td>20</td>
    </tr>
    <tr>
        <td>Eversion</td>
        <td>'.$_POST['rlAnklelRotPre'].'</td>
        <td>'.$_POST['rlAnklelRotCurr'].'</td>
        <td>30</td>
    </tr>
</table>';
//end arom tests

$data .= '<br>';

//start manual tests
$data .= '<u><b>Manual muscle test :</b></u>';
$data .= '<br>'.'<br>';

$data.= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Movement</td>
        <td colspan="1">Right Ankle</td>
        <td colspan="1">Left Ankle</td>
        <td rowspan="1">Goal (6-8 weeks)</td>
    </tr>
    <tr>
        <td>Dorsi Flex</td>
        <td>'.$_POST['rlAnkleFlexPreManual'].'</td>
        <td>'.$_POST['rlAnkleFlexCurrManual'].'</td>
        <td rowspan="6">Improve muscle strength by 1 grade</td>
    </tr>
    <tr>
        <td>Planter Ext</td>
        <td>'.$_POST['rlAnkleextPreManual'].'</td>
        <td>'.$_POST['rlAnkleextCurrManual'].'</td>
    </tr>
    <tr>
        <td>Inversion</td>
        <td>'.$_POST['rlAnklerRotPreManual'].'</td>
        <td>'.$_POST['rlAnklerRotCurrManual'].'</td>
    </tr>
    <tr>
        <td>Eversion</td>
        <td>'.$_POST['rlAnklelRotPreManual'].'</td>
        <td>'.$_POST['rlAnklelRotCurrManual'].'</td>
    </tr>
</table>';

//end manual tests

$data .= '<br>';

//star Special tests
if(isset($_POST['rlAnklecdtPositiveR']) && $_POST['rlAnklecdtPositiveR'] == "rlAnklecdtPositiveR"){
    $rlAnklecdtPositiveR = '<input type="checkbox" checked="checked" > Positve ';
}else{
    $rlAnklecdtPositiveR = '<input type="checkbox"> Positve ';
}
if(isset($_POST['rlAnklecdtNegativeR']) && $_POST['rlAnklecdtNegativeR'] == "rlAnklecdtNegativeR"){
    $rlAnklecdtNegativeR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlAnklecdtNegativeR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlAnklecdtPositiveL']) && $_POST['rlAnklecdtPositiveL'] == "rlAnklecdtPositiveL"){
    $rlAnklecdtPositiveL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlAnklecdtPositiveL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlAnklecdtNegativeL']) && $_POST['rlAnklecdtNegativeL'] == "rlAnklecdtNegativeL"){
    $rlAnklecdtNegativeL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlAnklecdtNegativeL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlAnklecdtPositiveER']) && $_POST['rlAnklecdtPositiveER'] == "rlAnklecdtPositiveER"){
    $rlAnklecdtPositiveER = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlAnklecdtPositiveER = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlAnklecdtNegativeER']) && $_POST['rlAnklecdtNegativeER'] == "rlAnklecdtNegativeER"){
    $rlAnklecdtNegativeER = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlAnklecdtNegativeER = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlAnklecdtPositiveEL']) && $_POST['rlAnklecdtPositiveEL'] == "rlAnklecdtPositiveEL"){
    $rlAnklecdtPositiveEL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlAnklecdtPositiveEL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlAnklecdtNegativeEL']) && $_POST['rlAnklecdtNegativeEL'] == "rlAnklecdtNegativeEL"){
    $rlAnklecdtNegativeEL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlAnklecdtNegativeEL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlAnklestPositiveSR']) && $_POST['rlAnklestPositiveSR'] == "rlAnklestPositiveSR"){
    $rlAnklestPositiveSR = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlAnklestPositiveSR = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlAnklestNegativeSR']) && $_POST['rlAnklestNegativeSR'] == "rlAnklestNegativeSR"){
    $rlAnklestNegativeSR = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlAnklestNegativeSR = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlAnklestPositiveSL']) && $_POST['rlAnklestPositiveSL'] == "rlAnklestPositiveSL"){
    $rlAnklestPositiveSL = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlAnklestPositiveSL = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlAnklestNegativeSL']) && $_POST['rlAnklestNegativeSL'] == "rlAnklestNegativeSL"){
    $rlAnklestNegativeSL = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlAnklestNegativeSL = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlAnklestPositiveSR2']) && $_POST['rlAnklestPositiveSR2'] == "rlAnklestPositiveSR2"){
    $rlAnklestPositiveSR2 = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlAnklestPositiveSR2 = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlAnklestNegativeSR2']) && $_POST['rlAnklestNegativeSR2'] == "rlAnklestNegativeSR2"){
    $rlAnklestNegativeSR2 = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlAnklestNegativeSR2 = '<input type="checkbox"> Negative ';
}

if(isset($_POST['rlAnklestPositiveSL2']) && $_POST['rlAnklestPositiveSL2'] == "rlAnklestPositiveSL2"){
    $rlAnklestPositiveSL2 = '<input type="checkbox" checked="checked" > Positive ';
}else{
    $rlAnklestPositiveSL2 = '<input type="checkbox"> Positive ';
}
if(isset($_POST['rlAnklestNegativeSL2']) && $_POST['rlAnklestNegativeSL2'] == "rlAnklestNegativeSL2"){
    $rlAnklestNegativeSL2 = '<input type="checkbox" checked="checked" > Negative ';
}else{
    $rlAnklestNegativeSL2 = '<input type="checkbox"> Negative ';
}

$data .= '<div style="margin:15px 0;"><u><b>Special tests :</b></u></div>';
$data .= '<table width="100%" border="1" cellpadding="0" cellspacing="0" style="text-align:center;">
    <tr>
        <td rowspan="1">Test</td>
        <td colspan="1">Right Ankle Findings</td>
        <td colspan="1">Left Ankle Findings</td>
    </tr>
    <tr>
        <td>Talar Tilt Test</td>
        <td>'.$rlAnklecdtPositiveR.' '.$rlAnklecdtNegativeR.'</td>
        <td>'.$rlAnklecdtPositiveL.' '.$rlAnklecdtNegativeL.'</td>
    </tr>
    <tr>
        <td>Inversion stress Test</td>
        <td>'.$rlAnklecdtPositiveER.' '.$rlAnklecdtNegativeER.'</td>
        <td>'.$rlAnklecdtPositiveEL.' '.$rlAnklecdtNegativeEL.'</td>
    </tr>
    <tr>
        <td>Eversion Stress Test</td>
        <td>'.$rlAnklestPositiveSR.' '.$rlAnklestNegativeSR.'</td>
        <td>'.$rlAnklestPositiveSL.' '.$rlAnklestNegativeSL.'</td>
    </tr>
    <tr>
        <td>Patellar Tap Test</td>
        <td>'.$rlAnklestPositiveSR2.' '.$rlAnklestNegativeSR2.'</td>
        <td>'.$rlAnklestPositiveSL2.' '.$rlAnklestNegativeSL2.'</td>
    </tr>
</table>';
//end Special tests

if(isset($_POST['GaitAnkle']) && $_POST['GaitAnkle'] == "GaitAnkle"){
    $GaitAnkle = '<input type="checkbox" checked="checked" > <u> Gait Analysis :</u>  ';
}else{
    $GaitAnkle = '<input type="checkbox"> <u> Gait Analysis :</u>  ';
}

if(isset($_POST['NormalAnkle']) && $_POST['NormalAnkle'] == "NormalAnkle"){
    $NormalAnkle = '<input type="checkbox" checked="checked" > Normal Gait  ';
}else{
    $NormalAnkle = '<input type="checkbox"> Normal Gait  ';
}

if(isset($_POST['AntalgicAnkle']) && $_POST['AntalgicAnkle'] == "AntalgicAnkle"){
    $AntalgicAnkle = '<input type="checkbox" checked="checked" > Antalgic Gait  ';
}else{
    $AntalgicAnkle = '<input type="checkbox"> Antalgic Gait  ';
}

if(isset($_POST['LimpingAnkle']) && $_POST['LimpingAnkle'] == "LimpingAnkle"){
    $LimpingAnkle = '<input type="checkbox" checked="checked" > Limping Gait ';
}else{
    $LimpingAnkle = '<input type="checkbox"> Limping Gait ';
}

if(isset($_POST['DecreaseAnkle']) && $_POST['DecreaseAnkle'] == "DecreaseAnkle"){
    $DecreaseAnkle = '<input type="checkbox" checked="checked" > Decrease cadence ';
}else{
    $DecreaseAnkle = '<input type="checkbox"> Decrease cadence ';
}

if(isset($_POST['DecreaseStepAnkle']) && $_POST['DecreaseStepAnkle'] == "DecreaseStepAnkle"){
    $DecreaseStepAnkle = '<input type="checkbox" checked="checked" > Decrease step length ';
}else{
    $DecreaseStepAnkle = '<input type="checkbox"> Decrease step length ';
}

$data .= '<table width="100%" cellpadding="0" cellspacing="0"   style="text-align:left; margin-top:20px;">
    <tr>
        <td>'.$GaitAnkle.' '.$NormalAnkle.''.$AntalgicAnkle.' '.$LimpingAnkle.'</td>
    </tr>
    <tr>
        <td>'.$DecreaseAnkle.' '.$DecreaseStepAnkle.'</td>
    </tr>
</table>';

//Objective Findings /Problems list :

if(isset($_POST['MildAnkle']) && $_POST['MildAnkle'] == "MildAnkle"){
    $MildAnkle = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildAnkle = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildAnkle2']) && $_POST['MildAnkle2'] == "MildAnkle2"){
    $MildAnkle2 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildAnkle2 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildAnkle3']) && $_POST['MildAnkle3'] == "MildAnkle3"){
    $MildAnkle3 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildAnkle3 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildAnkle4']) && $_POST['MildAnkle4'] == "MildAnkle4"){
    $MildAnkle4 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildAnkle4 = '<input type="checkbox"> Mild ';
}
if(isset($_POST['MildAnkle5']) && $_POST['MildAnkle5'] == "MildAnkle5"){
    $MildAnkle5 = '<input type="checkbox" checked="checked" > Mild ';
}else{
    $MildAnkle5 = '<input type="checkbox"> Mild ';
}

if(isset($_POST['ModerateAnkle']) && $_POST['ModerateAnkle'] == "ModerateAnkle"){
    $ModerateAnkle = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateAnkle = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateAnkle2']) && $_POST['ModerateAnkle2'] == "ModerateAnkle2"){
    $ModerateAnkle2 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateAnkle2 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateAnkle3']) && $_POST['ModerateAnkle3'] == "ModerateAnkle3"){
    $ModerateAnkle3 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateAnkle3 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateAnkle4']) && $_POST['ModerateAnkle4'] == "ModerateAnkle4"){
    $ModerateAnkle4 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateAnkle4 = '<input type="checkbox"> Moderate ';
}
if(isset($_POST['ModerateAnkle5']) && $_POST['ModerateAnkle5'] == "ModerateAnkle5"){
    $ModerateAnkle5 = '<input type="checkbox" checked="checked" > Moderate ';
}else{
    $ModerateAnkle5 = '<input type="checkbox"> Moderate ';
}

if(isset($_POST['severemuscleAnkle']) && $_POST['severemuscleAnkle'] == "severemuscleAnkle"){
    $severemuscleAnkle = '<input type="checkbox" checked="checked" > severe muscle spasm at the ';
}else{
    $severemuscleAnkle = '<input type="checkbox"> severe muscle spasm at the ';
}
if(isset($_POST['severemuscleAnkle2']) && $_POST['severemuscleAnkle2'] == "severemuscleAnkle2"){
    $severemuscleAnkle2 = '<input type="checkbox" checked="checked" > severe Limited AROM at ';
}else{
    $severemuscleAnkle2 = '<input type="checkbox"> severe Limited AROM at ';
}
if(isset($_POST['severemuscleAnkle3']) && $_POST['severemuscleAnkle3'] == "severemuscleAnkle3"){
    $severemuscleAnkle3 = '<input type="checkbox" checked="checked" > severe Restricted mobility at the ';
}else{
    $severemuscleAnkle3 = '<input type="checkbox"> severe Restricted mobility at the ';
}
if(isset($_POST['severemuscleAnkle4']) && $_POST['severemuscleAnkle4'] == "severemuscleAnkle4"){
    $severemuscleAnkle4 = '<input type="checkbox" checked="checked" > severe Decreased functional activities. ';
}else{
    $severemuscleAnkle4 = '<input type="checkbox"> severe Decreased functional activities. ';
}
if(isset($_POST['severemuscleAnkle5']) && $_POST['severemuscleAnkle5'] == "severemuscleAnkle5"){
    $severemuscleAnkle5 = '<input type="checkbox" checked="checked" > severe Decreased functional activities. ';
}else{
    $severemuscleAnkle5 = '<input type="checkbox"> severe Decreased functional activities. ';
}

if(isset($_POST['RightAnklemusclesAnkle']) && $_POST['RightAnklemusclesAnkle'] == "RightAnklemusclesAnkle"){
    $RightAnklemusclesAnkle = '<input type="checkbox" checked="checked" > Right Ankle muscles ';
}else{
    $RightAnklemusclesAnkle = '<input type="checkbox"> Right Ankle muscles ';
}
if(isset($_POST['RightAnklemusclesAnkle2']) && $_POST['RightAnklemusclesAnkle2'] == "RightAnklemusclesAnkle2"){
    $RightAnklemusclesAnkle2 = '<input type="checkbox" checked="checked" > Right Ankle joint ';
}else{
    $RightAnklemusclesAnkle2 = '<input type="checkbox"> Right Ankle joint ';
}
if(isset($_POST['RightAnklemusclesAnkle3']) && $_POST['RightAnklemusclesAnkle3'] == "RightAnklemusclesAnkle3"){
    $RightAnklemusclesAnkle3 = '<input type="checkbox" checked="checked" > Right Ankle joint ';
}else{
    $RightAnklemusclesAnkle3 = '<input type="checkbox"> Right Ankle joint. ';
}

if(isset($_POST['LeftAnklemusclesAnkle']) && $_POST['LeftAnklemusclesAnkle'] == "LeftAnklemusclesAnkle"){
    $LeftAnklemusclesAnkle = '<input type="checkbox" checked="checked" > Left Ankle muscles ';
}else{
    $LeftAnklemusclesAnkle = '<input type="checkbox"> Left Ankle muscles ';
}
if(isset($_POST['LeftAnklemusclesAnkle2']) && $_POST['LeftAnklemusclesAnkle2'] == "LeftAnklemusclesAnkle2"){
    $LeftAnklemusclesAnkle2 = '<input type="checkbox" checked="checked" > Left Ankle joint ';
}else{
    $LeftAnklemusclesAnkle2 = '<input type="checkbox"> Left Ankle joint ';
}
if(isset($_POST['LeftAnklemusclesAnkle3']) && $_POST['LeftAnklemusclesAnkle3'] == "LeftAnklemusclesAnkle3"){
    $LeftAnklemusclesAnkle3 = '<input type="checkbox" checked="checked" > Left Ankle joint ';
}else{
    $LeftAnklemusclesAnkle3 = '<input type="checkbox"> Left Ankle joint. ';
}

$data .= '<div style="margin:15px 0;"><u><b>Objective Findings /Problems list :</b></u></div>';
$data .= '<table width="100%" cellpadding="0" cellspacing="0" style="text-align:left;margin-left:20px;">
    <tr>
        <td> - '.$MildAnkle.''.$ModerateAnkle.''.$severemuscleAnkle.''.$RightAnklemusclesAnkle.''.$LeftAnklemusclesAnkle.'</td>
    </tr>
    <tr>
        <td> - '.$MildAnkle2.''.$ModerateAnkle2.''.$severemuscleAnkle2.''.$RightAnklemusclesAnkle2.''.$LeftAnklemusclesAnkle2.'</td>
    </tr>
    <tr>
        <td> - '.$MildAnkle3.''.$ModerateAnkle3.''.$severemuscleAnkle3.''.$RightAnklemusclesAnkle3.''.$LeftAnklemusclesAnkle3.'</td>
    </tr>
    <tr>
        <td> - '.$MildAnkle5.''.$ModerateAnkle5.''.$severemuscleAnkle5.'</td>
    </tr>
    <tr>
        <td> - '.$MildAnkle4.''.$ModerateAnkle4.''.$severemuscleAnkle4.'</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>';
//end Objective Findings /Problems list :

//start Diagnosis Codes
if(isset($_POST['S134XXA']) && $_POST['S134XXA'] == "S134XXA"){
    $S134XXA = '<input type="checkbox" checked="checked" >';
}else{
    $S134XXA = '<input type="checkbox">';
}

if(isset($_POST['S335XXA']) && $_POST['S335XXA'] == "S335XXA"){
    $S335XXA = '<input type="checkbox" checked="checked" > ';
}else{
    $S335XXA = '<input type="checkbox"> ';
}

if(isset($_POST['S233XXA']) && $_POST['S233XXA'] == "S233XXA"){
    $S233XXA = '<input type="checkbox" checked="checked" > ';
}else{
    $S233XXA = '<input type="checkbox"> ';
}

if(isset($_POST['M5412']) && $_POST['M5412'] == "M5412"){
    $M5412 = '<input type="checkbox" checked="checked" > ';
}else{
    $M5412 = '<input type="checkbox">';
}

if(isset($_POST['M5416']) && $_POST['M5416'] == "M5416"){
    $M5416 = '<input type="checkbox" checked="checked" > ';
}else{
    $M5416 = '<input type="checkbox">';
}

if(isset($_POST['M47814']) && $_POST['M47814'] == "M47814"){
    $M47814 = '<input type="checkbox" checked="checked" > ';
}else{
    $M47814 = '<input type="checkbox">';
}

if(isset($_POST['S43401A']) && $_POST['S43401A'] == "S43401A"){
    $S43401A = '<input type="checkbox" checked="checked" > ';
}else{
    $S43401A = '<input type="checkbox">';
}

if(isset($_POST['S43402A']) && $_POST['S43402A'] == "S43402A"){
    $S43402A = '<input type="checkbox" checked="checked" > ';
}else{
    $S43402A = '<input type="checkbox">';
}

if(isset($_POST['M24819']) && $_POST['M24819'] == "M24819"){
    $M24819 = '<input type="checkbox" checked="checked" > ';
}else{
    $M24819 = '<input type="checkbox">';
}

if(isset($_POST['M7541']) && $_POST['M7541'] == "M7541"){
    $M7541 = '<input type="checkbox" checked="checked" > ';
}else{
    $M7541 = '<input type="checkbox">';
}

if(isset($_POST['S53401A']) && $_POST['S53401A'] == "S53401A"){
    $S53401A = '<input type="checkbox" checked="checked" > ';
}else{
    $S53401A = '<input type="checkbox">';
}

if(isset($_POST['S53402A']) && $_POST['S53402A'] == "S53402A"){
    $S53402A = '<input type="checkbox" checked="checked" > ';
}else{
    $S53402A = '<input type="checkbox">';
}

if(isset($_POST['M2483']) && $_POST['M2483'] == "M2483"){
    $M2483 = '<input type="checkbox" checked="checked" > ';
}else{
    $M2483 = '<input type="checkbox">';
}

if(isset($_POST['S63501A']) && $_POST['S63501A'] == "S63501A"){
    $S63501A = '<input type="checkbox" checked="checked" > ';
}else{
    $S63501A = '<input type="checkbox">';
}

if(isset($_POST['S63502A']) && $_POST['S63502A'] == "S63502A"){
    $S63502A = '<input type="checkbox" checked="checked" > ';
}else{
    $S63502A = '<input type="checkbox">';
}

if(isset($_POST['S63609S']) && $_POST['S63609S'] == "S63609S"){
    $S63609S = '<input type="checkbox" checked="checked" > ';
}else{
    $S63609S = '<input type="checkbox">';
}

if(isset($_POST['G5600']) && $_POST['G5600'] == "G5600"){
    $G5600 = '<input type="checkbox" checked="checked" > ';
}else{
    $G5600 = '<input type="checkbox">';
}

if(isset($_POST['S73101A']) && $_POST['S73101A'] == "S73101A"){
    $S73101A = '<input type="checkbox" checked="checked" > ';
}else{
    $S73101A = '<input type="checkbox">';
}

if(isset($_POST['S73102A']) && $_POST['S73102A'] == "S73102A"){
    $S73102A = '<input type="checkbox" checked="checked" > ';
}else{
    $S73102A = '<input type="checkbox">';
}

if(isset($_POST['M2485']) && $_POST['M2485'] == "M2485"){
    $M2485 = '<input type="checkbox" checked="checked" > ';
}else{
    $M2485 = '<input type="checkbox">';
}

if(isset($_POST['M2390']) && $_POST['M2390'] == "M2390"){
    $M2390 = '<input type="checkbox" checked="checked" > ';
}else{
    $M2390 = '<input type="checkbox">';
}

if(isset($_POST['S8391XA']) && $_POST['S8391XA'] == "S8391XA"){
    $S8391XA = '<input type="checkbox" checked="checked" > ';
}else{
    $S8391XA = '<input type="checkbox">';
}

if(isset($_POST['S8392XA']) && $_POST['S8392XA'] == "S8392XA"){
    $S8392XA = '<input type="checkbox" checked="checked" > ';
}else{
    $S8392XA = '<input type="checkbox">';
}

if(isset($_POST['M79606']) && $_POST['M79606'] == "M79606"){
    $M79606 = '<input type="checkbox" checked="checked" > ';
}else{
    $M79606 = '<input type="checkbox">';
}

if(isset($_POST['S93401A']) && $_POST['S93401A'] == "S93401A"){
    $S93401A = '<input type="checkbox" checked="checked" > ';
}else{
    $S93401A = '<input type="checkbox">';
}

if(isset($_POST['S93402A']) && $_POST['S93402A'] == "S93402A"){
    $S93402A = '<input type="checkbox" checked="checked" > ';
}else{
    $S93402A = '<input type="checkbox">';
}

if(isset($_POST['M24873']) && $_POST['M24873'] == "M24873"){
    $M24873 = '<input type="checkbox" checked="checked" > ';
}else{
    $M24873 = '<input type="checkbox">';
}

if(isset($_POST['S93601S']) && $_POST['S93601S'] == "S93601S"){
    $S93601S = '<input type="checkbox" checked="checked" > ';
}else{
    $S93601S = '<input type="checkbox">';
}

if(isset($_POST['S93602S']) && $_POST['S93602S'] == "S93602S"){
    $S93602S = '<input type="checkbox" checked="checked" > ';
}else{
    $S93602S = '<input type="checkbox">';
}

if(isset($_POST['S93501A']) && $_POST['S93501A'] == "S93501A"){
    $S93501A = '<input type="checkbox" checked="checked" > ';
}else{
    $S93501A = '<input type="checkbox">';
}

if(isset($_POST['S93502A']) && $_POST['S93502A'] == "S93502A"){
    $S93502A = '<input type="checkbox" checked="checked" > ';
}else{
    $S93502A = '<input type="checkbox">';
}

$data .= '<div style="margin:15px 0;"><u><b>Diagnosis Codes :</b></u></div>';

$data .= '<table width="100%" cellpadding="0" cellspacing="0" style="margin-top:0px;">
    <tr>
        <td>'.$S134XXA.' S13.4XXA</td>
        <td>Cervical Sprain/Strain</td>
    </tr>
    <tr>
        <td>'.$S335XXA.' S33.5XXA</td>
        <td>Lumbar Sprain/Strain</td>
    </tr>
    <tr>
        <td>'.$S233XXA.' S23.3XXA</td>
        <td>Thoracic Sprain/Strain</td>
    </tr>
    <tr>
        <td>'.$M5412.' M54.12</td>
        <td>Cervical Radiculopathy</td>
    </tr>
    <tr>
        <td>'.$M5416.' M54.16</td>
        <td>Lumbar Radiculopathy</td>
    </tr>
    <tr>
        <td>'.$M47814.' M47.814</td>
        <td>Thoracic Spondylosis</td>
    </tr>
    <tr>
        <td>'.$S43401A.' S43.401A</td>
        <td>Shoulder Sprain R</td>
    </tr>
    <tr>
        <td>'.$S43402A.' S43.402A</td>
        <td>Shoulder Sprain L</td>
    </tr>
    <tr>
        <td>'.$M24819.' M24.819</td>
        <td>Shoulder derangement</td>
    </tr>
    <tr>
        <td>'.$M7541.' M75.41</td>
        <td>Impingement Shoulder R</td>
    </tr>
    <tr>
        <td>'.$S53401A.' S53.401A</td>
        <td>Sprain of Elbow R</td>
    </tr>
    <tr>
        <td>'.$S53402A.' S53.402A</td>
        <td>Sprain of Elbow L</td>
    </tr>
    <tr>
        <td>'.$M2483.' M24.83</td>
        <td>Wrist derangement</td>
    </tr>
    <tr>
        <td>'.$S63501A.' S63.501A</td>
        <td>Sprain of Wrist/ Hand R</td>
    </tr>
    <tr>
        <td>'.$S63502A.' S63.502A</td>
        <td>Sprain of Wrist/ Hand L</td>
    </tr>
    <tr>
        <td>'.$S63609S.' S63.609 S</td>
        <td>Sprain of thumb (L/R)</td>
    </tr>
    <tr>
        <td>'.$G5600.'  G56.00	</td>
        <td>CTS</td>
    </tr>
    <tr>
        <td>'.$S73101A.' S73.101A</td>
        <td>Sprain of Hip R</td>
    </tr>
    <tr>
        <td>'.$S73102A.' S73.102A</td>
        <td>Sprain of Hip L</td>
    </tr>
    <tr>
        <td>'.$M2485.' M24.85</td>
        <td>Derangement of hip L/R</td>
    </tr>
    <tr>
        <td>'.$M2390.' M23.90</td>
        <td>Knee derangement</td>
    </tr>
    <tr>
        <td>'.$S8391XA.' S83.91XA</td>
        <td>Knee Sprain R</td>
    </tr>
    <tr>
        <td>'.$S8392XA.' S83.92XA</td>
        <td>Knee Sprain L</td>
    </tr>
    <tr>
        <td>'.$M79606.' M79.606</td>
        <td>Sprain in leg (L/R)</td>
    </tr>
    <tr>
        <td>'.$S93401A.' S93.401A</td>
        <td>Sprain of Ankle R</td>
    </tr>
    <tr>
        <td>'.$S93402A.' S93.402A</td>
        <td>Sprain of Ankle L</td>
    </tr>
    <tr>
        <td>'.$M24873.' M24.873</td>
        <td>Ankle derangement L/R</td>
    </tr>
    <tr>
        <td>'.$S93601S.' S93.601S</td>
        <td>Sprain of Foot R</td>
    </tr>
    <tr>
        <td>'.$S93602S.' S93.602S</td>
        <td>Sprain of Foot L</td>
    </tr>
    <tr>
        <td>'.$S93501A.' S93.501A</td>
        <td>Sprain of Toe R</td>
    </tr>
    <tr>
        <td>'.$S93502A.' S93.502A</td>
        <td>Sprain of Toe L</td>
    </tr>
</table>';
//end Diagnosis Codes 

//start Short Term Goals

if(isset($_POST['stg1']) && $_POST['stg1'] == "stg1"){
    $stg1 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg1 = '<input type="checkbox">';
}

if(isset($_POST['stg2']) && $_POST['stg2'] == "stg2"){
    $stg2 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg2 = '<input type="checkbox">';
}

if(isset($_POST['stg3']) && $_POST['stg3'] == "stg3"){
    $stg3 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg3 = '<input type="checkbox">';
}

if(isset($_POST['stg4']) && $_POST['stg4'] == "stg4"){
    $stg4 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg4 = '<input type="checkbox">';
}

if(isset($_POST['stg5']) && $_POST['stg5'] == "stg5"){
    $stg5 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg5 = '<input type="checkbox">';
}

if(isset($_POST['stg6']) && $_POST['stg6'] == "stg6"){
    $stg6 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg6 = '<input type="checkbox">';
}

if(isset($_POST['stg7']) && $_POST['stg7'] == "stg7"){
    $stg7 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg7 = '<input type="checkbox">';
}

if(isset($_POST['stg8']) && $_POST['stg8'] == "stg8"){
    $stg8 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg8 = '<input type="checkbox">';
}

if(isset($_POST['stg9']) && $_POST['stg9'] == "stg9"){
    $stg9 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg9 = '<input type="checkbox">';
}

if(isset($_POST['stg10']) && $_POST['stg10'] == "stg10"){
    $stg10 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg10 = '<input type="checkbox">';
}

if(isset($_POST['stg11']) && $_POST['stg11'] == "stg11"){
    $stg11 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg11 = '<input type="checkbox">';
}

if(isset($_POST['stg12']) && $_POST['stg12'] == "stg12"){
    $stg12 = '<input type="checkbox" checked="checked" > ';
}else{
    $stg12 = '<input type="checkbox">';
}

$data .= '<div style="margin:15px 0;"><u><b>Short Term Goals :</b></u>(6-8) weeks</div>';

$data .= '<table width="100%" cellpadding="0" cellspacing="0" style="margin-top:0px;">
    <tr>
        <td>'.$stg1.' Decrease pain level by 10% to be able to perform dressing, bathing and combing hair without pain.
        </td>
    </tr>
    <tr>
        <td>'.$stg2.' Increase muscle strength by 1 grade to be able to carry and lift moderate to heavy weights.
        </td>
    </tr>
    <tr>
        <td>'.$stg3.' Increase AROM 10 % to be able to perform reaching &nbsp;'.$stg4.'  and to be able to drive for more than 8 hours without pain.
        </td>
    </tr>
    <tr>
        <td>'.$stg5.' Pt will be independent with HEP.
        </td>
    </tr>
    <tr>
        <td>'.$stg6.'  <b>Patient safely performs the duties of his job with fewer restrictions, pain and limitations. For example, to be able to operate a motor vehicle safely without causing injuries to themselves, their passengers, and other vehicles.</b>
        </td>
    </tr>
    <tr>
        <td>'.$stg7.' Decrease pain level by 10% to be able to stand for 3 hours without pain.
        </td>
    </tr>
    <tr>
        <td>'.$stg8.' Increase muscle strength by 1 grade to be able to get up and to transfer from the chair without pain.
        </td>
    </tr>
    <tr>
        <td>'.$stg9.' Increase AROM 10 %to be able to negotiate and climb 30 stairs without pain.
        </td>
    </tr>
    <tr>
        <td>'.$stg10.' Improve gait to decrease risk of fall and to be able to safely ambulate (8) block(s).
        </td>
    </tr>
    <tr>
        <td>'.$stg11.' Pt will be independent with HEP.
        </td>
    </tr>
    <tr>
        <td>'.$stg12.' <b>Patient safely performs the duties of his job with fewer restrictions, pain and limitations. For example, to be able to operate a motor vehicle safely without causing injuries to themselves, their passengers, and other vehicles.</b>
        </td>
    </tr>
</table>';
//end Short Term Goals 







echo $data;
die;
// $mpdf->SetFont('Arial','B',16);
$mpdf->WriteHTML($data);
$mpdf->Output('data.pdf', 'D');
