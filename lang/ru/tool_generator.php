<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_generator', language 'ru', version '4.3'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalmodules'] = 'Дополнительные модули';
$string['additionalmodules_help'] = 'Выберите дополнительные модули, реализующие функцию course_backend_generator_create_activity, чтобы включить их в тестовый курс.';
$string['bigfile'] = 'Большой файл {$a}';
$string['courseexplanation'] = 'Этот инструмент предназначен для создания стандартных испытательных курсов для нагрузочного тестирования, включающих большое количество разделов, элементов курса и файлов.

Создание таких курсов предназначено для стандартизированной оценки надежности и производительности различных компонентов системы (например, резервного копирования и восстановления резервных копий).

Такое тестирование очень важно, поскольку ранее возникало много ситуаций, когда система переставала работать, столкнувшись со сценариями использования из реальной жизни (например, с курсом, содержащим 1000 элементов).

Испытательные курсы, созданные с помощью этого инструмента, могут занимать большой объем в базе данных и в файловой системе (десятки гигабайт). Чтобы снова освободить это пространство, Вам потребуется удалить эти курсы (и дождаться выполнения различных процедур очистки).

**Не используйте этот инструмент в системе, введенной в эксплуатацию**. Используйте только на сервере для разработки. (Чтобы избежать случайного использования, этот инструмент будет отключен до тех пор, пока не будет включен уровень отладки «РАЗРАБОТЧИК»).';
$string['coursesize_0'] = 'XS (примерно 10 Кбайт; ориентировочное время создания — 1 секунда)';
$string['coursesize_1'] = 'S (примерно 10 Мбайт; ориентировочное время создания — 30 секунд)';
$string['coursesize_2'] = 'М (примерно 100 Мбайт; ориентировочное время создания — 2 минуты)';
$string['coursesize_3'] = 'L (примерно 1 Гбайт; ориентировочное время создания — 30 минут)';
$string['coursesize_4'] = 'XL (примерно 10 Гбайт; ориентировочное время создания — 2 часа)';
$string['coursesize_5'] = 'XXL (примерно 20 Гбайт; ориентировочное время создания — 4 часа)';
$string['coursewithoutusers'] = 'В выбранном курсе нет пользователей';
$string['createcourse'] = 'Создать курс';
$string['createtestplan'] = 'Создать план тестирования';
$string['creating'] = 'Создание курса';
$string['done'] = 'Выполнено ({$a} сек.)';
$string['downloadtestplan'] = 'Скачать план тестирования';
$string['downloadusersfile'] = 'Скачать файл пользователей';
$string['error_nocourses'] = 'Нет курсов для создания плана тестирования';
$string['error_noforumdiscussions'] = 'Выбранный курс не содержит обсуждений на форуме';
$string['error_noforuminstances'] = 'Выбранный курс не содержит экземпляров модуля «Форум»';
$string['error_noforumreplies'] = 'Выбранный курс не содержит ответов на форум';
$string['error_nonexistingcourse'] = 'Указанный курс не существует';
$string['error_nopageinstances'] = 'Выбранный курс не содержит экземпляров модуля «Страница»';
$string['error_notdebugging'] = 'Недоступно на этом сервере, так как уровень отладки отличается от значения «РАЗРАБОТЧИК»';
$string['error_nouserspassword'] = 'Для создания плана тестирования необходимо установить значение параметра $CFG->tool_generator_users_password в файле config.php';
$string['fullname'] = 'Испытательный курс: {$a->size}';
$string['maketestcourse'] = 'Создать испытательный курс';
$string['maketestplan'] = 'Создать план тестирования JMeter';
$string['notenoughusers'] = 'В выбранном курсе недостаточно пользователей';
$string['pluginname'] = 'Генератор тестовых данных для разработчиков';
$string['privacy:metadata'] = 'Плагин генератора данных разработки не хранит никаких личных данных.';
$string['progress_checkaccounts'] = 'Проверка учетных записей пользователей ({$a})';
$string['progress_coursecompleted'] = 'Курс подготовлен ({$a} сек.)';
$string['progress_createaccounts'] = 'Создание учетных записей пользователей ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Создание заданий ({$a})';
$string['progress_createbigfiles'] = 'Создание больших файлов ({$a})';
$string['progress_createcourse'] = 'Создание курса «{$a}»';
$string['progress_createforum'] = 'Создание форума (сообщений — {$a})';
$string['progress_createpages'] = 'Создание страниц ({$a})';
$string['progress_createsmallfiles'] = 'Создание небольших файлов ({$a})';
$string['progress_enrol'] = 'Зачисление пользователей на курс ({$a})';
$string['progress_sitecompleted'] = 'Сайт подготовлен ({$a} сек.)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (примерно 10 Мбайт; 3 курса; ориентировочное время создания — 30 секунд)';
$string['sitesize_1'] = 'S (примерно 50 Мбайт; 8 курсов; ориентировочное время создания — 2 минуты)';
$string['sitesize_2'] = 'М (примерно 200 Мбайт; 73 курса; ориентировочное время создания — 10 минут)';
$string['sitesize_3'] = 'L (примерно 1,5 Гбайт; 277 курсов; ориентировочное время создания — 1,5 часа)';
$string['sitesize_4'] = 'XL (примерно 10 Гбайт; 1065 курсов; ориентировочное время создания — 5 часов)';
$string['sitesize_5'] = 'XXL (примерно 20 Гбайт; 4177 курсов; ориентировочное время создания — 10 часов)';
$string['size'] = 'Размер курса';
$string['smallfiles'] = 'Небольшие файлы';
$string['targetcourse'] = 'Курс для нагрузочного тестирования';
$string['testplanexplanation'] = 'Этот инструмент предназначен для создания файла плана нагрузочного тестирования JMeter, а также файла с учетными данными пользователя.

