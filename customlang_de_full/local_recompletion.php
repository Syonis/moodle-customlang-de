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
 * @subpackage recompletion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignattempts_help'] = 'Wie wird mit Aufgabenversuchen innerhalb eines Kurses umgegangen:
Wenn die Einstellung \'Aktualisierung nach Bewertungsänderung\' verwendet wird, Trainer die Benotung innerhalb einer Aufgabe ändern und der Kurs bereits abgeschlossen war, wird das Kursabschlussdatum auf das Datum der Bewertungsänderung gesetzt.';
$string['bulkchangedate'] = 'Kursabschlussdatum für die ausgewählten Nutzer ändern';
$string['bulkresetallcompletion'] = 'Alle Abschlüsse der ausgewählten Nutzer zurücksetzen';
$string['completionreset'] = 'Abschlüsse der ausgewählten Nutzer wurden in diesem Kurs zurückgesetzt.';
$string['editcompletion_desc'] = 'Kursabschlussdatum für die folgende Nutzer ändern:';
$string['noassigngradepermission'] = 'Der Abschluss wurde zurückgesetzt, enthält aber eine Aufgabe, die nicht zurückgesetzt werden kann. Bitten Sie Ihre Trainer, das zu übernehmen.';
$string['nousersselected'] = 'Keine Nutzer ausgewählt';
$string['recompletionemailbody_help'] = 'Formulieren Sie einen kursspezifischen Text für eine E-Mail an die Nutzer als unformatierten Text oder mit  HTML-Tags und Mehrsprachigkeit.

Folgende Platzhalter können verwandt werden:

* Kursname {$a->coursename}
* Link zum Kurs {$a->link}
* Link zur Profilseite des Nutzers {$a->profileurl}
* E-Mail-Adresse von Nutzer/in {$a->email}
* Vollständiger Name von Nutzer/in {$a->fullname}';
$string['recompletionemailsubject_help'] = 'Ein unformatierter Text zur Benachrichtigung von Nutzern zur Wiederholung kann hier eingefügt werden.

Sie können folgende Platzhalter verwenden

* Kursname {$a->coursename}
* Vollständiger Nutzername {$a->fullname}';
$string['restrictenrol_help'] = 'Nur Nutzer, die mit ausgewählten Einschreibemethoden eingeschrieben sind, werden in die Abschlussdaten einbezogen. Wenn keine ausgewählt ist, gibt es keine Einschränkungen bei der Einschreibemethode für Nutzer.';
