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
 * @package    auth
 * @subpackage magic
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['expiredloginlinkmsg'] = 'Hallo {$a->fullname},

Sie haben versucht auf \'{$a->sitename}\'  mit einem abgelaufenen Magic Anmeldelink zuzugreifen.

Es wurde automatisch ein neuer Magic Link erstellt:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Der Link läuft ab am: <b> {$a->expiry} </b> <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administratoren der Website,
{$a->admin}';
$string['expiredregistrationmessage'] = 'Hallo {$a->fullname},

Sie haben versucht auf \'{$a->sitename}\'  mit einem abgelaufenen Magic Registrierungslink zuzugreifen.

Es wurde automatisch ein neuer Magic Link erstellt:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administratoren der Website,
{$a->admin}';
$string['invitationmessage'] = 'Hallo {$a->fullname},

Es wurde ein neuer Account angefordert bei \'{$a->sitename}\' mit Ihrer E-Mail Adresse.

Um sich mit dem neuen Account anzumelden, rufen Sie bitte diese Website auf und melden sich direkt mit Ihrem Anmeldenamen und Kennwort an:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Der Link äuft ab am: <b> {$a->expiry} </b> <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administratoren der Website,
{$a->admin}';
$string['loginkeytype_desc'] = 'Mit dieser Einstellung können Administratoren das Verhalten von Anmeldeschlüsseln konfigurieren. Die Anmeldeschlüssel können nur einmal oder nur bis zum Ablauf der Gültigkeitsdauer verwendet werden.';
$string['loginlinkmessage'] = 'Hallo {$a->fullname},

um auf Ihr Nutzerkonto bei \'{$a->sitename}\' zuzugreifen, nutzen Sie bitte den folgenden Magic Link:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Der Link läuft ab am: <b> {$a->expiry} </b> <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administratoren der Website,
{$a->admin}';
$string['notexists_loginlinkmsg'] = 'Hallo {$a->fullname},

Sie haben keinen Magic Anmeldelink und haben daher keinen Zugriff auf die Seite der Magic Authentifizierung.

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administratoren der Website,
{$a->admin}';
$string['preventmagicauthmessage'] = 'Hallo {$a->fullname},

es wurde ein neuer Account bei \'{$a->sitename}\' mit Ihrer E-Mail Adresse angefragt. <br>

<strong> Note: </strong> Die Authentifizierung mit einem Magic Link wird von Ihrem Nutzerkonto nicht unterstützt, bitte verwenden Sie stattdessen ihr Kennwort.

<br>

{$a->forgothtml} <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administratoren der Website,
{$a->admin}';
$string['registrationmessage'] = 'Hallo {$a->emailplaceholder},

vielen Dank für Ihr Interesse an einer Mitgliedschaft bei {$a->sitename}! Um ein Nutzerkonto zu erstellen, verwenden Sie bitte den folgenden Registrierungslink:

<a href={$a->link}> {$a->link} </a> <br>

Sollten Sie Fragen haben oder Hilfe benötigen, wenden Sie sich bitte jederzeit an die Administratoren der Website, {$a->admin}.

Wir freuen uns darauf, Sie als Mitglied unserer Community begrüßen zu dürfen!

Mit freundlichen Grüßen,
Das {$a->sitename} Team';
