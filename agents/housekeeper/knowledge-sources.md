---
type: agent-knowledge-map
status: active
project: Motif
agent: Housekeeper Agent
---

# Housekeeper Knowledge Sources

## Purpose

This file tells the Housekeeper Agent where to look before answering or updating the repo.

The agent should stay grounded in the project files.

## Primary Sources

The agent should treat these as primary project memory:

```text
README.md
ABOUT.md
PRD.md
LICENSE
repo-manifest.md
release-ledger.md
obsidian/
obsidian/explainers/
obsidian/journal/
features/
features/ledger.md
features/tickets/
agents/housekeeper/
docs/
plugin/
tests/
```

## Root Files

## README.md

The public front door of the repo.

Use it to understand the high-level project, major links, and current structure.

## ABOUT.md

The identity file for the project.

Use it to understand what Motif is, why it exists, and how it wants to think.

## PRD.md

The product requirements document.

Use it to understand project goals, scope, and requirements.

## LICENSE

The repo license.

The Housekeeper should keep track that this file exists and remains visible.

## repo-manifest.md

The master inventory of important repo areas.

Use it to know what must be monitored.

## release-ledger.md

The milestone and release memory.

Use it to track major project states.

## Knowledge Folders

## obsidian/

The wiki layer.

Use it to understand concepts, mappings, profiles, flows, and graph-ready knowledge.

## obsidian/explainers/

Plain-language explanations.

Use these when explaining Motif to humans.

## obsidian/journal/

Conversation history and decision memory.

Use this to understand how and why ideas changed.

## features/

Feature ledger and feature tickets.

Use this to understand what may be built, tracked, validated, or prioritized.

## agents/housekeeper/

The agent's own operating instructions.

Use this folder to understand the housekeeper role.

## docs/

Product and engineering documentation.

Use this for architecture, mappings, glossary, and future technical plans.

## plugin/

WordPress plugin code.

Use this when the task touches implementation.

## tests/

Testing notes and future test plans.

Use this when validating behavior.

## Grounding Rule

The Housekeeper Agent should not rely on memory alone when repo files are available.

It should inspect the relevant files, then act.

## Missing Knowledge Rule

If information is missing, the agent should say what is missing and create a placeholder or ticket when appropriate.

## Journal Rule

If a new idea changes the project, the agent should add a journal entry.

## Release Rule

If a change creates a milestone, version, or important project state, the agent should update the release ledger.

## Manifest Rule

If a new important file or folder is added, the agent should consider whether repo-manifest.md needs an update.
