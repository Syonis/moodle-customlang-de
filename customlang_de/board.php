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
 * Local language pack from ---
 *
 * @package    mod
 * @subpackage board
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrating_students'] = 'von Teilnehmer';
$string['addrating_teachers'] = 'von Trainer';
$string['completionnotes'] = 'Teilnehmer muss diese Anzahl von Notizen eintragen, um die Aktivität abzuschließen';
$string['event_add_column_desc'] = 'Nutzer \'{$a->userid}\' hat die Board-Spalte \'{$a->objectid}\' mit dem Namen \'{$a->name}\' erstellt.';
$string['event_add_comment_desc'] = 'Nutzer \'{$a->userid}\' hat einen Kommentar \'{$a->objectid}\' mit dem Inhalt \'{$a->content}\' zum Beitrag \'{$a->noteid}\' hinzugefügt.';
$string['event_add_note_desc'] = 'Nutzer \'{$a->userid}\' hat im Board den Beitrag \'{$a->objectid}\' mit der Überschrift \'{$a->heading}\', dem Inhalt \'{$a->content}\' und den Medien \'{$a->media}\' erstellt, u.z. in der Spalte \'{$a->columnid}\' und der Gruppe \'{$a->groupid}\'.';
$string['event_delete_column_desc'] = 'Nutzer \'{$a->userid}\' hat im Board die Spalte \'{$a->objectid}\' gelöscht.';
$string['event_delete_comment_desc'] = 'Nutzer \'{$a->userid}\' hat den Kommentar \'{$a->objectid}\' aus dem Beitrag \'{$a->noteid}\' gelöscht.';
$string['event_delete_note_desc'] = 'Nutzer \'{$a->userid}\' hat im Board den Beitrag \'{$a->objectid}\' aus der Spalte \'{$a->columnid}\' gelöscht.';
$string['event_move_note_desc'] = 'Nutzer \'{$a->userid}\' hat im Board den Beitrag \'{$a->objectid}\' in die Spalte \'{$a->columnid}\' verschoben.';
$string['event_rate_note_desc'] = 'Nutzer \'{$a->userid}\' hat im Board den Beitrag \'{$a->objectid}\' mit der Bewertung \'{$a->rating}\' bewertet.';
$string['event_update_column_desc'] = 'Nutzer \'{$a->userid}\' hat im Board die Spalte \'{$a->objectid}\' zu \'{$a->name}\' aktualisiert.';
$string['event_update_note_desc'] = 'Nutzer \'{$a->userid}\' hat im Board den Beitrag \'{$a->objectid}\' mit der Überschrift \'{$a->heading}\', dem Inhalt \'{$a->content}\' und den Medien \'{$a->media}\' aktualisiert, u.z. in der Spalte \'{$a->columnid}\'.';
$string['hideheaders'] = 'Spaltentitel vor Teilnehmern verbergen';
$string['modulename_help'] = '###### Hauptfunktionen - Anonyme Beteiligung von Teilnehmern - Erstellung von Beiträgen mit Text, Bildern, Links oder eingebetteten Videos. - Konfigurierbare Optionen, wie z.B. das Bewerten und Kommentieren von Beiträgen. - Unterstützung für Gruppen- oder Einzelnutzermodi. - Nachverfolgung des Bearbeitungsstands und Download-Optionen für Trainer. ###### Einsatzmöglichkeiten - Durchführung von Vorstellungsrunden oder "Icebreaker"-Aktivitäten. - Crowdsourcing von Ideen oder Inhalten durch die Teilnehmer. - Bereitstellung visueller Diskussionsforen oder Whiteboards. - Einholung von Feedback der Teilnehmer zu Lehrveranstaltungen.';
$string['modulename_summary'] = 'Das Board ermöglicht es Teilnehmern, Ideen und Inhalte anonym über interaktive Beiträge – einschließlich Text, Bildern, Links und Videos – zu teilen.';
$string['nousers'] = 'Dieses Board hat keine eingeschriebenen Nutzer';
$string['postbyenabled'] = 'Beiträge von Teilnehmern nach Datum einschränken';
$string['privacy:metadata:board_comments:userid'] = 'ID des Benutzers, der den Kommentar hinzugefügt hat';
$string['privacy:metadata:board_history:userid'] = 'ID des Benutzers, der die Aktion ausgeführt hat';
$string['privacy:metadata:board_note_ratings:userid'] = 'ID des Benutzers, der die Bewertung des Beitrags erstellt hat';
$string['privacy:metadata:board_notes:userid'] = 'ID des Benutzers, der den Beitrag erstellt hat';
$string['privacystatement'] = '<strong>Datenschutzhinweis zum Board:</strong> Beachten Sie bitte, dass Trainer und Nutzer mit geeigneten Rechten anzeigen können, welche Teilnehmer die Board-Beiträge und Kommentare erstellt haben.';
$string['remove_note_text'] = 'Möchten Sie diesen Beitrag und alle darin enthaltenen Daten wirklich löschen? Dies wirkt sich auf alle Nutzer aus.';
$string['selectuser'] = 'Nutzer auswählen';
$string['selectuserplease'] = 'Wählen Sie bitte Nutzer aus';
$string['singleusermode_desc'] = 'Im Einzelnutzermodus können Nutzer nur Beiträge auf ihrem eigenen Board hinzufügen. Wenn die Option "privat" ist, können Nutzer die Boards anderer Nutzer nicht sehen. Wenn die Option "öffentlich" ist, sind die Boards aller Nutzer über ein Dropdown-Menü zugänglich.';
$string['userscanedit'] = 'Teilnehmern erlauben, die Platzierung ihrer eigenen Beiträge zu bearbeiten.';
