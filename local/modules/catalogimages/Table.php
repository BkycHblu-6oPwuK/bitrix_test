<?
namespace Local\Modules\CatalogImages;

use Bitrix\Main,
    Bitrix\Main\ORM,
    Bitrix\Main\Application,
    Bitrix\Main\DB\SqlQueryException;

class Table extends ORM\Data\DataManager
{
    public static function getTableName()
    {
        return 'images';
    }

    public static function deleteAll()
    {
        $connection = Application::getConnection();
        $tableName = static::getTableName();
        $connection->queryExecute('DELETE FROM `' . $tableName . '`');
    }
    
    public static function ensureTableExists()
    {
        $connection = Application::getConnection();
        $tableName = static::getTableName();

        if (!$connection->isTableExists($tableName)) {
            try {
                $connection->queryExecute('
                    CREATE TABLE ' . $tableName . ' (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        product_name VARCHAR(255) NOT NULL,
                        image_count INT NOT NULL,
                        INDEX idx_product_name (product_name)
                    )
                ');
            } catch (SqlQueryException $e) {
                throw new \Exception("Failed to create table: " . $e->getMessage());
            }
        }
    }

    public static function getMap()
    {
        return array(
            'ID' => new ORM\Fields\IntegerField('ID', array(
                'primary' => true,
                'autocomplete' => true
            )),
            'PRODUCT_NAME' => new ORM\Fields\StringField('PRODUCT_NAME', array(
                'required' => true,
            )),
            'IMAGE_COUNT' => new ORM\Fields\IntegerField('IMAGE_COUNT', array(
                'required' => true,
            )),
        );
    }
}
