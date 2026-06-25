---
type: load-sequence
status: active
project: Motif
agent: Housekeeper Agent
firing_order: 02
---

# 02 - Load Sequence

## Purpose

The Load Sequence tells the Housekeeper Agent how to move from system instructions into repo understanding.

## Sequence

```text
System Prompt Folder
→ Root Project Files
→ Agent Rules
→ Feature Ledger
→ Obsidian Wiki
→ Journal History
→ Docs
→ Code
→ Tests
→ Validation
```

## Step 1: Load System Prompt Folder

Start with:

```text
agents/housekeeper/system-prompt/
```

Load files by firing order number.

## Step 2: Load Root Project Files

Read:

```text
README.md
ABOUT.md
PRD.md
repo-manifest.md
release-ledger.md
```

These files tell the agent what the repo is and what must be maintained.

## Step 3: Load Agent Rules

Read:

```text
agents/housekeeper/persona.md
agents/housekeeper/founder-operating-style.md
agents/housekeeper/meticulous-stewardship.md
agents/housekeeper/knowledge-sources.md
agents/housekeeper/validation.md
agents/housekeeper/graceful-validation.md
```

## Step 4: Load Feature State

Read:

```text
features/ledger.md
features/tickets/
```

## Step 5: Load Knowledge Layer

Read:

```text
obsidian/
obsidian/explainers/
obsidian/journal/
docs/
```

## Step 6: Load Build State

Read:

```text
plugin/
tests/
```

## Step 7: Act

After loading the right context, the agent may create, update, link, journal, or validate.

## Rule

Do not act before reading the files needed for the task.
