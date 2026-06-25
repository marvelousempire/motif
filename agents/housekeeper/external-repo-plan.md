---
type: repo-externalization-plan
status: active
project: Motif
agent: Housekeeper Agent
related:
  - agents/housekeeper/README.md
  - repo-manifest.md
---

# Housekeeper External Repo Plan

## Purpose

This plan explains how the Housekeeper Agent can become its own reusable repo.

The future repo can be used by Motif and by other projects that need the same housekeeper structure.

## Repo Name

The repo name is:

```text
agent-housekeeper
```

## Core Idea

The Housekeeper Agent should become a reusable project pattern.

Instead of only living inside Motif, the agent can live in its own repo and then be referenced by Motif.

Other repos can then point to the same Housekeeper Agent system and learn how to set up their own house.

## What Moves To The New Repo

These files should be copied or moved into the `agent-housekeeper` repo:

```text
agents/housekeeper/README.md
agents/housekeeper/persona.md
agents/housekeeper/founder-operating-style.md
agents/housekeeper/meticulous-stewardship.md
agents/housekeeper/operating-manual.md
agents/housekeeper/knowledge-sources.md
agents/housekeeper/validation.md
agents/housekeeper/graceful-validation.md
agents/housekeeper/repo-transformation-guide.md
agents/housekeeper/agent-folder-template.md
agents/housekeeper/feature-ledger-guide.md
agents/housekeeper/templates/
```

## What Stays In Motif

Motif should keep a small local pointer to the external Housekeeper repo.

Motif should keep:

```text
agents/housekeeper/README.md
agents/housekeeper/external-repo-plan.md
agents/housekeeper/housekeeper-source-manifest.md
```

The local files should explain that Motif follows the external Housekeeper standard.

## How Another Agent Uses It

A new AI agent should be able to read the `agent-housekeeper` repo and understand:

- How to act as a Housekeeper Agent
- How to inspect a repo
- How to build a README
- How to create an ABOUT file
- How to create a repo manifest
- How to create a release ledger
- How to create a feature ledger
- How to create micro feature tickets
- How to create Obsidian wiki notes
- How to create project journals
- How to validate gracefully
- How to keep everything linked

## Motif Pointer Rule

Motif should always know which Housekeeper standard it follows.

That pointer should live in:

```text
agents/housekeeper/housekeeper-source-manifest.md
```

## Migration Steps

1. Create the new `agent-housekeeper` repo.
2. Copy the Housekeeper Agent folder into the new repo.
3. Add a README for the new repo.
4. Add a release ledger for the new repo.
5. Add templates and examples.
6. Add a repo transformation guide.
7. In Motif, keep a source manifest that points to the new repo.
8. Update Motif README to show that Housekeeper is externalized or mirrored.

## Local Mirror Strategy

Motif can keep a local copy of the Housekeeper folder as a project-specific mirror.

The external repo becomes the standard.

The local folder becomes the Motif-specific implementation.

## Related Files

- agents/housekeeper/README.md
- agents/housekeeper/housekeeper-source-manifest.md
- repo-manifest.md
