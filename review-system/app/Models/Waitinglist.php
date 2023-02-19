<?php

namespace App\Models;

use CodeIgniter\Model;

class Waitinglist extends Model
{
    protected $table = 'waitinglist';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'url', 'rating', 'catid', 'platform', 'description', 'status'];

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function __construct()
    {
        parent::__construct();
        $this->appModel = new Application();
        $this->catModel = new Category();
        $this->appCatModel = new Applicationcat();
    }

    /**
     * Add a new waitinglist entry
     *
     * @param string $name
     * @param string $url
     * @param float $rating
     * @param int $catid
     * @param string $platform
     * @param string $description
     * @return int
     */
    public function addWaitinglistEntry($name, $url, $rating, $catid, $platform = 'mobile', $description = '', $status = 0)
    {
        $data = [
            'name' => $name,
            'url' => $url,
            'rating' => $rating,
            'catid' => $catid,
            'platform' => $platform,
            'description' => $description,
            'status' => $status
        ];

        $this->insert($data);
        return $this->insertID();
    }

    /**
     * Update a waitinglist entry
     *
     * @param int $id
     * @param string $name
     * @param string $url
     * @param float $rating
     * @param int $catid
     * @param string $platform
     * @param string $description
     * @param int $status
     * @return bool
     */
    public function updateWaitinglistEntry($id, $name, $url, $rating, $catid, $platform = 'mobile', $description = '', $status = 0)
    {
        $data = [
            'name' => $name,
            'url' => $url,
            'rating' => $rating,
            'catid' => $catid,
            'platform' => $platform,
            'description' => $description,
            'status' => $status
        ];

        $this->where('id', $id);
        return $this->update($data);
    }

    /**
     * Delete a waitinglist entry
     *
     * @param int $id
     * @return bool
     */
    public function deleteWaitinglistEntry($id)
    {
        $this->where('id', $id);
        return $this->delete();
    }

    /**
 * Get details of a waitinglist entry including application name and category name
 *
 * @param int $id
 * @return array|null
 */
public function getWaitinglistDetails($id)
{
    $this->select('waitinglist.*, application.name AS app_name, category.name AS cat_name');
    $this->join('application', 'application.id = waitinglist.appid');
    $this->join('category', 'category.id = waitinglist.catid');
    $this->where('waitinglist.id', $id);
    return $this->get()->getRowArray();
}
}
?>
