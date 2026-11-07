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
 * @subpackage quiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adaptive_help'] = 'Mit dieser Funktion wird es möglich eine Frage mehrfach innerhalb eines Testversuchs zu beantworten. Ist eine Frage falsch bewertet, können Teilnehmer diese direkt nochmals beantworten. Ist die Option \'Punktabzüge\' aktiviert werden diese berücksichtigt.';
$string['addarandomquestion_help'] = 'Eine Zufallsfrage wird zufällig aus allen Fragen der gewählten Kategorie ausgewählt. Das führt dazu, dass verschiedene Teilnehmer eine unterschiedliche Auswahl von Fragen im Test zur Beantwortung erhalten. Falls mehrere Versuche beim Test erlaubt sind, werden bei jedem Versuch die Fragen erneut zufällig gewählt.';
$string['allowedattemptsperstudent'] = 'Erlaubte Versuche pro Teilnehmer';
$string['attemptgradeddelay_desc'] = 'Vor dem Senden von Mitteilungen, dass Testversuche bewertet wurden, wird eine Verzögerung angewendet, damit Trainer Zeit habe, die Bewertung möglicherweise zu ändern.';
$string['attemptselection'] = 'Welche Versuche pro Nutzer analysieren:';
$string['attemptsonly'] = 'Nur Teilnehmern anzeigen, die bereits Versuche durchgeführt haben.';
$string['autosaveperiod_desc'] = 'Teilnehmerantworten können während der Testversuche regelmäßig automatisch gesichert werden. Bei jeder Eingabe einer Änderung erfolgt eine Sicherung und nach dem hier eingegebenen Zeitwert. Dies erhöht die Serverlast, verhindert aber den Verlust von Antworten. Prüfen Sie die entstehende Serverlast und passen Sie dann den Wert auf einer akzeptables Mass an. Der Eintrag \'0\' deaktiviert die automatische Sicherung.';
$string['averageattemptsperstudent'] = 'Durchschnittliche Versuche pro Teilnehmer';
$string['bothattempts'] = 'Teilnehmer mit und ohne durchgeführte Versuche anzeigen';
$string['completionattemptsexhausted_help'] = 'Der Test wird als abgeschlossen markiert, wenn Teilnehmer die maximale Anzahl von Versuchen erreichen.';
$string['completionpass_help'] = 'Diese Option legt fest, dass diese Aktivität als abgeschlossen gilt, wenn Teilnehmer eine Bestehensgrenze erreicht haben. Diese wird im Abschnitt \'Bewertung\' bei den Testeinstellungen festgelegt.';
$string['completionpassdesc'] = 'Teilnehmer muss eine Bestehensnote erreichen, um diese Aktivität abzuschließen';
$string['completionpassorattemptsexhausteddesc'] = 'Teilnehmer müssen die Bestehensgrenze erreichen oder alle verfügbaren Versuche ausschöpfen, um diese Aktivität abzuschließen';
$string['configadaptive'] = 'Wenn die Option \'Ja\' gewählt ist, besteht für die Teilnehmer die Möglichkeit, während eines Testversuches mehrere Antworten auf eine Frage zu geben.';
$string['configdelay1'] = 'Wählen Sie eine Zeitverzögerung, wenn Sie möchten, dass Teilnehmer vor einem weiteren Versuch ein Pause einhalten sollen.';
$string['configdelay1st2nd'] = 'Wenn Sie eine Zeitverzögerung aktivieren, können Teilnehmer einen zweiten Testversuch erst nach der eingegeben Zeit durchführen.';
$string['configdelay2'] = 'Wählen Sie eine Zeitverzögerung, wenn Sie möchten, dass Teilnehmer vor einem dritten oder weiteren Versuch ein Pause einhalten sollen.';
$string['configdelaylater'] = 'Wenn Sie eine Zeitverzögerung aktivieren, können Teilnehmer einen weiteren Testversuch erst nach der eingegeben Zeit durchführen.';
$string['configgrademethod'] = 'Welche Methode soll zur Berechnung der Teilnehmerbewertung im Test herangezogen werden, wenn mehrere Versuche erlaubt sind?';
$string['configrequirepassword'] = 'Teilnehmer müssen ein Kennwort eingeben, bevor sie den Test durchführen können.';
$string['configrequiresubnet'] = 'Teilnehmer können den Test nur von diesen Computern aus durchführen.';
$string['configreviewoptions'] = 'Diese Einstellungen geben an, welche Informationen angezeigt werden, wenn Nutzer einen Testversuch oder den Testbericht überprüfen.';
$string['configshufflewithin'] = 'Wenn diese Option aktiviert ist, werden die Teile, die die individuellen Fragen darstellen, jedes Mal zufällig gewählt, wenn ein Teilnehmer einen Versuch dieses Tests startet, vorausgesetzt, dass die Auswahl auch in den Frage-Einstellungen ermöglicht wird.';
$string['coursetestmanager'] = 'Kurs-Testmanager-Format';
$string['delay1st2nd_help'] = 'Wenn diese Option aktiviert ist, können Studenten einen zweiten Testversuch erst nach Ablauf der festgelegten Zeit durchführen.';
$string['delaylater_help'] = 'Wenn diese Option aktiviert ist, können Studenten einen dritten und weitere Testversuche erst nach Ablauf der festgelegten Zeit durchführen.';
$string['editingquiz_help'] = 'Für die Zusammenstellung von Tests gibt es mehrere Möglichkeiten: * Test - Ein Test enthält Fragen, die auf einer oder über mehrere Seiten verteilt angezeigt werden * Fragensammlung - Ein Test wird aus der Fragensammlung zusammengestellt, in der alle Fragen kategorisiert als Kopie vorkommen * Zufallsfragen - Jeder Nutzer erhält bei jedem neuen Versuch andere Fragen. Unterschiedliche Nutzer bekommen unterschiedliche Fragen vorgelegt';
$string['generalfeedback_help'] = 'Das allgemeine Feedback besteht aus dem Text, den die Teilnehmer nach dem Versuch sehen, eine Frage zu beantworten. Anders als das Feedback, das vom Fragetyp und der Nutzerantwort abhängt, wird der Text des allgemeinen Fragen-Feedbacks allen Teilnehmern gezeigt';
$string['graceperiodmin_desc'] = 'Wenn der Test für alle Teilnehmer zum gleichen Zeitpunkt endet, müssen u.U. sehr viele Daten auf einmal abgespeichert werden. Daher kann ein Zeitraum festgelegt werden für den das Abspeichen der Testdaten noch zulässig ist, obwohl der Zeitraum eigentlich abgelaufen ist. Die Länge des erforderlichen Zeitraums hängt von der Teilnehmerzahl und vom Testumfang ab, sowie der Leistungsstärke des Servers. Der Wert wird in Sekunden eingegeben. Damit wird verhindert. dass es zu Problemen beim Abspeichern der Eingaben durch Serverengpässe kommt.';
$string['grademethod_help'] = 'Wenn mehrere Versuche erlaubt sind, gibt es unterschiedliche Möglichkeiten, eine abschließende Bewertung für die Teilnehmer festzulegen: * Beste Bewertung aus allen Versuchen * Durchschnitt aus allen Versuchen * Erster Versuch (alle weiteren Versuche werden ignoriert) * Letzter Versuch (alle weiteren Versuche werden ignoriert)';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die ein Benutzer in einer Testaktivität erreicht hat.';
$string['indicator:cognitivedepthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Testaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen, Feedback kommentieren, Beiträge nach Feedback überarbeiten).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die ein Benutzer in einer Testaktivität erreicht hat.';
$string['indicator:socialbreadthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des soziale Engagements erreicht, das die Testaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['indivresp'] = 'Antworten der einzelnen Benutzer zu jeder Frage';
$string['messageprovider:submission'] = 'Systemnachricht bei Testabgaben von Teilnehmer';
$string['modulename_help'] = '#### Hauptmerkmale * Unterschiedliche Fragetypen verwenden, z.B. Multiple Choice, Richtig/Falsch, Zuordnung, Freitext und mehr * Die meisten Fragetypen werden automatisch bewertet. Freitextantworten aber nur manuell * Jeder Versuch wird durch zufällige Fragen und gemischte Antwortoptionen einzigartig gestaltet * Zeitbegrenzungen für Test festlegen, wann Teilnehmer Hinweise, Feedback oder richtige Antworten sehen können * Fragen speichern und in verschiedenen Tests und Kursen wiederverwenden * Sichere Online-Prüfungsumgebungen erstellen #### Anwendungsmöglichkeiten * Zeitlich begrenzte Prüfungen mit automatischer Bewertung durchführen * Übungstests mit zufällig ausgewählten Fragen aus einem Fragenkatalog anbieten * Selbstbewertung mit detailliertem Feedback zu jeder Antwort erstellen * Wöchentliche Kurztests zur Verständnisüberprüfung von Themen durchführen';
$string['navmethod_help'] = 'Wenn die vorgegebene Navigation aktiviert ist, müssen Teilnehmer den Test in der definierten Reihenfolge abarbeiten, dürfen keine Seiten zurückgehen und keine Seiten überspringen.';
$string['notavailabletostudents'] = 'Hinweis: Dieser Test ist momentan für Teilnehmer nicht verfügbar.';
$string['noview'] = 'Angemeldete Nutzer dürfen diesen Test nicht sehen';
$string['onlyteachersexport'] = 'Nur Trainer können Fragen exportieren';
$string['onlyteachersimport'] = 'Nur Trainer mit Bearbeitungsrecht können Fragen importieren';
$string['overduehandling_desc'] = 'Grundeinstellung für den Test wenn Teilnehmer einen Testversuch nicht abschließen bevor der Zeitraum abgelaufen ist.';
$string['overduehandling_help'] = 'Die Einstellung legt fest, was passiert, wenn Teilnehmer den Test nicht rechtzeitig abschließen. Wenn die Teilnehmer zu diesem Zeitpunkt aktiv am Test arbeiten, wird der aktuelle Bearbeitungsstand automatisch abgegeben. Sind sie nicht angemeldet, so entscheidet diese Einstellung.';
$string['overridecannotchange'] = 'Nutzer oder Gruppe können nach der Erstellung einer Überschreibung nicht mehr geändert werden';
$string['overridecannotsetbothgroupanduser'] = 'Gruppe und Nutzer können nicht gleichzeitig festgelegt werden';
$string['overridedeleteusersure'] = 'Sind Sie sicher, dass Sie die Änderung für Nutzer {$a} löschen möchten?';
$string['overrideinvaliduser'] = 'Nutzer existiert nicht.';
$string['overridemultiplerecordsexist'] = 'Nutzer oder Gruppe können nicht mehrfache Überschreibungen bekommen.';
$string['overridemustsetuserorgroup'] = 'Nutzer oder Gruppe müssen gesetzt sein.';
$string['overridessummaryuser'] = 'Nutzer: {$a}';
$string['overrideuser'] = 'Nutzer ändern';
$string['popupnotice'] = 'Teilnehmer sehen den Test in einem sicheren Fenster.';
$string['precreateattempts_desc'] = 'Wenn diese Option aktiviert ist, werden für Tests Versuche vor dem Startzeitpunkt erstellt, basierend auf dem ebenfalls festgelegten "Voraberstellungszeitraum". Dies verhindert Spitzen in der Serverlast, wenn Teilnehmer komplexe oder mehrere Tests gleichzeitig starten. Tests ohne Startzeitpunkt sind davon nicht betroffen. Wenn diese Einstellung gesperrt ist, wird sie für alle Tests zwangsweise aktiviert oder deaktiviert. Wenn sie entsperrt ist und "Voraberstellungszeitraum" festgelegt ist, kann diese Funktion für Tests aktiviert werden. Wenn der "Voraberstellungszeitraum" nicht festgelegt ist, wird diese Einstellung nicht in den Testeinstellungen angezeigt.';
$string['precreateperiod_desc'] = 'Wenn Ihre Website Tests mit einer bestimmten Startzeit enthält und viele Teilnehmer gleichzeitig beginnen, können Sie mit einer Voraberstellung die Performance verbessern. Wählen Sie einen Zeitraum vor dem Testbeginn, um die Versuche vorab zu erstellen. Ein kürzerer Zeitraum ist sinnvoll, da die Testfragen nicht mehr geändert werden können, sobald Versuche vorhanden sind. Versuche werden standardmäßig stündlich durch eine geplante Task generiert. Um Versuche vorab zu erstellen, wenn das System ruhig ist, z.B. nachts, legen Sie den Zeitraum auf 12 Stunden fest und passen Sie die geplante Task so an, dass sie in ruhigeren Stunden ausgeführt wird.';
$string['privacy:metadata:quiz_attempts:gradednotificationsenttime'] = 'Zeitpunkt, zu dem der Benutzer benachrichtigt wurde, dass die manuelle Bewertung seines Versuchs abgeschlossen war';
$string['privacy:metadata:quiz_overrides:userid'] = 'Nutzer, der überschrieben wurde';
$string['questiondeleted'] = 'Diese Frage wurde gelöscht. Fragen Sie bitte Ihren Trainer.';
$string['quiz:emailnotifysubmission'] = 'Systemnachricht bei Testabgaben von Teilnehmern empfangen';
$string['quizclose_help'] = 'Nach dem Schließdatum können die Teilnehmer keine neuen Versuche mehr starten.';
$string['quizopenclose_help'] = 'Teilnehmer dürfen ihre Versuche nach dem Beginn anfangen und müssen sie vor den Ende beendet haben.';
$string['reportmulti_q_x_student'] = 'Mehrere Teilnehmer';
$string['reportshowonlyfinished'] = 'Max. einen fertigen Versuch pro Teilnehmer anzeigen ({$a})';
$string['reportusersall'] = 'Alle Nutzer mit Testversuchen';
$string['reportuserswith'] = 'Eingeschriebene Nutzer mit Testversuchen';
$string['reportuserswithorwithout'] = 'Eingeschriebene Nutzer mit oder ohne Testversuch';
$string['reportuserswithout'] = 'Eingeschriebene Nutzer ohne Testversuch';
$string['requirepassword_help'] = 'Wenn Sie ein Kennwort festlegen, müssen die Teilnehmer zuerst das Kennwort eingeben, bevor sie den Test starten können.';
$string['requiresubnet_help'] = 'Sie können den Testzugriff auf bestimmte Rechner oder IP-Adressen beschränken, wenn z.B. nur Teilnehmer den Test in einem bestimmten Raum durchführen dürfen. Die zugelassenen IP-Adressen geben Sie in einer kommagetrennten Liste teilweise oder vollständig an (z.B. <b>192.168. , 231.54.211.0/20, 231.3.56.211</b>).';
$string['reviewoptions'] = 'Was sollen die Teilnehmer zu welchem Zeitpunkt überprüfen?';
$string['reviewoptionsheading_help'] = 'Mit diesen Optionen legen Sie fest, welche Informationen angezeigt werden, wenn Teilnehmer einen Versuch überprüfen oder sich den Ergebnisbericht anschauen. **Während des Versuchs** – Einstellungen sind nur mit gewissen Frageverhalten wie \'Mehrfachbeantwortung\' relevant und steuern zum Beispiel das Feedback im direkten Zusammenhang mit der aktuell bearbeiteten Frage. **Direkt nach dem Versuch** steuert, was während zwei Minuten, nachdem der Test abgeschickt und beendet wurde, angezeigt wird. **Später, während der Test noch geöffnet ist** steuert, was danach und vor dem Zeitpunkt der Testschließung angezeigt wird. **Wenn der Test abgeschlossen ist** – Einstellungen treten nach dem Zeitpunkt der Testschließung in Kraft. Wenn kein Termin für die Testschließung definiert ist, kommt diese Einstellung nie zur Anwendung.';
$string['sendnotificationopendatesoon'] = 'Nutzer über den bevorstehenden Testbeginn benachrichtigen';
$string['shownoattempts'] = 'Teilnehmer anzeigen, die keine Versuche durchgeführt haben';
$string['shownoattemptsonly'] = 'Nur Teilnehmer anzeigen, die keine Versuche durchgeführt haben';
$string['showteacherattempts'] = 'Versuche der Trainer anzeigen';
$string['showuserpicture_help'] = 'Wenn diese Option aktiviert ist, werden Name und Profilbild während des Testversuchs und bei der Überprüfung angezeigt. Das macht es einfacher, während einer Prüfung festzustellen, ob Teilnehmer die Prüfung mit ihrem eigenen Account durchführen.';
$string['shufflequestions_help'] = 'Wenn diese Option aktiviert ist, werden die Testfragen in diesem Abschnitt bei jedem Versuch in einer anderen zufälligen Reihenfolge gemischt. Dies soll verhindern, dass Teilnehmern ihre Antworten untereinander teilen, erschwert aber auch die Diskussion über eine bestimmte Frage mit Trainern.';
$string['stateoptions_help'] = '* Nicht begonnen: Der Versuch wurde automatisch vor dem Öffnen des Tests erstellt. Der Teilnehmer hat den Versuch noch nicht begonnen. * In Bearbeitung: Der Teilnehmer hat den Versuch begonnen und kann ihn noch einreichen. * Überfällig: Der Versuch ist länger als die zulässige Frist offen. Der Teilnehmer kann ihn noch innerhalb der Bewertungsphase einreichen. * Eingereicht: Der Teilnehmer hat den Versuch abgeschlossen und die Antworten eingereicht. Der Versuch befindet sich in der Warteschlange für die automatische Bewertung. * Beendet: Der Versuch wurde eingereicht und die automatische Bewertung ist abgeschlossen. * Nie eingereicht: Der Teilnehmer hat den Versuch begonnen, ihn aber nicht innerhalb der Frist oder Nachfrist eingereicht.';
$string['studentswhoattempted'] = 'Teilnehmer mit Versuchen';
$string['subnetnotice'] = 'Der Zugang zum Test wurde beschränkt. Aktuell ist der von Ihnen benutzte Computer nicht freigegeben, um damit den Test durchführen können. Als Trainer dürfen Sie aber von überall aus zugreifen.';
$string['theattempt_help'] = 'Diese Option bestimmt, ob Teilnehmer ihren Versuch überprüfen dürfen.';
$string['timelimit_help'] = 'In der Grundeinstellung haben Tests kein Zeitlimit. Mit der Aktivierung des Zeitlimits läuft für die Teilnehmer sichtbar eine Uhr rückwärts mit.';
$string['usersnone'] = 'In diesem Kurs sind keine Teilnehmer eingeschrieben oder niemand kann auf den Test zugreifen.';
$string['youneedtoenrol'] = 'Sie können den Test nur durchführen, wenn Sie in diesem Kurs als Teilnehmer eingeschrieben sind.';
