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
 * @subpackage journal
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename_help'] = '###### Hauptmerkmale
- Sammeln von Online-Texteinträgen von Teilnehmern zur Überprüfung und Bewertung.
- Die Einträge sind privat zwischen Teilnehmer und Trainer (für andere Teilnehmer nicht sichtbar).
- Unterstützt Feedback in Textform und Bewertung durch Trainer.
- Enthält eine Einstellung für "Verfügbare Tage", um den Einreichungszeitraum zu steuern.
- Zeigt alle Einträge für eine Klasse oder Gruppe auf einer Seite an, um eine effiziente Überprüfung zu ermöglichen.

###### Anwendungsmöglichkeiten
- Kurze Reflexionsaufgaben oder Lernjournale vergeben.
- Das Tool für kontinuierliches Feedback und die iterative Verbesserung der Schülerarbeiten nutzen.
- Die Teilnehmer ermutigen, Unterrichtsinhalte oder Lesestoffe mit eigenen Worten zusammenzufassen.
- Den Fortschritt der Teilnehmer anhand einfacher textbasierter Aufgaben verfolgen.
- Die private Kommunikation zwischen Trainer/in und Teilnehmer/in für formative Bewertungen erleichtern.';
$string['modulename_summary'] = 'Private Online-Texteinträge von Teilnehmern für Feedback und Bewertung sammeln, mit einer festgelegten Verfügbarkeitsdauer und ohne Datei-Uploads.';
$string['notifystudents'] = 'Teilnehmer benachrichtigen';
$string['notifystudents_default'] = 'Teilnehmer standardmäßig benachrichtigen';
$string['notifystudents_help'] = 'Falls aktiviert, erhalten die Teilnehmer eine Benachrichtigung über die Moodle-Nachrichtenfunktion wenn ein/e Trainer/in ein Feedback zu einem Journaleintrag abgibt.';
$string['notifyteachers'] = 'Trainer benachrichtigen';
$string['notifyteachers_default'] = 'Trainer standardmäßig benachrichtigen';
$string['notifyteachers_help'] = 'Diese Einstellung regelt, wann Trainer eine Benachrichtigung über die Moodle-Nachrichtenfunktion über Einträge von Teilnehmern erhalten.

* Nie: Keine Benachrichtigung an Trainer
* Wenn ein Eintrag bewertet werden muss: Trainer werden benachrichtigt, wenn ein/e Teilnehmer/in einen Eintrag erstellt und bei der ersten Änderung eines bereits bewerteten Eintrags.
* Jedes Mal beim Speichern eines Eintrags: Trainer werden bei jedem erstellten oder geänderten Beitrag benachrichtigt';
$string['nousersyet'] = 'Es gibt noch keine Teilnehmer';
$string['remindbefore'] = 'Teilnehmer vor der Schließung erinnern';
$string['remindbefore_help'] = 'Teilnehmer, die noch keinen Eintrag verfasst haben, erhalten in diesem Abstand vor der Schließung eine Erinnerung. Wenn die Schließzeit verändert wird, erhalten sie erneut eine Erinnerung.';
$string['remindertask'] = 'Teilnehmer erinnern, bevor das Journal geschlossen wird';
$string['timeopen_help'] = 'Wenn gesetzt, können Teilnehmer ihre Einträge nur zwischen der Öffnungs- und Schließungszeit bearbeiten. Die Anzahl der Tage für die Verfügbarkeit wird dann nicht angewendet.';
$string['userswhocompletedthejournal'] = 'Nutzer, die das Journal abgeschlossen haben';
$string['userswhodidnotcompletedthejournal'] = 'Nutzer, die das Journal nicht abgeschlossen haben';
