<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from https://github.com/Syonis/moodle-customlang-de
 *
 * @package    theme
 * @subpackage adaptable
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alertaccessusers'] = 'Sichtbar für angemeldete Nutzer';
$string['alertdesc'] = 'Geben Sie einen Text ein und passen Sie ihn an, der oben auf der Website als Benachrichtigung angezeigt werden soll. Es ist möglich, mehr als eine Warnung festzulegen, um unterschiedliche Benutzertypen anzusprechen. Sie haben auch die Möglichkeit, Benachrichtigungen auf der gesamten Website oder nur auf Startseiten anzuzeigen. <br /><br /><strong>Hinweis:</strong> Es ist jetzt auch möglich, Benachrichtigungen innerhalb von Kursseiten anzuzeigen, um Trainer zu warnen, dass Kurse ausgeblendet sind.';
$string['alertkeyvalue_details'] = 'Der Schlüssel, der diese Warnung von früheren Warnungen unterscheidet.  Wenn Sie diesen Wert ändern, sehen alle Nutzer, die die Warnung zuvor ignoriert haben, sie erneut. Wenn Sie die Warnung ändern, sollten Sie dies tun, um sicherzustellen, dass alle Nutzer sie sehen.';
$string['enableshowhideblocksdesc'] = 'Nutzer erlauben, alle Blöcke zu verbergen und anzeigen zu lassen';
$string['enablezoomdesc'] = 'Nutzer können zwischen fester Breite und voller Breite wechseln.';
$string['menuuseroverridedesc'] = 'Diese Einstellungen können genutzt werden, um Nutzer die Kontrolle darüber zu geben wo Menüs angezeigt werden. Um die Option zu nutzen, müssen Sie ein Profilfeld im Listenformat anlegen mit Werten in der folgenden Anordnung:
<pre>1. Überall (das erste Element in der Liste gilt für die Sichtbarkeit des Menüs auf allen Seiten)
2. Startseite (das zweite Element auf der Liste gilt für die Sichtbarkeit nur auf der Startseite oder einzelner Seite)
3. Versteckt (das dritte Element dieser Liste wird Menüs komplett verstecken)</pre>
Sie sollten NICHT die Option "Menüs auf Kursseiten deaktivieren" nutzen, in Verbindug mit Profileinstellungen. Setzen Sie stattdessen den Wert für die  Voreinstellung auf "nur Startseite".';
