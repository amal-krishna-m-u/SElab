<?php
namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'catid';
    protected $allowedFields = ['catname'];

    /**
     * Add a new category
     *
     * @param string $catname
     * @return int
     */
    public function addCategory($catname)
    {
        $data = [
            'catname' => $catname
        ];
        $this->insert($data);
        return $this->insertID();
    }

    /**
     * Update a category
     *
     * @param int $catid
     * @param string $catname
     * @return bool
     */
    public function updateCategory($catid, $catname)
    {
        $data = [
            'catname' => $catname
        ];
        $this->where('catid', $catid);
        return $this->update($data);
    }

    /**
     * Delete a category
     *
     * @param int $catid
     * @return bool
     */
    public function deleteCategory($catid)
    {
        $this->where('catid', $catid);
        return $this->delete();
    }
    public function getCategories()
    {
        $db = db_connect();
        $builder = $db->table('category');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
