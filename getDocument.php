<?php

$cardID = strtoupper(preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['cardID']));
$docID = preg_replace("/[^0-9A-zA-Z]+/", "", $_GET['docID']);

$formattedCardID = substr($cardID, 0, 4) . '-' . substr($cardID, 4, 4);


$realDocName['20210610_StatutsSGSSE_modification'] = 'documents/0WMuExSeEO.pdf';
$realDocName['00000000_PROJET_StatutsSGSSE_consolide'] = 'documents/1WMuLiMQt.pdf';
$realDocName['20210610_SGSSE_PVAG_20200617'] = 'documents/56FoijUuuJBHBhj.pdf';
$realDocName['20210610_SGSSE_AG225_ODJ'] = 'documents/efRGWerfg3egSEgg.pdf';




require("users.php");


if(!isset($users[$cardID])){
	header("location:login.php?back");
	exit();
}

else{
	$loggedInUser = $users[$cardID];
	$formattedUser = strtolower(preg_replace("/[^a-zA-Z0-9 «»\&éèàäëöî]+/", "", $loggedInUser['companyName']));
}

if(!isset($realDocName[$docID])){
	header("location:login.php?back");
	exit();
}

else{
	$docName = $realDocName[$docID];
}



if (file_exists($docName)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$docID . '.PDF');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($docName));
    ob_clean();
    flush();
    readfile($docName);
    exit;
}



exit; 

use setasign\FpdiProtection\FpdiProtection;
use setasign\Fpdi\PdfReader;

require("classes/fpdf/fpdf.php");
require("classes/fpdi/autoload.php");
require("classes/fpdip/autoload.php");


$pdf = new FpdiProtection();


$ownerPassword = $pdf->setProtection(FpdiProtection::PERM_PRINT ,null,null);

$pageCount = $pdf->setSourceFile($docName);
$pdf->SetTitle($docID . ' ' . $formattedCardID);
$pdf->SetAuthor($formattedCardID);
$pdf->SetSubject($formattedUser);
$pdf->SetCreator("WAM64 - 2014-2021 Killian Schaer");


for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    $tplIdx = $pdf->importPage($pageNo);

    // add a page

    $specs = $pdf->getTemplateSize($tplIdx);
	
    $pdf->addPage($specs['height'] > $specs['width'] ? 'P' : 'L');

    // font and color selection
    $pdf->SetFont('Helvetica');
    $pdf->SetTextColor(220, 220, 220);

    // now write some text above the imported page


    //$pdf->Rotate(60,5,10);
	
	$stringToWaterMark = utf8_decode($formattedCardID . '   '. date("d.m.Y H:i:s" ). '   '  .  $formattedUser .  '   ' . microtime() . '   ' . $formattedCardID . '   '. date("d.m.Y H:i:s" ). '   '  .  $formattedUser .  '   ' . microtime() . '   ' . $formattedCardID . '   '. date("d.m.Y H:i:s" ). '   '  .  $formattedUser .  '   ' . microtime() . '   ' . $formattedCardID . '   '. date("d.m.Y H:i:s" ). '   '  .  $formattedUser .  '   ' . microtime() . '   ' . $formattedCardID . '   '. date("d.m.Y H:i:s" ). '   '  .  $formattedUser .  '   ' . microtime() . '   ' . $formattedCardID . '   '. date("d.m.Y H:i:s" ). '   '  .  $formattedUser .  '   ' . microtime() . '   ' . $formattedCardID . '   '. date("d.m.Y H:i:s" ). '   '  .  $formattedUser .  '   ' . microtime() . '   ' . $formattedCardID . '   '. date("d.m.Y H:i:s" ). '   '  .  $formattedUser .  '   ' . microtime() . '   ' . $formattedCardID . '   '. date("d.m.Y H:i:s" ). '   '  .  $formattedUser .  '   ' . microtime() . '   '	);
	
    $pdf->Text(-10,290,$stringToWaterMark);
	
	
	
	$pdf->SetFontSize(3);
    
	
	$pdf->Text(-10,100, $stringToWaterMark . $stringToWaterMark . $stringToWaterMark);


	$pdf->SetFontSize(8);

    $pdf->Rotate(45,0,0);
    $pdf->Text(0,0, $stringToWaterMark);
    $pdf->Rotate(0);

	 $pdf->useTemplate($tplIdx);


	$pdf->SetFontSize(12);

	    $pdf->Text(-4,10,$stringToWaterMark);

}



$pdf->Output('I', 'secureDocument_' . time(). '.pdf');



?>