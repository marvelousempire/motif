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
PRD.md
obsidian/
obsidian/explainers/
obsidian/journal/
features/
agents/housekeeper/
docs/
plugin/
tests/
```

## What Each Source Means

## README.md

The public front door of the repo.

Use it to understand the high-level project, major links, and current structure.

## PRD.md

The product requirements document.

Use it to understand project goals, scope, and requirements.

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
