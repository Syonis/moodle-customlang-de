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
 * @subpackage chat
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configmethod'] = 'Die Chat-Methode AJAX bietet eine AJAX-basierte Chat-Oberfläche, die den Server regelmäßig kontaktiert, um Aktualisierungen zu erhalten. Bei der Chat-Methode Normal wenden sich Clients regelmäßig an den Server, um Aktualisierungen zu erhalten. Es erfordert keine Konfiguration und funktioniert überall, kann jedoch eine große Belastung des Servers verursachen, wenn viele Nutzer chatten. Die Verwendung eines Server-Daemons erfordert Shell-Zugriff auf Unix, führt jedoch zu einer schnell skalierbaren Chat-Umgebung.';
$string['currentusers'] = 'Aktuelle Nutzer';
$string['modulename_help'] = 'Die Chat-Aktivität ermöglicht eine textbasierte synchrone Diskussion.

Der Chat in Moodle ist für den Einsatz mit kleinen Gruppen konzipiert. Bei großen Gruppen entsteht eine hohe Belastung auf den Webservern.

Ein Chat kann eine einmalige Aktivität sein, aber auch täglich oder wöchentlich nach Terminabsprache wiederholt werden. Chat-Sitzungen können gespeichert und veröffentlicht werden.

Chats sind besonders nützlich, wenn die Gruppe sich nicht persönlich treffen kann, wie z.B.

* Regelmäßige Treffen von Teilnehmern, die an Online-Kursen teilnehmen, damit sie Erfahrungen mit anderen im selben Kurs, aber an einem anderen Ort austauschen können
* Ein/e Teilnehmer/in, der vorübergehend nicht persönlich teilnehmen kann, um mit ihrem/seinen Trainer/in zu chatten und seine Arbeit nachzuholen
* Teilnehmer, die ein Praktikum machen, treffen sich, um ihre Erfahrungen miteinander und mit ihrer/m Trainer/in zu diskutieren
* Jüngere Kinder nutzen den Chat zu Hause am Abend als kontrollierte (überwachte) Einführung in die Welt der sozialen Netzwerke
* Eine Frage- und Antwortsitzung mit einem eingeladenen Redner an einem anderen Ort
* Sitzungen zur Unterstützung der Teilnehmer bei der Vorbereitung auf Tests, bei denen die/der Trainer/in oder andere Teilnehmer Beispielfragen stellen würden';
$string['studentseereports_help'] = 'Mit der Einstellung \'Nein\' dürfen ausschließlich Nutzer mit dem Recht \'mod/chat:readlog\' die Chat-Protokolle sehen.';
