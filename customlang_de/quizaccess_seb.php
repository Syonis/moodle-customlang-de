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
 * @package    quizaccess
 * @subpackage seb
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Safe-Exam-Browser-EInstellungen für einen Test. Dies beinhaltet auch die ID des Benutzers, der die Einstellungen erstellt oder zuletzt geändert hat.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID des Benutzers, der die Einstellungen erstellt oder zuletzt geändert hat.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Safe-Exam-Browser-Template. Dies beinhaltet auch die ID des Benutzers, der das Template erstellt oder zuletzt geändert hat.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID des Benutzers, der das Template erstellt oder zuletzt geändert hat.';
$string['seb:manage_seb_userconfirmquit'] = 'SEB-Einstellungen: Nutzer muss das Beenden bestätigen';
$string['seb_allowcapturecamera_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer vor Beginn der Prüfung aufgefordert, SEB den Kamerazugriff zu erlauben. Das Deaktivieren dieser Einstellung sperrt bei macOS 12 bzw. iOS 15 (oder höher) den Kamerazugriff. Videoaufnahmen über WebRTC sind dann nicht möglich.';
$string['seb_allowcapturemicrophone_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer vor Beginn der Prüfung aufgefordert, SEB den Mikrofonzugriff zu erlauben. Das Deaktivieren dieser Einstellung sperrt bei macOS 12 bzw. iOS 15 (oder höher) den Mikrofonzugriff. Audioaufnahmen über WebRTC sind dann nicht möglich.';
$string['seb_allowreloadinexam_help'] = 'Wenn die Option aktiviert ist, ist das erneute Laden einer Webseite erlaubt (Neuladen-Taste in der SEB-Taskleiste, Browser-Toolbar, iOS-Seiten-Schiebereglermenü, Tastatur-Kurzbefehl F5, Befehlstaste-R). Das Offline-Caching kann unterbrochen werden, wenn Nutzer versuchen, eine Seite ohne Internetverbindung neu zu laden.';
$string['seb_allowscreencapture_help'] = 'Wenn diese Option aktiviert ist, kann die Bildschirmaufnahme des Betriebssystems (Druck-Taste, Bildschirmaufnahmeprogramme) während der Ausführung des Safe Exam Browsers genutzt werden. Dies ist für Aufsichtstools wie Veyon erforderlich, die ab SEB 3.10 Zugriff auf den Bildschirm der Teilnehmer benötigen. Hinweis: Durch Aktivieren dieser Einstellung können Prüfungsinhalte per Screenshot erfasst werden.';
$string['seb_allowuserquitseb_help'] = 'Wenn die Option aktiviert ist, können Nutzer SEB mit dem "Beenden"-Button in der SEB-Taskleiste, durch Drücken der Cmd-Q (Befehl-Q) oder der Fenster-Schließen-Taste beenden.';
$string['seb_requiresafeexambrowser_help'] = 'Wenn die Option aktiviert ist, können Teilnehmer den Test nur mit dem Safe Exam Browser durchführen. Die verfügbaren Optionen sind: * Nein <br/>Der Safe Exam Browser ist nicht erforderlich, um den Test zu versuchen. * Ja – Bestehendes Template verwenden <br/>Zur Konfiguration des Safe Exam Browser wird ein Template verwendet. Die Templates werden vom Moodle-Administrator verwaltet. Ihre manuellen Einstellungen überschreiben die Einstellungen im Template. * Ja – Manuell konfigurieren <br/>Zur Konfiguration des Safe Exam Browser wird kein Template verwendet. Sie können den Safe Exam Browser manuell konfigurieren. * Ja – Meine eigene Konfiguration hochladen <br/>Sie können Ihre eigene Konfigurationsdatei für den Safe Exam Browser hochladen. Alle manuellen Einstellungen und die Verwendung von Templates werden deaktiviert. * Ja – SEB-Client-Konfiguration verwenden <br/>Es gibt keine Konfiguration des Safe Exam Browser auf der Moodle-Seite. Der Test kann mit jeder Konfiguration des Safe Exam Browser durchgeführt werden.';
$string['seb_userconfirmquit'] = 'Nutzer muss das Beenden bestätigen';
$string['seb_userconfirmquit_help'] = 'Wenn die Option aktiviert ist, müssen Teilnehmer das Beenden des SEB bestätigen, wenn ein Link zum Beenden erkannt wird.';
$string['setting:autoreconfigureseb_desc'] = 'Wenn die Option aktiviert ist, wird bei Nutzern, die mit dem Safe Exam Browser zum Test navigieren, der Safe Exam Browser automatisch neu konfiguriert.';
$string['setting:displayblockswhenfinished_desc'] = 'Wenn die Option aktiviert ist, werden Blöcke angezeigt, nachdem ein Benutzer seinen Testversuch beendet hat.';
$string['setting:showseblinks_desc'] = 'Entscheiden Sie, ob Links für Nutzer angezeigt werden sollen, um auf die SEB-Konfigurationsdatei zuzugreifen, wenn der Zugriff auf den Test verhindert wird. Beachten Sie, dass seb://-Links möglicherweise nicht für jeden Browser funktionieren.';
