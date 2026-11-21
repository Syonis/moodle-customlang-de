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
 * @subpackage checklist
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoupdatenote'] = 'Der Eintrag für "Teilnehmer" wird automatisch abgehakt - auf "Nur Trainer"-Fortschrittslisten werden keine automatischen Änderungen vorgenommen';
$string['autoupdatewarning_teacher'] = 'Die Aktivitäten in der Fortschrittsliste werden automatisch abgehakt, wenn Teilnehmer sie jeweils abgeschlossen haben.';
$string['emailoncomplete_help'] = 'Sobald eine Fortschrittsliste erledigt ist, kann eine Benachrichtigung sowohl an Teilnehmer, die sie abgeschlossen haben, als auch an alle Trainer des Kurses, versendet werden.<br />
Der Administrator kann über die Berechtigung \'mod:checklist/emailoncomplete\' beeinflussen, wer die E-Mail erhält - standardmäßig sind das alle Trainer mit und ohne Bearbeitungsrecht.';
$string['lockteachermarks'] = 'Kennzeichnungen von Trainern sperren';
$string['lockteachermarks_help'] = 'Wenn diese Einstellung aktiv ist, können Trainer, sobald  einmal eine \'Ja\' Kennzeichnung vergeben wurde, diese nicht mehr ändern. Benutzer mit der Berechtigung \'mod/checklist:updatelocked\' können die Sperre übergeben und die Kennzeichnung trotzdem ändern.';
$string['modulename_summary'] = 'Eine Checkliste / To-Do-Liste / Aufgabenliste als Aktivität für Teilnehmer zum Durcharbeiten';
$string['onlyenrolled'] = 'Nur aktive Nutzer';
$string['onlyenrolleddesc'] = 'Wenn dies aktiviert ist, werden nur Nutzer mit aktiver Einschreibung in der Fortschrittsliste angezeigt. (Deaktivieren für das frühere Verhalten der Aktivität)';
$string['privacy:metadata:checklist_check'] = 'Informationen darüber, welche Einträge von Teilnehmern (oder von Trainern für die Teilnehmer) in einer bestimmten Fortschrittsliste abgewählt wurden';
$string['privacy:metadata:checklist_comp_notification'] = 'Markieren, welche Nutzer bereits alle Punkte ihrer Fortschrittsliste abgeschlossen haben, damit E-Mails nicht erneut versendet werden';
$string['privacy:metadata:checklist_item:userid'] = 'Nutzer-ID der Person, die diesen privaten Eintrag erstellt hat (0 bei Einträgen von Trainern, die für alle Nutzer sichtbar sind)';
$string['studentcomments'] = 'Teilnehmer können eigene Kommentare zu Punkten in der Fortschrittsliste hinzufügen';
$string['teacheralongsidecheck'] = 'Teilnehmer und Trainer';
$string['teachercomments'] = 'Trainer können Kommentare hinzufügen';
$string['teachermarkno'] = 'Trainer haben festgestellt, dass Sie dieses Element NICHT abgeschlossen haben.';
$string['teachermarkundecided'] = 'Die Trainer haben dieses Element noch nicht bewertet';
$string['teachermarkyes'] = 'Trainer tragen ein wenn Sie dieses Element erledigt haben';
$string['viewall'] = 'Alle Teilnehmer ansehen';
