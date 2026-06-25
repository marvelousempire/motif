---
type: feature-ledger-readme
status: active
project: Motif
---

# Feature Ledger

## Purpose

This folder tracks Motif features as small Markdown tickets.

Each ticket should be small enough to load into AI systems, RAG pipelines, project tools, or developer workflows.

## Folder Structure

```text
features/
├── README.md
├── ledger.md
└── tickets/
```

## Rule

One feature equals one Markdown ticket.

Every feature ticket should have:

- Feature ID
- Feature name
- Valid intent
- Pipeline stage
- Keyword combos
- User value
- Acceptance criteria
- Validation method
- Related files

## ID Format

```text
FEAT-0001-feature-name.md
```

## Related Agent Guide

See:

```text
agents/housekeeper/feature-ledger-guide.md
```
