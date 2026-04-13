<div class="navigation" id="mainNav">
    <div class="wrapper">
        <ul role="list">
            <?php foreach ($pages as $url => $page) { ?>
                <?php if(! isset($_SESSION['login']) && $page['menun'][0] || isset($_SESSION['login']) && $page['menun'][1]) { ?>
                    <li<?= (($page == $keres) ? ' class="active"' : '') ?>>
                        <a href="<?= ($url == '/') ? '.' : $url ?>" data-hover="<?= $page['szoveg'] ?>">
                            <?= $page['szoveg'] ?>
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>
            <li class="menuButton">
                <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
        </ul>
    </div>
</div>