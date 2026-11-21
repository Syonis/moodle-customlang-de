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
 * @package    block
 * @subpackage dash
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablefields_help'] = 'Wählen Sie alle möglichen Felder aus, die diese Datenquelle verwenden soll. Nutzer können die Felder nach Bedarf auswählen. Beispiel: Wenn Nutzungsinformationen angezeigt werden, möglichst viele entsprechende Felder bereitstellen.';
$string['courseredirecturldesc'] = 'Geben Sie die URL ein, zu der Teilnehmer von der Kursübersichtsseite weitergeleitet werden.';
$string['defaultsortfield_help'] = 'Sortiert die Datenbankergebnisse nach diesem Feld. Wenn das Layout die Sortierung nach Nutzern unterstützt, ist dies die Standardeinstellung.';
$string['enabledownload_help'] = 'Diese Einstellung ermöglicht es Nutzern, die Daten sowohl im CSV- als auch im XLS-Format herunterzuladen.';
$string['hidetable_help'] = 'Wenn diese Option aktiviert ist, können Nutzer den Tabelleninhalt in der Dash-Instanz ausblenden. Nur die Kopf- und Fußzeilenblöcke bleiben sichtbar.';
$string['label:onlineuserscount'] = 'Aktuell eingeloggte Nutzer';
$string['loggedinuser'] = 'Eingeloggte Nutzer';
$string['myparticipants'] = 'Meine Teilnehmer';
$string['permissionsrolecontext_help'] = 'Kontext auswählen, in dem die Rolle der Nutzer geprüft werden soll (beliebiger Kontext oder nur Systemkontext).';
$string['relations_help'] = 'Beinhaltet Nutzer mit bestimmten Rollen (z.B. Mentor/in, Elternteil, Vorgesetzte/r, Coach).';
$string['restrictbyactivitycompletion_help'] = 'Mit dieser Einstellung lässt sich die Sichtbarkeit von Inhalten basierend auf dem Abschlussstatus der gewählten Aktivitäten steuern. <br><b>Nicht abgeschlossen:</b> Block ist nur sichtbar für Nutzer, die nicht alle ausgewählten Aktivitäten abgeschlossen haben.<br><b>Abgeschlossen:</b> Block ist nur sichtbar für Nutzer, die alle ausgewählten Aktivitäten abgeschlossen haben.<br><b>Bestanden:</b> Block ist nur sichtbar für Nutzer, die alle ausgewählten Aktivitäten abgeschlossen und die Bestehensnote erreicht haben.<br><b>Nicht bestanden:</b> Block ist nur sichtbar für Nutzer, die zwar alle Aktivitäten abgeschlossen, aber die Bestehensnote in mindestens einer nicht erreicht haben.';
$string['restrictbycohort_help'] = 'Steuert die Sichtbarkeit von Inhalten basierend auf der Kohortenzugehörigkeit der Nutzer. Nur Mitglieder der angegebenen Kohorten sehen den Inhalt.';
$string['restrictbycoursecompletion_help'] = 'Steuert die Sichtbarkeit von Inhalten basierend auf Einschreibung und Fortschritt im Kurs.<br><b>Nicht eingeschrieben:</b> Sichtbar nur für Nutzer ohne Einschreibung (z. B. Gäste).<br><b>Eingeschrieben:</b> Sichtbar nur für eingeschriebene Nutzer ohne Aktivitätsabschluss.<br><b>Laufend:</b> Sichtbar nur für eingeschriebene Nutzer mit mindestens einem Aktivitätsabschluss.<br><b>Abgeschlossen:</b> Sichtbar nur für eingeschriebene Nutzer, die alle erforderlichen Aktivitäten abgeschlossen haben.';
$string['restrictbygroup_help'] = 'Mit dieser Einstellung können Sie die Sichtbarkeit von Inhalten basierend auf der Gruppenmitgliedschaft einer Person im aktuellen Kurs steuern. Nur Teilnehmer, die Teil der ausgewählten Gruppen sind, können die Inhalte sehen.';
$string['restrictbyrole_help'] = 'Mit dieser Einstellung können Sie die Sichtbarkeit von Inhalten basierend auf der Rolle einer Person im aktuellen Kurs steuern. Nur Teilnehmer, die die ausgewählten Rollen haben, können die Inhalte sehen.';
$string['restrictrolecontext_help'] = 'Kontext auswählen, in dem die Rolle der Nutzer geprüft wird (beliebiger Kontext oder nur Systemkontext).';
$string['suggestcohort'] = 'Nutzer vorschlagen, die in derselben globalen Gruppen sind';
$string['suggestcohort_desc'] = 'Block mit Nutzern-Kontaktliste anzeigen, die gleiche Interessen haben';
$string['suggestgroups'] = 'Nutzer vorschlagen, die in denselben Gruppen sind';
$string['suggestgroups_desc'] = 'Block mit Nutzern-Kontaktliste anzeigen, die gleiche Interessen haben';
$string['suggestinterests'] = 'Nutzer vorschlagen, welche die gleichen Interessen haben';
$string['suggestinterests_desc'] = 'Block mit Nutzern-Kontaktliste anzeigen, die gleiche Interessen haben';
$string['suggestusers'] = 'Nutzer mit gleichen Interessen vorschlagen';
$string['suggestusers_desc'] = 'Block mit Nutzern-Kontaktliste anzeigen, die gleiche Interessen haben';
$string['supportsfieldvisibility_help'] = 'Wenn diese Option aktiviert ist, können Administratoren Felder bedingt aktivieren und deaktivieren.';
$string['users'] = 'Nutzer';
$string['users_help'] = 'Datenquelle zeigt die Liste der verfügbaren Nutzer aus dem LMS';
$string['users_mycohort'] = 'Nutzer in einer meiner globalen Gruppen';
$string['userscompleted'] = 'Nutzer abgeschlossen';
$string['usersnotcompleted'] = 'Nutzer nicht abgeschlossen';
$string['userstat'] = 'Nutzer-Statistik';
$string['widget:mycontacts_help'] = 'Liste verfügbarer Nutzer in der Kontaktliste.';
$string['widget:mylearning_help'] = 'Liste der Kurse, die registrierte Nutzer haben, mit grundlegenden Kursinformationen wie Trainer und verfügbaren Badges sowie einer Liste der Kursabschnitte und -module';
$string['widget:skillprogress_help'] = 'Kompetenzfortschritt zeigt den Gesamtfortschritt der Nutzer in allen gewählten Kompetenzen, einschließlich aktuellem Level und Punkten pro Kompetenz.';
