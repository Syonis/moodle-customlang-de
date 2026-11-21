# Moodle Custom Language Pack DE

Dieses Repository stellt deutsche Moodle-Sprachanpassungen bereit. Ziel ist die Verwendung des **generischen Maskulinums** anstelle von Gender-Schreibweisen, bei möglichst verständlichen und grammatikalisch korrekten Formulierungen.

## Pakete

| Paket | PHP-Dateien | Inhalt |
| --- | ---: | --- |
| [`customlang_de_min/`](customlang_de_min/) | 275 | Bisherige, manuell gepflegte und geprüfte Sprachanpassungen |
| [`customlang_de_full/`](customlang_de_full/) | 686 | MIN sowie 411 zusätzliche, KI-gestützt bearbeitete Sprachdateien (2.903 zusätzliche Strings) |
| [`customlang_de_extra/`](customlang_de_extra/) | 9 | Neue deutsche Übersetzungen für ausgewählte Plugins ohne mitgelieferte deutsche Sprachdatei |

**MIN** ist das bisher angebotene und regelmäßig aktualisierte Paket.

**FULL** ist die erweiterte Alternative und enthält bereits sämtliche Dateien aus MIN. Zusätzlich wurden die im offiziellen deutschen Moodle-Sprachpaket identifizierten Gender-Schreibweisen in weiteren 411 Sprachdateien bearbeitet. Damit umfasst FULL alle von uns erfassten und entsprechend angepassten Sprachstrings.

**EXTRA** ist unabhängig von MIN und FULL und kann zusätzlich zu einem der beiden Pakete importiert werden.

### Zusätzliche Plugins mit Anpassungen in MIN

Neben Moodle-Core und Standardkomponenten enthält MIN auch weiterhin lokale Anpassungen für diese zusätzlichen Plugins:

| Plugin | Sprachdatei |
| --- | --- |
| Board | `board.php` |
| Etherpad Lite | `etherpadlite.php` |
| GeoGebra | `geogebra.php` |
| Groups Self Selection | `groupselect.php` |
| Mindmap | `mindmap.php` |
| PDF Annotation | `pdfannotator.php` |
| Student folder | `publication.php` |
| Fair Allocation | `ratingallocate.php` |
| People | `block_people.php` |
| Moodle Adminer | `local_adminer.php` |
| Session Keepalive | `local_session_keepalive.php` |
| WebUntis Integration | `local_webuntis.php` |

### EXTRA: Eigenständige Plugin-Übersetzungen

EXTRA enthält erstmals eigene deutsche Übersetzungen für folgende neun Plugin-Komponenten, die bislang keine mitgelieferte deutsche Sprachdatei hatten:

- Interactive Video (`mod_interactivevideo`)
- Interactive Video – Chapter (`ivplugin_chapter`)
- Interactive Video – Content Bank Item (`ivplugin_contentbank`)
- Interactive Video – External content (`ivplugin_iframe`)
- Interactive Video – Rich Text (`ivplugin_richtext`)
- Interactive Video – Skipped Segment (`ivplugin_skipsegment`)
- Log report (`block_logreport`)
- Moodle-Benchmark (`report_benchmark`)
- Extended log search (`report_extendedlog`)

Die Übersetzungen wurden auf Grundlage der englischen Originalsprachdateien erstellt. Bestehende Urheberrechts- und Lizenzhinweise wurden beibehalten.

## Installation

Die drei Import-ZIP-Dateien stehen unter [Releases](https://github.com/Syonis/moodle-customlang-de/releases) bereit.

**Wichtig:** Das automatisch von GitHub erzeugte Repository-Quellcode-ZIP ist nicht mit den vorbereiteten Moodle-Importdateien zu verwechseln.

1. Passendes ZIP herunterladen: `customlang_de_min.zip` **oder** `customlang_de_full.zip`, bei Bedarf zusätzlich `customlang_de_extra.zip`.
2. In Moodle **Website-Administration → Allgemein → Sprache → Sprachanpassungen → Importieren** öffnen.
3. ZIP-Datei hochladen und Importmodus auswählen.
4. Bestehende Anpassungen vorher sichern. Wer diese erhalten möchte, wählt **„Nur Texte ohne lokale Anpassung erstellen“**.

Nicht installierte Komponenten werden beim Import über die Moodle-Weboberfläche als fehlend gemeldet und übersprungen. Bei manueller Ablage im Dateisystem findet diese Prüfung nicht statt.

## Kompatibilität und Qualität

Die Pakete wurden auf Grundlage von **Moodle 5.3** beziehungsweise den im November 2026 verwendeten Plugin-Versionen erstellt. Bei anderen Versionen können String-Schlüssel abweichen.

**MIN** wird manuell gepflegt und geprüft.

**FULL** enthält zusätzlich KI-gestützt bearbeitete Sprachstrings. **EXTRA** enthält KI-gestützt erstellte und nachbearbeitete deutsche Plugin-Übersetzungen.

Technische Prüfungen ersetzen keine vollständige sprachliche und funktionale Abnahme. Einzelheiten zum Entstehungsprozess und Prüfstatus stehen in [AI.md](AI.md).

## Weitere Hinweise

- [Moodle-App-Anpassungen](APP.md)
- [KI-Unterstützung und Prüfstatus](AI.md)
- [Lizenz](LICENSE)

Fehlerberichte und Verbesserungsvorschläge sind über GitHub Issues oder Pull Requests willkommen.
