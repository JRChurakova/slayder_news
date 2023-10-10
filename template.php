<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if (!empty($arResult['ITEMS'])):
?>
<div class="slider-container">
    <div class="slider-wrapper">
        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="slider-item"> 
                <?php if (!empty($arItem['PREVIEW_PICTURE'])): ?>
                    <div class="image-container">
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>" style="width: 100%; height: auto;">
                        <div class="overlay">
                            <h2 class="slide-title"><?= $arItem['NAME'] ?></h2>
                        </div>
                    </div>
                <?php endif; ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<div class="slider-pagination"></div>
    <button class="slider-prev"> &#10094; </button>
    <button class="slider-next"> &#10095; </button>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="/upload/slick-1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/upload/slick-1.8.1/slick/slick-theme.css"/>
<script type="text/javascript" src="/upload/slick-1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.slider-wrapper').slick({
            slidesToScroll: 1, 
            arrows: true, 
            dots: true, 
            prevArrow: $('.slider-prev'),
            nextArrow: $('.slider-next')
        });
    });
</script>
<?php endif; ?>