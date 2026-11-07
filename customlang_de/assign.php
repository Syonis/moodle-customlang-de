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
 * @subpackage assign
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityeditor_help'] = 'Die Aktionen, die Teilnehmer ausführen sollen, um diese Aufgabe abzuschließen. Dies wird nur auf der Abgabeseite angezeigt, wo die Teilnehmer ihre Aufgabe bearbeiten und absenden.';
$string['allocatedmarker'] = 'Zugeordneter Bewerter';
$string['allocatedmarker_help'] = 'Bewerter, der dieser Abgabe zugeordnet ist';
$string['allowsubmissions'] = 'Nutzern erlauben, für diese Aufgabe weitere Lösungen abzugeben';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Aufgabenbeschreibung für Teilnehmer nur ab dem Abgabebeginn angezeigt.';
$string['assign:editothersubmission'] = 'Weitere Lösung vom Teilnehmer bearbeiten';
$string['assign:manageallocations'] = 'Bewerter verwalten, die dieser Abgabe zugeordnet sind';
$string['assign:managemarkedallocations'] = 'Die den Einreichungen zugeordneten Prüfer verwalten, nachdem diese bewertet haben.';
$string['assign:manageoptionalallocations'] = 'Optionale Prüfer verwalten, die den Einreichungen zugeordnet sind';
$string['assign:revealidentities'] = 'Identität vom Teilnehmer anzeigen';
$string['assign:showhiddengrader'] = 'Identität von verborgenem Bewerter sehen';
$string['assign:viewblinddetails'] = 'Identität vom Teilnehmer anzeigen, obwohl anonyme Bewertung eingeschaltet ist';
$string['attemptreopenmethod_help'] = 'Diese Einstellung steuert, wie den Teilnehmern die Versuche für die Aufgaben angeboten werden. Für jeden Versuch werden Bewertung und Feedback gespeichert und können von Trainer und Teilnehmer eingesehen werden. Die verfügbaren Optionen sind: * Manuell – Nach jedem Versuch können Sie einen weiteren über die Seite "Einreichungen" oder die Seite "Bewerter" gewähren. * Automatisch – Nach jedem Versuch wird automatisch ein nächster angeboten. * Automatisch bis zum Bestehen – Nach jedem Versuch wird automatisch ein nächster angeboten, bis die in den Bewertungen festgelegte Bestehensgrenze erreicht ist.';
$string['batchoperationsetmarkingallocation'] = 'Bewerter zuordnen';
$string['batchsetallocatedmarker'] = 'Bewerter für {$a} ausgewählte Nutzer festlegen.';
$string['blindmarking_help'] = 'Die anonyme Einreichung verbirgt die Identität von Teilnehmern während der Bewertung. Die Option kann nicht mehr geändert werden, nachdem die erste Lösung eingereicht oder Bewertung vorgenommen wurde.';
$string['blindmarkingenabledwarning'] = 'Für diese Aktivität sind anonyme Abgaben aktiviert. Punkte werden erst dann zu den Bewertungen hinzugefügt, wenn die Identität der Teilnehmer über das Menü "Aktionen" bekannt gegeben wird.';
$string['blindmarkingnogradewarning'] = 'Für diese Aktivität sind anonyme Abgaben möglich. Punkte werden erst dann in die Bewertungen eingetragen, wenn die Identität der Teilnehmer über das Menü "Aktionen" bekannt gegeben wird.';
$string['changeallocatedmarkersaftergrade'] = 'Ausgewählte Nutzer haben Noten zugestimmt, die aktualisiert werden können, wenn die zugeteilten Prüfer geändert werden.';
$string['changeuser'] = 'Nutzer wechseln';
$string['completionsubmit'] = 'Teilnehmer muss eine Abgabe machen';
$string['confirmbatchgradingoperation'] = 'Möchten Sie für {$a->count} Nutzer die Operation {$a->operation} ausführen?';
$string['enableoptionalmarker'] = 'Optionale Prüfer aktivieren';
$string['enableoptionalmarkeraftergraded'] = 'Neue optionale Prüfer aktivieren, um die aktuelle Bewertung zu klären';
$string['eventmarkeradded'] = 'Prüfer zugewiesen';
$string['eventmarkerenabledupdated'] = 'Status für aktivierte Prüfer aktualisiert';
$string['eventmarkerremoved'] = 'Prüfer entfernt';
$string['eventmarkerupdated'] = 'Zugewiesener Bewerter wurde aktualisiert.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Identität von Bewerter wurde sichtbar gemacht';
$string['eventstatementaccepted'] = 'Nutzer hat die Abgabebedingung bestätigt.';
$string['eventsubmissionduplicated'] = 'Nutzer hat die Lösung dupliziert';
$string['eventsubmissionlocked'] = 'Die Abgabe wurde für Nutzer gesperrt.';
$string['eventsubmissionunlocked'] = 'Die Abgabe wurde für Nutzer freigeschaltet.';
$string['eventsubmissionupdated'] = 'Nutzer hat Lösung gesichert.';
$string['extensionduedatewithout'] = 'Nutzer ohne Fristverlängerung: {$a}';
$string['gradestudent'] = 'Bewertung für Teilnehmer: (id={$a->id}, Name={$a->fullname}).';
$string['gradingduedate_help'] = 'Dieser voraussichtliche Termin markiert den Abschluss der Abgabe. Das Datum wird verwendet, um Benachrichtigungen für Trainer im Dashboard zu priorisieren.';
$string['gradingrestricted'] = 'Die Bewertung ist so lange eingeschränkt, bis alle Prüfer ihre Bewertung abgeschlossen haben.';
$string['gradingstudent'] = 'Teilnehmer wird bewertet';
$string['grantextensionforusers'] = 'Verlängerung für {$a} Teilnehmer gewähren';
$string['hiddenuser'] = 'Teilnehmer';
$string['hidegrader'] = 'Bewerteridentität für Teilnehme verbergen';
$string['hidegrader_help'] = 'Wenn diese Option aktiviert ist, wird die Identität von Benutzern verborgen, die eine Aufgabeneinreichung bewerten. Teilnehmer können nicht sehen, wer ihre Arbeit bewertet. Beachten Sie, dass diese Einstellung keine Auswirkungen auf das Kommentarfeld auf der Bewertungsseite hat.';
$string['includesuspendedparticipants'] = 'Gesperrte Teilnehmer einschließen';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die ein Teilnehmer in einer Aufgabenaktivität erreicht hat.';
$string['indicator:cognitivedepthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Aufgabenaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen, Feedback kommentieren, Beiträge nach Feedback überarbeiten).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die ein Teilnehmer in einer Aufgabenaktivität erreicht hat.';
$string['indicator:socialbreadthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des soziale Engagements erreicht, das die Aufgabenaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['marker'] = 'Bewerter';
$string['markercount'] = 'Anzahl der notwendigen Prüfer';
$string['markercount_help'] = 'Die Anzahl der für die Aufgabe erforderlichen Prüfer. Optionale Prüfer sind hier nicht enthalten.';
$string['markercountdecreasevalidation'] = 'Die Anzahl an erforderlichen Prüfern kann nicht reduziert werden, da dadurch bereits zugewiesene Prüfer entfernt würden.';
$string['markerfilter'] = 'Bewerter filtern';
$string['markerfilternomarker'] = 'Keine Bewerter';
$string['markernumber'] = 'Bewerter {$a}';
$string['markingallocation_help'] = 'Nach der Aktivierung können einzelnen Nutzern Bewerter zugewiesen werden. Dazu muss der Bewertungsablaufstatus aktiviert worden sein.';
$string['markingworkflow_help'] = 'Nach der Aktivierung können mehrere Bewertungsdurchläufe erfolgen, bevor abschließend alle Bewertungen allen Teilnehmern gleichzeitig sichtbar gemacht werden.';
$string['markingworkflowstate_help'] = 'Mögliche Workflow-Status können sein (abhängig von Ihren Berechtigungen): * Unbewertet: Es wurde noch keine Bewertung begonnen. * In Bewertung: Die Bewertung wurde begonnen, ist jedoch noch nicht abgeschlossen. * Bewertung abgeschlossen: Die Bewertung wurde vorgenommen, ist jedoch noch nicht für die Teilnehmer freigegeben. * In weiterer Überprüfung: Die Bewertung wird im Review-Verfahren von weiteren Trainern durchgesehen. * Fertig zur Freigabe: Die abschließende Bewertung steht fest, wartet jedoch noch mit der Freigabe für die Teilnehmer. * Freigegeben: Teilnehmer können ihre Bewertungen sowie das Feedback einsehen und erhalten, sofern dies aktiviert wird, eine Benachrichtgung per E-Mail.';
$string['maxattempts_help'] = 'Maximale Anzahl von Abgabeversuchen. Nach dieser Anzahl von Versuchen können Teilnehmer ihre Abgabe nicht mehr neu öffnen oder ändern.';
$string['maxmarkercount'] = 'Obergrenze von notwendigen Prüfern';
$string['maxmarkercount_help'] = 'Die maximale Anzahl an erforderlichen Prüfern, die für eine Aufgabe ausgewählt werden können.';
$string['maxoptionalmarkercount'] = 'Obergrenze von optionalen Prüfern';
$string['maxoptionalmarkercount_help'] = 'Die maximale Anzahl an optionalen Prüfern, die für eine Aufgabe ausgewählt werden können.';
$string['modulename_help'] = '###### Hauptmerkmale * Anweisungen und Anforderungen für die Aufgabe bereitstellen * Teilnehmern erlauben, beliebige Dateitypen abzugeben oder direkt im Texteditor zu schreiben * Abgabefristen verwalten und verspätete Abgaben steuern * Rubrics oder Bewertungsleitfäden zur Benotung und zum Feedback verwenden * Teilnehmer können einzeln oder in Gruppen einreichen ###### Anwendungsmöglichkeiten * Texte oder Kursarbeiten zur Bewertung und zum Feedback einsammeln * Gruppenaufgaben erstellen, bei denen Teilnehmer eine gemeinsame Präsentation einreichen * Offline-Arbeiten bewerten, z.B. Präsentationen im Unterricht oder Exkursionen';
$string['multimarkmethod_help'] = 'Wie die Bewertung bei mehreren Bewertern berechnet wird';
$string['multimarkupdatemarkervalidation'] = 'Sie müssen entscheiden, ob bestehende festgelegte Bewertungen aktualisiert werden sollen, wenn die Anzahl der erforderlichen Prüfer erhöht wird.';
$string['multipleteams_desc'] = 'Diese Aufgabe wird in Gruppen abgegeben. Sie sind Mitglied in mehr als einer Gruppe. Um etwas abgeben zu können, dürfen Sie nur Mitglied in einer Gruppe sein. Kontaktieren Sie Ihre Trainer, um Ihre Gruppenzugehörigkeit zu aktualisieren.';
$string['nextuser'] = 'Nächster Nutzer';
$string['noteam_desc'] = 'Diese Aufgabe wird in Gruppen abgegeben. Sie sind kein Mitglied in einer Gruppe und können die Aufgabe deswegen nicht abgeben. Kontaktieren Sie Ihre Trainer, um zu einer Gruppe hinzugefügt zu werden.';
$string['notifystudents'] = 'Teilnehmer benachrichtigen';
$string['nousers'] = 'Keine Nutzer';
$string['numberofparticipants'] = 'Teilnehmer';
$string['optionalmarkercount'] = 'Anzahl optionaler Prüfer';
$string['optionalmarkercount_help'] = 'Die Anzahl der optionalen Prüfer für die Aufgabe.';
$string['optionalmarkercountdecreasevalidation'] = 'Die Anzahl optionaler Prüfer kann nicht reduziert werden, da dadurch zugewiesene oder aktivierte Prüfer entfernt würden.';
$string['overridedeleteusersure'] = 'Möchten Sie wirklich die Überschreibung für Nutzer {$a} löschen?';
$string['overridemustseteitheruserorgroup'] = 'Eine Überschreibung muss entweder einen Nutzer oder eine Gruppe angeben.';
$string['overriderecalculatepenalty'] = 'Abzüge für Nutzer in der Überschreibung neu berechnen';
$string['overrideuser'] = 'Nutzer überschreiben';
$string['participant'] = 'Teilnehmer';
$string['preventsubmissions'] = 'Verhindert die Abgabe von Lösungen für diese Aufgabe durch Teilnehmer';
$string['previoususer'] = 'Vorheriger Nutzer';
$string['privacy:metadata:assignallocatedmarker'] = 'Speichert Zuordnungen zwischen zugewiesenen Bewertern und Aufgaben von Teilnehmern';
$string['privacy:metadata:assignmessageexplanation'] = 'Mitteilungen an die Nutzer über das Mitteilungssystem';
$string['privacy:metadata:grader'] = 'Dies ist die Nutzer ID des bewertenden Benutzers.';
$string['privacy:metadata:groupid'] = 'ID der Gruppe, zu der der Benutzer gehört.';
$string['privacy:metadata:mailed'] = 'Wurde an den Nutzer bereits eine E-Mail geschickt?';
$string['privacy:metadata:markerenabled'] = 'Ob ein optionaler Prüfer aktiviert ist';
$string['privacy:metadata:markeroptional'] = 'Ob ein zugewiesener Prüfer optional ist';
$string['privacy:studentpath'] = 'Abgaben vom Teilnehmer';
$string['quickgrading_help'] = 'Die Schnellbewertung ermöglicht es Ihnen, direkt in der Übersichtstabelle Bewertungen vorzunehmen. Diese Option steht nicht bei erweiterten Bewertungsmethoden zur Verfügung. Sie ist nicht empfohlen, wenn es mehrere Prüfer gibt.';
$string['relativedatessubmissiontimeleft'] = 'Für alle Teilnehmer berechnet';
$string['removesubmissionconfirmforstudentwithtimelimit'] = 'Möchten Sie wirklich die Abgabe von {$a} löschen? Beachten Sie bitte, dass dadurch das Zeitlimit der Teilnehmer nicht zurückgesetzt wird. Sie können mehr Zeit zur Verfügung stellen, indem Sie eine Benutzeränderung für das Zeitlimit hinzufügen.';
$string['removesubmissionforstudent'] = 'Abgabe entfernen für Teilnehmer: (id={$a->id}, Name={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Die Option \'Lösungen erneut bearbeitbar\' ist mit der anonymen Bewertung nicht kompatibel, da die Bewertungen erst in den Bewertungsbereich übertragen werden, wenn die Identitäten der Teilnehmer aufgedeckt werden.';
$string['requireallteammemberssubmit_help'] = 'Diese muss in den Abgabeeinstellungen zusammen mit der Option "Teilnehmer müssen die Taste \'Senden\' klicken“ verwendet werden. Wenn diese Option aktiviert ist, müssen alle Gruppenmitglieder auf die Taste \'Senden\' klicken, damit die Gruppeneinreichung als eingereicht gilt. Wenn diese Option deaktiviert ist, kann ein einzelnes Gruppenmitglied auf die Schaltfläche \'Senden\' klicken.';
$string['requiresubmissionstatement_help'] = 'Teilnehmer müssen die Erklärung zur Eigenständigkeit bei Lösungen für diese Aufgabe abgeben.';
$string['revealidentities'] = 'Identität der Teilnehmer aufdecken';
$string['revealidentitiesconfirm'] = 'Möchten Sie wirklich die Identität von Teilnehmern für diese Aufgabe aufgedecken? Die Einstellung kann nicht zurückgesetzt werden. Sobald die Identität aufgedeckt ist, werden die Bewertungen in der Bewertungsübersicht angezeigt.';
$string['reverttodraftforstudent'] = 'Abgabe des Teilnehmers in den Entwurfsstatus zurücksetzen (id={$a->id}, Name={$a->fullname}).';
$string['selectedusers'] = 'Ausgewählte Nutzer';
$string['sendlatenotifications'] = 'Bewerter über verspätete Abgaben von Lösungen informieren.';
$string['sendlatenotifications_help'] = 'Mit der Aktivierung werden die Bewerter (meist die Trainer) benachrichtigt, wenn eine Lösung verspätet abgegeben wird. Die Zustellung der Benachrichtigung ist individuell einstellbar.';
$string['sendnotificationduedatesoon'] = 'Nutzer über den bevorstehenden Abgabetermin einer Aufgabe benachrichtigen';
$string['sendnotificationduedigest'] = 'Nutzer zu Aufgaben benachrichtigen, die in 7 Tagen fällig sind';
$string['sendnotificationoverdue'] = 'Teilnehmer sollen benachrichtigt werden, wenn die Abgabe einer Aufgabe überfällig ist.';
$string['sendnotifications'] = 'Mitteilungen an Bewerter senden';
$string['sendnotifications_help'] = 'Mit der Aktivierung werden die Bewerter (meist die Trainer) benachrichtigt wenn eine Lösung zeitgerecht oder verspätet abgegeben wird. Die Zustellung der Benachrichtigung ist individuell einstellbar.';
$string['sendstudentnotifications'] = 'Teilnehmer benachrichtigen';
$string['sendstudentnotifications_help'] = 'Wenn diese Option aktiviert ist, erhalten Teilnehmer eine Benachrichtigung über aktualisierte Bewertungen oder Feedbacks. Wenn in dieser Aufgabe der Bewertungsworkflow verwendet wird, werden Benachrichtigungen erst verschickt, nachdem dessen Status auf "Freigegeben" gesetzt wird.';
$string['sendstudentnotificationsdefault'] = 'Standardeinstellung für "Teilnehmer benachrichtigen"';
$string['sendstudentnotificationsdefault_help'] = 'Den Standardwert für Auswahlfeld "Teilnehmer benachrichtigen" im Bewertungsformular festlegen.';
$string['sendsubmissionreceipts'] = 'Abgabebestätigung an Teilnehmer versenden';
$string['sendsubmissionreceipts_help'] = 'Diese Option aktiviert Bestätigungen, die bei der Einreichung von Aufgabenlösungen an die Teilnehmer gesendet werden.';
$string['setmarkerallocationforlog'] = 'Bewertungszuordnung gesetzt auf: (id={$a->id}, Name={$a->fullname}, Bewerter={$a->marker}).';
$string['setmarkingallocation'] = 'Zugewiesene Bewerter festlegen';
$string['studentnotificationworkflowstateerror'] = 'Der Status für den Ablauf muss \'Freigegeben\' sein, um Teilnehmer zu benachrichtigen.';
$string['submissiondrafts_help'] = 'Sollen Teilnehmer über eine Taste zum Senden haben, die ihnen anzeigt, wenn sie mit den Änderungen an ihrer Aufgabenabgabe fertig sind und diese zur Bewertung bereit ist?';
$string['submissioneditable'] = 'Teilnehmer können die eingereichte Lösung bearbeiten';
$string['submissionlog'] = 'Teilnehmer: {$a->fullname}, Status: {$a->status}';
$string['submissionnoteditable'] = 'Teilnehmer können die eingereichte Lösung nicht bearbeiten';
$string['submissionstatus_submitted'] = 'Aufgabe wurde abgegeben';
$string['submitforgrading'] = 'Aufgabe wurde abgegeben';
$string['teamsubmission'] = 'Teilnehmer geben in Gruppen ab';
$string['teamsubmission_help'] = 'Wenn diese Option aktiviert ist, werden die Teilnehmer anhand der Standardgruppen oder einer nutzerdefinierten Gruppierung in Gruppen eingeteilt. Eine Gruppeneinreichung wird unter den Gruppenmitgliedern geteilt, und alle sehen die Änderungen der jeweils anderen an der Einreichung. Sie können diese Einstellung nicht ändern, wenn bereits Abgaben vorliegen.';
$string['ungroupedusers'] = 'Die Einstellung \'Gruppe notwendig, um etwas abgeben zu können\' ist aktiviert. Es gibt Benutzer ohne Gruppe oder Benutzer mit mehreren Gruppen, die deshalb nichts abgeben können.';
$string['ungroupedusersoptional'] = 'Die Einstellung \'Teilnehmer reichen in Gruppen ein\' ist aktiviert. Es gibt Teilnehmer, die entweder kein Mitglied einer Gruppe oder Mitglied in mehr als einer Gruppe sind. Diese Teilnehmer geben als Mitglieder der Standardgruppe ab.';
$string['unlocksubmissionforstudent'] = 'Abgabe für Teilnehmer erlauben: (id={$a->id}, Name={$a->fullname})';
$string['useridlistnotcached'] = 'Abbruch des Speichervorgangs. Moodle konnte nicht erkennen für welchen Nutzer die Bewertung gespeichert werden soll.';
$string['usersnone'] = 'In diesem Kurs sind keine Teilnehmer eingeschrieben oder niemand kann auf die Aufgabe zugreifen.';
$string['userswhoneedtosubmit'] = 'Nutzer, die noch nicht abgegeben haben: {$a}';
$string['viewgrader'] = 'Bewerter anzeigen';
$string['viewgradingformforstudent'] = 'Bewertungsseite für Teilnehmer: (id={$a->id}, Name={$a->fullname}) anzeigen.';
$string['viewrevealidentitiesconfirm'] = 'Bestätigungsseite mit Namen der Teilnehmer anzeigen';
$string['workflowcontext_help_mark'] = 'Weisen Sie Ihrer Bewertung den Workflow-Status zu, wenn Sie zugewiesener Bewerter sind.';
