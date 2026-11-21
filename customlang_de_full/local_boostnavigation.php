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
 * @subpackage boostnavigation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['inc_customwhoadmins'] = 'Administratoren';
$string['inc_customwhousers'] = 'alle Nutzer';
$string['setting_customnodesusageadminsparameternote'] = 'Eigene Knoten für Administratoren werden von der selben Funktion verarbeitet wie eigene Knoten für alle Nutzer. Daher stehen für eigene Knoten für Administratoren neben den oben angegebenen Parametern prinzipiell dieselben Parameter wie für eigene Knoten für alle Nutzer zur Verfügung. Sie können diese problemlos einsetzen falls Sie sie für einen speziellen Bedarf benötigen, auch wenn sie hier aus Gründen der Vereinfachung nicht noch einmal dokumentiert werden.';
$string['setting_customnodesusageparametercohortdd'] = 'Der Knoten wird nur Mitgliedern der hier angegebenen globalen Gruppen angezeigt. Nutzen Sie die Gruppen-ID, nicht den Namen. Mehrere globale Gruppen werden über Komma separiert. Um den Knoten allen Nutzern unabhängig von globalen Gruppen anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusageparameterlanguagedd'] = 'Der Knoten wird nur Nutzer angezeigt, die die entsprechende Sprache eingestellt haben. Mehrere unterstütze Sprachen werden über Komma separiert. Um den Knoten in allen Sprachen anzuzeigen, lassen Sie dieses Feld leer.';
$string['setting_customnodesusageparameterroledd'] = 'Der Knoten wird nur Nutzer mit bestimmten Rollen angezeigt. Nutzen Sie jeweils den Kurznamen der Rollen. Mehrere Rollen werden über Komma separiert. Um den Knoten allen Nutzern unabhängig von Rollen anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusageparametersystemroledd'] = 'Der Knoten wird nur Nutzer mit bestimmten globalen Rollen angezeigt. Nutzen Sie jeweils den Kurznamen der globalen Rollen. Der Kurzname \'admin\' identifiziert die Administratoren. Mehrere Rollen werden über Komma separiert. Um den Knoten allen Nutzern unabhängig von globalen Rollen anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusagepleasenotecheck'] = 'Falls der hinzugefügte Knoten nicht in der Navigation erscheint, prüfen Sie bitte, ob Sie alle Pflichtparameter korrekt eingestellt sind, ob der Knoten in der eingestellten Nutzersprache überhaupt angezeigt werden kann und ob die anderen optionalen Parameter für die Nutzer zutreffen.';
$string['setting_removebadgescoursenodeexplanation'] = 'Der Knoten wird nur entfernt falls im Kurs keine Auszeichnungen angelegt sind. Trainer können weiterhin immer auf die Auszeichnungen über das Kursmenü (Zahnrad-Menü) zugreifen.<br /><em>Diese Einstellung wird nur verwendet, wenn das Subsystem für Auszeichnungen in Moodle auch aktiviert ist.</em>';
$string['setting_removecompetenciescoursenodeexplanation'] = 'Der Knoten wird nur entfernt falls im Kurs keine Kompetenzen angelegt sind. Für Trainer wird ein neuer "Kompetenzen" Eintrag zum Kursmenü (Zahnrad-Menü) hinzugefügt.<br /><em>Diese Einstellung wird nur verwendet, wenn das Subsystem für Kompetenzen in Moodle auch aktiviert ist.</em>';
$string['setting_removegradescoursenodeexplanation'] = 'Der Knoten wird für alle Nutzer entfernt, ungeachtet ob sie berechtigt wären den Knoten zu sehen und ungeachtet der Einstellung \'Bewertungen anzeigen\' in der Kurs-Administration.';
$string['setting_removeparticipantscoursenodeexplanation'] = 'Der Knoten wird für alle Nutzer entfernt, ungeachtet ob sie berechtigt wären den Knoten zu sehen.';
