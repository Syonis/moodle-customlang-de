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
 * @subpackage openbook
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowsubmissionsfromdate_help'] = 'Wenn diese Option aktiviert ist, können die Teilnehmer ihre Dateien erst ab diesem Datum hochladen. Ist die Option deaktiviert, können Teilnehmer sofort mit dem Hochladen beginnen.';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Beschreibung des Openbook Ressourcenordner für Teilnehmer nur ab dem Zeitpunkt von "Hochladen ab" angezeigt.';
$string['approvalfromdate_help'] = 'Der Freigabestatus kann vor diesem Datum nicht geändert werden. Diese Einstellung ist nur relevant, wenn die Freigabe von Teilnehmern nicht automatisch erfolgt.';
$string['approvaltodate_help'] = 'Der Status zum Teilen nach diesem Datum nicht geändert werden. Diese Einstellung ist nur relevant, wenn die Freigabe von Teilnehmern nicht automatisch erfolgt.';
$string['availabilityrestriction_admin_desc'] = 'Teilnehmer, die aufgrund von definierten Voraussetzungen nicht auf die Aktivität zugreifen können, werden aus der Liste entfernt.<br>Dazu gehören nur Bedingungen, die auf Nutzerlisten anwendbar sind. Zum Beispiel werden Gruppenbedingungen einbezogen, aber Datumsbedingungen nicht.';
$string['availabilityrestriction_help'] = 'Teilnehmer, die aufgrund von definierten Voraussetzungen nicht auf die Aktivität zugreifen können, werden aus der Liste entfernt.<br>Dazu gehören nur Bedingungen, die auf Nutzerlisten anwendbar sind. Zum Beispiel werden Gruppenbedingungen einbezogen, aber Datumsbedingungen nicht.';
$string['datalogapprovalstudent'] = '({$a->approving} von {$a->needed} Teilnehmer) {$a->approval}';
$string['duedate_help'] = 'Wenn diese Option aktiviert ist, können die Teilnehmer nach diesem Datum keine Dateien mehr hochladen. Ist die Option deaktiviert, können Teilnehmer unbegrenzt hochladen.';
$string['edit_teacher_uploads'] = 'Dateien von Trainern bearbeiten/hochladen';
$string['filesarepersonal_admin_desc'] = 'Diese Einstellung legt die Standard-Sichtbarkeitseinstellung für Dateien von Teilnehmern fest.';
$string['filesarepersonal_help'] = 'Diese Einstellung legt fest, ob eingereichte Dateien privat bleiben: <br><ul><li><strong>Ja</strong> - Dateien sind privat und persönlich.</li><li><strong>Nein</strong> - Dateien können zwischen Teilnehmer geteilt werden, sofern die erforderlichen Personen dies genehmigen.</li></ul>';
$string['filesarepersonal_no'] = 'Nein (Dateien können zwischen Teilnehmer geteilt werden.)';
$string['modulename_help'] = '###### Hauptmerkmale
- Ermöglicht es Teilnehmern, Dateien innerhalb eines von Trainern festgelegten Einreichungszeitraums hochzuladen
- Unterstützt die automatische oder genehmigungsbasierte Veröffentlichung von Dateien mit optionalen Einstellungen für die Freigabe durch Teilnehmer
- Sendet Benachrichtigungen an Teilnehmer und Trainer über Uploads und Statusänderungen
- Ermöglicht die sichere Anzeige von Dokumenten in einem "sicheren Fenster" von Moodle für kontrollierten Zugriff
- Bietet PDF.js-Integration für die direkte Anzeige von PDF-Dateien im Browser

