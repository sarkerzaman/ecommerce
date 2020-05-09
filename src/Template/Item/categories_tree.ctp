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
    <h3><?= __('Categories Tree Listing with Item Count') ?></h3>
    <?php
        if($treeItems){ ?>

        <div class="treeview-animated w-20 border mx-4 my-4">
            <ul class="treeview-animated-list mb-3">
            <?php
                foreach($treeItems as $item){
                    if(!empty($item['children'])){ ?>
                        <li class="treeview-animated-items">
                        <a class="closed">
                            <i class="fas fa-angle-right"></i>
                            <span><i class="far fa-envelope-open ic-w mx-1"></i><?php echo $item['catName'].'('.$item['total'].')'; ?></span>
                        </a>
                        <ul class="nested">
                        <?php
                        $childItems = $item['children'];
                        foreach($childItems as $child){
                            if(!empty($child['children'])){ ?>
                                <li class="treeview-animated-items">
                                <a class="closed">
                                    <i class="fas fa-angle-right"></i>
                                    <span><i class="far fa-envelope-open ic-w mx-1"></i><?php echo $child['catName'].'('.$child['total'].')'; ?></span>
                                </a>
                                <ul class="nested">
                                <?php
                                    $childItems = $child['children'];
                                    foreach($childItems as $child){
                                        if(!empty($child['children'])){ ?>
                                            <li class="treeview-animated-items">
                                            <a class="closed">
                                                <i class="fas fa-angle-right"></i>
                                                <span><i class="far fa-envelope-open ic-w mx-1"></i><?php echo $child['catName'].'('.$child['total'].')'; ?></span>
                                            </a>
                                            <ul class="nested">
                                            <?php
                                                $childItems = $child['children'];
                                                foreach($childItems as $child){
                                                    if(!empty($child['children'])){ ?>
                                                        <li class="treeview-animated-items">
                                                        <a class="closed">
                                                            <i class="fas fa-angle-right"></i>
                                                            <span><i class="far fa-envelope-open ic-w mx-1"></i><?php echo $child['catName'].'('.$child['total'].')'; ?></span>
                                                        </a>
                                            <?php   }else{ ?>
                                                        <li>
                                                            <div class="treeview-animated-element"><i class="far fa-comment ic-w mr-1"></i><?php echo $child['catName'].'('.$child['total'].')'; ?>
                                                        </li>
                                            <?php   } ?>
                                        <?php   }   ?>
                                            </ul>
                                <?php   }else{ ?>
                                            <li>
                                                <div class="treeview-animated-element"><i class="far fa-comment ic-w mr-1"></i><?php echo $child['catName'].'('.$child['total'].')'; ?>
                                            </li>
                                <?php   } ?>
                            <?php   }   ?>
                                </ul>

                    <?php   }else{ ?>
                                <li>
                                    <div class="treeview-animated-element"><i class="far fa-comment ic-w mr-1"></i><?php echo $child['catName'].'('.$child['total'].')'; ?>
                                </li>
                    <?php   } ?>
                <?php   }   ?>
                        </ul>

            <?php   }else{ ?>
                        <li>
                            <div class="treeview-animated-element"><i class="far fa-comment ic-w mr-1"></i><?php echo $item['catName'].'('.$item['total'].')'; ?>
                        </li>
            <?php   }
                }
            ?>
            </ul>
        </div>
    <?php
       }
    ?>
</div>
