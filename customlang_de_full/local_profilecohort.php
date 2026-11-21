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
 * @package    local
 * @subpackage profilecohort
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortsintro'] = 'In diesem Tab wählen Sie die globalen Gruppen, die mit diesem Plugin verwaltet werden.<br>Sobald eine globale Gruppe ausgewählt ist, werden Sie die Nutzer nicht mehr manuell festlegen können, die der globalen Gruppe zugewiesen sind. Außerdem werden alle Nutzer, die derzeit der globalen Gruppe zugewiesen sind, aus der globalen Gruppe entfernt und die globale Gruppe danach von Grund auf mit den Nutzern befüllt, auf die die mit diesem Plugin definierten Regeln zutreffen.<br>Wenn Sie sich später dazu entscheiden, eine globale Gruppe doch nicht mehr mit diesem Plugin zu verwalten und sie hier abwählen, werden alle Nutzer zugewiesen bleiben, die der globalen Gruppe zu diesem Zeitpunkt zugewiesen sind. Die globale Gruppe kann dann wieder manuell verwaltet werden.';
$string['countnousers'] = 'Keine Nutzer';
$string['countusers'] = 'Nutzer: {$a}';
$string['membersintro'] = 'In diesem Tab sehen Sie die Nutzer, die derzeit den globalen Gruppen zugewiesen sind, welche mit diesem Plugin verwaltet werden.';
$string['nousers'] = 'Diese globale Gruppe enthält, derzeit noch keine Nutzer.';
$string['privacy:metadata'] = 'Das Plugin \'Profilfeld-basierte Zuweisung globaler Gruppen\' bietet Administratoren in Moodle erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['viewintro'] = 'In diesem Tab definieren Sie die Regeln, mit der die Werte der Profilfelder einer Person auf die globalen Gruppen abgebildet werden, welchen sie zugewiesen wird.<br>Die Regeln werden in der dargestellten Reihenfolge abgearbeitet, eine Person wird jedoch allen globalen Gruppen mit zutreffenden Regeln zugewiesen.<br>Beachten Sie bitte: Sobald Sie eine Regel ändern und speichern, wird ein Hintergrundprozess angestoßen, welcher alle betroffenen Nutzer und ihre Zuweisung zu den globalen Gruppen aktualisiert - nach einer kurzen Zeit (ein paar Minuten, abhängig von der Cronjob-Konfiguration des Servers und der Konfiguration der geplanten Vorgänge in Moodle) sind alle Zuweisungen der globalen Gruppen aktualisiert. Nichtsdestotrotz wird jede Person, die sich einloggt, während der Hintergrundprozess arbeitet, sofort zu den zutreffenden globalen Gruppen zugewiesen.';
