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
 * @package    mod
 * @subpackage customcert
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completionemailed'] = 'Teilnehmer erhalten ihr Zertifikat per E-Mail';
$string['completionemailedemailerror'] = 'In dieser Aktivität muss E-Mail an Teilnehmer aktiviert sein, damit der Zertifikatsabschluss per E-Mail erfolgen kann.';
$string['coursetimereq_help'] = 'Geben Sie hier die minimale Zeit in Minuten ein, die Teilnehmer im Kurs eingeloggt gewesen sein müssen, bevor sie das Zertifikat erhalten können.';
$string['customcert:manageemailstudents'] = 'Die Einstellung "Teilnehmer benachrichtigen" anpassen';
$string['customcert:manageemailteachers'] = 'Die Einstellung "Trainer benachrichtigen" anpassen';
$string['emailstudents'] = 'Teilnehmer benachrichtigen';
$string['emailstudents_help'] = 'Wenn diese Einstellung aktiviert ist, erhalten Teilnehmer eine Kopie des Zertifikats, sobald dieses für sie verfügbar ist. "Zugangsbeschränkungen und Aktivitätsabschlussvoraussetzungen werden berücksichtigt. <strong>Achtung:</strong> Wenn diese Option auf "Ja" eingestellt ist bevor die Erstellung des Zertifikats beendet ist, werden die Teilnehmer ein unvollständiges Zertifikat erhalten.';
$string['emailteachers'] = 'Trainer benachrichtigen';
$string['emailteachers_help'] = 'Wenn diese Einstellung aktiviert ist, erhalten Trainer eine Kopie des Zertifikats, sobald dieses verfügbar ist. <strong>Achtung:</strong> Wenn diese Option auf "Ja" eingestellt ist bevor die Erstellung des Zertifikats beendet ist, werden die Trainer ein unvollständiges Zertifikat erhalten.';
$string['issueautomatically_help'] = 'Zertifikate können automatisch für berechtigte Nutzer ausgestellt und per E-Mail an Trainer oder andere Empfänger versendet werden, auch wenn E-Mail an Teilnehmer deaktiviert wurde. Wenn die Option deaktiviert ist, werden Zertifikate nur an Empfänger gesendet, die das Zertifikat erhalten haben.';
$string['listofissues'] = 'Empfänger: {$a}';
$string['norecipients'] = 'Keine Empfänger';
$string['privacy:metadata:customcert_issues:studentemailed'] = 'Ob das Zertifikat erfolgreich an die Teilnehmer per E-Mail versendet wurde';
