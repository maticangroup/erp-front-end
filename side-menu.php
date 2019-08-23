<?php $menuItems =
    [
        [
            'link' => '/adasdasdsad',
            'title' => 'drop down',
            'icon' => 'side-menu__icon si si-layers',
            'drop_down_items' => [
                ['url' => '#', 'title' => 'A drop down item'],
                ['url' => '#', 'title' => 'A drop down item'],
                ['url' => '#', 'title' => 'A drop down item'],
                ['url' => '#', 'title' => 'A drop down item'],
            ]
        ],
        [
            'link' => '/adasdasdsad',
            'title' => 'no drop down',
            'icon' => 'side-menu__icon si si-layers',
            'drop_down_items' => [
            ]
        ],

    ];
?>

<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="user-body">
                        <span class="avatar avatar-lg brround text-center cover-image"
                              data-image-src="../assets/images/users/female/25.jpg"></span>
        </div>
        <div class="user-info">
            <a href="#" class="ml-2"><span
                        class="text-dark app-sidebar__user-name font-weight-semibold">Jenna Side</span><br>
                <span class="text-muted app-sidebar__user-name text-sm"> Web Designer</span>
            </a>
        </div>
    </div>
    <ul class="side-menu">
        <?php foreach ($menuItems as $menuItem) : ?>
        

            <li <?= ($menuItem['drop_down_items']) ? "class=\"slide\"" : "" ?>>
                <a class="side-menu__item" <?= ($menuItem['drop_down_items']) ? "data-toggle=\"slide\"" : "" ?>
                   href="#">
                    <i class="<?= $menuItem['icon'] ?>"></i>
                    <span class="side-menu__label"><?= $menuItem['title'] ?></span>
                    <?php if ($menuItem['drop_down_items']): ?>
                        <i class="angle fas fa-angle-right"></i>
                    <?php endif; ?>
                </a>

                <?php if ($menuItem['drop_down_items']): ?>
                    <ul class="slide-menu">
                        <?php foreach ($menuItem['drop_down_items'] as $drop_down_item): ?>
                            <li>
                                <a class="slide-item" href="<?= $drop_down_item['url'] ?>"><?= $drop_down_item ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>
<!--side-menu-->
