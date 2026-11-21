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
 * @subpackage lti
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['courseexternaltoolsinfo'] = 'LTI Externe Tools sind Apps, die Sie als Add-on in Ihren Kurs integrieren können, etwa als interaktive Inhalte oder Beurteilungen. Ihre Teilnehmer können auf diese Apps zugreifen, ohne den Kurs zu verlassen.';
$string['delegate'] = 'An Trainer zuweisen';
$string['display_description'] = 'Aktivitätsbeschreibung anzeigen, wenn Teilnehmer auf das Tool zugreifen';
$string['display_description_help'] = 'Die oben eingegebene Beschreibung wird bei Aktivierung über dem Inhalt des Tools angezeigt. Die Beschreibung kann genutzt werden, um Teilnehmern zusätzliche Hinweise zu geben. Sie ist nicht unbedingt erforderlich. Wenn die Darstellung im neuen Fenster erfolgt, kann die Beschreibung nie angezeigt werden.';
$string['display_name'] = 'Aktivitätenname anzeigen, wenn Teilnehmer auf das Tool zugreifen';
$string['enableemailnotification_help'] = 'Nach der Aktivierung erhalten Teilnehmer E-Mail-Systemnachrichten, wenn ihre Leistungen bewertet wurden.';
$string['errormisconfig'] = 'Das Tool wurde falsch konfiguriert. Ihr Administrator kann Ihnen weiter helfen.';
$string['external_tool_type_help'] = '* **Automatisch mit Tool-URL** - Diese Einstellung ist meistens ausreichend. Moodle verwendet dann die passendste Konfiguration über die Tool-URL. Es können Tools verwendet werden, die von den Administratoren vorkonfiguriert oder im Kurs angelegt wurden. Sofern eine Start-URL definiert ist, erzeugt Moodle ein Feedback, ob dieses erkannt wird oder nicht. Sollte dieser Zugang scheitern, können Konfigurationsinformationen manuell eingetragen werden. * **Ein spezifischer vorkonfigurierter Tool-Typ** - Die Auswahl erzwingt eine bestimmte Konfiguration zur Kommunikation mit dem Tool-Anbieter zu nutzen. Sollte die eingetragene Start-URL nicht zu dem Tool-Anbieter passen, erfolgt eine Warnung. Manchmal ist es nicht nötig eine Start-URL einzutragen falls ein spezifischer Tool-Typ verwandt wird. * **Individuelle Konfiguration** - Die spezifische Konfiguration wird nur für die spezielle Instanz verwandt. Unter erweiterten Einstellungen können Anwenderschlüsssel und Kennwörter (shared secret) eingetragen werden. Beide werden durch den Tool Provider zur Verfügung gestellt. Falls das Tool diese Einstellungen nicht benötigt, können die Felder leer bleiben. ##Tool-Typ bearbeiten Drei Icons erscheinen in der Liste * **Hinzufügen** - Eine Tool-Konfiguration auf Kursebene erstellen. Alle Instanzen in diesem Kurs werden diese verwenden. * **Bearbeiten** - Typ aus Dropdown-Menü auswählen und die Details konfigurieren. * **Löschen** - Ausgewählten Typ im Kurs löschen.';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die ein Benutzer in einer LTI-Aktivität erreicht hat.';
$string['indicator:cognitivedepthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des kognitiven Engagements erreicht, das die LTI-Aktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die ein Benutzer in einer LTI-Aktivität erreicht hat.';
$string['indicator:socialbreadthdef_help'] = 'Der Teilnehmer hat diesen Prozentsatz des soziale Engagements erreicht, das die LTI-Aktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['lti:admin'] = 'Tool als Administrator ausführen';
$string['lti:manage'] = 'Als Trainer auf das ext. Tool zugreifen';
$string['lti_launch_error_tool_request'] = '<p>Zum Versand einer Anfrage an Administratoren zur Vervollständigung der Tool-Konfiguration klicken Sie <a href="{$a->admin_request_url}" target="_top">hier</a>. </p>';
$string['lti_tool_request_added'] = 'Die Konfigurationsanfrage wurde erfolgreich weitergeleitet. Kontakten Sie die Administratoren nun, um den Prozess abzuschließen.';
$string['main_admin_help'] = 'Externe Tools ermöglichen es Moodle Nutzern nahtlos mit externen Lernanwendungen zu arbeiten und Daten auszutauschen. Durch ein spezielles Start-Protokoll erhält das externe Tool Zugriff auf bestimmte Daten des Nutzers. Dies können sein: Institutionsbezeichnung, Kurs-ID, Nutzer-ID, Nutzername oder E-Mail. Die Tools auf dieser Seite sind in drei unterschiedliche Typen klassifiziert: * ** Aktiv** - Diese Toolanbieter wurden durch einen Administrator geprüft und konfiguriert. Sie können in jedem Kurs genutzt werden. Wenn ein Anwenderschlüssel und ein Kennwort eingegeben werden, wird eine geschützte Verbindung zwischen Moodle und dem Toolanbieter aufgebaut. * **Abwarten** - Diese Tool Anbieter wurden im Rahmen eines Paketimports im System hinterlegt. Sie sind noch nicht von einerm Administrator konfiguriert worden. Trainer können diese Tools verwenden, wenn sie selber über einen Anwenderschlüssel und ein Kennwort verfügen, oder dies nicht erforderlich ist. * **Gesperrt** - Diese Toolanbieter sind von Administratoren nicht zur systemweiten Nutzung freigegeben worden. Trainer können die Tools dennoch nutzen, wenn sie über einen Anwenderschlüssel und ein Kennwort für dieses Tool verfügen, oder dies nicht erforderlich ist.';
$string['modulename_help'] = 'Mit der Schnittstelle \'Externe Tools\' geben Sie den Teilnehmern direkten Zugriff auf Lernprogramme außerhalb von Moodle. Die Teilnehmer benötigen kein zusätzliches Login. Die Verbindung zwischen Moodle und dem externen Lernprogramm erfolgt über den LTI-Standard, den das andere Lernprogramm unterstützen muss. Sie erhalten vom Anbieter einen Link und Zugangsschlüssel. Hinweis zum Datenschutz: Häufig werden Namen und E-Mail-Adressen Ihrer Teilnehmer an den externen Anbieter übertragen. Fragen Sie den Anbieter. Externe Tool-Aktivitäten unterscheiden sich in einigen Punkten von URL-Ressourcen: * Externe Tools sind kontextabhängig, d.h. sie haben Zugriff auf Informationen über die Person, die das Tool gestartet hat, wie z.B. Institution, Kurs und Name. * Externe Tools unterstützen das Lesen, Aktualisieren und Löschen von Bewertungen, die mit der Aktivitätsinstanz verbunden sind. * Konfigurationen von externen Tools schaffen eine wechselseitige Beziehung zwischen Ihrer Website und dem Werkzeuganbieter und ermöglichen eine sichere Kommunikation zwischen ihnen.';
$string['opensslconfiginvalid'] = 'Für LTI 1.3 muss eine gültige openssl.cnf konfiguriert sein und Ihrem Webserver zur Verfügung stehen. Wenden Sie sich an den Website-Administrator, um openssl für diese Site zu konfigurieren und zu aktivieren.';
$string['share_email_help'] = 'Diese Option legt fest, ob die Nutzer-E-Mail-Adresse an den Tool-Provider übergeben wird, wenn die Tool-Instanz verwendet wird. Nutzer können so bei einem wiederholten Zugriff wiedererkannt werden und personalisierte Informationen per E-Mails erhalten. Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['share_name_help'] = 'Diese Option legt fest, ob der vollständige Nutzername an den Tool-Provider übergeben wird, wenn die Tool-Instanz verwendet wird. Nutzer können so bei einem wiederholten Zugriff wiedererkannt werden und personalisierte Informationen erhalten. Diese Einstellung kann in der Tool-Konfiguration überschrieben wreden.';
$string['share_roster'] = 'Tool darf auf Liste der Teilnehmer zugreifen';
$string['share_roster_admin'] = 'Tool kann auf Liste der Teilnehmer zugreifen';
$string['share_roster_admin_help'] = 'Festlegen, ob das Tool auf die Liste der Teilnehmer derjenigen Kurse zugreifen darf, in denen das Tool gestartet wurde.';
$string['show_in_course_lti1_help'] = 'Dieses Tool kann in der Aktivitätsauswahl für Trainer angezeigt werden, um es zu einem Kurs hinzuzufügen. Alternativ kann es ist im vorkonfigurierten Tool-Menü angezeigt werden, wenn ein externes Tool zu einem Kurs hinzugefügt wird. Des Weiteren kann die Tool-Konfiguration auch verwendet werden, um die genaue Tool-URL zu erfahren, wenn ein externes Tool zu einem Kurs hinzugefügt wird.';
$string['show_in_course_lti2_help'] = 'Dieses Tool kann für Trainer in der Aktivitätsauswahl angezeigt werden, um es zu einem Kurs hinzuzufügen. Alternativ kann es ist im vorkonfigurierten Tool-Menü angezeigt werden, wenn ein externes Tool zu einem Kurs hinzugefügt wird.';
$string['tooldescription_help'] = 'Die Beschreibung des Tools, die Trainer in der Aktivitätsliste angezeigt wird. Die Beschreibung sollte darstellen, wofür das Tool ist und was es tut. Außerdem sollte sie alle zusätzlichen Information enthalten, die die Trainer kennen müssen.';
$string['toolproxy_help'] = 'Administratoren können hier externe Tools registrieren, die den LTI 2.0 Standard bereitstellen. Für den Beginn ist nur eine URL des Anbieters des Tools erforderlich. Die Berechtigungen und Service-Zugänge werden dann beim Anlegen einer neuen Aktivität festgelegt. Die registrierten Tools werden in vier Kategorien angezeigt: * **Konfiguriert** - Das Tool wurde angelegt, der Registrierungsprozess wurde jedoch noch nicht begonnen. * **Wartend** - Der Registrierungsprozess wurde begonnen, jedoch noch nicht abgeschlossen. Verschieben Sie die Einstellungen zurück zu \'konfiguriert\' und speichern Sie sie erneut. * **Akzeptiert** - Die Tool-Einstellungen wurden bestätigt. Die Ressourcen erscheinen unter Wartend. * **Zurückgewiesen** - Die Registrierung wurde vom Anbieter abgewiesen. Prüfen Sie die Einstellungen und verschieben Sie sie zurück in die Kategorie \'Konfiguriert\', damit der Prozess erneut starten kann.';
$string['tooltypenotfounderror'] = 'Das in dieser Aktivität verwendete LTI-Tool wurde gelöscht. Wenn Sie Hilfe benötigen, wenden Sie sich an Ihre Trainer oder Administratoren.';
$string['typename_help'] = 'Die Toolbezeichnung wird verwendet, um den Toolanbieter in Moodle zu identifizieren. Die Bezeichnung wird Trainern gezeigt, wenn sie externe Tools in ihren Kursen einbinden.';
