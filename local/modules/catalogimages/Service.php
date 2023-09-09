<?
namespace Local\Modules\CatalogImages;

use Local\Modules\CatalogImages\Table,
    Local\Modules\CatalogImages\Images,
    \Bitrix\Main\Application;

class Service
{
    protected $images;

    function __construct()
    {
        $this->images = new Images;
    }

    public function add()
    {
        $data = $this->images->getPicturesDataForTable();
        $connection = Application::getConnection();
        try {
            $connection->startTransaction();

            Table::deleteAll();
        
            $result = Table::addMulti($data);
            
            if (!$result->isSuccess()) {
                throw new \Exception(implode(', ', $result->getErrorMessages()));
            }
        
            $connection->commitTransaction();
        } catch (\Exception $e) {
            $connection->rollbackTransaction();
            throw new \Exception("Could not add data to the table: " . $e->getMessage());
        }
    }

    public function get(string|array $name)
    {
        return Table::getList([ 'filter' => ['=PRODUCT_NAME' => $name] ])->fetchAll();
    }
}
