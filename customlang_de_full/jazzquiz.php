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
 * @subpackage jazzquiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_students_answered'] = '<b>{$a}</b> Teilnehmer haben zumindest eine Frage beantwortet.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> Teilnehmer haben am Test teilgenommen.';
$string['ask_teacher'] = 'Wenn Sie unsicher sind, fragen Sie Ihre Trainer.';
$string['instructions_for_instructor'] = '<h3>Bitte lesen Sie die Anleitung:</h3>
    <p>Sie können Hotkeys verwenden, wenn das Eingabefeld nicht automatisch aktiv wird.</p>
    <table>
        <tr>
               <th>Steuerzeichen</th>
               <th>Hotkey</th>
               <th>Beschreibung</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Erneut fragen
            </td>
            <td>r</td>
            <td>
                Ermöglicht es Trainern, die soeben gestellte Frage erneut zu stellen. Diese Funktion ist ident mit dem <i class="fa fa-bars"></i> Springen-zu DropDown
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Abstimmung
            </td>
            <td>v</td>
            <td>
                 Die Teilnehmer bewerten ihre Antworten.
                 Die Trainer können Antworten markieren, über die abgestimmt werden sollte.
                 Wenn Sie auf den Balken der jeweiligen Antwort klicken, wird diese Antwort zusammengeführt. Dieser Balken überdeckt den Balken, den Sie als nächstes anklicken.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> Improvisieren
            </td>
            <td>i</td>
            <td>
                Zeigt eine Liste von Fragen, die zur Improvisation geeignet sind. Schreiben Sie die Frage an die Tafel und fragen Sie nach Input.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> Springen
            </td>
            <td>j</td>
            <td>
                Zeigt eine Liste aller Fragen im Test an.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> Weiter
            </td>
            <td>n</td>
            <td>
                Zeigt die nächste Frage im Test an.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-random"></i> Zufall
            </td>
            <td>m</td>
            <td>
               Zeigt eine zufällige Frage aus dem Test an.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> Beenden
            </td>
            <td>e</td>
            <td>
                Beendet die aktuelle Frage.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> Vollbild
            </td>
            <td>f</td>
            <td>
Zeigt die Ergebnisse im Vollbildmodus an. Die Antworten scheinen nicht auf, wenn die Frage angezeigt wird. Diese Ansicht kann also für die gesamte Session beibehalten werden.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Antowrt
            </td>
            <td>a</td>
            <td>
                Zeigt den Trainern die Frage mit der richtigen Antwort an.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Antworten
            </td>
            <td>t (toggle)</td>
            <td>
               Antworten der Teilnehmer werden angezeigt oder verborgen.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> Schließen
            </td>
            <td></td>
            <td>
                Schließt die aktuelle Testession.
            </td>
        </tr>
    </table>';
$string['instructions_for_student'] = '<p>Der Test muss erst durch die Trainer gestartet werden.</p>';
$string['jazzquiz:control'] = 'Ein JazzQuiz überprüfen. (Nur für Trainer)';
$string['jazzquiz:seeresponses'] = 'Andere Antworten von Teilnehmern anzeigen, um diese zu bewerten';
$string['modulename_help'] = '<p>
    Die Aktivität JazzQuiz ermöglicht es Trainerinnen und Trainern Live-Quiz zu erstellen und zu verwalten. Alle Standard-Fragetypen können im JazzQuiz verwendet werden.
</p>
<p>
    Während einer Session, können Trainer zu unterschiedlichen Fragen springen.
    Antworten werden in einem Live-Balkendiagramm angezeigt, das für Beamer optimiert ist. Ein Vollbildmodus ist auch verfügbar.
    Für jede Frage kann ein Zeitlimit festgelegt werden oder die Trainer können die Zeit für die Beantwortung einer Frage manuell begrenzen und zur nächsten Frage weiterspringen.
</p>';
$string['no_guests'] = 'Möglicherweise haben die Trainer noch keine Quiz Session gestartet. Sie können es später noch einmal versuchen. Es könnte auch sein, dass Sie sich als Teilnehmer/in anmelden und in den Kurs einschreiben müssen, um am Quiz teilnzunehmen.';
$string['no_students_have_joined'] = 'Es gibt noch keine Teilnehmer';
$string['no_time_limit_help'] = 'Aktivieren Sie die Checkbox, um kein Zeitlimit für diese Frage zu setzen. <p>Die Trainer müssen dann durch Klick auf den "Frage beenden" Button zur nächsten Frage weiterspringen.';
$string['quiz_not_running'] = '<p>Warten Sie bis die Trainer den Test gestartet hat.</p><p>Laden Sie den Test gegebenenfalls neu.</p>';
$string['teacher_start_instructions'] = '<p>Starten Sie das Quiz für die Teilnehmer</p><p>Geben Sie einen Session Namen ein, um die Ergebnisse später einzusehen.</p>';
$string['wait_for_students'] = 'Auf Teilnehmer warten';
$string['x_students_have_joined'] = '{$a} Teilnehmer';
