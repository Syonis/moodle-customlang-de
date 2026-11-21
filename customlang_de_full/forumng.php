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
 * @subpackage forumng
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['afterenddatecapable'] = 'Teilnehmer können Beiträge in diesem Forum lesen, aber selber keine eigene Beiträge erstellen ab {$a}. Sie dürfen aber trotzdem weitere Beiträge erstellen.';
$string['alert_intro'] = 'Sie können den Link zur Benachrichtigung verwenden, um Moderatoren dieses Forums auf einen Beitrag aufmerksam zu machen.';
$string['alt_discussion_timeout'] = 'Nicht für Benutzer sichtbar (Zeitlimit)';
$string['asmoderator_anon'] = 'Selbstidentifizierung als Moderator (Name ist für Teilnehmer nicht sichtbar)';
$string['asmoderator_help'] = 'Diese Option erlaubt es ausgesuchten Nutzer, sich als Moderator auszuweisen oder als Moderator mit einem für Teilnehmer unsichtbaren Profil zu schreiben.';
$string['authorname_help'] = 'Sie können einen Namen (Jane), einen Nachnamen (Brown), den vollständigen Namen (jane brown) oder auch den ersten Teil von jedem dieser Namen (Ja, bro, Jane B) eintippen. Suchbegriffe sind unabhängig von der Groß-/Kleinschreibung.

Sie können auch einen Benutzernamen eingeben (jb001).

Wenn Sie dieses Feld leer lassen, werden Beiträge von allen Autoren einbezogen.';
$string['beforestartdatecapable'] = 'Teilnehmer können Beiträge in diesem Forum lesen, aber selber keine eigenen Beiträge erstellen bis {$a}. Sie dürfen aber trotzdem auch vorher weitere Beiträge erstellen.';
$string['completiondiscussionsgroup_help'] = 'Diese Option legt fest, dass das Forum für Teilnehmer als abgeschlossen markiert wird, sobald diese die notwendige Anzahl neuer Diskussionen erstellt haben (und eventuell weitere Bedingungen erfüllt sind).';
$string['completionpostsgroup_help'] = 'Diese Option legt fest, dass das Forum für Teilnehmer als abgeschlossen markiert wird, sobald diese die notwendige Anzahl neuer Diskussionen bzw. Antworten erstellt haben (und eventuell weitere Bedingungen erfüllt sind).';
$string['completionrepliesgroup_help'] = 'Diese Option legt fest, dass das Forum für Teilnehmer als abgeschlossen markiert wird, sobald diese die notwendige Anzahl von Antworten zu bestehenden Diskussionen erstellt haben (und eventuell weitere Bedingungen erfüllt sind).';
$string['configemailafter'] = 'E-Mail-Nachricht an abonnierte Nutzer mit einer Verzögerung nach der Erstellung des Beitrags.';
$string['configreplytouser'] = 'Wenn ein Forumbeitrag verschickt wird, sollte dieser die E-MAil-Adresse des Benutzers enthalten, so dass der Empfänger persönlich antworten kann, anstatt über das Forum zu antworten. Auch wenn \'ja\' gesetzt ist, können benutzer in ihrem Profil wählen, ob ihre E-Mail Adresse geheim bleiben soll.';
$string['configusebcc'] = 'Lassen Sie diesen Wert bei 0, um Moodle Standard Mail Handling zu verwenden (sicher).
Setzen Sie eine Zahl (z.B. 50), um Forum E-Mails mithilfe der BCC zu gruppieren, so dass Moodle nur eine einzige E-Mail sendet und Ihr Mail-Server versendet die E-Mail an viele Teilnehmer weiter.
Dies kann die Leistung von E-Mail des Forum-cronjobs verbessern, aber einige Funktionen vom Standard-Moodle-E-Mail-System sind nicht enthalten.';
$string['confirmbulkunsubscribe'] = 'Sind Sie sicher, dass Sie die Benutzer in der Liste abmelden möchten? (Dies kann nicht rückgängig gemacht werden).';
$string['createdbymoderator'] = 'Dieser Beitrag stammt von Moderator {$a}, dessen Name für Teilnehmer nicht sichtbar ist.';
$string['enablelimit_help'] = 'Diese Option beschränkt Diskussionen und Antworten, die von Studenten erstellt wurden
(insbesondere alle Benutzer, ohne die <tt>mod/forumng:ignorethrottling</tt> Fähigkeit).';
$string['enableratings_help'] = 'Wenn diese Option aktiviert ist, können Forenbeiträge eine Bewertung erhalten unter zur hilfenahme einer numerischen oder vordefinierten Moodle-Skala.
Ein oder mehrere Benutzer können einen Beitrag bewerten und die angezeigte Bewertung ist der Mittelwert dieser Bewertungen.';
$string['error_makebig'] = 'Der Kurs hat nur {$a->users} Benutzer';
$string['feeditems_help'] = 'Die Anzahl der Elemente in der Atom/RSS-Feeds enthalten sind. Wenn diese Anzahl niedrig eingestellt ist, können Benutzer, die
die Feeds nicht häufig nachsehen, einige Nachrichten verpassen.';
$string['feedtype_help'] = 'Wenn diese Option aktiviert ist, können Benutzer das Forum mithilfe eines Atom- oder RSS-Feed-Lesers abonnieren.
Sie können die Feeds so einstellen, dass sie nur die Top-Level Diskussionen und keine Antworten, oder alle Beiträge enthalten.';
$string['subscribers_nopermission'] = 'Sie haben keine Berechtigung, um die Teilnehmer-Liste anzusehen.';
$string['subscription_help'] = 'Sie können jeden zwingen zu abonnieren. Oder setzen Sie alle als Abonnenten. Der Unterschied ist, dass im letzeren Fall die Benutzer sich abmelden können.

Diese Optionen umfassen alle Benutzer (Studierende und Mitarbeiter), die im Kurs eingeschrieben sind. Benutzer, die nicht zu diesem Kurs gehören (so wie Administratoren) können optional als Abonnenten bleiben.';
$string['unsubscribe_nopermission'] = 'Sie haben keine Berechtigung andere Benutzer abzumelden.';
$string['unsubscribeselected'] = 'Ausgewählte Benutzer abmelden';
