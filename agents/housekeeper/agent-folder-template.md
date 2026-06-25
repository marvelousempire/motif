---
type: template-guide
status: active
project: Motif
agent: Housekeeper Agent
---

# Agent Folder Template

## Purpose

This file gives a reusable folder pattern for creating a Housekeeper Agent in any repo.

Copy this structure into a new project and customize the files.

## Folder Structure

```text
agents/housekeeper/
├── README.md
├── persona.md
├── operating-manual.md
├── knowledge-sources.md
├── validation.md
├── graceful-validation.md
├── repo-transformation-guide.md
├── feature-ledger-guide.md
└── templates/
    ├── feature-ticket-template.md
    ├── journal-entry-template.md
    ├── repo-audit-template.md
    └── validation-report-template.md
```

## Required Files

## README.md

Explains what the agent does and how to use it.

## persona.md

Defines the agent identity, tone, role, and behavior.

## operating-manual.md

Defines the step-by-step working loop.

## knowledge-sources.md

Defines where the agent should look for project truth.

## validation.md

Defines how the agent checks work.

## graceful-validation.md

Defines how the agent reports incomplete or uncertain work safely.

## repo-transformation-guide.md

Defines how to reorganize any repo into the Motif-style structure.

## feature-ledger-guide.md

Defines how features should be tracked as small Markdown tickets.

## templates/

Contains repeatable templates for tickets, journals, audits, and validation reports.

## Customization Rule

Every project should customize:

- Project name
- Main README links
- Feature ID prefix
- Important folders
- Knowledge source list
- Journal style
- Validation rules

## Reuse Rule

The structure should stay consistent across projects.

The content should adapt to the project.
