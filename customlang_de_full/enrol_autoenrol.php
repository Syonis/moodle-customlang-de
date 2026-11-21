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
 * @subpackage autoenrol
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol_help'] = 'Wenn diese Option aktiviert ist, werden die Plugins die Nutzer immer anmelden, auch wenn sie bereits über eine andere Methode Zugang zum Kurs haben.';
$string['autoenrol:manage'] = 'Automatisch eingeschriebene Nutzer verwalten';
$string['autoenrol:method'] = 'Nutzer/in kann Nutzer beim Login für einen Kurs einschreiben';
$string['autoenrol:unenrol'] = 'Nutzer/in kann automatisch eingeschriebene Nutzer abmelden';
$string['autoenrol:unenrolself'] = 'Nutzer können sich selbst aus Kursen abmelden, wenn sie automatisch bei Zugriff eingeschrieben wurden.';
$string['autounenrolaction_help'] = 'Wählen Sie die auszuführende Aktion aus, wenn die Filterregel für Nutzer nicht mehr zutrifft. Beachten Sie bitte, dass einige Nutzerdaten und Nutzereinstellungen aus dem Kurs gelöscht werden, sobald Nutzer abgemeldet werden.';
$string['countlimit_help'] = 'Diese Instanz zählt die Anzahl der Nutzereinschreibungen in einen Kurs und kann diese stoppen, sobald eine bestimmte Anzahl von Nutzern erreicht ist. Die Standardeinstellung von 0 bedeutet unbegrenzt.';
$string['defaultrole_desc'] = 'Wählen Sie die Rolle aus, die Nutzer bei der automatischen Einschreibung zugewiesen werden soll.';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, werden die Nutzer nur bis zu diesem Datum angemeldet.';
$string['enrolperiod_help'] = 'Dauer der Einschreibung, beginnend mit dem Moment, in dem sich Nutzer selbst registrieren. Ist diese Option deaktiviert, ist die Dauer der Einschreibung unbegrenzt.';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, werden die Nutzer erst ab diesem Datum registriert.';
$string['expiredaction_help'] = 'Wählen Sie die auszuführende Aktion, wenn die Einschreibung von Nutzern abläuft. Beachten Sie bitte, dass einige Nutzerdaten und Nutzereinstellungen im Kurs gelöscht werden, sobald Nutzer abgemeldet werden.';
$string['expirymessageenrollerbody'] = 'Die automatische Einschreibung in den Kurs \'{$a->course}\' läuft innerhalb der nächsten {$a->threshold} für die folgenden Nutzer ab:

{$a->users}

Um deren Einschreibung zu verlängern, gehen Sie bitte zu {$a->extendurl}';
$string['filter_help'] = 'Wenn Sie einen Gruppenfokus ausgewählt haben, können Sie dieses Feld zum Filtern verwenden,  welche Art von Nutzer/in Sie in den Kurs einschreiben möchten. Wenn Sie z.B. nach Authentifizierung gruppieren und über das Merkmal "manuell" filtern, werden nur Nutzer eingeschrieben, die sich direkt auf Ihrer Website registriert haben.';
$string['groupon_help'] = 'Das Plugin "Automatische Einschreibung" kann Nutzer automatisch zu einer Gruppe hinzufügen, wenn diese basierend auf einem dieser Nutzerprofilfelder eingeschrieben werden.';
$string['longtimenosee'] = 'Inaktive Nutzer abmelden nach';
$string['longtimenosee_help'] = 'Wenn Nutzer längere Zeit nicht auf einen Kurs zugegriffen haben, werden sie automatisch abgemeldet. Dieser Parameter legt diese Zeitspanne fest.';
$string['maxenrolled'] = 'Maximal eingeschriebene Nutzer';
$string['maxenrolled_help'] = 'Diese Option legt die maximale Anzahl der Nutzer fest, die automatisch eingeschrieben werden können. 0 bedeutet keine Begrenzung.';
$string['method_help'] = 'Diese Option verändert das Verhalten des Plugins und schreibt Nutzer bereits beim Einloggen in den Kurs ein, anstatt auf das Aufrufen des Kurses zu warten. Dies ist hilfreich für Kurse, die standardmäßig in der Liste "Meine Kurse" von Nutzern angezeigt werden sollen.';
$string['newenrols_help'] = 'Diese Option legt fest, ob sich Nutzer automatisch in diesen Kurs einschreiben können.';
$string['pluginname_desc'] = 'Das Plugin "Automatische Einschreibung" erlaubt angemeldeten Nutzer automatisch den Zugriff auf einem Kurs und schreibt sie dort ein. Dies ist vergleichbar mit dem Gastzugang, aber Nutzer werden dauerhaft eingeschrieben und können an Foren und Aktivitäten teilnehmen.';
$string['privacy:metadata:core_group'] = 'Das Plugin "Automatische Einschreibung" kann neue Gruppen erstellen oder Teilnehmer, die dem Nutzerfilter entsprechen, in bestehende Gruppen hinzuzufügen.';
$string['role_help'] = 'Diese Option legt fest, mit welcher Rollenzuweisung neue Nutzer eingeschrieben werden.';
$string['selfunenrol_desc'] = 'Bei Kursen mit automatischer Einschreibung dürfen sich standardmäßig Nutzer selber wieder abmelden.';
$string['selfunenrol_help'] = 'Wenn diese Option aktiviert ist, können Nutzer sich selber aus dem Kurs abmelden.';
$string['sendcoursewelcomemessage_help'] = 'Wenn Nutzer automatisch in den Kurs eingeschrieben werden, kann ihnen eine Begrüßungsmitteilung per E-Mail geschickt werden. Wenn sie vom Kurskontakt (standardmäßig Trainer/in) gesendet wird und mehrere Personen diese Rolle haben, wird die E-Mail von der ersten Person gesendet, der die Rolle zugewiesen wurde.';
$string['softmatch_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer auch dann automatisch eingeschrieben, wenn sie nur teilweise mit dem unter "Nur zulassen" hinterlegten Filterwert übereinstimmen. Eine genaue Übereinstimmung wird nicht verlangt, die Groß- und Kleinschreibung wird nicht berücksichtigt. Der Wert von "Filtern nach" wird für den Gruppennamen verwendet.';
$string['status_help'] = 'Wenn diese Option aktiviert und die Option "Neue Einschreibungen zulassen" deaktiviert ist, können nur Nutzer auf den Kurs zugreifen, die zuvor automatisch eingeschrieben wurden. Wenn diese Option deaktiviert ist, ist diese Methode der automatischen Einschreibung deaktiviert, da alle bestehenden automatischen Einschreibungen ausgesetzt werden und neue Nutzer sich nicht automatisch einschreiben können.';
$string['unenrolusers'] = 'Nutzer abmelden';
$string['userfilter_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer nur dann eingeschrieben, wenn sie zu den Regeln passen.';
$string['warning_message'] = 'Wenn Sie dieses Plugin zu Ihrem Kurs hinzufügen, können alle authentifizierten Nutzer auf Ihren Kurs zugreifen. Installieren Sie dieses Plugin nur, wenn Sie einen automatischen Zugang zu Ihrem Kurs ermöglichen möchten.';
