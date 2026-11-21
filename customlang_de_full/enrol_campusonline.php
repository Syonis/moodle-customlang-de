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
 * @package    enrol
 * @subpackage campusonline
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowemailupdate_desc'] = 'Erlaubt dem Nutzerdaten Sync, die E-Mail-Adressen bestehender Nutzer zu ändern. Beachten Sie, dass dies zu Problemen führen kann, da auf einigen Moodle-Websites Nutzer ihre E-Mail-Adresse zum Einloggen verwenden.';
$string['allowusernameupdate_desc'] = 'Erlaubt dem Nutzerdaten Sync, die Anmeldenamen bestehender Nutzer zu ändern. Beachten Sie, dass dies zu Problemen bei der Anmeldung führen kann.';
$string['assumestaff'] = 'Org-Nutzer als Staff behandeln';
$string['assumestaff_desc'] = 'Wenn <strong>separate Nutzerkonten für Staff und Teilnehmer</strong> benutzt werden, wird angenommen, dass Nutzer mit Org-Funktionen Staff sind.';
$string['autoidnewusers'] = 'Automatische Identifizierung neuer Nutzer';
$string['autoidnewusers_desc'] = 'Identifiziert neu erstellte Nutzer beim Erstellen.
<ul>
<li>Nützlich, wenn die Nutzer durch SSO angelegt werden</li>
<li>Nicht empfohlen, wenn Nutzer durch den Kurs & Einschreibungssync erstellt werden</li></ul>';
$string['cohortsyncsettings_desc'] = 'Die Aufgabe für globale Gruppen ordnet alle Nutzer mit CAMPUSonline-Person-UID je Studium, das sie in CAMPUSonline belegen, einer globalen Gruppe im Systemkontext zu. Fehlende globale Gruppen werden mit der UID des Studiums als ID angelegt, und wer ein Studium nicht mehr belegt, wird aus dessen Gruppe entfernt. Geändert werden nur globale Gruppen, die diese Synchronisation angelegt hat: Verwendet eine andere globale Gruppe bereits die ID eines Studiums, wird dieses Studium übersprungen. Können die Studien einer Person nicht abgerufen werden, bleiben ihre Mitgliedschaften unverändert. Die Aufgabe ist standardmäßig deaktiviert.';
$string['enrolsynccreateusers'] = 'Nutzer beim Kurs Sync erstellen';
$string['enrolsynccreateusers_desc'] = 'Erlaubt dem Kurs Sync Tasks, Nutzer zu erstellen, falls diese in Moodle noch nicht existieren.
<p>Falls Ihre Nutzer in Moodle auf anderem Wege angelegt werden, dann stellen Sie vorher sicher, dass die Nutzeridentifikation korrekt funktioniert, sonst werden möglicherweise duplikate Nutzer in Moodle erstellt!</p>
<p>Wenn Sie dieses Setting aktivieren, dann deaktivieren Sie die <strong>Automatische Erkennung neuer Nutzer</strong>, um unnötige API Calls zu vermeiden.</p>';
$string['idattempts_desc'] = 'Ein Zähler für die fehlgeschlagenen Versuche einen Nutzer zu identifizieren wird in einem CAMPUSonline Nutzer Profilfeld geführt. Dieser Zähler kann von Admins zurückgesetzt werden, um erneut zu versuchen, den Nutzern in CAMPUSonline zu finden.';
$string['idbyname_warning'] = 'Warnung: Nutzer können ihren Vor- und Nachnamen in der Regel selbst ändern. Ein Name, den zwei Moodle-Konten teilen, wird nie verwendet – wer sich nach einer Person umbenennt, deren Moodle-Konto denselben Namen trägt, erreicht damit nichts. Wer sich aber nach einer Person umbenennt, die noch kein Moodle-Konto hat oder deren Name in Moodle anders geschrieben ist, kann mit deren CAMPUSonline-Identität verknüpft werden und deren Einschreibungen, Lehrendenrollen und Kursbereichsrollen erhalten. Aktivieren Sie die Option nur, wenn Ihre Authentifizierungsmethode die Namensfelder sperrt oder die gefährdeten Personen – vor allem Lehrende – bereits Moodle-Konten unter ihrem CAMPUSonline-Namen haben.';
$string['initialpassword'] = 'Initialpasswort für neu erstellte Nutzer';
$string['initialpassword_desc'] = 'Leerlassen, um eine zufällig generiertes Password für neue User zu verwenden (empfohlen). <p> Wenn Sie das Password selbst setzen, stellen Sie sicher, dass Sie ein Initialpasswort festlegen, das den Komplexitätsstandards entspricht, oder die Nutzererstellung schlägt fehl, <strong>selbst für Nutzer mit Authentifizierungsmethoden, die das Passwort nicht verwenden!</strong></p>';
$string['orgsynccreateusers'] = 'Organisationseinheiten Sync darf Moodle Nutzer erstellen';
$string['orgsynccreateusers_desc'] = 'Erlaubt dem Organisationseinheiten Sync, noch nicht existierende Nutzer für Rollenzuweisungen an Organisationen in Moodle zu erstellen.';
$string['previewusers'] = 'Vorschau für Nutzer mit diesen Einstellungen';
$string['separateusers_desc'] = '<p>Erstellt separate Nutzer in Moodle für <strong>staff</strong> und <strong>students</strong> in CAMPUSonline. Das ist hilfreich, wenn Ihr Moodle ein SSO System verwendet, das ebenfalls separate User für staff und students hat. Ein staff_ oder student_ Präfix wird zu der Person UID hinzugefügt werden.</p>
<p><strong>Diese Einstellung funktioniert nicht im Zusammenspiel mit der User Identifikation zur Erkennung bestehender Nutzer oder dem User Sync, der Nutzer direkt aus CAMPUSonline synchronisiert, da die Rolle (staff/student) in CAMPUSonline nur im Kontext einer Einschreibung definiert ist. Verwenden Sie diese Einstellung nur, wenn Ihre Nutzerkonten ausschließlich über den Kurs- &amp; Einschreibungssync angelegt werden, und setzen Sie die automatische Erkennung neuer Nutzer (autoidnewusers) auf „Nie"!</strong></p>
<p><strong>Wenn diese Einstellung geändert wird, nachdem bereits Nutzerkonten angelegt wurden, wird das zu Fehlern und/oder Duplikaten führen!</strong></p>';
$string['sourceclaim_desc'] = 'Wählen Sie die ID, welche die Moodle Nutzer gesetzt haben.';
$string['syncthisuser'] = 'Synchronisiere Nutzer mit CAMPUSonline';
$string['teacherfullname'] = 'Trainer Information zum vollständigen Kursnamen hinzufügen';
$string['teacherfullname_desc'] = 'Wie die Trainer Information zum vollständigen Kursnamen hinzugefügt werden soll. Verfügbare Platzhalter sind {teacher:uid} und {teacher:name}.';
$string['teachershortname'] = 'Trainer Information zum kurzen Kursnamen hinzufügen';
$string['teachershortname_desc'] = 'Wie die Trainer Information zum kurzen Kursnamen hinzugefügt werden soll. Verfügbare Platzhalter sind {teacher:uid} und {teacher:name}.';
$string['usercount'] = 'Rohdaten für {$a} Nutzer:';
$string['usercount_syncdata'] = 'Vorschau von Daten für {$a} Nutzer:';
$string['useridsettings'] = 'Identifikation bestehender Nutzer';
$string['useridsettings_desc'] = '<ul>
    <li>Dieser Sync Task verknüpft bestehende Moodle-Nutzer mit CAMPUSonline Personen. Standardmäßig wird dieser Task nicht geplant ausgeführt, und sollte nur manuell gestartet werden</li>
    <li>Es wird der CAMPUSonline person-identifiers/mappings Endpoint benutzt, um die <strong>Person UID</strong> mittels einer beliebigen anderen ID zu ermitteln</li>
    <li>Sobald ein/e Nutzer/in in CAMPUSonline gefunden wird, wird das Nutzerprofilfeld <strong>campusonline_person_uid</strong> mit der CAMPUSonline Person UID befüllt (dieses Feld wird bei der Plugin-Installation erstellt)</li></ul>';
$string['usersyncsettings_desc'] = '<ul>
    <li>Nutzer können bei der Anmeldung automatisch gesynct werden, oder manuell über den Link <strong>Diese/n Nutzer/in mit CAMPUSonline syncen</strong> auf der Nutzerprofil Seite.</li>
    <li>Die konfigurierten Feldwerte werden auch für <strong>Nutzererstellung</strong> durch den Kurs Sync verwendet</li>
    <li><strong>Anmeldenamen müssen eindeutig</strong> sein und Felder müssen mit gültigen Werten für ihre jeweiligen Feldtypen gefüllt sein, da sonst Fehler bei der Nutzererstellung auftreten!</li>
    <li>Folgende Felder dürfen <strong>nicht leer</strong> sein, sonst schlägt die Nutzererstellung fehl: user_auth, user_password, user_username, user_email</li>
    <li>CAMPUSonline <strong>Person-UID</strong>, wird automatisch in das entsprechenden Nutzerprofilfeld synchronisiert</li>
    <li>Klicken Sie auf <strong>Platzhalter und Rohdaten anzeigen</strong>, um verfügbare Felder/Platzhalter zu sehen</li></ul>';
$string['usersyncsingle'] = 'Diese/n Nutzer mit CAMPUSonline synchronisieren';
