<?php
/*
 * This file is part of Webisters Pagination Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * @var Framework\Pagination\Pager $pager
 */
$language = $pager->getLanguage();
?>
<ul class="pagination text-center">
    <?php if ($pager->getPreviousPage()) : ?>
        <li>
            <a rel="prev" href="<?= $pager->getPreviousPageUrl() ?>">
                <?= $language->render('pagination', 'previous') ?>
            </a>
        </li>
    <?php endif ?>

    <?php if ($pager->getNextPage()) : ?>
        <li>
            <a rel="next" href="<?= $pager->getNextPageUrl() ?>">
                <?= $language->render('pagination', 'next') ?>
            </a>
        </li>
    <?php endif ?>
</ul>
