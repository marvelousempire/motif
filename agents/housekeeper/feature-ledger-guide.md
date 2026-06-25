---
type: feature-ledger-guide
status: active
project: Motif
agent: Housekeeper Agent
related:
  - features/README.md
  - features/ledger.md
---

# Feature Ledger Guide

## Purpose

The Feature Ledger is the place where Motif tracks small feature tickets.

Each feature gets its own Markdown file.

This makes features easier to load into AI systems, project tools, RAG systems, and development workflows.

## Core Idea

A feature ticket should be small, focused, and easy to manage.

One feature equals one file.

## Feature Folder Structure

```text
features/
├── README.md
├── ledger.md
└── tickets/
    ├── FEAT-0001-housekeeper-agent.md
    ├── FEAT-0002-feature-ledger.md
    └── FEAT-0003-repo-transformation-guide.md
```

## Feature ID Rule

Use a stable feature ID.

Default format:

```text
FEAT-0001-feature-name.md
```

The ID should not change after it is assigned.

The file name should include the ID and a short name.

## Feature Ticket Should Include

Each feature ticket should include:

- Feature ID
- Feature name
- Status
- Valid intent
- Pipeline stage
- Keyword combos
- User value
- Description
- Acceptance criteria
- Validation method
- Related files
- Notes

## Why Small Tickets Matter

Small Markdown tickets are useful because they are:

- Easy to read
- Easy to index
- Easy to chunk
- Easy to move into another system
- Easy for AI to reason about
- Easy for developers to implement

## Ledger Rule

The ledger should list every feature ticket.

The ledger is the table of contents for the feature system.

## Related Files

- templates/feature-ticket-template.md
- ../../features/ledger.md
