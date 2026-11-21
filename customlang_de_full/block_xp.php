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
 * @subpackage xp
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionrules_help'] = 'Mit Aktionsregeln lassen sich Bedingungen festlegen, die bestimmen, wann und wie viele Punkte den Teilnehmern gegeben werden.

Bei jeder Aktion werden die Bedingungen in der Reihenfolge ausgewertet, in der sie auf dem Bildschirm angezeigt werden. Sobald eine Bedingung erfüllt ist, werden die entsprechenden Punkte vergeben, und die übrigen Bedingungen dieser Aktion werden nicht mehr ausgewertet.

Für einzelne Bedingungen können Obergrenzen festgelegt werden. Wenn eine Bedingung ihre Obergrenze erreicht hat, werden keine Punkte mehr vergeben, und die gesamte Aktion wird übersprungen.

[Mehr Information](https://docs.levelup.plus/xp/docs/action-rules?ref=blockxp_help)';
$string['actionrulesintro'] = 'Vergibt Punkte an die Teilnehmer für die Aktionen, die sie durchgeführt haben.';
$string['addoninstallationerror'] = 'Das Plugin local_xp scheint nicht richtig installiert zu sein. Administratoren sollten die Installation abschließen.';
$string['adminnoticefooter'] = 'Diese Benachrichtigung wurde an alle Administratoren gesendet. Um alle Benachrichtigungen zu deaktivieren, rufen Sie bitte die Administratoreinstellungen von Level Up XP auf.';
$string['adminscanearnxp'] = 'Administratoren können Punkte sammeln';
$string['adminscanearnxp_desc'] = 'Standardmäßig können Administratoren keine Punkte sammeln, da sie die Berechtigung _block/xp:earnxp_ haben. Diese Berechtigung erlaubt es, überall in allen Kontexten Punkte zu sammeln. Sie können diese Einstellung verwenden, um auch Administratoren Punkte sammeln zu lassen.';
$string['anonymity_help'] = 'Diese Einstellung gibt an, ob Namen und Avatare anderer Teilnehmer gesehen werden können.';
$string['badgeawarddesc'] = 'Ein Badge, der verliehen wird, wenn Nutzer dieses Level erreichen.';
$string['cannotshowblockconfigsys'] = 'Normalerweise würden hier die Einstellungen angezeigt, aber Ihr Block konnte nicht gefunden werden. Er fehlt möglicherweise auf der [Startseite] ({$a->fp}) und dem [standardmäßigen Dashboard] ({$a->mysys}) Ihrer Nutzer oder wird auf beiden angezeigt. Um die Einstellungen von hieraus zu bearbeiten, stellen Sie sicher, dass er nur in einem von beiden erscheint.';
$string['completionrulesintro'] = 'Teilnehmer Punkte zuweisen, wenn sie Aktivitäten, Abschnitte oder Kurse abschließen.';
$string['configdescription_help'] = 'Kurze Einführungsnachricht, die im Block angezeigt wird. Die Teilnehmer können die Nachricht zu verwerfen, in diesem Fall sehen sie sie nicht mehr.';
$string['configrecentactivity_help'] = 'Wenn diese Option aktiviert wurde, zeigt der Block eine kurze Liste der letzten Aktivitäten, bei denen die Teilnehmer mit Punkten belohnt wurden.';
$string['coursereportintro'] = 'Der Bericht enthält Einzelheiten zu jede/r Teilnehmer/in und unterstützt das Handeln für jeden einzelnen oder für die Gesamtheit der Teilnehmer.';
$string['displayparticipantsidentity'] = 'Identität der Teilnehmer anzeigen';
$string['drops_help'] = 'In Computerspielen können einige Charaktere Gegenstände oder Erfahrungspunkte fallen lassen, die die Spieler dann einsammeln können. Diese Gegenstände und Erfahrungspunkte werden als Drops bezeichnet.

In Level Up XP sind Drops Shortcodes (z.B.`[xpdrop id=1 secret=abcdef]`), die Trainer im Kurs vergeben können. Wenn diese von einer Person gefunden werden, werden sie automatisch _eingesammelt_ und die Punkte zu den bereits gesammelten Erfahrungspunkten dazugezählt.

Derzeit sind Drops für die Nutzer unsichtbar. Die Punkte werden automatisch erhöht, wenn ein Drop gefunden wurde.

Drops können verwendet werden, um Punkte zu vergeben, wenn ein bestimmter Inhalt von den Teilnehmern aufgerufen wurde. Einige Ideen für die Platzierung von Drops:

- Im Feedback von Tests, wenn alle Punkte erreicht wurden
- In schwierigem Inhalt, um die Auseinandersetzung damit zu belohnen
- In einer interessanten Forumsdiskussion
- In einer schwer erreichbaren Seite einer Lektion

[Weitere Infos (Englisch)](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['enablecheatguard_help'] = 'Der Schummelwächter (Cheat Guard) ist ein einfacher Mechanismus, der verhindert, dass Teilnehmer das System mit simplen Techniken missbrauchen, z.B. indem sie Seiten endlos auffrischen oder Aktionen ständig wiederholen.

[Weitere Infos](https://levelup.plus/docs/article/level-up-cheat-guard?ref=blockxp_help)';
$string['enableinfos_help'] = 'Wenn die Einstellung \'Nein\' gewählt ist, können Teilnehmer die Info-Seite nicht sehen.';
$string['enableladder_help'] = 'Wenn die Einstellung \'Nein\' gewählt wird, können Teilnehmer die Bestenliste nicht sehen.';
$string['enablelevelupnotif_help'] = 'Wenn die Einstellung \'Ja\' gewählt wird, wird den Teilnehmern ein Pop-up-Fenster angezeigt wenn sie ein neues Level erreicht haben.';
$string['eventsrules_help'] = 'Dieses Plugin nutzt Ereignisse, um den von Teilnehmern ausgeführten Aktionen Punkte zuzuweisen.
Sie können über die Eingabemaske eigene Regeln hinzufügen und die Standardregeln ändern.

Wir empfehlen, im Protokoll des Plugins zu überprüfen, welche Ereignisse ausgelöst werden, wenn Teilnehmer Aktionen im Kurs ausführen.

Zusätzliche Infos finden Sie hier:
- [Wie werden Erfahrungspunkte berechnet?](https://levelup.plus/docs/article/how-are-experience-points-calculated?ref=blockxp_help)
- [Fehlerbehebung](https://levelup.plus/docs/article/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Beobachten Sie Ereignisse und vergeben Sie Teilnehmer Punkte, sobald diese eintreten. Wir empfehlen nun die Verwendung der neueren Regeln „Aktion“ und „Abschluss“.';
$string['filterparticipants'] = 'Teilnehmer filtern';
$string['graderules_help'] = 'Teilnehmer sammeln so viele Punkte, wie sie bei der Bewertung erhalten haben. Bei einer Bewertung von 5/10 Punkten und einer Bewertung von 5/100 Punkten sammen sie jeweils 5 Punkte.
Wenn sich die Bewertung öfter ändert, wird die Bewertung mit den meisten Punkten für die Punktevergabe verwendet.
Gesammelte Punkte werden nie reduziert und negative Bewertungen werden ignoriert.

Beispiel: Alice gibt eine Aufgabe ab und bekommt eine Bewertung von 40/100. Alice sammelt 40 Erfahungspunkte mit ihrer Bewertung.
Alice gibt einen weiteren Versuch bei der Aufgabe ab, dieser wird aber nur mit 25/100 bewertet. Die gesammelten Erfahrungspunkte ändern sich nicht.
Beim letzten Versuch erhält Alice eine Bewertung 60/100. Sie sammelt damit weitere 20 Erfahrungspunkte damit erhöhen sich die gesammelten Punkte für diese Aufgabe auf insgesamt 60.

[Weitere Informationen unter _Level Up XP_ Dokumentation (Englisch)](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = 'Bewertungsregeln erlauben es Teilnehmer, Punkte gleich den erhaltenen Bewertungen zu sammeln.';
$string['hideparticipantsidentity'] = 'Identität der Teilnehmer verbergen';
$string['importpoints_help'] = 'Der Import kann verwendet werden, um die Punkte von Teilnehmern zu _erhöhen_ oder mit dem vorgegebenen Wert zu _überschreiben_.

_Hinweis:_ Der Import verwendet _ein anderes_ Format als der exportierte Bericht. Das erforderliche Format wird in der [Dokumentation](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help) beschrieben, wo Sie auch ein [Beispieldokument](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file) herunterladen können.';
$string['importpointsintro'] = 'Punkte von einem CSV-Dokument importieren und optional eine Nachricht an die Empfänger senden.';
$string['infos_help'] = 'Die Informationsseite gibt den Teilnehmern einen Überblick über die Level und die zum Erreichen der Level erforderlichen Punkte. Sie zeigt auch den Namen jedes Levels und die Beschreibung des Levels an.';
$string['ladder_help'] = 'In der Bestenliste werden die Teilnehmer auf der Grundlage ihrer Punkte bewertet. Wenn sie in einem Kurs mit Gruppen verwendet wird, kann eine Bestenliste für jede Gruppe von Teilnehmern erstellt werden.

Es stehen mehrere Optionen zur Verfügung, um die Bestenliste und die Erfahrung, die sie den Teilnehmern bietet, individuell zu gestalten.';
$string['ladderiso'] = 'Teilnehmer isolieren';
$string['ladderparticipation_help'] = 'Legt fest, ob Teilnehmer an der Rangliste teilnehmen müssen oder ob sie nach Belieben beitreten oder austreten können.

- Automatisch, kein Austritt möglich: Alle Teilnehmer treten automatisch der Rangliste bei und können sie nicht verlassen.
- Automatisch, Austritt möglich: Alle Teilnehmer treten automatisch der Rangliste bei, können sie aber verlassen.
- Optional, mit Opt-in: Teilnehmer müssen sich ausdrücklich für die Rangliste anmelden, um daran teilzunehmen.

Teilnehmer können ihre Meinung ändern und die Rangliste nach dem An- oder Abmelden verlassen oder wieder beitreten. Um unbeabsichtigtes Verhalten zu verhindern, können Teilnehmer, welche der Rangliste beitreten, jedoch 3 Tage lang nicht abmelden.

[Weitere Informationen](https://docs.levelup.plus/xp/docs/leaderboard-opt-out)';
$string['ladderparticipationreset'] = 'Aufgezeichneten Status aller Teilnehmer entfernen';
$string['ladderparticipationreset_help'] = 'Wenn diese Option aktiviert ist, wird der Teilnahme-Status aller Nutzer gelöscht, und alle Nutzer müssen sich erneut an- oder abmelden.';
$string['limitparticipants_help'] = 'Diese Einstellung steuert, wer in der Rangliste angezeigt wird. Nachbarn sind die Teilnehmer, die über und unter dem aktuellen Nutzer eingestuft sind. Die Einstellung \'Zeige zwei Nachbarn\' zeigt beispielsweise nur die beiden Teilnehmern direkt über und unter der aktuellen Person in der Rangliste an.';
$string['navbardisplay_desc'] = 'Wenn aktiviert, wird das Level der Teilnehmer in der Navigationsleiste oben angezeigt. Wenn Level Up! pro Kurs verwendet wird, wird das Level nur im Kurs angezeigt. Bitte beachten Sie, dass diese Funktion vom Theme abhängt und nicht mit allen Drittanbieter-Themes kompatibel ist.
 [Weitere Informationen](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['onlyparticipantscanaccessranking'] = 'Nur Teilnehmer der Bestenliste haben Zugriff zu der Bestenliste';
$string['pagecurrentnotvisibletoviewers'] = 'Diese Seite ist derzeit für Teilnehmer nicht sichtbar.';
$string['pagecurrentvisibletoviewers'] = 'Diese Seite ist derzeit für Teilnehmer sichtbar.';
$string['participants'] = 'Teilnehmer';
$string['pluginavailabilityxpdesc'] = 'Mit diesem Plugin können Trainer den Zugriff auf Aktivitäten basierend auf dem jeweiligen Level einschränken.';
$string['pluginshortcodesdesc'] = 'Mit diesem Plugin können Trainer ihr Material anpassen, indem sie XP-bezogene Elemente (Punkte, Level, Bestenliste usw.) in den Kurs aufnehmen und Inhalte basierend auf dem Level verbergen oder anzeigen.';
$string['popupnotificationmessagedesc'] = 'Optionale Nachricht, die im PopUp angezeigt wird und den Teilnehmern zum Erreichen des Levels gratuliert.';
$string['privacy:metadata:xp'] = 'Speichert Punkte und Level der Nutzer';
$string['privacy:path:userflags'] = 'Teilnehmer-Flags';
$string['promoaskadmin'] = 'Fragen Sie Ihre Administratoren nach Level Up XP+.';
$string['promorulesdidyouknow'] = 'Wussten Sie, dass Teilnehmer mit <em>Level Up XP+</em> Erfahrungspunkte für <em>Kurse abschließen</em> und <em>Aktivitäten abschließen</em> sammeln, oder sogar entsprechend ihrer <em>Bewertung</em> erhalten können? <a href="{$a->url}">Hier erfahren Sie mehr!</a>.';
$string['provisionstates_desc'] = 'Standardmäßig erscheinen Teilnehmer erst dann in der Rangliste (und im Bericht im systemweiten Modus), wenn sie von XP erkannt wurden. Die Nutzerbereitstellung ist eine erweiterte Funktion, die automatisch Einträge für fehlende Teilnehmer erstellt, die anhand ihrer Rolle grob identifiziert werden. Dies geschieht regelmäßig über eine geplante Aufgabe, die standardmäßig täglich ausgeführt wird. [Lernmodus](https://docs.levelup.plus/xp/docs/automatic-user-provisioning)';
$string['reallydeleteuserstate'] = 'Das Löschen einer Person ist nur hilfreich, um sie aus der Rangliste zu entfernen. Für alle anderen Gründe sollten Sie stattdessen die Punkte auf 0 zurücksetzen. Beachten Sie, dass Nutzer unabhängig von der Löschung zukünftig weiter Erfahrungspunkte sammeln können.

Wenn Sie _Level Up XP_ für die gesamte Website verwenden, werden gelöschte Nutzer aus dem Bericht entfernt und Sie können ihnen keine Punkte neu zuweisen. Wenn Sie jedoch _Level Up XP_ pro Kurs verwenden, werden die Teilnehmer möglicherweise weiterhin im Bericht angezeigt, wenn sie für den Kurs eingeschrieben sind.

Möchten Sie die Punkte dieser Person wirklich löschen?';
$string['repetitionlimit_help'] = 'Das Wiederholungslimit legt fest, ob Nutzer ähnliche Aktionen wiederholen und erneut Punkte sammeln können.

Der Zweck des Wiederholungslimits besteht darin, missbräuchliches Verhalten zu verhindern und eine breitere Beteiligung zu fördern. In einem Forum können Sie beispielsweise die Wiederholungen auf einmal pro Thema beschränken.

Es gelten sowohl das Gesamtlimit als auch das Wiederholungslimit. Sobald eines der beiden Limits erreicht ist, werden keine Punkte mehr vergeben.';
$string['repetitionlimitdesc'] = 'Das Wiederholungslimit legt fest, wann Nutzer ähnliche Aktionen wiederholen können, um erneut Punkte zu sammeln.';
$string['reportisempty'] = 'Der Bericht enthält keine Daten. Die Teilnehmer müssen erst Erfahrungspunkte sammeln.';
$string['reportisemptyenrolstudents'] = 'Der Bericht enthält keine Daten. Wurden in diesen Kurs bereits Teilnehmer eingeschrieben?';
$string['ruleeventinfo'] = 'Wählen Sie die Aktion aus, die Nutzer aus einer Liste von Ereignissen ausführen müssen.';
$string['rulesformhelp'] = '<p>Dieses Plugin greift auf Events zurück, um den Teilnehmern aufgrund ihrer Aktivitäten Erfahrungspunkte zuzuweisen. Im untenstehenden Formular sehen Sie voreingestellte Regeln und können eigene Regeln definieren. </p>
<p>Prüfen Sie die Plugin <a href="{$a->log}">Logdaten</a>, um festzustellen welche Events erfasst werden, wenn Aktivitäten für den Kurs festgelegt werden. Lesen Sie mehr über Events: <a href="{$a->list}">Liste aller Events</a>, <a href="{$a->doc}">Entwicklerdokumentation</a>.</p>
<p>Hinweis: Das Plugin ignoriert immer:
<ul>
<li>Aktionen, die Administratoren, Gäste oder nicht-eingeloggte Nutzer ausführen.</li>
<li>Aktionen von Nutzern, die nicht über die Berechtigung <em>block/xp:earnxp</em> verfügen.</li>
<li>In kurzen Zeitabständen wiederholte Aktionen, um Manipulationen zu verhindern.</li>
<li>und Events, die nicht mit aktiver Teilnahme in Verbindung stehen (the events of educational level not equal to <em>Participating</em>).</li>
</ul>
</p>';
$string['shortcode:xpiflevel_help'] = 'Beziehen Sie sich auf die folgenden Beispiele, um den Shortcode zu formatieren. Wenn eine Stufe exakt definiert ist, wird der Inhalt unabhängig von den anderen Regeln angezeigt.
Damit der Inhalt angezeigt wird, müssen die Regeln _greater_ und _less than_ logisch übereinstimmen. Ansonsten kann es dazu kommen, dass der Inhalt nie angezeigt wird!
Beachten Sie, dass Trainer oder andere Personen mit Bearbeitungsfunktionen immer alle Informationen einsehen können.

`` `
[xpiflevel 1 3 5]
  Anzeige, wenn die Stufe der Person genau 1, 3 oder 5 beträgt.
[/ xpiflevel]

[xpiflevel> 3]
    Anzeige, wenn die Stufe der Person größer als 3 ist.
[/ xpiflevel]

[xpiflevel> = 3]
    Anzeige, wenn die Stufe der Person größer oder gleich 3 ist.
[/ xpiflevel]

[xpiflevel> = 10 <20 30]
    Anzeige, wenn die Stufe der Person größer oder gleich 10 ist UND kleiner als 20 ODER ist genau gleich 30 ist.
[/ xpiflevel]

[xpiflevel <= 10> = 20]
    Wird nie angezeigt, da der Level der Person niemals kleiner oder gleich 10 UND mehr oder gleich 20 sein kann.
[/ xpiflevel]
`` `

Beachten Sie, dass die Shortcodes KEINE Verschachtelung erlauben.';
$string['shortcode:xpladder_help'] = 'Standardmäßig wird ein Teil der Bestenliste rund um die aktuelle Person angezeigt

`` `
[xpladder]
`` `

Um statt der Nachbarn der aktuellen Teilnehmerin / des aktuellen Teilnehmers die besten 10 anzuzeigen, setzen Sie den Parameter „top“. Sie können optional die Anzahl der anzuzeigenden Teilnehmer festlegen, z.B. „top=20“.

`` `
[xpladder top]
[xpladder top = 15]
`` `

Ein Link zur vollständigen Bestenliste wird automatisch unter der Tabelle angezeigt. Wenn Sie einen solchen Link nicht anzeigen möchten, fügen Sie das Argument "hidelink" hinzu.

`` `
[xpladder hidelink]
`` `

Standardmäßig ist der Bereich inaktiv, der den Fortschrittsbalken enthält. Wenn eine solche Spalte als zusätzliche Spalte für die Bestenliste ausgewählt wurde, können Sie den Balken mit dem Argument "withprogress" anzeigen.

`` `
[xpladder withprogress]
`` `

Beachten Sie bei der Verwendung von Gruppen im Kurs, dass die Darstellung, für welche Gruppe die Rangliste angezeigt werden soll, nach dem Prinzip “best guess” erfolgt.';
$string['usagereport_desc'] = 'Geben Sie regelmäßig anonyme Nutzungsinformationen an die Plugin-Entwickler weiter. Diese Informationen helfen dabei, die Verwendung des Plugins zu verstehen, und beeinflussen seine Entwicklung. Die geteilten Informationen enthalten grundlegende Informationen über die Moodle-Website (URL, Version) und Nutzungsinformationen über das Plugin (Anzahl der Nutzer, die Punkte sammeln, Übersicht der Einstellungen, verwendete Regeln, ...).';
$string['userladderparticipation_help'] = 'Legt fest, ob die Nutzer derzeit an der Rangliste teilnehmen. Dies hat keine Auswirkungen auf die Team-Rangliste.';
$string['userladderparticipationlocked_help'] = 'Das Datum von dem an die Nutzer die Teilnahme selbst festlegen können.';
