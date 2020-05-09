<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Item Controller
 *
 * @property \App\Model\Table\ItemTable $Item
 *
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemController extends AppController
{

    /**
     * Categories method
     *
     * @return \Cake\Http\Response|null
     */
    public function categories()
    {
        $connection = \Cake\Datasource\ConnectionManager::get('default');
        $items = $connection->execute("SELECT Count(Item.id) AS total, Category.id AS catId, Category.name AS catName
                            -- FROM Item
                            -- INNER JOIN item_category_relations icr ON icr.ItemNumber = (Item.Number)
                            -- INNER JOIN category ON category.id = (icr.categoryId)
                            FROM category
                            LEFT JOIN item_category_relations icr ON category.id = icr.categoryId
                            LEFT JOIN item ON icr.ItemNumber = Item.Number
                            GROUP BY category.id
                            ORDER BY total DESC")
                        ->fetchAll('assoc');

        $this->set(compact('items'));
    }


    /**
     * categoriesTree method
     *
     * @return \Cake\Http\Response|null
     */
    public function categoriesTree()
    {
        $connection = \Cake\Datasource\ConnectionManager::get('default');
        $items = $connection->execute("SELECT Count(Item.id) AS total, Category.id AS catId, Category.name AS catName, cr.ParentcategoryId
                            FROM category
                            LEFT JOIN item_category_relations icr ON category.id = icr.categoryId
                            LEFT JOIN item ON icr.ItemNumber = Item.Number
                            LEFT JOIN category_relations cr ON cr.categoryId = category.id
                            GROUP BY category.id
                            ORDER BY cr.ParentcategoryId ASC")
                        ->fetchAll('assoc');

        $treeItems = $this->buildTree($items);
        $this->set(compact('treeItems'));
    }


    public function buildTree(array $items, $parentId = 0) {
        $branch = array();

        foreach ($items as $item) {
            if ($item['ParentcategoryId'] == $parentId) {
                $children = $this->buildTree($items, $item['catId']);
                if ($children) {
                    $item['children'] = $children;
                    $item['total'] = array_sum(array_column($children, 'total'));
                }
                $branch[] = $item;
            }
        }
        return $branch;
    }

}
