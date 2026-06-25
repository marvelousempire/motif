---
type: source-manifest
status: active
project: Motif
agent: Housekeeper Agent
---

# Housekeeper Source Manifest

## Purpose

This file tells Motif where its Housekeeper Agent standard comes from.

Right now, the Housekeeper Agent lives locally inside this repo.

In the future, the standard should live in its own reusable repo.

## Current Source

```text
Local source: agents/housekeeper/
```

## Future Source

```text
Future repo: agent-housekeeping
```

## Relationship

Motif should treat the local Housekeeper folder as the Motif-specific implementation.

The future `agent-housekeeping` repo should become the reusable standard.

## Expected External Repo Structure

```text
agent-housekeeping/
├── README.md
├── ABOUT.md
├── PRD.md
├── LICENSE
├── repo-manifest.md
├── release-ledger.md
├── agents/
│   └── housekeeper/
├── templates/
├── examples/
└── docs/
```

## Motif Local Mirror

Motif keeps:

```text
agents/housekeeper/
```

This local copy can include Motif-specific rules, links, and project context.

## Sync Rule

When the external Housekeeper standard changes, Motif should review whether the local Housekeeper folder should be updated.

## Housekeeper Duty

The Housekeeper Agent should check this source manifest when:

- Updating its own instructions
- Creating a new project repo
- Transforming another repo
- Creating feature tickets for agent improvements
- Updating the repo manifest
- Updating the release ledger

## Status

The external repo is planned but not created from this session.

Once created, add the actual repo URL here.
