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
 * @subpackage publication
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionsforusers'] = 'Für ausgewählte Nutzer oder Gruppen';
$string['allowshowgroupnames'] = 'Trainer können Gruppennamen anzeigen/ verbergen';
$string['allowshowgroupnames_desc'] = 'Wenn diese Option aktiviert ist, können Trainer die Einstellung „Gruppennamen anzeigen“ in jeder Aktivität ändern. Ist sie deaktiviert, gilt für alle Aktivitäten die unten angegebene Standardeinstellung.';
$string['allowshowlastmodified'] = 'Trainer können den Zeitpunkt der letzten Änderung anzeigen/ verbergen';
$string['allowshowlastmodified_desc'] = 'Wenn diese Option aktiviert ist, können Trainer die Einstellung „Zeitpunkt der letzten Änderung anzeigen“ in jeder Aktivität ändern. Ist sie deaktiviert, gilt für alle Aktivitäten die unten angegebene Standardeinstellung.';
$string['allowshowparticipantnames'] = 'Trainer können Namen von Teilnehmern anzeigen/ verbergen';
$string['allowshowparticipantnames_desc'] = 'Wenn diese Option aktiviert ist, können Trainer die Einstellung „Namen von Teilnehmern anzeigen“ in jeder Aktivität ändern. Ist sie deaktiviert, gilt für alle Aktivitäten die unten angegebene Standardeinstellung.';
$string['allowsubmissionsfromdate_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer ihre Dateiabgaben nicht vor diesem Datum einreichen. Ist die Option deaktiviert, können Teilnehmer sofort mit der Einreichung beginnen.';
$string['allowsubmissionsfromdateh_help'] = 'Im angegebenen Zeitraum können Teilnehmer Dateien hochladen oder die Zustimmung zur Veröffentlichung und Sichtbarkeit von Dateien geben bzw. verweigern (je nach Modus).';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Aufgabenbeschreibung für Teilnehmer nur während des Bearbeitungszeitraums angezeigt.';
$string['approvalfromdate_help'] = 'Der Status der Freigabe kann vor diesem Datum nicht geändert werden. Diese Einstellung ist nur relevant, wenn die Freigabe von Teilnehmern oder Gruppen nicht automatisch erfolgt.';
$string['approvaltodate_help'] = 'Der Status der Freigabe kann nach diesem Datum nicht mehr geändert werden. Diese Einstellung ist nur relevant, wenn die Freigabe von Teilnehmern oder Gruppen nicht automatisch erfolgt.';
$string['autoimport_help'] = 'Wenn aktiviert, werden neue Abgaben in der Aufgabe automatisch in den Studentenordner übernommen. Eventuelle Zustimmungen müssen neu eingeholt werden.';
$string['availabilityrestriction_admin_desc'] = 'Teilnehmer, die aufgrund von definierten Voraussetzungen nicht auf die Aktivität zugreifen können, werden aus der Liste entfernt.<br>Dazu gehören nur Bedingungen, die auf Nutzerlisten anwendbar sind. Zum Beispiel werden Gruppenbedingungen einbezogen, aber Datumsbedingungen nicht.';
$string['availabilityrestriction_help'] = 'Teilnehmer, die aufgrund von definierten Voraussetzungen nicht auf die Aktivität zugreifen können, werden aus der Liste entfernt.<br>Dazu gehören nur Bedingungen, die auf Nutzerlisten anwendbar sind. Zum Beispiel werden Gruppenbedingungen einbezogen, aber Datumsbedingungen nicht.';
$string['bulkactionhelp'] = 'Dateiaktionen gelten nur für alle markierten Dateien einer Dateiabgabe. Das Zulassen von Verlängerungen (d.h. Überschreibungen) gilt für alle markierten Nutzer/ Gruppen.';
$string['completionassignsubmission'] = 'Der Teilnehmer oder die Gruppe muss eine Einreichung in der verlinkten Aufgabenaktivität vornehmen.';
$string['completionupload'] = 'Teilnehmer muss eine Datei hochladen';
$string['configautoimport'] = 'Wenn diese Option aktiviert ist, können Dateiabgaben aus Aufgaben automatisch in Studentenordner importiert werden. Diese Funktion kann für jeden Studentenordner separat ein-/ausgeschaltet werden.';
$string['configmaxbytes'] = 'Standardmäßige maximale Dateigröße für Dateien im Studentenordner.';
$string['configmaxfiles'] = 'Standardmäßige maximale Anzahl von Dateien, die pro Teilnehmer im Studentenordner erlaubt sind.';
$string['configobtainstudentapproval'] = 'Dateien werden erst nach Freigabe von Teilnehmern und Trainern veröffentlicht (d.h. allen angezeigt).';
$string['configobtainteacherapproval'] = 'Dateien von Teilnehmern werden sofort ohne Überprüfung für alle angezeigt.';
$string['duedate_help'] = 'Wenn diese Einstellung aktiviert ist, können Teilnehmer keine Abgaben nach diesem Datum hinzufügen. Wenn diese Einstellung deaktiviert ist, können Teilnehmer jederzeit Abgaben tätigen.';
$string['eventoverridecreated'] = 'Studentenordner Überschreibung erzeugt';
$string['eventoverridedeleted'] = 'Studentenordner Überschreibung gelöscht';
$string['eventoverrideupdated'] = 'Studentenordner Überschreibung geändert';
$string['eventpublicationapprovalchanged'] = 'Studentenordner: Dateifreigabe wurde geändert';
$string['eventpublicationduedateextended'] = 'Studentenordner: Abgabeende wurde verlängert';
$string['eventpublicationfiledeleted'] = 'Studentenordner: Datei wurde gelöscht';
$string['eventpublicationfileimported'] = 'Studentenordner: Datei wurde importiert';
$string['eventpublicationfileuploaded'] = 'Studentenordner: Datei wurde hochgeladen';
$string['maxfiles_help'] = 'Wenn die Abgabe von Dateien als Lösung der Aufgabe gewählt wird, wird hier festgelegt wie viele Dateien je Teilnehmer hochgeladen werden können.';
$string['messageprovider:publication_updates'] = 'Studentenordner Benachrichtigungen';
$string['mode_help'] = 'Legen Sie fest, ob Teilnehmer hier Dateien hochladen können oder ob ihre Abgaben aus einer Aufgabe übernommen werden sollen.';
$string['modeupload'] = 'Teilnehmer dürfen Dateien hochladen';
$string['modulename'] = 'Studentenordner';
$string['modulename_help'] = '###### Hauptmerkmale * Teilnehmer können Dateien hochladen oder aus einer Aufgabenaktivität importieren. * Die Dateien werden automatisch oder nach Freigabe durch Teilnehmer und/oder Trainer veröffentlicht (für alle sichtbar). * Teilnehmer und/oder Trainer erhalten eine Benachrichtigung, wenn durch Teilnehmer eine Datei hochgeladen oder aus einer Aufgabenaktivität importiert oder aktualisiert wurden. Weiters erhalten Teilnehmer und/oder Trainer eine Benachrichtigung über Änderungen des Veröffentlichungsstatus. ###### Anwendungsbeispiele * Szenario 1: Im Rahmen eines Seminars präsentieren Teilnehmer ihre Gruppenarbeiten. Die dafür erstellten Präsentationen und Zusammenfassungen sollen allen Teilnehmern des Kurses zur Verfügung gestellt werden. Die Trainer legen deshalb einen Studentenordner an, in dem das direkte Hochladen und die sofortige Veröffentlichung der Dateien vorgesehen ist. Teilnehmer können dadurch selbstständig die Dokumente hochladen. Die Trainer können bei Bedarf die Sichtbarkeit einzelner Dateien jederzeit ändern. * Szenario 2: Im Rahmen einer Lehrveranstaltung müssen Seminararbeiten abgegeben werden. Die erstellten Dokumente sollen von den Teilnehmern in der Aktivität Aufgabe hochgeladen werden. Die Trainer bewerten die Abgaben online und geben Feedback. Um einzelne, besonders gelungene Abgaben, für alle Teilnehmer des Kurses zugänglich zu machen, wird von den Trainern im Anschluss ein Studentenordner angelegt und mit der Aufgabe verknüpft. Danach können die Trainer entscheiden, welche Dokumente für die Teilnehmer sichtbar sein sollen. Es ist auch möglich, die Veröffentlichung der Dokumente an die Zustimmung der Teilnehmer, die diese verfasst haben, zu binden.';
$string['modulename_summary'] = 'Mit dem Studentenordner können Sie von Teilnehmern hochgeladene Dokumente für alle Teilnehmer des Kurses sichtbar machen. Die häufigsten Einsatzszenarien sind der Dateiaustausch, die Präsentation von guten Beispielen oder Musterlösungen.';
$string['modulename_tip'] = 'Trainer können den Studentenordner mit und ohne Freigabeprozess verwenden, genauso wie es in ihrer Lehrveranstaltung benötigt wird. <p><a href="https://academic-moodle-cooperation.org/anleitungen/studierendenordner-einsetzen-amc-entwicklung/" target="_blank"><i class="icon fa fa-info-circle"></i>Anleitung: "Studentenordner einsetzen"</a></p> <p><a href="https://youtu.be/PG6tn-RJiSg?si=ircUbEqJ31AhFamm" target="_blank"><i class="icon fa fa-play-circle"></i>Promovideo</a></p>';
$string['modulenameplural'] = 'Studentenordner';
$string['name'] = 'Name des Studentenordners';
$string['nopublicationsincourse'] = 'In diesem Kurs gibt es keinen Studentenordner.';
$string['nothing_to_show_users'] = 'Nichts anzuzeigen - keine Teilnehmer vorhanden';
$string['notice_group_all_teachernotrequired'] = 'Diese Dateien werden nur für alle Teilnehmer sichtbar, sofern <strong>ALLE Gruppenmitglieder</strong> der Veröffentlichung zugestimmt haben.';
$string['notice_group_all_teacherrequired'] = 'Diese Dateien werden nur veröffentlicht, wenn die <strong>Freigabe durch ALLE Gruppenmitglieder und Trainer </strong> erfolgt ist. Trainer können eine Veröffentlichung jederzeit aufheben.';
$string['notice_group_one_teachernotrequired'] = 'Die Dateien werden nur für alle Teilnehmer sichtbar, sofern <strong>MINDESTENS EIN Gruppenmitglied</strong> der Veröffentlichung zugestimmt haben.';
$string['notice_group_one_teacherrequired'] = 'Die Dateien werden nur veröffentlicht, wenn die <strong>Freigabe von MINDESTENS EINEM Gruppenmitglied und Trainer</strong> erfolgt ist. Trainer können eine Veröffentlichung jederzeit aufheben.';
$string['notice_groupimportrequireallapproval'] = 'Angezeigte Dateien stammen aus einer Aufgabe mit Gruppeneinreichung. Alle Dateien werden erst durch Zustimmung von ALLEN Gruppenmitgliedern und Trainern für alle veröffentlicht. Bitte klären Sie die Veröffentlichung vorab Gruppen-intern ab.<br> Änderungen an vorhandenen Dateien sind ausschließlich in der ursprünglichen Aufgaben-Aktivität möglich.';
$string['notice_groupimportrequireoneapproval'] = 'Angezeigte Dateien stammen aus einer Aufgabe mit Gruppeneinreichung. Alle Dateien werden erst durch Zustimmung von mind. EINEM Gruppenmitglied und Trainer für alle veröffentlicht. Bitte klären Sie die Veröffentlichung vorab Gruppen-intern ab.<br> Änderungen an vorhandenen Dateien sind ausschließlich in der ursprünglichen Aufgaben-Aktivität möglich.';
$string['notice_hidden_date'] = '<strong>Der Zeitpunkt der letzten Änderung</strong> wird anderen Teilnehmern <strong>nicht angezeigt</strong>.';
$string['notice_hidden_name'] = 'Ihr <strong>Name</strong> wird anderen Teilnehmern <strong>nicht angezeigt</strong>.';
$string['notice_hidden_namedate'] = 'Ihr <strong>Name und der Zeitpunkt der letzten Änderung</strong> werden anderen Teilnehmern <strong>nicht angezeigt</strong>.';
$string['notice_import_studentnotrequired_teacherrequired'] = 'Die Dateien werden erst <strong>nach der Freigabe durch die Trainer</strong> veröffentlicht. Trainer können eine Veröffentlichung jederzeit ablehnen.';
$string['notice_import_studentrequired_teachernotrequired'] = 'Die Dateien werden erst nach <strong>Ihrer Zustimmung</strong> veröffentlicht (für alle Teilnehmer sichtbar).';
$string['notice_import_studentrequired_teacherrequired'] = 'Die Dateien werden <strong>nach Ihrer Freigabe und der Freigabe der Trainer</strong> veröffentlicht (allen angezeigt). Trainer können eine Veröffentlichung jederzeit aufheben.';
$string['notice_importnoapproval'] = 'Alle Dateien die Sie hier hochladen, werden erst nach Zustimmung der Trainer veröffentlicht.';
$string['notice_importrequireapproval'] = 'Alle Dateien werden erst nach Zustimmung von Ihnen und den Trainern veröffentlicht.<br>Änderungen an vorhandenen Dateien sind ausschließlich in der ursprünglichen Aufgabe möglich.';
$string['notice_obtainapproval_import_both'] = 'Dateien werden erst nach Zustimmung von Teilnehmer und Trainer veröffentlicht (d.h. für alle sichtbar geschaltet).';
$string['notice_obtainapproval_import_studentonly'] = 'Im Sinne des Urheberrechts bitten wir Sie, die Zustimmung zur Veröffentlichung von Dateien von Teilnehmern auf separatem Weg anzufragen.<br> Als Trainer können Sie jederzeit den Status der Veröffentlichung aufheben, sollte eine Datei nicht den definierten Anforderungen entsprechen.';
$string['notice_obtainapproval_upload_automatic'] = 'Im Sinne des Urheberrechts bitten wir Sie, die Zustimmung zur Veröffentlichung von Dateien von Teilnehmern auf separatem Weg anzufragen.<br> Als Trainer können Sie jederzeit den Status der Veröffentlichung aufheben, sollte eine Datei nicht den definierten Anforderungen entsprechen.';
$string['notice_obtainapproval_upload_teacher'] = 'Im Sinne des Urheberrechts bitten wir Sie, die Zustimmung zur Veröffentlichung von Dateien von Teilnehmern auf separatem Weg anzufragen.<br> Als Trainer können Sie jederzeit den Status der Veröffentlichung aufheben, sollte eine Datei nicht den definierten Anforderungen entsprechen.';
$string['notice_obtainteacherapproval_studentsapproval'] = 'Im Sinne des Urheberrechts bitten wir Sie, die Zustimmung zur Veröffentlichung von Dateien von Teilnehmern auf separatem Weg einzuholen.';
$string['notice_upload_studentnotrequired_teacherrequired'] = 'Alle hier hochgeladenen Dateien werden erst <strong>nach der Freigabe durch Trainer</strong> veröffentlicht (allen angezeigt). Trainer können eine Veröffentlichung jederzeit ablehnen.';
$string['notice_upload_studentrequired_teacherrequired'] = 'Alle hier hochgeladenen Dateien werden erst <strong>nach Ihrer Freigabe und der Freigabe durch Trainer</strong> veröffentlicht (allen angezeigt). Trainer können eine Veröffentlichung jederzeit ablehnen.';
$string['notice_uploadnoapproval'] = 'Alle Dateien, die Sie hier hochladen, werden sofort veröffentlicht (d.h. für alle sichtbar geschaltet). Trainer behalten sich das Recht vor die Veröffentlichung Ihrer Dateien wieder aufzuheben.';
$string['notice_uploadrequireapproval'] = 'Alle Dateien die Sie hier hochladen, werden erst nach Zustimmung der Trainer veröffentlicht.<br> Trainer behalten sich das Recht vor die Veröffentlichung Ihrer Dateien wieder aufzuheben.';
$string['notify:filechange_help'] = 'Abhängig von der Einstellung, wenn aktiviert, werden Teilnehmer und/oder Trainer über das Hochladen, Änderungen oder den Import einer Datei aus einer Aufgabenaktivität benachrichtigt.';
$string['notify:setting:1'] = 'Nur Trainer';
$string['notify:setting:2'] = 'Nur Teilnehmer';
$string['notify:setting:3'] = 'An Trainer und Teilnehmer';
$string['notify:statuschange_help'] = 'Abhängig von der Einstellung werden Teilnehmer und/oder Trainer über die Statusänderung einer Veröffentlichung benachrichtigt.';
$string['notifystudents'] = 'Teilnehmer über Änderungen der Veröffentlichung informieren';
$string['notifystudents_help'] = 'Wenn diese Option aktiviert ist, erhalten Teilnehmer eine Benachrichtigung, sobald sich der Status der Veröffentlichung einer ihrer hochgeladenen Dateien ändert.';
$string['notifyteacher'] = 'Trainer über Dateiabgaben informieren';
$string['notifyteacher_help'] = 'Wenn diese Option aktiviert ist, erhalten Trainer eine Benachrichtigung, sobald Teilnehmer eine Datei hochladen.';
$string['obtaingroupapproval_help'] = 'Diese Option legt fest, wie die Veröffentlichung (Sichtbarkeit) von Dateiabgaben von Gruppen gehandhabt wird: <br/><ul><li><strong>Automatisch</strong> - keine Freigabe durch Gruppenmitglieder erforderlich. Aufgrund von urheberrechtlichen Bestimmungen empfehlen wir, die Freigabe von Teilnehmern einzuholen, bevor Dokumente veröffentlicht werden.</li><li><strong>Erforderlich von mindestens EINEM Gruppenmitglied</strong> - Mindestens ein Gruppenmitglied muss freigeben</li><li><strong>Erforderlich von ALLEN Gruppenmitgliedern</strong> - alle Mitglieder der Gruppe müssen freigeben</li></ul>';
$string['obtainstudentapproval'] = 'Freigabe durch Teilnehmer';
$string['obtainstudentapproval_admin'] = 'Standardeinstellungen zur Freigabe durch Teilnehmer';
$string['obtainstudentapproval_admin_desc'] = 'Diese Einstellung legt den Standard für die Freigabe durch Teilnehmer fest.';
$string['obtainstudentapproval_help'] = 'Diese Option legt fest, wie die Veröffentlichung (Sichtbarkeit) von Dateiabgaben durch Teilnehmer stattfindet: <br><ul><li><strong>Automatisch</strong> - keine Freigabe durch Teilnehmer erforderlich. In Bezug auf das Urheberrecht wird jedoch empfohlen, die Freigabe der Teilnehmer anderweitig einzuholen.</li><li><strong>Erforderlich</strong> - Teilnehmer müssen die Veröffentlichung manuell freigeben.</li></ul>';
$string['obtainstudentapproval_no'] = 'Zustimmung von Trainer erforderlich';
$string['obtainstudentapproval_participant'] = 'Zustimmung von Teilnehmer und Trainer erforderlich';
$string['obtainstudentapproval_teacher'] = 'Zustimmung von Trainer erforderlich';
$string['obtainstudentapproval_yes'] = 'Zustimmung von Teilnehmer und Trainer erforderlich';
$string['obtainteacherapproval'] = 'Freigabe durch Trainer';
$string['obtainteacherapproval_admin'] = 'Standardeinstellungen zur Freigabe durch Trainer';
$string['obtainteacherapproval_admin_desc'] = 'Diese Einstellung legt den Standard für die Freigabe durch Trainer fest.';
$string['obtainteacherapproval_help'] = 'Diese Option legt fest, wie die Veröffentlichung (Sichtbarkeit) von Dateiabgaben durch Trainer stattfindet: <br><ul><li><strong>Automatisch</strong> - Keine Freigabe durch Trainer erforderlich.</li><li><strong>Erforderlich</strong> - Trainer müssen die Datei manuell zur Veröffentlichung freigeben.</li></ul>';
$string['obtainteacherapproval_no'] = 'Zustimmung von Trainer erforderlich';
$string['override:user:choose'] = 'Nutzer auswählen';
$string['pluginadministration'] = 'Studentenordner Administration';
$string['pluginname'] = 'Studentenordner';
$string['privacy:metadata:allowsubmissionsfromdate'] = 'Der überschriebene Zeitpunkt, ab dem Teilnehmer einreichen können.';
$string['privacy:metadata:duedate'] = 'Der überschriebene Zeitpunkt, bis zu dem Teilnehmer einreichen können.';
$string['privacy:metadata:extduedates'] = 'Speichert Informationen über überschriebene/verlängerte Fälligkeitsdaten für das Modul Studentenordner.';
$string['privacy:metadata:extensionduedate'] = 'Das für Teilnehmer durch die Verlängerung gültige Fälligkeitsdatum.';
$string['privacy:metadata:files'] = 'Speichert Informationen über Dateien, die in das Modul Studentenordner hochgeladen/importiert werden (Kennung, wem sie gehören, woher sie kommen, Hash des Inhalts, Dateiname und Bestätigung durch Lehrer und/oder Teilnehmer).';
$string['privacy:metadata:overrides'] = 'Speichert nutzer- und gruppenspezifische Überschreibungen der Abgabe- und Veröffentlichungsdaten der Dateiabgabe.';
$string['privacy:metadata:studentapproval'] = 'Ob der Nutzer seine Freigabe zur Veröffentlichung einer Datei erteilt oder verweigert hat.';
$string['privacy:metadata:teacherapproval'] = 'Ob Trainer die Freigabe zur Veröffentlichung einer Datei erteilt oder verweigert haben.';
$string['publication:addinstance'] = 'Studentenordner hinzufügen';
$string['publication:approve'] = 'Entscheiden Sie, ob Dateien veröffentlicht (d.h. für alle Teilnehmer sichtbar) sein sollen';
$string['publication:receiveteachernotification'] = 'Benachrichtigung für Trainer empfangen';
$string['publication:upload'] = 'Dateien in den Studentenordner hochladen';
$string['publication:view'] = 'Studentenordner anzeigen';
$string['publicationstatus_help'] = 'Der Status der Veröffentlichung stellt die Freigabe der Trainer sowie die endgültige Veröffentlichung dar: <ul><li><i class="fa fa-check text-success fa-fw"></i> Datei ist veröffentlicht und wird somit für alle Teilnehmer angezeigt</li><li><i class="fa fa-times text-danger fa-fw"></i> Datei ist nicht veröffentlicht (Freigabe ist noch nicht erfolgt oder wurde verweigert) und wird somit nicht angezeigt</li></ul>';
$string['published_aftercheck'] = 'Freigabe durch Trainer erforderlich';
$string['published_immediately'] = 'Ja sofort, ohne Prüfung durch die Trainer';
$string['search:activity'] = 'Studentenordner - Aktivitätsinformation';
$string['showgroupnames_admin_desc'] = 'Diese Option legt fest, ob Gruppennamen bei veröffentlichten Dateiabgaben standardmäßig für alle Teilnehmer angezeigt werden.';
$string['showgroupnames_help'] = 'Diese Option legt fest, ob Gruppennamen bei veröffentlichten Dateiabgaben für alle Teilnehmer angezeigt werden. Für Trainer bleiben die Gruppennamen stets sichtbar.';
$string['showlastmodified_help'] = 'Diese Option legt fest, ob der Zeitpunkt der „Letzten Änderung“ für veröffentlichte Dateiabgaben angezeigt wird. Für Trainer bleibt das Datum stets sichtbar.';
$string['showparticipantnames'] = 'Namen von Teilnehmern anzeigen';
$string['showparticipantnames_admin'] = 'Standardeinstellungen für "Namen von Teilnehmern anzeigen"';
$string['showparticipantnames_admin_desc'] = 'Diese Option legt fest, ob die Namen von Teilnehmern (d.h. der Autoren) bei veröffentlichten Dateiabgaben standardmäßig für alle Teilnehmer angezeigt werden.';
$string['showparticipantnames_help'] = 'Diese Option legt fest, ob die Namen von Teilnehmern (d.h. der Autoren) bei veröffentlichten Dateiabgaben für alle Teilnehmer angezeigt werden. Für Trainer bleiben die Teilnehmernamen stets sichtbar.';
$string['student_approved'] = 'Von Teilnehmer freigegeben.';
$string['student_approved_automatically'] = 'Automatische Freigabe durch Teilnehmer.';
$string['student_pending'] = 'Entscheidung von Teilnehmer ausstehend.';
$string['student_rejected'] = 'Freigabe von Teilnehmer verweigert.';
$string['studentapproval'] = 'Freigabe (Teilnehmer)';
$string['studentapproval_help'] = 'In der Spalte "Freigabe (Teilnehmer)" wird die Rückmeldung der Teilnehmer angezeigt:<br><ul><li><i class="fa fa-question fa-fw text-warning"></i> - Entscheidung ausstehend</li><li><i class="fa fa-check text-success fa-fw"></i> - Freigabe erteilt</li><li><i class="fa fa-times text-danger fa-fw"></i> - Freigabe verweigert</li></ul>';
$string['teacher_approved'] = 'Freigabe durch Trainer';
$string['teacher_approved_automatically'] = 'Automatische Freigabe durch Trainer';
$string['teacher_pending'] = 'Entscheidung von Trainer ausstehend';
$string['teacherapproval_help'] = 'Aktuelle Freigabe/ Ablehnung von Dateien, d.h. ob diese für alle Teilnehmer sichtbar sind: <br><ul><li><strong>Auswählen...</strong> - Entscheidung ausstehend/ keine Freigabe erteilt oder verweigert, diese Dateien werden nicht angezeigt.</li><li><strong>Freigeben</strong> - Freigabe erteilt, diese Dateien sind veröffentlicht und werden somit für alle angezeigt.</li><li><strong>Verweigern</strong> - keine Freigabe erteilt, diese Dateien sind nicht veröffentlicht und werden somit nicht angezeigt.</li></ul>';
$string['updatefileswarning'] = 'Bereits importierte Dateien werden ersetzt oder entfernt, wenn die ursprünglichen Dateien in der Aufgabe geändert oder gelöscht wurden. Die Freigabe zur Veröffentlichung durch Teinehmer bleibt unverändert.';
$string['visibleforstudents_no'] = 'Diese Datei ist nicht veröffentlicht (d.h. wird Teilnehmern nicht angezeigt).';
$string['visibleforstudents_yes'] = 'Diese Datei ist veröffentlicht (d.h. wird für Teilnehmer angezeigt).';
$string['warning_changefromobtainstudentapproval'] = 'Wenn Sie diese Änderung durchführen, können nur Sie bestimmen welche Dateien für alle Teilnehmer veröffentlicht sind. Die Zustimmung von Teilnehmern wird nicht eingeholt. Alle zur Veröffentlichung gekennzeichneten Dateien werden unabhängig von der Teilnehmer-Zustimmung nach dieser Änderung sofort veröffentlicht und dadurch für alle Teilnehmer sichtbar.';
$string['warning_changefromobtainteacherapproval'] = 'Wenn Sie diese Änderung durchführen werden hochgeladene Dateien sofort für alle Teilnehmer sichtbar. Alle bis jetzt hochgeladenen Dateien werden mit diesen Schritt ebenfalls veröffentlicht. Sie haben jedoch das Recht Teilnehmern die Sichtbarkeit aktiv zu entziehen.';
$string['warning_changetoobtainstudentapproval'] = 'Wenn Sie diese Änderung durchführen, wird die Zustimmung der Teilnehmer eingeholt. Nach dieser Änderung wird für alle als "veröffentlicht" gekennzeichneten Dateien, die Zustimmung der jeweiligen Teilnehmer eingeholt. Die Dateien sind dadurch erst deren Rückmeldung für alle veröffentlicht (d.h. sichtbar).';
$string['warning_changetoobtainteacherapproval'] = 'Wenn Sie diese Änderung durchführen werden hochgeladene Dateien nicht sofort für andere Teilnehmer sichtbar. Sie müssen dadurch Dateien von Teilnehmern aktiv sichtbar schalten. Alle bis jetzt hochgeladenen Dateien werden mit diesem Schritt ebenfalls veröffentlicht.';
