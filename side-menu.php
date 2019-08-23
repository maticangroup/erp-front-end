<?php $menuItems =
    [
        ['link' => '/adasdasdsad', 'title' => 'Project', 'icon' => 'side-menu__icon si si-layers'],
        ['link' => '/adasdasdsad', 'title' => 'Menu Item', 'icon' => 'side-menu__icon si si-layers'],
        ['link' => '/adasdasdsad', 'title' => 'Menu Item', 'icon' => 'side-menu__icon si si-layers'],
        ['link' => '/adasdasdsad', 'title' => 'Menu Item', 'icon' => 'side-menu__icon si si-layers'],
        ['link' => '/adasdasdsad', 'title' => 'Menu Item', 'icon' => 'side-menu__icon si si-layers'],

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
            <li>
                <a class="side-menu__item" href="<?= $menuItem['link'] ?>">
                    <i class="<?= $menuItem['icon'] ?>"></i>
                    <span class="side-menu__label"><?= $menuItem['title'] ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>
<!--side-menu-->
