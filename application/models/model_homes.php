<?
class Model_Homes extends Model
{
    public function __construct()
    {
        $this->db_connect();
    }
        public function getHomes()
    {
        $query = $this->DBH->prepare("SELECT * FROM homes");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
