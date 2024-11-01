<?php
use Coderun\VkPoster\CorePlugin;
use Coderun\VkPoster\Services;

if (!defined('ABSPATH')) {
    exit;
}

?>
<h2>Справка</h2>

<?php

$optionsName = CorePlugin::PREF_PLG;
$plugin = CorePlugin::getInstance();

$help_title = array(
    1 => 'Создайте standalone приложение',
    2 => 'Пройдите проверку от VK',
    3 => 'Базовые настройки приложения',
    4 => 'Настройка приложения',
    5 => 'ID приложения',
    6 => 'Проверка от сервиса VK',
    7 => 'Скопируйте URL',
    8 => 'Токен',
    9 => 'Пример остальных настроек',
    10 => 'Страница редактирования записи',
    11 => 'На странице Группы'
);
$help_footer = array(
    1 => 'Введите произвольное название',
    2 => 'Введите полученный по смс код',
    3 => 'Выберите иконку приложения и выберите группу приложения, куда будут отправляться записи с вашего Wordpress',
    4 => 'Переведите Open API в режим включено. В поле адрес сайта введите http://'. $_SERVER['HTTP_HOST'].' в поле Базовый домен '.$_SERVER['HTTP_HOST'] ,
    5 => 'Вставьте  ID приложение в поле и сохраните результат, далее нажмите - Получить токен',
    6 => 'Разрешите вашему приложению все указанные действия',
    7 => 'Скопируйте всю адресную строку и вставьте её в поле плагина Токен',
    8 => 'Токен',
    9 => 'Далее заполните остальные поля согласно вашим данным, пример на слайде',
    10 => 'Так выглядит инструмент управления постингом',
    11 => 'Результат после сохранения записи и постинга на стену ВК'
);
?>


<div class="row">
    <?php for ($i = 1; $i <= count($help_footer); $i++) { ?>
        <div><h3><?php echo $i.' - '. $help_title[$i]; ?></h3></div>
        <div><img src="<?php echo sprintf('%s/img/help_%d.png',$plugin->getPluginUri(), $i) ?>"></div>
        <div class="description"><?php echo $help_footer[$i]; ?></div>
    <?php } ?>
</div>




