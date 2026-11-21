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
 * @subpackage forum
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Alle Nutzer';
$string['blockafter'] = 'Nutzer sperren';
$string['blockafter_help'] = 'Diese Zahl legt fest, wie viele Beiträge pro Nutzer im angegebenen Zeitfenster maximal ins Forum eingetragen werden dürfen. Nutzer mit der Berechtigung mod/forum:postwithoutthrottling sind von einer Sperre ausgenommen.';
$string['blockperiod_help'] = 'In diesem Zeitfenster dürfen maximal so viele Beiträge pro Nutzer ins Forum eingetragen werden, wie mit der Zahl \'Sperre\' festgelegt sind. Nutzer mit der Berechtigung mod/forum:postwithoutthrottling sind von einer Sperre ausgenommen.';
$string['cannotadddiscussionall'] = 'Sie dürfen kein neues Thema für alle Teilnehmer anlegen.';
$string['cannoteditposts'] = 'Sie dürfen keine Beiträge anderer Nutzer ändern!';
$string['cannotviewpostyet'] = 'Sie können Beiträge anderer Teilnehmer erst lesen, wenn Sie selber einen Beitrag geschrieben haben.';
$string['cannotviewusersposts'] = 'Von diesem Benutzer gibt es keine Beiträge, die Sie sehen könnten.';
$string['completiondiscussions'] = 'Teilnehmer muss ein Thema neu beginnen:';
$string['completiondiscussionsdesc'] = 'Teilnehmer muss mindestens {$a} Themen anlegen';
$string['completionposts'] = 'Teilnehmer muss ein Thema neu beginnen oder Antworten verfassen:';
$string['completionpostsdesc'] = 'Teilnehmer muss mindestens {$a} Themen oder Antworten beitragen';
$string['completionreplies'] = 'Teilnehmer muss Antworten verfassen:';
$string['completionrepliesdesc'] = 'Teilnehmer muss mindestens {$a} Antworten verfassen';
$string['configreplytouser'] = 'Wenn ein Forumsbeitrag per E-Mail verschickt wird, soll er die Adresse des Teilnehmers enthalten, damit die Empfänger persönlich antworten können (statt über das Forum). Wenn Sie "Ja" auswählen, können die Teilnehmer in ihrem Profil festlegen, ob ihre E-Mail-Adresse veröffentlicht werden soll oder nicht.';
$string['digestsentusers'] = 'Die E-Mail-Zusammenfassung wurde erfolgreich an {$a} Teilnehmer gesendet.';
$string['disallowsubscribeteacher'] = 'Das Forum kann nicht abonniert werden (nur Trainer)';
$string['discussionlistsortbystarterasc'] = 'Sortieren nach Themenstarter in aufsteigender Reihenfolge';
$string['discussionlistsortbystarterdesc'] = 'Sortieren nach Themenstarter in absteigender Reihenfolge';
$string['displaystart_help'] = 'Die Option legt fest, ob ein Forumsbeitrag erst ab einem bestimmten Datum angezeigt werden soll. Administratoren dürfen immer alle Beiträge sehen.';
$string['eachuserforum'] = 'Jeder darf genau ein Thema anlegen';
$string['eventsubscribersviewed'] = 'Abonnementen angezeigt';
$string['forcedreadtracking_desc'] = 'Diese Option ermöglicht es in Foren, das Forumstracking für alle Nutzer verpflichtend vorzugeben. In Kursen mit vielen Foren und Beiträgen könnte sich die Ladezeit der Seite deutlich erhöhen. Wenn diese Option deaktiviert wird, wird ein vorher verbindliches Forumstracking zu einer optionalen Einstellung.';
$string['forumauthorhidden'] = 'Autor (verborgen)';
$string['forumgrader'] = 'Bewertet für Forum';
$string['forumtype_help'] = 'Es gibt fünf verschiedene Forentypen: * Diskussion zu einem Thema - Alle Teilnehmer dürfen zu diesem Thema antworten. Dieser Typ funktioniert nicht mit getrennten Gruppen. * Jeder Benutzer darf ein Thema anlegen - Alle Teilnehmer dürfen ein neues Thema beginnen, auf das dann alle anderen antworten können. * Frage-Antwort-Forum - Alle Teilnehmer müssen zuerst eine gestellte Frage beantworten, bevor sie andere Beiträge sehen können. * Standardforum in blogähnlichem Format - offenes Forum, in dem alle Teilnehmer jederzeit ein Thema beginnen und auf andere Beiträge antworten können. In einer Übersicht sind die Diskussionsthemen und Links zu den Beiträgen sichtbar. * Standardforum - offenes Forum, in dem alle Teilnehmer jederzeit ein Thema beginnen und auf andere Beiträge antworten können.';
$string['gradeusers'] = 'Teilnehmer bewerten';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die ein Benutzer in einer Forumsaktivität erreicht hat.';
$string['indicator:cognitivedepthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Forumsaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen, Feedback kommentieren, Beiträge nach Feedback überarbeiten).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die ein Benutzer in einer Forumsaktivität erreicht hat.';
$string['indicator:socialbreadthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des soziale Engagements erreicht, das die Forumsaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['introblog'] = 'Die Beiträge in diesem Forum wurden automatisch aus den Blogs von Teilnehmern des Kurses erstellt, da die Blogeinträge nicht mehr verfügbar sind.';
$string['introteacher'] = 'Forum für Traineranmerkungen und -diskussionen';
$string['lockdiscussionafter_help'] = 'Themen können automatisch gesperrt werden, wenn eine angegebene Zeit seit der letzten Antwort überschritten ist. Nutzer mit dem Recht, in gesperrten Themen zu antworten, können ein Thema erneut öffnen und dort antworten.';
$string['modulename_help'] = 'Richten Sie ein Forum ein, um den Nutzern in Ihrem Kurs die Gelegenheit zu geben, asynchrone Diskussionen zu führen, die über einen längeren Zeitraum stattfinden. Es stehen verschiedene Forentypen zur Auswahl, z.B. ein Standardforum, in dem alle jederzeit eine neue Diskussion beginnen können; ein Forum, in dem jeder Nutzer genau eine Diskussion posten kann; oder ein Frage-und-Antwort-Forum, in dem die Teilnehmer zuerst Beiträge verfassen müssen, bevor sie fremde Beiträge anzeigen können. Trainer können zulassen, dass Dateien an Forenbeiträge angehängt werden. Angehängte Bilder werden im Forumsbeitrag angezeigt. Teilnehmer können ein Forum abonnieren, um Benachrichtigungen über neue Forenbeiträge zu erhalten. Trainer können den Abonnementmodus auf optional, verbindlich oder automatisch einstellen oder das Abonnement vollständig verhindern. Bei Bedarf können Teilnehmer daran gehindert werden, in einem bestimmten Zeitraum mehr als eine bestimmte Anzahl von Beiträgen zu veröffentlichen. Dies soll verhindern, dass einzelne Nutzer Diskussionen dominieren. Forenbeiträge können von Trainern oder Teilnehmern bewertet werden (Peer-Bewertung). Die Bewertungen können zu einer Endnote zusammengefasst werden, die in den Bewertungen festgehalten wird. Die Aktivität Forum hat viele Verwendungsmöglichkeiten, wie z.B. * Ein sozialer Raum für Teilnehmer, um sich kennenzulernen * Für Kursankündigungen (über ein Ankündigungen-Forum mit Zwangsabonnement) * Zum Besprechen von Kursinhalten oder zum Lesen von Materialien * Für die Fortsetzung einer Diskussion, die in einer persönlichen Sitzung begonnen wurde * Für Diskussionen nur für Trainer (über ein verborgenes Forum) * Ein Hilfezentrum, in dem Tutoren und Teilnehmer Ratschläge geben können * Als Bereich für eine 1:1-Unterstützung zwischen Teilnehmer und Trainer (über ein Forum mit getrennten Gruppen und mit 1 Teilnehmer pro Gruppe) * Für Erweiterungsaktivitäten, z.B. "Denkaufgaben", zu denen die Teilnehmer Lösungen vorschlagen sollen';
$string['modulename_summary'] = 'Erstellen Sie Online-Diskussionsforen, in denen die Teilnehmer Beiträge verfassen und beantworten können.';
$string['namenews_help'] = 'Das Ankündigungsforum ist ein Forum, das automatisch von Moodle in jedem Kurs und auch der Startseite generiert wird. Ausschließlich Trainer und Administratoren dürfen im Ankündigungsforum schreiben. Pro Kurs kann es nur ein Ankündigungsforum geben. Im Block "Neuste Ankündigungen" werden die aktuelle Beiträge angezeigt.';
$string['nameteacher'] = 'Trainerforum';
$string['nextuser'] = 'Änderungen speichern und zum nächsten Benutzer';
$string['noguestpost'] = 'Nur angemeldete Benutzer dürfen Forumsbeiträge schreiben.';
$string['nosubscribers'] = 'Bisher gibt es keine Abonnenten im Forum.';
$string['nousersmatch'] = 'Für die angegebenen Kriterien wurden keine Nutzer gefunden';
$string['postisprivatereply'] = 'Dies ist eine private Antwort. (Trainer und Nutzer mit dem Recht "Private Antworten anzeigen" können diese ebenfalls sehen.)';
$string['postmailnow'] = 'Dieser Beitrag wird direkt als E-Mail an alle Abonnenten des Forums versendet.';
$string['posttomygroups_help'] = 'Diesen Beitrag an alle Gruppen senden, zu denen Sie Zugriff haben. Teilnehmer in den übrigen Gruppen können Ihren Beitrag nicht sehen.';
$string['potentialsubscribers'] = 'Mögliche Abonnenten';
$string['previoususer'] = 'Änderungen speichern und zum vorherigen Benutzer';
$string['privacy:metadata:forum_discussion_subs:discussionid'] = 'ID der Diskussion, in der der Benutzer eingeschrieben ist';
$string['privacy:metadata:forum_discussion_subs:userid'] = 'ID des Benutzers, der in die Diskussion eingeschrieben ist';
$string['privacy:metadata:forum_discussions'] = 'Infos zu den individuellen Forumsthemen, die ein Benutzer angelegt hat';
$string['privacy:metadata:forum_discussions:userid'] = 'ID des Benutzers, der die Diskussion gestartet hat';
$string['privacy:metadata:forum_discussions:usermodified'] = 'ID des Benutzers, der die Diskussion zuletzt bearbeitet hat';
$string['privacy:metadata:forum_grades:userid'] = 'ID des Benutzers, der bewertet hat';
$string['privacy:metadata:forum_posts:privatereplyto'] = 'ID des Benutzers, an den diese Antwort gesendet wurde.';
$string['privacy:metadata:forum_posts:userid'] = 'ID des Benutzers, der den Forumsbeitrag angelegt hat';
$string['privacy:metadata:forum_queue:userid'] = 'Benutzer, der über den Beitrag informiert werden soll';
$string['privacy:metadata:forum_read'] = 'Infos über gelesene Beiträge dieses Benutzers';
$string['privacy:metadata:forum_read:userid'] = 'ID des Benutzers, zu dem dieser Datensatz gehört.';
$string['privacy:metadata:forum_subscriptions'] = 'Infos, welche Themen dieser Benutzer abonniert hat.';
$string['privatereply_help'] = 'Eine private Antwort kann nur vom Autor der Person, auf deren Beitrag geantwortet wird, und von Nutzern mit dem Recht \'Private Antworten anzeigen\' gesehen werden, z.B. Trainer.';
$string['qandanotify'] = 'In diesem Frage-Antwort-Forum müssen Sie zuerst eine Antwort schreiben, bevor Sie die Antworten anderer Teilnehmer sehen können.';
$string['searchusers'] = 'Suche von Teilnehmern';
$string['seeallposts'] = 'Alle Beiträge dieses Benutzers ansehen';
$string['sendstudentnotificationsdefault'] = 'Standardeinstellung für "Teilnehmer benachrichtigen"';
$string['sendstudentnotificationsdefault_help'] = 'Setzen Sie den Standardwert für das Kontrollkästchen "Teilnehmer benachrichtigen" auf der Bewerteroberfläche.';
$string['sendstudentnotificationsyes'] = 'Ja, Teilnehmer benachrichtigen';
$string['showimmediately_help'] = 'Antworten anderer Nutzer werden bereits angezeigt, bevor die Bearbeitungszeit ({$a} Minuten) abgelaufen ist. Teilnehmer könnten ihre Beiträge während dieser Zeit noch ändern.';
$string['showmoreusers'] = 'Weitere Nutzer anzeigen';
$string['showusersearch'] = 'Suche von Teilnehmern zeigen';
$string['subscribeall'] = 'Alle Teilnehmer haben in dieses Forum abonniert';
$string['subscribeenrolledonly'] = 'Nur eingeschriebene Benutzer dürfen Forenbeiträge als Mitteilung abonnieren.';
$string['subscribenone'] = 'Forum für alle Teilnehmer abbestellen';
$string['subscribers'] = 'Abonnenten';
$string['subscriberstowithcount'] = 'Abonnenten für \'{$a->name}\' ({$a->count})';
$string['subscriptionmode_help'] = 'Alle Abonnenten dieses Forums bekommen die Beiträge als Mitteilungen gesendet. Es gibt unterschiedliche Modi für ein Abonnement: * Optional - alle dürfen auswählen, ob sie das Forum abonnieren möchten oder nicht * Verpflichtend - alle haben das Forum abonniert und niemand kann es abbestellen * Automatisch - alle haben das Forum abonniert, dürfen es aber jederzeit abbestellen * Deaktiviert - Das Forum kann von niemandem abonniert werden';
$string['timedhidden'] = 'Zeitgesteuerter Status: Für Teilnehmer verborgen';
$string['timedvisible'] = 'Zeitgesteuerter Status: Für Teilnehmer sichtbar';
$string['trackingtype_help'] = 'Mithilfe des Forumstrackings können Teilnehmer sehen, welche Beiträge sie noch nicht gelesen haben. * Optional - Das Forumstracking ist ein- und ausschaltbar. Teilnehmer finden dafür eine Einstellung in der Aktivitätsnavigation des Forums oder im Block Forums-Administration. Sie müssen vorher das Forumstracking in den persönlichen Einstellungen aktiviert haben. * Verpflichtend - Wenn in der Website-Administration die Option \'Verpflichtendes Forumstracking erlauben\' aktiviert ist, ist eine weitere Option \'Verpflichtend\' verfügbar. Hierbei ist das Forumstracking immer aktiviert, unabhängig von den persönlichen Nutzereinstellungen.';
$string['usersforumposts'] = 'Forenbeiträge des Benutzers';
$string['warnafter_help'] = 'Vor dem Erreichen der Beitragshöchstzahl innerhalb des Zeitfensters können die Nutzer gewarnt werden. Die Einstellung legt fest, nach wie vielen Beiträgen die Warnung gezeigt wird. Nutzer mit der Berechtigung mod/forum:postwithoutthrottling sind von einer Sperre ausgenommen.';
