<?
namespace Local\Modules\CatalogImages;

class Images 
{

    public static function getAllPictures()
    {
        return include $_SERVER['DOCUMENT_ROOT'] . '/data_array.php';
    }

    public function processAllPictures()
    {
        $pictures = [];
        $allowFormat = ['jpg', 'jpeg', 'png'];

        $filesArray = $this->getAllPictures();
        
        foreach ($filesArray as $fileName) {
            $lowFileName = mb_strtolower($fileName);
            $matches = [];
            if (preg_match("/^(.+?) (.+?).([a-z]+)$/", $lowFileName, $matches)) {
                list($fullName, $code, $name, $format) = $matches;
                if (
                    !empty($code) &&
                    in_array($format, $allowFormat) &&
                    strpos($name, '.resize') === false
                ) {
                    $cleanCode = pathinfo($code, PATHINFO_FILENAME);
                    $cleanFileName = pathinfo($fileName, PATHINFO_BASENAME);
                    $pictures[$cleanCode][] = $cleanFileName;
                }
            }
        }

        return $pictures;
    }

    public function getPicturesDataForTable()
    {
        $nameArray = $this->processAllPictures();
        $data = [];
        foreach($nameArray as $key => $name){
            $data[] = [
                'PRODUCT_NAME' => $key,
                'IMAGE_COUNT' => count($name)
            ];
        }
        return $data;
    }
}