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
 * @package    core
 * @subpackage completion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allconditions'] = 'Die Aktivität ist abgeschlossen, wenn Teilnehmer das Folgende tun:';
$string['areyousureoverridecompletion'] = 'Möchten Sie wirklich den aktuellen Abschlussstatus für diese Aktivität und diesen Benutzer überschreiben und mit \'{$a}\' markieren?';
$string['bulkcompletiontracking_help'] = '<strong>Keine:</strong> Aktivitätsabschluss wird nicht angezeigt <strong>Manuell:</strong> Teilnehmer können die Aufgabe manuell als abgeschlossen markieren <strong>Unter Bedingung(en):</strong> Aktivität wird als abgeschlossen angezeigt, wenn die Bedingungen erfüllt sind';
$string['completedunlockedtext'] = 'Wenn Sie Ihre Änderungen speichern, werden die Abschlussdaten für alle Nutzer gelöscht und wenn möglich neu berechnet. Wenn Sie dies nicht möchten, speichern Sie bitte nicht!';
$string['completedwarningtext'] = 'Diese Aktivität wurde von einer oder mehreren Teilnehmern als abgeschlossen markiert. Wenn Sie die Einstellungen entsperren, um Änderungen vorzunehmen und zu speichern, werden die Abschlussdaten gelöscht und wenn möglich neu berechnet. Manuelle Abschlüsse können nicht neu berechnet werden, so dass Teilnehmer diese erneut als erledigt markieren müssen.';
$string['completion_manual'] = 'Teilnehmer müssen die Aktivität manuell als erledigt markieren.';
$string['completionexpected_help'] = 'Mit dieser Option können Sie eine Erinnerung für die Teilnehmer einrichten, an dieser Aktivität zu arbeiten. Die Erinnerung wird im Zeitleistenblock im Dashboard angezeigt, u.z. als "{$a} erfordert eine Aktion".';
$string['completionicons_help'] = 'Das Kästchen an der Seite neben der Aktivität zeigt an, ob Sie die Aktivität abgeschlossen haben. Falls ein Kästchen mit gepunktetem Rand zu sehen ist, wird darin automatisch ein Häkchen erscheinen, sobald Sie die Aktivität entsprechend den Trainervorgaben abgeschlossen haben. Falls ein Kästchen mit durchgezogenem Rand zu sehen ist, können Sie es anklicken, wenn diese Aktivität Ihrer Meinung nach abgeschlossen ist. (Ein erneuter Klick entfernt das Häkchen wieder, falls Sie Ihre Meinung nachträglich ändern sollten.)';
$string['completionpassgrade_desc'] = 'Teilnehmer muss eine Bestehensnote erhalten, um diese Aktivität abzuschließen';
$string['completionpassgrade_help'] = 'Wenn diese Option aktiviert ist, gilt die Aktivität als bestanden, wenn Teilnehmer die Bestehensgrenze erreichen.';
$string['completionusegrade_desc'] = 'Teilnehmer müssen eine Bewertung erhalten, um diese Aktivität abzuschließen';
$string['completionview_desc'] = 'Teilnehmer müssen die Aktivität aufgerufen haben, um sie abzuschließen.';
$string['configenablecompletion'] = 'Wenn diese Option aktiviert ist, können Bedingungen für den Kurs- und Aktivitätsabschluss festgelegt werden. Abschlussbedingungen für die Aktivitäten werden empfohlen, um Nutzer in deren Kursübersicht im Dashboard aussagekräftige Daten anzuzeigen.';
$string['enrolmentdurationlength'] = 'Nutzer muss eingeschrieben bleiben';
$string['err_nousers'] = 'In diesem Kurs oder in dieser Gruppe gibt es keine Teilnehmer, für die Abschlussinformationen angezeigt werden. (Abschlussinformationen werden ausschließlich für Teilnehmer mit der Fähigkeit \'In Abschlussverfolgung anzeigen\' angezeigt. Die Fähigkeit ist nur für die Standardrolle Teilnehmer erlaubt. Wenn es also keine gibt, so sehen Sie diese Fehlermeldung. Administratoren können diese Einstellung im Administrationsmenü ändern.)';
$string['err_system'] = 'Ein interner Fehler ist im Abschluss-System aufgetreten. (Systemadministratoren können den Debug-Modus aktivieren um weitere Details angezeigt zu bekommen.)';
$string['manualselfcompletionnote'] = 'Hinweis: Der Kursabschluss-Block sollte im Kurs eingefügt werden, wenn den Teilnehmern erlaubt werden soll, selber den Kurs anzuschließen.';
$string['privacy:metadata:coursecompletedsummary'] = 'Enthält Informationen über Teilnehmer, die Kursabschlusskriterien erlangt haben';
$string['privacy:metadata:coursemodulesummary'] = 'Speichert Aktivitätsabschlussdaten für einen Benutzer';
$string['privacy:metadata:overrideby'] = 'ID des Benutzers, der den Aktivitätsabschluss überschrieben hat';
$string['privacy:metadata:timeenrolled'] = 'Zeit, bei der der Benutzer im Kurs eingeschrieben wurde';
$string['privacy:metadata:unenroled'] = 'Ob der Benutzer vom Kurs abgemeldet wurde';
$string['privacy:metadata:userid'] = 'ID des Benutzers, für welchen die Kurs- und Aktivitätsabschlussdaten gespeichert werden';
$string['reportpage'] = 'Teilnehmer {$a->from} bis {$a->to} von {$a->total} anzeigen';
$string['studentsmust'] = 'Teilnehmer müssen';
$string['usernotenroled'] = 'Nutzer ist nicht in diesem Kurs eingeschrieben';
