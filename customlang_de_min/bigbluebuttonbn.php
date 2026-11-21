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
 * @subpackage bigbluebuttonbn
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completionattendance_event_desc'] = 'Teilnehmer hat das Meeting betreten und ist mindestens {$a} Minute(n) geblieben.';
$string['completionattendancegroup_help'] = 'Teilnehmer muss für den Abschluss mindestens (n) Minuten teilnehmen.';
$string['completionengagementchats_event_desc'] = 'Teilnehmer hat {$a} Chat(s) ausgelöst.';
$string['completionengagementraisehand_event_desc'] = 'Teilnehmer hat sich {$a}-mal zu Wort gemeldet.';
$string['completionengagementtalks_event_desc'] = 'Teilnehmer hat {$a} Gespräch(e) begonnen.';
$string['completionview_event_desc'] = 'Teilnehmer hat das Meeting angezeigt.';
$string['config_dpa_note'] = 'Hinweis: Um Ihren Datenschutzverpflichtungen nachzukommen, müssen Sie vor der Nutzung dieses Plugin sicherstellen, dass Sie die Datenverarbeitungsvereinbarung des Dienstanbieters gelesen und akzeptiert haben. Für den kostenlosen BigBlueButton-Service von Blindside Networks lesen und akzeptieren Sie bitte die folgende <a href="{$a}" target="_blank">Datenverarbeitungsvereinbarung</a>. Wenden Sie sich bitte an Ihren eigenen Datenschutzexperten, wenn Sie weitere Unterstützung brauchen.<br/><br/>';
$string['config_general_description'] = '<strong>Wichtige Information zur Nutzung von BigBlueButton</strong><br/> Bei der Nutzung der Grundeinstellungen werden die Dienste eines externen Anbieters genutzt. Dazu werden personenbezogene Daten an diesen Dienstleister übertragen. Sofern Sie der Datenschutzgrundverordnung unterliegen, sollten Sie eine Vereinbarung zur Auftragsdatenverarbeitung nach Art 28 DSGVO abschließen. <strong>Der Hosting-Dienstleister für Moodle ist in dem Fall nicht für diesen Service verantwortlich.</strong><br /><br /> Wenn Sie selber einen BigBlueButton-Server betreiben, ist dies nicht erforderlich. Wenn Sie selber einen anderen Dienstleister beauftragen, sprechen Sie diesen an. <br /><br /><br /> Die folgenden Einstellungen werden immer verwendet.';
$string['config_guestaccess_enabled_description'] = 'Diese Option erlaubt es Nutzern ohne Nutzerkonto in Moodle, auf den Raum zuzugreifen.';
$string['config_hideuserlist_default'] = 'Teilnehmerliste verbergen';
$string['config_hideuserlist_default_description'] = 'Die Option legt fest, ob die Liste der Teilnehmer verborgen ist.';
$string['config_hideuserlist_editable'] = '"Teilnehmerliste verbergen" bearbeitbar';
$string['config_hideuserlist_editable_description'] = 'Die Option "Teilnehmerliste verbergen" kann bearbeitet werden, wenn die Aktivität angelegt oder aktualisiert wird.';
$string['config_lockonjoin_default_description'] = 'Wenn diese Option aktiviert ist, werden die durch die Konfiguration gesperrten Einstellungen auf die Nutzer angewendet, wenn sie eintreten. Damit dies funktioniert, muss die Sperrkonfiguration aktiviert sein.';
$string['config_participant'] = 'Teilnehmer';
$string['config_participant_description'] = 'Diese Einstellungen definieren die standardmäßige Rolle von Teilnehmern im Meeting.';
$string['config_participant_moderator_default'] = 'Moderator';
$string['config_profile_picture_enabled_description'] = 'Sollen Profilbilder der Teilnehmer in Bigbluebutton-Sitzungen gezeigt werden?';
$string['config_recording_safe_formats_description'] = 'Wählen Sie die Formate aus, die für alle sichtbar sein sollen. Alle anderen Formate können nur von Trainern und Benutzern mit den Rechten mod/bigbluebuttonbn:viewallrecordingformats und mod/bigbluebuttonbn:managerecordings angezeigt werden.';
$string['config_server_url_description'] = 'Standardmäßig sind Daten für einen <a href="https://bigbluebutton.org/free-bigbluebutton-service-for-moodle/" target="_blank">kostenlosen BigBlueButton-Service für Moodle (öffnet in neuem Fenster)</a> eingetragen, der von Blindside Networks mit folgenden Einschränkungen bereitgestellt wird: <ol> <li>Die maximale Länge jeder Sitzung beträgt 60 Minuten.</li> <li>Die maximale Anzahl gleichzeitiger Nutzer pro Sitzung ist 25.</li> <li>Aufzeichnungen laufen nach sieben (7) Tagen ab und können nicht heruntergeladen werden.</li> <li>Webcams von Teilnehmern sind nur für Moderatoren sichtbar.</li> </ol>';
$string['config_showpresentation_default_description'] = 'Sollen Teilnehmer bereits vor der Sitzung Zugriff auf die Präsentationsdatei haben? Diese Einstellung hat keine Auswirkung auf Nutzer mit dem Recht "Präsentationsdatei immer auf der Aktivitätsseite sehen“.';
$string['config_showpresentation_editable_description'] = 'Die Option erlaubt es Trainern, für die Teilnehmer eine Präsentationsdatei anzuzeigen.';
$string['config_userlimit'] = 'Maximale Anzahl von Nutzern';
$string['config_userlimit_default_description'] = 'Die Option legt die maximale Anzahl von Nutzern fest, die standardmäßig in einem Meeting zugelassen sind, wenn ein neues Meeting angelegt wird. Falls der Wert auf 0 gesetzt wird, ist keine Obergrenze festgelegt.';
$string['config_userlimit_editable_description'] = 'Die maximale Anzahl von Nutzern im Meeting kann geändert werden, wenn das Meeting angelegt oder aktualisiert wird.';
$string['config_waitformoderator'] = 'Warten auf Moderator';
$string['config_waitformoderator_default'] = 'Warte auf Moderator';
$string['config_waitformoderator_default_description'] = 'Soll die Option "Warten auf Moderator" standardmäßig aktiviert sein, wenn ein neues Meeting angelegt wird?';
$string['config_waitformoderator_editable'] = '"Warten auf Moderator" bearbeitbar';
$string['config_waitformoderator_editable_description'] = 'Soll die Option "Warten auf Moderator" in den Einstellungen bearbeitbar sein?';
$string['config_waitformoderator_ping_interval'] = 'Ping für "Warten auf Moderator" (in Sekunden)';
$string['config_waitformoderator_ping_interval_description'] = 'Wie häufig soll der Server geprüft werden, ob Moderatoren das Meeting betreten haben?';
$string['config_welcome_default_description'] = 'Der Begrüßungstext wird angezeigt, wenn Teilnehmer das Meeting betreten. Wenn das Feld leer ist, wird der Text \'mod_form_field_welcome_default\' verwendet..';
$string['general_error_not_allowed_to_create_instances'] = 'Nutzer darf kein Meeting erstellen.';
$string['index_heading_moderator'] = 'Moderator';
$string['index_heading_users'] = 'Nutzer';
$string['index_heading_viewer'] = 'Zuschauer';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die Teilnehmer in einer BigBlueButton-Aktivität erreicht haben.';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die Teilnehmer in einer BigBlueButton-Aktivität erreicht haben.';
$string['mod_form_field_hideuserlist'] = 'Teilnehmerliste verbergen';
$string['mod_form_field_mustapproveuser'] = 'Gäste müssen von Moderatoren zugelassen werden.';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Moderator';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Zuschauer';
$string['mod_form_field_participant_list_type_all'] = 'Alle eingeschriebenen Teilnehmer';
$string['mod_form_field_participant_list_type_owner'] = 'Eigentümer';
$string['mod_form_field_participant_list_type_user'] = 'Nutzer';
$string['mod_form_field_userlimit_help'] = 'Die maximale Anzahl von Nutzern, die in einem Meeting erlaubt sind. Wenn der Wert auf 0 gesetzt wird, ist keine Obergrenze festgelegt.';
$string['mod_form_field_voicebridge_help'] = 'Konferenznummer für Nutzer, um per Telefon an der Konferenz teilzunehmen. Die Nummer muss zwischen 1 und 9999 liegen. Wenn der Wert 0 eingegeben wird, wird die statische Voice Bridge-Nummer ignoriert und eine zufällige Nummer generiert. Die Ziffer 7 wird der Nummer vorangestellt.';
$string['mod_form_field_wait'] = 'Warten auf Moderator';
$string['mod_form_field_wait_help'] = 'Sollen Zuschauer warten müssen, bis Moderatoren dem Meeting beitreten?';
$string['mod_form_field_welcome_help'] = 'Der Begrüßungstext wird angezeigt, wenn Teilnehmer dem Meeting beitreten. Wenn das Feld leer ist, wird ein Standardtext angezeigt, der von den Administratoren der Website festgelegt wurde.';
$string['modulename_help'] = '#### Hauptmerkmale * Live-Sitzungen mit Audio, Video und Chat veranstalten * Integrierte Test- und Umfragetools nutzen * Präsentationsfolien, Bildschirm oder interaktives Whiteboard teilen * Breakout-Räume für Gruppenaktivitäten erstellen * Sitzungen aufzeichnen, um sie später nutzen können #### Anwendungsmöglichkeiten * Live-Online-Unterricht halten, in denen Teilnehmer in Echtzeit Fragen stellen können * Virtuelle Sprechstunden anbieten * Gruppendiskussionen in Breakout-Räumen organisieren';
$string['privacy:metadata:bigbluebutton:fullname'] = 'Vollständiger Name des Benutzers, der auf den BigBlueButton-Server greift.';
$string['privacy:metadata:bigbluebutton:userid'] = 'Nutzer-ID des Benutzers, der auf dem BigBlueButton-Server zugreift.';
$string['privacy:metadata:bigbluebuttonbn:participants'] = 'Eine Liste von Regeln, die die Rolle definieren, die Benutzer im Live-Meeting übernehmen werden. Eine Nutzer-ID könnte gespeichert werden, da Berechtigungen pro Rolle oder pro Nutzer zugewiesen werden.';
$string['privacy:metadata:bigbluebuttonbn_logs:log'] = 'Art des Termins, der von dem Benutzer angelegt wurde.';
$string['privacy:metadata:bigbluebuttonbn_logs:meetingid'] = 'ID des Meetings, an dem der Benutzer teilnehmen konnte';
$string['privacy:metadata:bigbluebuttonbn_logs:userid'] = 'ID des Benutzers, der den Termin eingerichtet hat';
$string['privacy:metadata:bigbluebuttonbn_recordings:userid'] = 'Nutzer-ID des Benutzers, der die Aufzeichnung zuletzt geändert hat';
$string['settings_credential_warning_no_capability'] = 'Die Anmeldedaten für den BigBlueButton-Server laufen bald ab. Wenden Sie sich hierzu an die Administratoren Ihrer Website.';
$string['unconfigured_chooser_user'] = 'BigBlueButton ist nicht verfügbar. Wenden Sie sich bitte an Ihre Website-Administratoren, um die Einrichtung abzuschließen.';
$string['unconfigured_view_student'] = 'BigBlueButton ist nicht verfügbar. Kontaktieren Sie bitte Ihren Trainer.';
$string['unconfigured_view_teacher'] = 'BigBlueButton ist nicht verfügbar. Wenden Sie sich bitte an Ihre Website-Administratoren, um die Einrichtung abzuschließen.';
$string['userlimitreached'] = 'Die maximale Anzahl der in einem Meeting zulässigen Nutzer wurde erreicht.';
$string['view_error_no_group_student'] = 'Sie sind in keiner Gruppe eingetragen. Wenden Sie sich an die Trainer oder Administratoren.';
$string['view_error_no_group_teacher'] = 'Keine Gruppen verfügbar. Legen Sie Gruppen an oder wenden Sie sich an die Administratoren.';
$string['view_error_unable_join_teacher'] = 'Die Verbindung zum BigBlueButton-Server ist nicht möglich. Wenden Sie sich an die Administratoren.';
$string['view_login_moderator'] = 'Als Moderator anmelden ...';
$string['view_login_viewer'] = 'Als Zuschauer anmelden...';
$string['view_message_conference_wait_for_moderator'] = 'Sie können teilnehmen, wenn Moderatoren beigetreten sind.';
$string['view_message_cron_disabled'] = 'Die Liste der Aufzeichnungen ist möglicherweise nicht auf dem neuesten Stand. Wenden Sie sich bitte mit den folgenden Informationen an Ihre Administratoren: {$a}';
$string['view_message_moderator'] = 'Moderator';
$string['view_message_moderators'] = 'Moderator';
$string['view_message_user'] = 'Nutzer';
$string['view_message_users'] = 'Nutzer';
$string['view_message_viewer'] = 'Zuschauer';
$string['view_message_viewers'] = 'Zuschauer';
$string['view_warning_default_server'] = 'Diese Website verwendet einen <a href="https://bigbluebutton.org/free-bigbluebutton-service-for-moodle/" target="_blank">kostenlosen BigBlueButton-Dienst für Moodle (öffnet in neuem Fenster)</a>, der von Blindside Networks mit den folgenden Einschränkungen bereitgestellt wird: <ol> <li>Die maximale Länge jeder Sitzung beträgt 60 Minuten.</li> <li>Die maximale Anzahl gleichzeitiger Personen pro Sitzung ist 25.</li> <li>Aufzeichnungen laufen nach sieben (7) Tagen ab und können nicht heruntergeladen werden.</li> <li>Webcams von Teilnehmern sind nur für Moderatoren sichtbar.</li> </ol>';
$string['waitformoderator'] = 'Warten auf Moderator';