###### Anwendungsmöglichkeiten
- Dokumente von Teilnehmern für den späteren Zugriff während Prüfungen oder Aufgaben sammeln
- Ressourcen unter Teilnehmer mit optionalen Genehmigungsworkflows teilen
- Den Zugriff auf Dokumente im sicheren Modus für wichtige Tests beschränken
- Ein zentrales Repository für Einreichungen von Teilnehmern mit flexiblen Sichtbarkeitseinstellungen bereitstellen
- Die gemeinsame Nutzung von Ressourcen unter Beibehaltung der Kontrolle durch Trainer erleichtern';
$string['modulename_summary'] = 'Ermöglicht es Teilnehmern, Dateien in einem zentralen Kursbereich mit flexiblen Genehmigungsworkflows hochzuladen und zu teilen und dann sichere Anzeigeoptionen bereitzustellen, beispielsweise während Prüfungen.';
$string['nothing_to_show_users'] = 'Nichts anzuzeigen – keine Teilnehmer verfügbar';
$string['notice_upload_filesarepersonal_teacherrequired'] = 'Alle Dateien, die Sie hier hochladen, sind persönlich und <strong>nach der Genehmigung einer/eines Trainer/in</strong> für Sie sichtbar. Trainer haben das Recht vor, die Genehmigung Ihrer Dateien jederzeit zurückzunehmen.';
$string['notice_upload_studentrequired_teacherrequired'] = 'Die Dateien werden <strong>nach Genehmigung einer/eines Trainer/in und Ihrer Genehmigung</strong> veröffentlicht (für alle sichtbar gemacht). Die Trainer behalten sich das Recht vor, die Veröffentlichung Ihrer Dateien jederzeit zu widerrufen.';
$string['notify:filechange_help'] = 'Wenn diese Option aktiviert ist, erhalten Teilnehmer und/oder Trainer eine Benachrichtigung wenn Teilnehmer in einem Openbook Ressourcenordners eine Datei hochladen oder ändern.';
$string['notify:setting:1'] = 'Nur Trainer';
$string['notify:setting:2'] = 'Nur Teilnehmer';
$string['notify:setting:3'] = 'Trainer und Teilnehmer';
$string['notify:statuschange_help'] = 'Wenn diese Option aktiviert ist, erhalten Teilnehmer und/oder Trainer eine Benachrichtigung wenn der Status einer Datei im Status des Openbook Ressourcenordners geändert wird.';
$string['notifystudents'] = 'Teilnehmer über Änderungen im Openbook Ressourcenordner benachrichtigen';
$string['notifystudents_help'] = 'Wenn diese Option aktiviert ist, erhalten Teilnehmer eine Benachrichtigung, wenn sich im Openbook Ressourcenordners der Status einer ihrer hochgeladenen Dateien ändert.';
$string['notifyteacher'] = 'Trainer über hochgeladene Dateien benachrichtigen';
$string['notifyteacher_help'] = 'Wenn diese Option aktiviert ist, erhalten Trainer eine Benachrichtigung, wenn Teilnehmer eine Datei hochladen.';
$string['obtainstudentapproval'] = 'Freigabe durch Teilnehmer';
$string['obtainstudentapproval_admin'] = 'Standardmäßige Einstellung für die Freigabe durch Teilnehmer';
$string['obtainstudentapproval_admin_desc'] = 'Diese Einstellung legt die standardmäßige Freigabe durch Teilnehmer fest.';
$string['obtainstudentapproval_help'] = 'Diese Option legt fest, wie die Freigabe von Dateien durch Teilnehmer im Openbook Ressourcenordner (Sichtbarkeit) erfolgt: <br><ul><li><strong>Automatisch</strong> – Keine Freigabe durch Teilnehmer erforderlich.</li><li><strong>Erforderlich</strong> – Teilnehmer müssen die Datei manuell für die Openbook Ressourcenordner genehmigen.</li></ul>';
$string['obtainteacherapproval_admin'] = 'Standardmäßige Einstellung für die Genehmigung durch Trainer';
$string['obtainteacherapproval_admin_desc'] = 'Diese Einstellung legt die standardmäßige Freigabe durch Trainer fest';
$string['obtainteacherapproval_help'] = 'Diese Option legt fest, wie die Genehmigung von Dateien durch Trainer im Openbook Ressourcenordner (Sichtbarkeit) erfolgt: <br><ul><li><strong>Automatisch</strong> – Keine Genehmigung durch Trainer erforderlich.</li><li><strong>Erforderlich</strong> – Trainer müssen die Datei manuell für die Openbook Ressourcenordner genehmigen.</li></ul>';
$string['openbook:approve'] = 'Entscheiden Sie, ob Dateien geteilt werden sollen (für alle Teilnehmer sichtbar).';
$string['openbookstatus_help'] = 'Der Status dieser Datei repräsentiert die Genehmigung einer/eines Trainer/in: <ul><li><i class="fa fa-check text-success fa-fw"></i><i class="fa fa-share-from-square text-success fa-fw"></i> Die Datei wurde genehmigt, freigegeben und ist daher für alle Teilnehmer sichtbar.</li><li><i class="fa fa-check text-success fa-fw"></i><i class="fa fa-user text-success fa-fw"></i> Die Datei wurde genehmigt und ist nur für die/den Teilnehmer/in sichtbar.</li><li><i class="fa fa-times text-danger fa-fw"></i> Die Datei wurde nicht genehmigt (die Genehmigung wurde noch nicht erteilt oder abgelehnt) und ist daher nicht sichtbar.</li></ul>';
$string['studentapproval'] = 'Freigabe (Teilnehmer)';
$string['studentapproval_help'] = 'In der Spalte "Freigabe (Teilnehmer)" wird die Antwort der Teilnehmer angezeigt:<br><ul><li><i class="fa fa-question fa-fw text-warning"></i> - Entscheidung ausstehend</li><li><i class="fa fa-check text-success fa-fw"></i> - Teilen freigegeben</li><li><i class="fa fa-times text-danger fa-fw"></i> - Teilen abgelehnt</li></ul>';
$string['submittedbystudents'] = 'Von Teilnehmern hochgeladene Dateien';
$string['submittedbyteachers'] = 'Von Trainern hochgeladene Dateien';
$string['teacher_files'] = 'Dateien von Trainern';
$string['teacherapproval_help'] = 'Aktueller Status der Dateien (Genehmigung/Ablehnung), d. h. ob sie für alle Teilnehmer sichtbar sind:<br><ul><li><strong>Auswählen...</strong> – Entscheidung ausstehend/keine Genehmigung erteilt oder abgelehnt, diese Dateien sind nicht sichtbar.</li><li><strong>Genehmigen</strong> – Genehmigung erteilt, diese Dateien sind veröffentlicht und somit für alle sichtbar.</li><li><strong>Ablehnen</strong> – keine Genehmigung erteilt, diese Dateien sind nicht veröffentlicht und somit nicht sichtbar.</li></ul>';
$string['visibleforstudents_no'] = 'Diese Datei ist nicht veröffentlicht (für Teilnehmer nicht sichtbar).';
$string['visibleforstudents_yes'] = 'Diese Datei ist veröffentlicht (für Teilnehmer sichtbar).';
$string['visibleforstudents_yes_private'] = 'Diese Datei ist veröffentlicht (für Teilnehmer sichtbar, privat).';
$string['visibleforstudents_yes_shared'] = 'Diese Datei ist veröffentlicht (für Teilnehmer sichtbar, geteilt).';
