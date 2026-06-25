---
type: repo-manifest
status: active
project: Motif
---

# Repo Manifest

## Purpose

The Repo Manifest is the master list of important repo areas the Housekeeper Agent must monitor.

This file helps the Housekeeper stay meticulous.

## Core Rule

Nothing important should be invisible.

Every major repo area should have a known purpose, owner, and maintenance expectation.

## Required Root Files

| File | Purpose | Housekeeper Duty |
| --- | --- | --- |
| README.md | Main public entry point | Keep updated and useful |
| ABOUT.md | Project identity and meaning | Keep aligned with current vision |
| PRD.md | Product requirements | Keep aligned with major product changes |
| LICENSE | Legal license file | Preserve and monitor existence |
| repo-manifest.md | Repo inventory | Keep current when structure changes |
| release-ledger.md | Release memory | Keep current when versions or milestones change |

## Required Folders

| Folder | Purpose | Housekeeper Duty |
| --- | --- | --- |
| agents/ | Agent definitions and playbooks | Keep agent instructions current |
| agents/housekeeper/ | Housekeeper Agent system | Keep role, rules, and templates current |
| docs/ | Product and engineering docs | Keep architecture and mapping docs organized |
| features/ | Feature ledger and tickets | Keep feature list current |
| features/tickets/ | Micro feature ticket files | Keep tickets small and linked |
| obsidian/ | Wiki and graph knowledge layer | Keep notes linked and RAG-ready |
| obsidian/explainers/ | Plain-language explainers | Keep explanations clear |
| obsidian/journal/ | Project memory and decision trail | Keep journal updated after major changes |
| plugin/ | WordPress plugin code | Keep code aligned with docs |
| tests/ | Testing and validation notes | Keep validation path visible |

## Housekeeper Monitoring Rule

The Housekeeper Agent should check these areas when the project changes:

- README
- ABOUT
- PRD
- LICENSE
- Repo Manifest
- Release Ledger
- Feature Ledger
- Feature Tickets
- Obsidian Wiki
- Journal
- Docs
- Plugin Code
- Tests
- Agent Folder

## Meticulous Update Rule

When a new concept is added, the Housekeeper should ask:

- Does README need a link?
- Does ABOUT need an update?
- Does PRD need an update?
- Does the feature ledger need a ticket?
- Does the journal need an entry?
- Does Obsidian need a note?
- Does the release ledger need a note?
- Does repo-manifest need a new row?

## Related Files

- ABOUT.md
- README.md
- PRD.md
- release-ledger.md
- agents/housekeeper/meticulous-stewardship.md
