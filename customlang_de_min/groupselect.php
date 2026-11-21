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
 * @subpackage groupselect
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignedteacher'] = 'Betreuer';
$string['assigngroup'] = 'Betreuer zu Gruppen zuordnen';
$string['assigngroup_help'] = 'Wenn diese Option aktiviert ist, erscheint ein Button um Betreuer, sofern in diesem Kurs welche existieren, Gruppen zuzuordnen. Zugeordnete Betreuer sind keine Gruppenmitglieder, erscheinen aber in exportierten Dateien und in der Hauptansicht (sofern ausgewählt). Nützlich, wenn der Kurs Assistenten benutzt, um Gruppen zu betreuen. Diese Berechtigung kann in den Rollenberechtigungen pro Rolle definiert werden.';
$string['deleteemptygroups_help'] = 'Wenn diese Option aktiviert ist, wird eine Gruppe automatisch gelöscht, sobald alle Teilnehmer die Gruppe verlassen haben.';
$string['eventgroupteacheradded'] = 'Betreuer zugeordnet';
$string['groupselect:assign'] = 'Das Hinzufügen eingeschriebener Betreuer zu Gruppen erlauben';
$string['hidegroupmembers'] = 'Gruppenmitglieder für Teilnehmer verbergen';
$string['hidegroupmembers_help'] = 'Wenn diese Option aktiviert ist, werden alle Gruppenmitglieder für Teilnehmer ausgeblendet. Wenn Teilnehmer die Gruppen verwalten (moodle/course:managegroups) oder wenn sie auf alle Gruppen zugreifen können (moodle/site:accessallgroups), werden die Mitglieder immer angezeigt.';
$string['hidesuspendedstudents'] = 'Inaktive Teilnehmer ignorieren';
$string['hidesuspendedstudents_help'] = 'Wenn diese Option aktiviert ist, werden inaktive Teilnehmer bei der Nutzerzahl und aus Gruppenlisten weggelassen.';
$string['maxgroupmembership'] = 'Maximale Anzahl der Gruppenteilnahme pro Teilnehmer';
$string['minmembers_error_bigger_maxmembers'] = 'Die Mindestanzahl muss kleiner sein als die Maximalanzahl an Teilnehmer!';
$string['modulename_help'] = 'Teilnehmer können Gruppen erstellen und wählen: * Teilnehmer können Gruppen erstellen, diesen eine Beschreibung geben und, falls gewünscht, mit einem Kennwort schützen * Teilnehmer können Gruppen auswählen und betreten * Betreuer können Gruppen hinzugefügt werden * Die Trainer können die Gruppenliste des Kurses als CSV-Datei exportieren * Volle Kompatibilität zu Basis Moodle-Gruppen: Gruppen können auch durch andere Plugins erzeugt werden.';
$string['showassignedteacher'] = 'Zugeteilte Betreuer anzeigen';
$string['showassignedteacher_help'] = 'Wenn diese Option aktiviert ist, werden zugeteilte Betreuer in Gruppenmitglieder angezeigt. Dies könnte nützlich sein, wenn Teilnehmer ihre zugeteilten Betreuer wissen müssen.';
$string['studentcancreate'] = 'Teilnehmer können Gruppen anlegen';
$string['studentcancreate_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer ohne Gruppenzugehörigkeit (in der ausgewählten Gruppierung) Gruppen erstellen. Diese Berechtigung kann in den Rollenberechtigungen pro Rolle definiert werden.';
$string['studentcanjoin'] = 'Teilnehmer können Gruppen beitreten';
$string['studentcanjoin_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer Gruppen beitreten. Diese Berechtigung kann in den Rollenberechtigungen pro Rolle definiert werden.';
$string['studentcanleave'] = 'Teilnehmer können Gruppen verlassen';
$string['studentcanleave_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer Gruppen verlassen. Diese Berechtigung kann in den Rollenberechtigungen pro Rolle definiert werden.';
$string['studentcansetdesc'] = 'Teilnehmer können Gruppenbeschreibung erstellen und ändern';
$string['studentcansetdesc_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer beim Erstellen einer Gruppe eine Beschreibung anlegen und diese bearbeiten.';
$string['studentcansetenrolmentkey'] = 'Teilnehmer können Kennwörter setzen, um den Gruppenbeitritt zu regeln';
$string['studentcansetenrolmentkey_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer ein Gruppenkennwort setzen';
$string['studentcansetgroupname'] = 'Teilnehmer dürfen Gruppennamen selbst bestimmen';
$string['studentcansetgroupname_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer die Gruppennamen für neue Gruppen setzen.';
$string['unassigngroup'] = 'Betreuer von Gruppen entfernen';
$string['unassigngroup_confirm'] = 'Diese Aktion entfernt Betreuer von Gruppen. Sind Sie sicher?';
