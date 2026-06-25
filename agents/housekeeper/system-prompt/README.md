---
type: system-prompt-readme
status: active
project: Motif
agent: Housekeeper Agent
---

# Housekeeper System Prompt Folder

## Purpose

This folder is the primary instruction layer for the Housekeeper Agent.

It contains the first files the agent should read before doing repo work.

## Core Idea

The Housekeeper needs a clear order of operation.

That order is called the Firing Order.

The Firing Order tells the agent which instruction files to load first, second, third, and so on.

## Folder Structure

```text
agents/housekeeper/system-prompt/
├── README.md
├── 00-core-system-prompt.md
├── 01-firing-order.md
├── 02-load-sequence.md
├── 03-rule-stack.md
├── 04-context-stack.md
├── 05-output-contract.md
├── 06-drag-drop-order-interface.md
└── firing-order.json
```

## Rule

The agent should start here before reading the rest of the repo.

## First File

The first file is:

```text
00-core-system-prompt.md
```

## Firing Order File

The main order file is:

```text
01-firing-order.md
```

## Machine-Readable Order

The machine-readable version is:

```text
firing-order.json
```

## Why This Matters

A repo can contain many instructions.

Without a firing order, the agent may not know what matters first.

With a firing order, the agent can load instructions in a stable, repeatable way.

## Related Files

- ../README.md
- ../persona.md
- ../meticulous-stewardship.md
- ../knowledge-sources.md
- ../validation.md
