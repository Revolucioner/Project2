<ul>
<?php
$nav = [
    [
        'label' => 'Таблица умножения',
        'url' => '/index/php?page=table'
    ],
    [
        'label' => 'Калькулятор',
        'url' => '/index/php?page=calculator'
    ],
    [
        'label' => 'Привет',
        'url' => '/index/php?page=hi'
    ]

];
foreach($nav as $a){
    echo '<li><a href="' . $a['url'] . '">' . $a['label'] . '</a></li>';
}
?>
</ul>