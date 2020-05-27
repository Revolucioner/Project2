<ul>
    <?php
$nav1 = [
            [
                'label' => 'Главная',
                'url' => '/index/php?page=home'
            ],
            [
                'label' => 'Каталог',
                 'url' => '/index/php?page=catalog'
            ],
            [
                'label' => 'О нас',
                'url' => '/index/php?page=for_us'
            ],
            [
                'label' => 'Контакты',
                'url' => '/index/php?page=contacts'
            ]
    ];
foreach($nav1 as $a){
    echo '<li><a href="' . $a['url'] . '">' . $a['label'] . '</a></li>';
    }
?>
</ul>