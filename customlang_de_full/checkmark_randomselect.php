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
 * @subpackage checkmark_randomselect
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignmentsuccess'] = '{$a->examplecount} Beispiel(e) an {$a->studentcount} Teilnehmer erfolgreich zugewiesen';
$string['examplesfromcurrentcheckmark_help'] = 'Wählen Sie die Beispiele der aktuellen Kreuzerlübung-Aktivität aus, für welche Teilnehmer zufällig ausgewählt werden sollen.';
$string['examplesperstudent_help'] = 'Definieren Sie die Anzahl an Beispielen, die den zufällig ausgewählten Teilnehmern zugewiesen werden sollen.';
$string['fieldofapplication_help'] = 'Hier können Sie definieren, welche Beispiele der aktuellen Kreuzerlübung-Aktivität Sie an wieviele Teilnehmer zuweisen möchten.';
$string['filtercriteria_help'] = 'Mithilfe der Filterkriterien können Sie festlegen, auf Basis welcher Daten Sie eine Zufallsauswahl durchführen möchten: welche Kreuzerlübung-Aktivitäten des aktuellen Kurses und ob Teilnehmer mit Tafelleistungen berücksichtigt werden.';
$string['includeexistingpresentations'] = 'Teilnehmer mit vorhandener Tafelleistung einschließen';
$string['includeexistingpresentations_desc'] = 'Legt die Standardeinstellung dafür fest, ob vorhandene Tafelleistungen der ausgewählten Kreuzerlübung-Aktivitäten berücksichtigt werden. Wenn „Nein“ ausgewählt ist, werden Teilnehmer mit vorhandenen Tafelleistungen bei der aktuellen Zufallsauswahl nicht berücksichtigt und nur diejenigen ohne Tafelleistung potenziell ausgewählt.';
$string['includeexistingpresentations_help'] = 'Wahlweise können Sie vorhandene Tafelleistungen der gewählten Kreuzerlübungen ein- oder ausschließen. Wenn "Nein", werden Teilnehmer mit vorhandener Tafelleistung bei der aktuellen Zufallsauswahl nicht berücksichtigt und nur diejenigen ohne Tafelleistung werden potenziell ausgewählt.';
$string['notenougheligiblestudents'] = 'nicht genügend geeignete Teilnehmer verfügbar';
$string['pageintro'] = 'Sie können hier Teilnehmer zufällig für eine Tafelleistung auswählen.<br>Standardmäßig werden alle Kreuzerlübungen und Teilnehmer bei der Zuweisung eingeschlossen und je ein Beispiel wird pro Teilnehmer/in zugewiesen.<br>Optional können Sie nach Daten vorhandener Kreuzerlübungen filtern, sowie den Anwendungsbereich für die Zufallsauswahl festlegen.';
$string['preview_help'] = 'Hier sehen Sie einen Vorschlag für die Zufallsauswahl von Teilnehmern für definierte Beispiele der aktuellen Kreuzerlübung-Aktivität. Sie können jederzeit eine neue Vorschau/ einen neuen Vorschlag erstellen lassen und diese Zuteilung abschließend übernehmen.';
$string['previewcapacitywarning'] = 'Die festgelegten {$a} Beispiele pro Teilnehmer/in können aufgrund der aktuellen Einstellungen nicht allen geeigneten Teilnehmern zugewiesen werden (nicht genügend geeignete Beispiele verfügbar).';
$string['previewunassignedintro'] = '{$a->count} Beispiel(e) kann/können aufgrund der aktuellen Einstellungen nicht für Teilnehmer vorgemerkt werden ({$a->reason}):';
