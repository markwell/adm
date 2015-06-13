<?
class Model_Main extends Model
{
    public function __construct()
    {
        $this->db_connect();
    }
        public function getNews()
    {
        $query = $this->DBH->prepare("SELECT * FROM item");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
