<?php

$name = $_POST['participantName'];

$programName = "Bootstrap Training";


require('fpdf/fpdf.php');

//$name = text to be added, $x= x cordinate, $y = y coordinate, $a = alignment , $f= Font Name, $t = Bold / Italic, $s = Font Size, $r = Red, $g = Green Font color, $b = Blue Font Color
function AddText($pdf, $text, $x, $y, $a, $f, $t, $s, $r, $g, $b) {
$pdf->SetFont($f,$t,$s);	
$pdf->SetXY($x,$y);
$pdf->SetTextColor($r,$g,$b);
$pdf->Cell(1,20,$text,0,0,$a);	
}


//$imgname = image file name , $x= x cordinate, $y = y coordinate
function AddImage($pdf, $imgname, $x, $y) {

    $pdf->Image($imgname,$x,$y,0);	
    
}


//First participant
//Create A 4 Landscape page
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetCreator('Haneef Puttur');
// Add background image for PDF
AddImage($pdf,'cert.jpeg', 0,0);


//Add a Name to the certificate


// Name of the participant
AddText($pdf,ucwords($name), 55,108, 'C', 'Helvetica','B',20,0,0,0);


// The name of the event that the participant has participated in
AddText($pdf,ucwords($programName), 55,140, 'C', 'Helvetica','B',20,0,0,0);





$pdf->Output();



    


