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
 * @package    format
 * @subpackage topcoll
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaulttogglepersistence_desc'] = '\'An oder aus\'. Deaktivieren Sie diese Option, um die AJAX-Leistung zu steigern, aber die Umschaltauswahl von Nutzern wird bei einer Seitenaktualisierung oder einem erneuten Besuch nicht gespeichert.<br />Hinweis: Wenn Sie die Persistenz deaktivieren, entfernen Sie bitte alle Zeilen, die \'topcoll_toggle_x\' im Feld \'name\' der Tabelle \'user_preferences\' enthalten. Wobei das "x" in "topcoll_toggle_x" eine Kurs-ID ist. Dies dient der Platzersparnis, wenn Sie nicht beabsichtigen, es wieder einzuschalten.';
$string['defaultuserpreference_desc'] = 'Diese Option legt fest, ob Nutzer beim ersten Aufruf eines Kurses standardmäßig alle Abschnitte geöffnet oder geschlossen angezeigt bekommen.';
$string['versionbeta'] = 'Beta-Version - Enthält wahrscheinlich Fehler. Nur für Administratoren auf einem Testserver zum Testen.';
