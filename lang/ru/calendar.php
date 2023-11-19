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
 * Strings for component 'calendar', language 'ru', version '4.3'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'Событие элемента курса';
$string['addevent'] = 'Добавить события';
$string['advancedoptions'] = 'Дополнительные параметры';
$string['allday'] = 'Все дни';
$string['annually'] = 'Ежегодно';
$string['calendar'] = 'Календарь';
$string['calendarexporturl'] = 'URL календаря';
$string['calendarheading'] = '{$a} Календарь';
$string['calendarpreferences'] = 'Настройки календаря';
$string['calendartypes'] = 'Типы календаря';
$string['calendarurl'] = 'URL-адрес календаря: {$a}';
$string['calendarurlcopiedtoclipboard'] = 'URL календаря скопирован в буфер обмена';
$string['category'] = 'Категория';
$string['categoryevent'] = 'Событие категории';
$string['categoryevents'] = 'События категории';
$string['clickhide'] = 'нажмите, чтобы скрыть';
$string['clickshow'] = 'нажмите, чтобы показать';
$string['colactions'] = 'Действия';
$string['colcalendar'] = 'Календарь';
$string['collastupdated'] = 'Последнее обновление';
$string['colpoll'] = 'Интервал обновления';
$string['commontasks'] = 'Настройки';
$string['confirmeventdelete'] = 'Вы уверены, что хотите удалить событие «{$a}»?';
$string['confirmeventseriesdelete'] = 'Событие «{$a->name}» является частью серии. Вы хотите удалить только это событие или все события ({$a->count}) в этой серии?';
$string['confirmsubscriptiondelete'] = 'Вы действительно хотите удалить подписку на календарь «{$a}»?';
$string['copycalendarurl'] = 'Скопировать URL календаря';
$string['copyurl'] = 'Копировать URL';
$string['course'] = 'Курс';
$string['coursecalendar'] = 'Календарь {$a}';
$string['courseevent'] = 'Событие курса';
$string['courseevents'] = 'События курса';
$string['courses'] = 'Курсы';
$string['customexport'] = 'Пользовательский диапазон ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Ежедневно';
$string['day'] = 'День';
$string['dayeventsmany'] = 'Событий: {$a->num}, {$a->day}';
$string['dayeventsnone'] = 'Нет событий, {$a}';
$string['dayeventsone'] = '1 событие, {$a}';
$string['daynext'] = 'Следующий день';
$string['dayprev'] = 'Предыдущий день';
$string['dayviewfor'] = 'Дневной обзор для:';
$string['dayviewtitle'] = 'Дневной обзор: {$a}';
$string['daywithnoevents'] = 'В этот день нет никаких событий.';
$string['default'] = 'По умолчанию';
$string['deleteallevents'] = 'Удалить все события';
$string['deleteevent'] = 'Удалить событие';
$string['deleteevents'] = 'Удалить события';
$string['deleteoneevent'] = 'Удалить это событие';
$string['detailedmonthviewfor'] = 'Детальный месячный обзор для:';
$string['detailedmonthviewtitle'] = 'Детальный месячный обзор: {$a}';
$string['durationminutes'] = 'Продолжительность в минутах';
$string['durationnone'] = 'Без продолжительности';
$string['durationuntil'] = 'До';
$string['editevent'] = 'Редактирование события';
$string['erroraddingevent'] = 'Не удалось добавить событие';
$string['errorbadsubscription'] = 'Подписка на календарь не найдена';
$string['errorbeforecoursestart'] = 'Событие не может быть установлено ранее даты начала курса';
$string['errorcannotimport'] = 'В данный момент невозможно настроить подписки на календари';
$string['errorhasuntilandcount'] = 'Либо UNTIL, либо COUNT могут присутствовать в правиле, но UNTIL и COUNT НЕ ДОЛЖНЫ одновременно встречаться в одном правиле.';
$string['errorinvalidbydayprefix'] = 'Целочисленные значения, предшествующие правилам BYDAY, могут присутствовать только для правила повторения MONTHLY (ЕЖЕМЕСЯЧНО) или YEARLY (ЕЖЕГОДНО)';
$string['errorinvalidbydaysuffix'] = 'Допустимые обозначения дней недели для правила BYDAY: MO, TU, WE, TH, FR, SA и SU';
$string['errorinvalidbyhour'] = 'Допустимые значения для правила BYHOUR: от 0 до 23.';
$string['errorinvalidbyminute'] = 'Допустимые значения для правила MINUTE: от 0 до 59.';
$string['errorinvalidbymonth'] = 'Допустимые значения для правила BYMONTH: от 1 до 12.';
$string['errorinvalidbymonthday'] = 'Допустимые значения для правила BYMONTHDAY: от 1 до 31 или от -31 до -1.';
$string['errorinvalidbysecond'] = 'Допустимые значения для правила SECOND: от 0 до 59.';
$string['errorinvalidbysetpos'] = 'Допустимые значения для правила BYSETPOS: от 1 до 366 или от -366 до -1.';
$string['errorinvalidbyweekno'] = 'Допустимые значения для правила BYWEEKNO: от 1 до 53 или от -53 до -1.';
$string['errorinvalidbyyearday'] = 'Допустимые значения для правила BYYEARDAY: от 1 до 366 или от -366 до -1.';
$string['errorinvaliddate'] = 'Неверная дата';
$string['errorinvalidicalurl'] = 'Некорректный URL iCal';
$string['errorinvalidinterval'] = 'Значение правила INTERVAL должно быть положительным целым числом.';
$string['errorinvalidminutes'] = 'Определите продолжительность в минутах, задавая число между 1 и 999.';
$string['errorinvalidrepeats'] = 'Определите количество событий, задавая число между 1 и 99.';
$string['errormustbeusedwithotherbyrule'] = 'Правило BYSETPOS должно использоваться только совместно с другой частью правила BYxxx.';
$string['errornodescription'] = 'Требуется описание';
$string['errornoeventname'] = 'Требуется название';
$string['errornonyearlyfreqwithbyweekno'] = 'Правило BYWEEKNO действует только для правил YEARLY.';
$string['errorrequiredurlorfile'] = 'URL или файл календаря для импорта';
$string['errorrrule'] = 'Прошедшее правило повторения выглядит неправильным.';
$string['errorrruleday'] = 'Правило повторения содержит неверный параметр дня';
$string['errorrrulefreq'] = 'Правило повторения содержит неверный параметр частоты';
$string['eventcalendareventcreated'] = 'Событие календаря создано';
$string['eventcalendareventdeleted'] = 'Событие календаря удалено';
$string['eventcalendareventupdated'] = 'Событие календаря обновлено';
$string['eventdate'] = 'Дата';
$string['eventdescription'] = 'Описание';
$string['eventduration'] = 'Продолжительность';
$string['eventendtime'] = 'Время окончания';
$string['eventendtimewrapped'] = '{$a} (Время окончания)';
$string['eventinstanttime'] = 'Время';
$string['eventkind'] = 'Тип события';
$string['eventname'] = 'Название события';
$string['eventnameandcategory'] = '{$a->category}: {$a->name}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnone'] = 'Нет событий';
$string['eventrepeat'] = 'Повторения';
$string['events'] = 'События';
$string['eventsall'] = 'Все события';
$string['eventsdeleted'] = 'Удалено событий: {$a}';
$string['eventsfor'] = 'События - {$a}';
$string['eventsimported'] = 'Импортировано событий: {$a}';
$string['eventskey'] = 'Легенда событий';
$string['eventsource'] = 'Источник события';
$string['eventspersonal'] = 'Мои личные события';
$string['eventsrelatedtocategories'] = 'События, связанные с категориями';
$string['eventsrelatedtocourses'] = 'События курса';
$string['eventsrelatedtogroups'] = 'События, связанные с группами';
$string['eventsskipped'] = 'Пропущеных событий: {$a}';
$string['eventstarttime'] = 'Время начала';
$string['eventstoexport'] = 'События для экспорта';
$string['eventsubscriptioncreated'] = 'Подписка на календарь создана';
$string['eventsubscriptiondeleted'] = 'Подписка на календарь удалена';
$string['eventsubscriptioneditwarning'] = 'Это событие календаря является частью подписки. Любые изменения, внесенные в это событие, будут потеряны при удалении подписки.';
$string['eventsubscriptionupdated'] = 'Подписка на календарь обновлена';
$string['eventsupdated'] = 'Обновлено событий: {$a}';
$string['eventtime'] = 'Время';
$string['eventtype'] = 'Тип события';
$string['eventtypecategory'] = 'категории';
$string['eventtypecourse'] = 'курса';
$string['eventtypegroup'] = 'группы';
$string['eventtypemodule'] = 'модуля';
$string['eventtypeother'] = 'другие';
$string['eventtypesite'] = 'сайт';
$string['eventtypeuser'] = 'пользователя';
$string['eventview'] = 'Подробности события';
$string['expired'] = 'Истекли';
$string['explain_site_timeformat'] = 'Вы можете включить вывод времени в 12- или 24-часовом формате на всём сайте. При выборе значения «по умолчанию», формат будет автоматически выбираться в зависимости от используемого языка. Пользователи могут переопределить для себя значение этого параметра.';
$string['export'] = 'Экспортировать';
$string['exportbutton'] = 'Экспорт';
$string['exportcalendar'] = 'Экспортировать события';
$string['exporthelp'] = '<p> URL-адрес календаря представляет собой динамическую ссылку для импорта событий в другие календари. Любые новые, измененные или удаленные события в исходном календаре <strong> будут </strong> отражены в других календарях. </p>
<p> Экспорт календаря позволяет создать резервную копию событий, которую можно импортировать в другие календари. Обновления, сделанные в исходном календаре, <strong> не будут </strong> отражены в других календарях. </p>';
$string['forcecalendartype'] = 'Тип календаря';
$string['fri'] = 'Пт';
$string['friday'] = 'Пятница';
$string['fullcalendar'] = 'Весь календарь';
$string['generateurlbutton'] = 'Получить адрес календаря';
$string['gotoactivity'] = 'Перейти к элементу курса';
$string['gotocalendar'] = 'Перейти к календарю';
$string['group'] = 'Группа';
$string['groupevent'] = 'Групповое событие';
$string['groupevents'] = 'Групповые события';
$string['hideeventtype'] = 'Скрыть события {$a}';
$string['hourly'] = 'Каждый час';
$string['importcalendar'] = 'Импорт календаря';
$string['importcalendarexternal'] = 'Импортировать внешний календарь?';
$string['importcalendarfrom'] = 'Импорт из';
$string['importcalendarheading'] = 'Импорт календаря...';
$string['importfromfile'] = 'Файл календаря (.ics)';
$string['importfrominstructions'] = 'Укажите URL календаря или загрузите файл';
$string['importfromurl'] = 'URL календаря';
$string['invalideventtype'] = 'Выбран неверный тип события.';
$string['invalidtimedurationminutes'] = 'Вы ввели неверное значение длительности в минутах. Введите значение больше 0 или не указывайте значение.';
$string['invalidtimedurationuntil'] = 'Установленный период для события оказывается раньше времени его начала. Пожалуйста, исправьте это перед продолжением.';
$string['iwanttoexport'] = 'Экспортировать';
$string['less'] = 'Меньше';
$string['managesubscriptions'] = 'Импорт или экспорт календарей';
$string['manyevents'] = 'События - {$a}';
$string['mon'] = 'Пн';
$string['monday'] = 'Понедельник';
$string['monthly'] = 'Ежемесячно';
$string['monthlyview'] = 'Месячный обзор';
$string['monthnext'] = 'Следующий месяц';
$string['monthprev'] = 'Предыдущий месяц';
$string['monththis'] = 'Этот месяц';
$string['more'] = 'Больше';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'Никогда';
$string['newevent'] = 'Новое событие';
$string['nocalendarsubscriptions'] = 'Подписок на календари пока нет. Вы хотите {$a}';
$string['notitle'] = 'без заголовка';
$string['noupcomingevents'] = 'Нет предстоящих событий';
$string['oneevent'] = '1 событие';
$string['pollinterval'] = 'Частота обновлений';
$string['pollinterval_help'] = 'Как часто обновлять события в календаре';
$string['pref_lookahead'] = 'Интервал отображения предстоящих событий';
$string['pref_lookahead_help'] = 'Этот параметр устанавливает максимальное количество дней, которые будут использоваться при выводе предстоящих событий. События, наступающие позже указанного интервала, не будут отображаться в списке предстоящих событий. Учтите, <strong>нет никаких гарантий</strong>, что будут выводиться все события, наступающие в указанный период времени. Если событий слишком много (больше, чем значение параметра «Максимальное число предстоящих событий»), то будут отображаться только наиболее близкие события.';
$string['pref_maxevents'] = 'Максимальное число предстоящих событий';
$string['pref_maxevents_help'] = 'Этот параметр отвечает за максимальное число отображаемых предстоящих событий. Если указать большое число, то не исключено, что наступающие события будут занимать много места на странице.';
$string['pref_persistflt'] = 'Запомнить настройки фильтра';
$string['pref_persistflt_help'] = 'При включении данного параметра Moodle будет помнить ваши настройки фильтра последних событий и автоматически восстанавливать их при каждой Вашей авторизации.';
$string['pref_startwday'] = 'Первый день недели';
$string['pref_startwday_help'] = 'Недели в календаре будут начинаться с выбранного здесь дня.';
$string['pref_timeformat'] = 'Формат времени';
$string['pref_timeformat_help'] = 'Вы можете выбрать формат отображения времени: 12- или 24-часовой. Если выбрать настройку «по умолчанию», то формат будет автоматически выбираться в зависимости от используемого на сайте языка.';
$string['preferences'] = 'Настройки';
$string['preferences_available'] = 'Ваши личные настройки';
$string['preferredcalendar'] = 'Предпочитаемый календарь';
$string['privacy:metadata:calendar:event'] = 'Компонент «Календарь» может хранить подробности о событиях календаря пользователя в подсистеме ядра.';
$string['privacy:metadata:calendar:event:description'] = 'Описание события календаря.';
$string['privacy:metadata:calendar:event:eventtype'] = 'Тип события для события календаря.';
$string['privacy:metadata:calendar:event:name'] = 'Название события календаря.';
$string['privacy:metadata:calendar:event:timeduration'] = 'Длительность события календаря.';
$string['privacy:metadata:calendar:event:timestart'] = 'Время начала события календаря.';
$string['privacy:metadata:calendar:event_subscriptions'] = 'Компонент «Календарь» может хранить подробности о подписках календаря пользователя в подсистеме ядра.';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'Тип события для подписки календаря.';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'Название подписки календаря.';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'URL подписки календаря.';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'Настроенный тип события календаря отображает настройки пользователя.';
$string['recentupcoming'] = 'Последние и ближайшие 60 дней';
$string['repeatedevents'] = 'Повторяющиеся события';
$string['repeateditall'] = 'Сохранить изменения для других повторяющихся событий ({$a}) этой серии';
$string['repeateditthis'] = 'Сохранить изменения только для этого события';
$string['repeatevent'] = 'Повторять это событие';
$string['repeatnone'] = 'Не повторять';
$string['repeatweeksl'] = 'Повторять еженедельно, создать всего:';
$string['repeatweeksr'] = 'события';
$string['sat'] = 'Сб';
$string['saturday'] = 'Суббота';
$string['showeventtype'] = 'Показать события {$a}';
$string['shown'] = 'показано';
$string['site'] = 'Сайт';
$string['siteevent'] = 'Событие сайта';
$string['siteevents'] = 'События сайта';
$string['spanningevents'] = 'События в стадии реализации';
$string['subscriptionname'] = 'Название календаря';
$string['subscriptionremoved'] = 'Подписка на календарь {$a} удалена';
$string['subscriptions'] = 'Подписки';
$string['subscriptionsource'] = 'Источник события: {$a}';
$string['subscriptionupdated'] = 'Подписка на календарь {$a} обновлена';
$string['sun'] = 'Вс';
$string['sunday'] = 'Воскресенье';
$string['thu'] = 'Чт';
$string['thursday'] = 'Четверг';
$string['timeformat_12'] = '12-часовой';
$string['timeformat_24'] = '24-часовой';
$string['timeperiod'] = 'Временной период';
$string['today'] = 'Сегодня';
$string['todayplustitle'] = 'Сегодня {$a}';
$string['tomorrow'] = 'Завтра';
$string['tt_deleteevent'] = 'Удалить событие';
$string['tt_editevent'] = 'Редактировать событие';
$string['tue'] = 'Вт';
$string['tuesday'] = 'Вторник';
$string['typecategory'] = 'Событие категории';
$string['typeclose'] = 'Закрытое событие';
$string['typecourse'] = 'События курса';
$string['typedue'] = 'События срока сдачи';
$string['typegradingdue'] = 'События срока оценки';
$string['typegroup'] = 'Событие группы';
$string['typeopen'] = 'Открытое событие';
$string['typesite'] = 'Событие сайта';
$string['typeuser'] = 'Событие пользователя';
$string['upcomingevents'] = 'Предстоящие события';
$string['upcomingeventsfor'] = 'Предстоящие события для:';
$string['urlforical'] = 'Ссылка для экспорта календаря, для подписки на календарь';
$string['user'] = 'Пользователь';
$string['userevent'] = 'Событие пользователя';
$string['userevents'] = 'События пользователя';
$string['viewupcomingactivitiesdue'] = 'Посмотреть предстоящие мероприятия';
$string['wed'] = 'Ср';
$string['wednesday'] = 'Среда';
$string['weekly'] = 'Еженедельно';
$string['weeknext'] = 'Следующая неделя';
$string['weekthis'] = 'Эта неделя';
$string['when'] = 'Когда';
$string['whendate'] = 'Когда: {$a}';
$string['yesterday'] = 'Вчера';
$string['youcandeleteallrepeats'] = 'Это событие входит в серию повторяющихся событий. Вы можете удалить только это событие или сразу все события ({$a}) этой серии.';
$string['yoursubscriptions'] = 'Импортированные календари';
