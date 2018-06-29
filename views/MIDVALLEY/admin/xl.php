<?php
require_once ('../../../vendor/autoload.php');
use App\MidValley\MidValley;
$obj= new MidValley();
$allData=$obj->index();

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
    die('This example should only be run from a Web Browser');

/** Include PHPExcel */


require_once('../../../vendor/phpoffice/phpexcel/Classes/PHPExcel.php');


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
    ->setLastModifiedBy("Maarten Balliauw")
    ->setTitle("Office 2007 XLSX Test Document")
    ->setSubject("Office 2007 XLSX Test Document")
    ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
    ->setKeywords("office 2007 openxml php")
    ->setCategory("Test result file");


// Add some data
$objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A1', 'ID')
    ->setCellValue('B1', 'Record SL')
    ->setCellValue('C1', 'Record Date')
    ->setCellValue('D1', 'Flat No.')
    ->setCellValue('E1', 'Name of the Flat Owner')
    ->setCellValue('F1', 'Contact Number')
    ->setCellValue('G1', 'Previous Month')
    ->setCellValue('H1', 'Previous Month Reading')
    ->setCellValue('I1', 'Current Month')
    ->setCellValue('J1', 'Current Month Reading')
    ->setCellValue('K1', 'Net Consumed')
    ->setCellValue('L1', 'Electric Bill(Flat wise)')
    ->setCellValue('M1', 'Electric Bill(Common)')
    ->setCellValue('N1', 'Fuel Cost for Generator')
    ->setCellValue('O1', 'Security Maintenance Cost')
    ->setCellValue('P1', 'Operating Expenses')
    ->setCellValue('Q1', 'Maintenance Cost')
    ->setCellValue('R1', 'Imam/Muazzin')
    ->setCellValue('S1', 'Community Hall')
    ->setCellValue('T1', 'Other')
    ->setCellValue('U1', 'Mode of Payment')
    ->setCellValue('V1', 'Taka(In Words)')
    ->setCellValue('W1', 'Confirm Payment');

$id=0;
$counter=1;
foreach($allData as $row) {
    $id++;
    $counter++;
// Miscellaneous glyphs, UTF-8
    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A' . $counter, $id)
        ->setCellValue('B' . $counter, $row->serial_num)
        ->setCellValue('C' . $counter, $row->date)
        ->setCellValue('D' . $counter, $row->flat_num)
        ->setCellValue('E' . $counter, $row->owner)
        ->setCellValue('F' . $counter, $row->contact)
        ->setCellValue('G' . $counter, $row->from_m)
        ->setCellValue('H' . $counter, $row->previous)
        ->setCellValue('I' . $counter, $row->to_m)
        ->setCellValue('J' . $counter, $row->current)
        ->setCellValue('K' . $counter, $row->consumed)
        ->setCellValue('L' . $counter, $row->ebi)
        ->setCellValue('M' . $counter, $row->ebc)
        ->setCellValue('N' . $counter, $row->fuel)
        ->setCellValue('O' . $counter, $row->security)
        ->setCellValue('P' . $counter, $row->operating)
        ->setCellValue('Q' . $counter, $row->repair)
        ->setCellValue('R' . $counter, $row->imam)
        ->setCellValue('S' . $counter, $row->rent)
        ->setCellValue('T' . $counter, $row->other)
        ->setCellValue('U' . $counter, $row->payment)
        ->setCellValue('V' . $counter, $row->tka)
        ->setCellValue('W' . $counter, $row->pay_confirm);
// Rename worksheet
    $objPHPExcel->getActiveSheet()->setTitle('Mid Valley');

}
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Mid Valley.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;

