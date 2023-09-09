<?
require($_SERVER['DOCUMENT_ROOT'].'/local/templates/Test/header.php');
$APPLICATION->SetTitle("Главная");
require_once 'local/modules/catalogimages/Service.php';
require_once 'local/modules/catalogimages/Images.php';
require_once 'local/modules/catalogimages/Table.php';

use Local\Modules\CatalogImages\Service;

$object = new Service();

pre($object->get('101-03004'));

require($_SERVER['DOCUMENT_ROOT'].'/local/templates/Test/footer.php');
?>