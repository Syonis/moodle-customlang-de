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
 * @package    core
 * @subpackage auth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_fieldlock_expl'] = '<p><b>Feld sperren:</b> Wenn diese Option aktiviert ist, können Nutzer dieses Feld nicht ändern. Dies ist sinnvoll, wenn die Daten in einer externen Datenbank verwaltet werden. </p>';
$string['auth_fieldlocks_help'] = '<p>Sie können Datenfelder im Nutzerprofil sperren. Dies ist sinnvoll, wenn die Nutzerdaten von Administratoren gepflegt werden, manuell angelegt oder im Bulkupload (Hochladen über Textdatei) hochgeladen werden. Falls Sie von Moodle benötigte Datenfelder sperren, müssen Sie sicherstellen, dass diese Datenfelder beim Anlegen der Nutzerprofile sinnvoll belegt werden.</p><p>Um Probleme zu vermeiden, achten Sie darauf, dass die Einstellung auf "Bearbeitbar (wenn leer)" gesetzt ist.</p>';
$string['auth_loginpasswordtoggle_desc'] = 'Icon im Kennwortfeld hinzufügen, das Nutzern beim Anmelden erlaubt, ihr eingegebenes Kennwort im Klartext anzuzeigen.';
$string['auth_remove_user_key'] = 'Entfernte externe Nutzer';
$string['auth_updatelocal_expl'] = '<p><b>Lokal aktualisieren:</b> Wenn diese Option aktiviert ist, wird das Feld jedes Mal (external auth) aktualisiert, wenn sich die Nutzer einloggen oder eine Nutzersynchronisation erfolgt. Dateneinträge sollten gesperrt sein, wenn sie lokal aktualisiert werden.</p>';
$string['authloginviaemail_desc'] = 'Nutzern erlauben, sich mit dem Anmeldenamen oder mit der E-Mail-Adresse anzumelden, falls die E-Mail-Adresse eindeutig ist.';
$string['auto_add_remote_users'] = 'Automatisches Hinzufügen externer Nutzer';
$string['changepasswordhelp'] = 'URL zur Wiederherstellung verlorener Kennwörter. Per E-Mail wird ein Link an die hinterlegte E-Mail-Adresse des Benutzers gesendet. Beachten Sie bitte, dass diese Option keine Wirkung hat, wenn in den Einstellungen für die Authentifizierung eine entsprechende URL festgelegt ist.';
$string['chooseauthmethod_help'] = 'Diese Option legt die Authentifizierung für das Benutzerkonto fest. Hier sollten nur aktive Authentifizierungen angegeben werden, denn sonst kann sich dieser Benutzer nicht mehr anmelden. Um ein Benutzerkonto vorübergehend zu sperren, wählen Sie die Authentifizierung "Kein Login".';
$string['createpassword'] = 'Kennwort erzeugen und Nutzer benachrichtigen';
$string['eventuserloggedin'] = 'Nutzer angemeldet';
$string['eventuserloggedinas'] = 'Benutzer ist als anderer Nutzer angemeldet';
$string['forcechangepassword_help'] = 'Nutzer werden aufgefordert, ihr Kennwort beim nächsten Anmelden zu ändern.';
$string['forcechangepasswordfirst_help'] = 'Nutzer werden aufgefordert, ihr Kennwort beim ersten Anmelden zu ändern.';
$string['limitconcurrentlogins_desc'] = 'Wenn diese Option aktiviert ist, wird die Anzahl der Anmeldungen für Nutzer eingeschränkt. Die älteste Sitzung wird beim Erreichen der Grenze beendet, alle nicht gespeicherten Daten gehen verloren. Diese Einstellung ist nicht mit einer Authentifizierung über Single-Sign-On (SSO) kompatibel.';
$string['nopasswordchangeforced'] = 'Ohne die Änderung des Kennworts können Sie nicht weitermachen. Falls die Seite zur Änderung des Kennworts nicht verfügbar ist, wenden Sie sich an Administratoren der Website.';
$string['privacy:metadata:userpref:createpassword'] = 'Legt fest, dass ein Kennwort für den Benutzer erstellt werden soll';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Legt fest, ob ein Benutzer beim Login das Kennwort ändern soll';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Die Anzahl der fehlgeschlagenen Anmeldungen des Nutzers seit der letzten erfolgreichen Anmeldung.';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Kennwort, mit dem ein gesperrter Benutzer das Konto entsperren kann.';
$string['selfregistration_help'] = 'Wenn die Selbstregistrierung (z.B. \'E-Mail basiert\') aktiviert ist, können sich alle Nutzer selbst registrieren und ein Konto anlegen. Auf diese Weise könnten aber auch Spammer ein Nutzerkonto erhalten und Einträge in Foren, Blogs oder Profilen missbrauchen. Um dieses Risiko zu vermeiden, können Sie die Selbstregistrierung ausschalten oder auf bestimmte E-Mail-Domains (z.B. meinefirma.de) beschränken.';
$string['showloginform_desc'] = 'Wenn alle Nutzer auf der Website eine Authentifizierung wie OAuth2 verwenden, bei der sie keinen Anmeldenamen und kein Kennwort eingeben müssen, können Sie die manuelle Anmeldung ausblenden. Beachten Sie aber, dass sich dann niemand mehr mit einem manuellen Nutzerkonto anmelden kann. Um die manuelle Anmeldung wieder anzuzeigen, weil Sie sich selber ausgesperrt haben, verwenden Sie die folgende Befehlszeile im Terminal: php admin/cli/cfg.php --name=showloginform --set=1';
$string['suspended_help'] = 'Gesperrte Nutzer können sich nicht einloggen und auch keine Webservices verwenden. Alle ausgehenden Mitteilungen werden gelöscht.';