Этот план тестирования предназначен для работы с инструментом {$a}, который позволяет легко запустить нагрузочное тестирование в особом окружении Moodle, собрать информацию о ходе тестирования и сравнить результаты. Вам нужно скачать этот инструмент и использовать сценарий test_runner.sh или воспользоваться инструкциями по установке и использованию.

Вам потребуется установить пароль для пользователей курса в файле config.php (например, $CFG->tool_generator_users_password = \'moodle\';). Для этого параметра нет значения по умолчанию, чтобы исключить возможность непреднамеренного использования этого инструмента. Вы должны использовать режим обновления паролей в случае, когда для пользователей курса установлены другие пароли, или когда пользователи были созданы с помощью tool_generator, но до установки значения параметра $CFG->tool_generator_users_password.

Этот инструмент — часть tool_generator, и хорошо работает с курсами, которые сформированы генератором курсов и сайта. Он также может использоваться с любым курсом, который содержит, как минимум:

* Достаточное количество записанных пользователей (зависит от выбранного размера плана тестирования), для которых установлен пароль «moodle»
* Экземпляр модуля «Страница»
* Экземпляр модуля «Форум» с как минимум одним обсуждением и одним ответом.

Вам следует учитывать мощность своих серверов в случае запуска больших планов тестирования, так как создаваемая JMeter нагрузка может быть очень большой. Чтобы уменьшить число связанных с этим проблем (например, предотвратить срабатывание защиты от DDOS-атак), в зависимости от количества потоков (пользователей) настроено разное время постепенного увеличения нагрузки (время «разогрева»).

**Не запускайте нагрузочное тестирование на системе в промышленной эксплуатации**. Хотя этот инструмент только создает файлы, необходимые для работы JMeter, что само по себе не опасно, Вы **НИКОГДА** не должны запускать нагрузочное тестирование на сайте в промышленной эксплуатации.';
$string['testplansize_0'] = 'XS (пользователей — {$a->users}, циклов — {$a->loops}, время «разогрева» — {$a->rampup} сек.)';
$string['testplansize_1'] = 'S (пользователей — {$a->users}, циклов — {$a->loops}, время «разогрева» — {$a->rampup} сек.)';
$string['testplansize_2'] = 'M (пользователей — {$a->users}, циклов — {$a->loops}, время «разогрева» — {$a->rampup} сек.)';
$string['testplansize_3'] = 'L (пользователей — {$a->users}, циклов — {$a->loops}, время «разогрева» — {$a->rampup} сек.)';
$string['testplansize_4'] = 'XL (пользователей — {$a->users}, циклов — {$a->loops}, время «разогрева» — {$a->rampup} сек.)';
$string['testplansize_5'] = 'XXL (пользователей — {$a->users}, циклов — {$a->loops}, время «разогрева» — {$a->rampup} сек.)';
$string['updateuserspassword'] = 'Обновить пароли пользователей курса';
$string['updateuserspassword_help'] = 'JMeter потребуется войти в систему в качестве пользователей курса. Вы можете задать пароль пользователей, указав значение $CFG->tool_generator_users_password в файле config.php. При включении этого параметра, пароли пользователей курса будут обновлены в соответствии со значением $CFG->tool_generator_users_password. Это может быть полезно в случае, если Вы используете курс, созданный не tool_generator, или если при создании испытательного курса значение $CFG->tool_generator_users_password еще не было задано.';
