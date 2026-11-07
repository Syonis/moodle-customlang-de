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
 * @package    tool
 * @subpackage dataprivacy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_help'] = 'Eine Kategorie in der Datenregistrierung beschreibt einen Datentyp/Datenkategorie. Eine neue Kategorie kann hinzugefügt werden. Wenn \'vererben\' ausgewählt ist, wird eine Kategorie von der darüberliegenden Ebene gewählt. Kontexte sind (von unten nach oben): Block > Aktivitätsmodul > Kurs > Kursbereich > Nutzer > Website';
$string['categorydefault_help'] = 'Die Standardkategorie wird allen neuen Instanzen als Standardwert zugewiesen. Wenn vererben gewählt ist, wird die Datenkategorie der darüber liegenden Ebene zugewiesen. Kontexte sind (von unten nach oben): Block > Aktivitätsmodul > Kurs > Kursbereich > Nutzer > Website';
$string['contactdataprotectionofficer_desc'] = 'Das Aktivieren dieser Funktion stellt einen Link bereit, um sich direkt an die Ansprechpartner für Datenschutzfragen wenden zu können. Der Link wird auf der persönlichen Profilseite angezeigt.';
$string['contactdpoviaprivacypolicy'] = 'Richten Sie bitte alle Fragen zum Datenschutz in der Plattform an unsere Ansprechpartner.';
$string['contextlevelname30'] = 'Nutzern';
$string['dataprivacy:downloadallrequests'] = 'Daten aller Benutzer herunterladen';
$string['dataprivacy:requestdeleteforotheruser'] = 'Antrag auf Löschung der Daten im Namen eines anderen Benutzers';
$string['dataregistryinfo'] = 'Die Datenregistrierung aktiviert Kategorien (für Datentypen/Datenkategorien) und Zwecke (Gründe für die Verarbeitung von Daten), die dem gesamten Inhalt der Website zugeordnet werden können. Dies kann für Personen, Kurse und bis hinunter zu einzelnen Aktivitäten und Blöcken erfolgen. Für jeden Zweck kann eine Speicherdauer festgelegt werden. Wenn die Speicherdauer abgelaufen ist, wird der Inhalt zum Löschen gekennzeichnet. Ein Administrator kann den Löschvorgang durchführen.';
$string['defaultexpiredexcept'] = 'Daten aller Benutzer, außer denen die eine der folgenden Rollen haben:<br>{$a->unexpired}';
$string['defaultunexpired'] = 'Nur Daten der Benutzer, die eine der folgenden Rollen haben:<br>{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Nur Daten der Benutzer, die eine der folgenden Rollen haben:<br>{$a->expired} Außer sie haben eine der folgenden Rollen :<br>{$a->unexpired}';
$string['downloadexpireduser'] = 'Der Download ist abgelaufen. Senden Sie eine neue Datenanfrage, wenn Sie Ihre personenbezogenen Daten exportieren möchten.';
$string['effectiveretentionperioduser'] = '{$a} (seit dem letzten Zugriff der Benutzer auf die Website)';
$string['errorcannotrequestdeleteforother'] = 'Sie haben keine Berechtigung, einen Löschauftrag für diesen Benutzer zu erstellen.';
$string['errorcontactdpodisabled'] = 'Die Kontaktaufnahme zum Ansprechpartner für den Datenschutz ist deaktiviert.';
$string['errornocapabilitytorequestforothers'] = 'Benutzer {$a->requestedby} hat nicht die Berechtigung, Datenanfragen im Namen eines anderen Benutzers {$a->userid} auszulösen.';
$string['exceptionnotificationbody'] = '<p>Beim Aufruf von <b>{$a->fullmethodname}</b> ist ein Fehler aufgetreten.<br>Das Plugin <b>{$a->component}</b> konnte die Verarbeitung der Daten nicht beenden. Folgende Informationen könnten den Entwicklern helfen:</p><pre>{$a->message}<br> {$a->backtrace}</pre>';
$string['gdpr_art_6_1_a_description'] = 'Der betroffene Benutzer hat seine Zustimmung zur Verarbeitung seiner personenbezogenen Daten für einen oder mehrere bestimmte Zwecke gegeben';
$string['gdpr_art_6_1_b_description'] = 'Die Verarbeitung ist für die Erfüllung eines Vertrags, dessen Vertragspartei der betroffene Benutzer ist, oder zur Durchführung vorvertraglicher Maßnahmen erforderlich, die auf Anfrage der betroffenen Benutzer erfolgen';
$string['gdpr_art_6_1_d_description'] = 'Die Verarbeitung ist erforderlich, um lebenswichtige Interessen der betroffenen Benutzer oder einer anderen natürlichen Person zu schützen';
$string['gdpr_art_6_1_f_description'] = 'Die Verarbeitung ist zur Wahrung der berechtigten Interessen des Verantwortlichen oder eines Dritten erforderlich, sofern nicht die Interessen oder Grundrechte und Grundfreiheiten der betroffenen Benutzer, die den Schutz personenbezogener Daten erfordern, überwiegen, insbesondere dann, wenn es sich bei dem betroffenen Benutzer um ein Kind handelt';
$string['gdpr_art_9_2_a_description'] = 'Der betroffene Benutzer hat in die Verarbeitung der genannten personenbezogenen Daten für einen oder mehrere festgelegte Zwecke ausdrücklich eingewilligt, es sei denn, nach Unionsrecht oder dem Recht der Mitgliedstaaten kann das Verbot nach Absatz 1 durch die Einwilligung des betroffenen Benutzer nicht aufgehoben werden';
$string['gdpr_art_9_2_b_description'] = 'Die Verarbeitung ist erforderlich, damit der Verantwortliche oder der betroffene Benutzer die ihm aus dem Arbeitsrecht und dem Recht der sozialen Sicherheit und des Sozialschutzes erwachsenden Rechte ausüben und seinen diesbezüglichen Pflichten nachkommen kann, soweit dies nach Unionsrecht oder dem Recht der Mitgliedstaaten oder einer Kollektivvereinbarung nach dem Recht der Mitgliedstaaten, das geeignete Garantien für die Grundrechte und die Interessen der betroffenen Benutzer vorsieht, zulässig ist';
$string['gdpr_art_9_2_c_description'] = 'Die Verarbeitung ist zum Schutz lebenswichtiger Interessen der betroffenen Benutzer oder einer anderen natürlichen Person erforderlich und der betroffene Benutzer ist aus körperlichen oder rechtlichen Gründen außerstande, seine Einwilligung zu geben.';
$string['gdpr_art_9_2_e_description'] = 'Die Verarbeitung bezieht sich auf personenbezogene Daten, die der betroffene Benutzer offensichtlich öffentlich gemacht hat';
$string['gdpr_art_9_2_e_name'] = 'Vom Benutzer veröffentlichte Daten (DSGVO Art. 6.1(b))';
$string['gdpr_art_9_2_g_description'] = 'Die Verarbeitung ist auf der Grundlage des Unionsrechts oder des Rechts eines Mitgliedstaats, das in angemessenem Verhältnis zu dem verfolgten Ziel steht, den Wesensgehalt des Rechts auf Datenschutz wahrt und angemessene und spezifische Maßnahmen zur Wahrung der Grundrechte und Interessen der betroffenen Benutzer vorsieht, aus Gründen eines erheblichen öffentlichen Interesses erforderlich';
$string['gdpr_art_9_2_j_description'] = 'Die Verarbeitung ist auf der Grundlage des Unionsrechts oder des Rechts eines Mitgliedstaats, das in angemessenem Verhältnis zu dem verfolgten Ziel steht, den Wesensgehalt des Rechts auf Datenschutz wahrt und angemessene und spezifische Maßnahmen zur Wahrung der Grundrechte und Interessen der betroffenen Benutzer vorsieht, für im öffentlichen Interesse liegende Archivzwecke, für wissenschaftliche oder historische Forschungszwecke oder für statistische Zwecke gemäß Artikel 89 Absatz 1 erforderlich';
$string['httpwarning'] = 'Daten, die von dieser Website heruntergeladen werden, sind evtl. nicht verschlüsselt. Nehmen Sie Kontakt mit dem Administrator auf, um SSL für diese Website zu installieren.';
$string['nocoursetofilter'] = 'Der Benutzer ist in keinem zur Auswahl stehenden Kurs eingeschrieben.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Anzahl der Datenanfragen, die ein Benutzer auf einer Seite sehen möchte';
$string['privacy:metadata:purpose:usermodified'] = 'Die ID des Benutzers, der den Zweck geändert hat';
$string['privacy:metadata:request:dpocomment'] = 'Kommentare, die von den Ansprechpartnern für Datenschutzfragen zu der Anfrage gemacht wurden.';
$string['privacy:metadata:request:requestedby'] = 'Die ID des anfragenden Benutzer, falls im Namen einer anderen Person erstellt';
$string['privacyofficeronly'] = 'Nur v mit der Rolle \'Datenschutzbeauftragter\' ({$a}) haben Zugriff auf diese Inhalte.';
$string['requestsubmitted'] = 'Ihre Anfrage wurde an den Ansprechpartner für Datenschutzfragen weitergeleitet.';
$string['requireallenddatesforuserdeletion_desc'] = 'Beim Ablauf werden verschiedene Faktoren berücksichtigt: * Die letztmalige Anmeldung eines Benutzers wird mit der Aufbewahrungsfrist für personenbezogene Daten verglichen; und * Der Benutzer ist in Kursen angemeldet und nimmt aktiv teil. Wenn bei der aktiven Anmeldung der Kurs kein Kursende hat, wird über diese Einstellung bestimmt, ob die Teilnahme im Kurs als aktiv angesehen wird oder nicht. Wenn der Kurs kein Kursende hat und diese Einstellung aktiviert ist, können Benutzer nicht gelöscht werden.';
$string['retentionperiod_help'] = 'Die Speicherdauer legt fest wie lange Daten gespeichert werden sollen. Wenn die Speicherdauer abgelaufen ist, werden die Daten zum Löschen gekenzeichnet und ein Administrator kann dies bestätigen.';
$string['user'] = 'Nutzer';
