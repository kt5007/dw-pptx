<?php
// pptx処理用のパッケージのインポート
require_once __DIR__ . '/PhpPresentation/src/PhpPresentation/Autoloader.php';
\PhpOffice\PhpPresentation\Autoloader::register();

require_once __DIR__ . '/PhpOffice/src/Common/Autoloader.php';
\PhpOffice\Common\Autoloader::register();

use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\DocumentLayout;

// 複数の区切り文字を指定できる関数
function multiexplode ($delimiters, $string) {
	$tmp = str_replace($delimiters, $delimiters[0], $string);
	return explode($delimiters[0], $tmp);
}

// 空白を処理する関数
function deletePlainLine ($string){
    // 正規表現を指定して分割
    $ret = multiexplode(["\r", "\n", "\r\n"], $string);

    // 空白文字を詰める
    $ret = array_map('trim', $ret);

    // 空行を削除
    $ret = array_filter($ret, 'strlen');

    return $ret;
}

// postから取得
$title = $_POST['title'];
$text_phrases = htmlspecialchars( $_POST['text_phrases']);
$file_name = $title.'.pptx';
$phrases = deletePlainLine ($text_phrases);


//新規プレゼンテーション作成
$phpPres = new PhpPresentation();
$phpPres ->getLayout()
    ->setDocumentLayout(DocumentLayout::LAYOUT_SCREEN_16X9, true);

//ドキュメントのプロパティ設定
$phpPres->getDocumentProperties()
    ->setCreator('@kenjin')
    ->setCompany('kenjin')
    ->setTitle('PHPPresentation Sample')
    ->setDescription('PHPPresentationのサンプルです。');

// タイトルスライド
$slide = $phpPres->getActiveSlide();
$shape = $slide->createRichTextShape()
    ->setHeight(300)
    ->setWidth(600)
    ->setOffsetX(160)
    ->setOffsetY(70);
$shape->getActiveParagraph()
    ->getAlignment()
    ->setHorizontal(Alignment::HORIZONTAL_CENTER);
$textRun = $shape->createTextRun($title);
$textRun->getFont()
    ->setName('ＭＳ Ｐゴシック')
    ->setBold(false)
    ->setSize(40.5)
    ->setColor(new Color('FF000000'));

$index = 1;
foreach($phrases as $phrase){
    
    //図形(テキスト)追加
    $phpPres->createSlide();
    $slide = $phpPres->getSlide($index);
    $shape = $slide->createRichTextShape()
        ->setHeight(600)
        ->setWidth(900)
        ->setOffsetX(20)
        ->setOffsetY(10);
    $shape->getActiveParagraph()
        ->getAlignment()
        ->setHorizontal(Alignment::HORIZONTAL_LEFT);
    $textRun = $shape->createTextRun("$phrase");
    $textRun->getFont()
        ->setName('ＭＳ Ｐゴシック')
        ->setBold(false)
        ->setSize(32)
        ->setColor(new Color('FF000000'));
    $index += 1;
}

// $oSlide = 
// $oSlide->setIsVisible(false);
// var_dump($oSlide->isVisible());
    
//ファイルダウンロード
//MIMEタイプ：https://technet.microsoft.com/ja-jp/ee309278.aspx
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename*=utf-8\'\'' . rawurlencode($file_name));
header('Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Expires: 0');
$xmlWriter = IOFactory::createWriter($phpPres, 'PowerPoint2007');
ob_end_clean(); //バッファ消去
$xmlWriter->save('php://output');