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
 * @package    plagiarism
 * @subpackage compilatio
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate_submissiondraft'] = 'Um Teilnehmer die Möglichkeit zu geben, ihre Entwürfe zu analysieren, müssen Sie die Option <b>{$a}</b> im Abschnitt';
$string['admin_disabled_reports'] = 'Der Administrator hat die Anzeige der Ähnlichkeitsberichte für die Teilnehmer deaktiviert.';
$string['allow_analyses_auto_help'] = 'Mit dieser Option können Trainer den automatischen Start der Analyse von Dokumenten zu einer Aktivität aktivieren (d.h. unmittelbar nach deren Einreichung).
Beachten Sie, dass in diesem Fall:
<ul>
    <li>Die Anzahl der von Ihrer Einrichtung durchgeführten Scans kann deutlich höher sein.</li>
    <li>Die Dokumente der ersten Einreicher werden nicht mit den Dokumenten der letzten Einreicher verglichen.</li>
</ul>
Um alle Dokumente einer Abtretung zu vergleichen, müssen Sie die "geplante" Analyse verwenden, indem Sie ein Datum nach der Einreichungsfrist wählen.';
$string['allow_search_tab'] = 'Suchwerkzeug zur Identifizierung von Autoren eines Dokuments.';
$string['allow_search_tab_help'] = 'Mit dem Suchtool können Sie auf der Grundlage einer in den Analyseberichten sichtbaren Dokumentenkennung unter allen auf Ihrer Plattform vorhandenen Dokumenten nach dem Vor- und Nachnamen eines Teilnehmer suchen.';
$string['allow_student_analyses'] = 'Möglichkeit, Teilnehmer die Analyse von Entwürfen zu ermöglichen.';
$string['allow_student_analyses_help'] = 'Mit dieser Option können Trainer die Analyse der von den Teilnehmern im Entwurfsmodus mit Compilatio Magister eingereichten Dokumente vor der endgültigen Übermittlung an die Trainer für eine Aktivität aktivieren.';
$string['allow_teachers_to_show_reports'] = 'Möglichkeit, Teilnehmer Ähnlichkeitsberichte zu zeigen';
$string['analysis_auto_help'] = '<p>Sie haben drei Möglichkeiten:
    <ul>
        <li><strong>Manuell:</strong> Die Analyse der Dokumente muss manuell über die Schaltfläche "Analysieren" jedes einzelnen Dokuments oder über die Schaltfläche "Alle Dokumente analysieren" ausgelöst werden.</li>
        <li><strong>Geplant: </strong> Alle Dokumente werden zum ausgewählten Zeitpunkt/Datum analysiert.</li>
        <li><strong>Direkt: </strong> Jedes Dokument wird analysiert, sobald Teilnehmer die einreichen. Die Dokumente in der Aktivität werden nicht miteinander verglichen.</li>
    </ul>
    Um alle Dokumente während der Analysen miteinander zu vergleichen, warten Sie, bis alle Arbeiten von den Teilnehmern eingereicht wurden und lösen dann die Analysen aus.</p>';
$string['analysis_help'] = '<p>Sie haben zwei Möglichkeiten:
    <ul>
        <li><strong>Manuell:</strong> Die Analyse der Dokumente muss manuell über die Schaltfläche "Analysieren" jedes einzelnen Dokuments oder über die Schaltfläche "Alle Dokumente analysieren" ausgelöst werden.</li>
        <li><strong>Geplant: </strong> Alle Dokumente werden zum ausgewählten Zeitpunkt/Datum analysiert.</li>
    </ul>
    Um alle Dokumente während der Analysen miteinander zu vergleichen, warten Sie, bis alle Arbeiten von den Teilnehmern eingereicht wurden und lösen dann die Analysen aus.</p>';
$string['compi_student_analyses'] = 'Erlauben Sie den Teilnehmern, ihre Dokumente zu analysieren';
$string['compi_student_analyses_help'] = 'Auf diese Weise können die Teilnehmer ihre Entwürfe mit Compilatio Magister analysieren, bevor sie sie endgültig den Trainern vorlegen.';
$string['compilatio:enable'] = 'Den Trainern erlauben, Compilatio innerhalb einer Aufgabe zu aktivieren/deaktivieren';
$string['compilatio:resetfile'] = 'Den Trainern erlauben, die Datei nach einem Fehler erneut Compilatio vorzulegen.';
$string['compilatio:triggeranalysis'] = 'Den Trainern erlauben, die Analyse manuell auszulösen.';
$string['compilatio:viewreport'] = 'Den Trainern erlauben, den vollständigen Bericht auf Compilatio einzusehen.';
$string['compilatio_search_help'] = 'Sie können Autoren eines Dokuments ermitteln, indem Sie die Dokumentenkennung aus den Quellen des Analyseberichts abrufen. Beispiel: 1. Ihr Dokument: <b>1st5xfj2</b> - Zuweisen_Name(30)Name_Kopiertes_Dokument.odt.';
$string['student_help'] = 'Sie können Ihren Entwurf mit Compilatio Magister analysieren, um Ähnlichkeiten im Text Ihrer Dateien zu messen.<br/>
Der Inhalt Ihres Entwurfs wird von Compilatio nicht als Vergleichsmaterial für zukünftige Analysen verwendet.<br/>
Ihre Trainer werden jedoch Zugang zu diesem Analysebericht haben.';
$string['students_disclosure'] = 'Präventive Botschaft an die Teilnehmer';
$string['students_disclosure_help'] = 'Dieser Text wird für alle Teilnehmer auf der Download-Seite angezeigt.';
