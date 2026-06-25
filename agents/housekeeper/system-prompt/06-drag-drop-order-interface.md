---
type: interface-concept
status: active
project: Motif
agent: Housekeeper Agent
firing_order: 06
---

# 06 - Drag Drop Order Interface

## Purpose

This note describes a future interface for changing the Housekeeper Agent firing order by drag and drop.

## Core Idea

The user should be able to see the instruction files as cards.

The user can drag the cards into the preferred order.

The saved order becomes the active firing order.

## Interface Concept

```text
[00] Core System Prompt
[01] Firing Order
[02] Load Sequence
[03] Rule Stack
[04] Context Stack
[05] Output Contract
[06] Drag Drop Order Interface
```

If the user drags Rule Stack above Load Sequence, the firing order changes.

## What The UI Updates

The interface should update:

```text
firing-order.json
01-firing-order.md
```

## Future UI Options

This could be built as:

- HTML page
- Local web app
- WordPress admin page
- Obsidian plugin view
- GitHub Pages tool
- JSON editor

## Required Behavior

The interface should:

- Show all instruction files
- Show current firing order
- Allow drag and drop reordering
- Save the new order
- Warn if required core files are missing
- Keep `00-core-system-prompt.md` protected unless advanced mode is enabled

## Protected Core Rule

The core system prompt should usually stay first.

Default protected file:

```text
00-core-system-prompt.md
```

## Why This Matters

Instruction order changes behavior.

A visual order tool makes it easier to manage agent behavior without editing Markdown by hand.
