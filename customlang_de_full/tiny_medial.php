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
 * @package    tiny
 * @subpackage medial
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['medial:visible'] = 'Nutzer können MEDIAL-Videos mit dem Tiny-Texteditor hinzufügen';
$string['medial:visiblemodtype'] = 'Nutzer können MEDIAL-Videos mit dem Tiny-Texteditor in denjenigen Modulen hinzufügen, die in der MEDIAL-TinyMCE-Plugin Konfiguration als Ausnahme definiert sind.';
$string['modtypedesc'] = 'Das MEDIAL-TinyMCE-Plugin hat ein alternatives Recht tiny/medial:visiblemodtype, mit dem Nutzer in ausgewählten Modulen Rechte zugewiesen werden können, die von den normalen Rechen, den MEDIAL-TinyMCE-Button zu verwenden, abweichen. Das dient hauptsächlich dazu, Teilnehmer, (nur) in ausgewählten Modulen die Möglichkeit zu geben, den MEDIAL-Button zu verwenden. Als Standard sind keine Module aktiviert, aber es können beliebige Module in die folgende Box eingetragen werden. Die Liste muss einen Modulnamen pro Zeile enthalten und muss exakt der Formulierung im Moodle Code (in Kleinschreibung) entsprechen, zum Beispiel forum für die Aktivitität Forum. In allen Module, die hier genannt sind, werden die MEDIAL-Videos als Link und nicht als iframe eingefügt, weil Teilnehmer keine iframes einfügen dürfen. Wenn dieses Feature nicht benötigt wird, kann die Box leer gelassen werden.';
