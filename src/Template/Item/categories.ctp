<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Pages') ?></li>
        <li><?= $this->Html->link(__('Task 1'), ['action' => 'categories']) ?></li>
        <li><?= $this->Html->link(__('Task 2'), ['action' => 'categoriesTree']) ?></li>
    </ul>
</nav>
<div class="item index large-9 medium-8 columns content">
    <h3><?= __('Category Listing with Item Count') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= ('Category Name') ?></th>
                <th scope="col"><?= ('Total Items') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $item['catName'] ?></td>
                <td><?= $this->Number->format($item['total']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
