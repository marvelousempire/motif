---
type: architecture
status: active
project: Motif
related:
  - Motif
  - Custom Post Types
  - Custom Fields
  - Plugin Concepts
---

# Lightweight WordPress Runtime

## Purpose

Lightweight WordPress Runtime is the Motif idea for running a very lean WordPress installation focused only on what Motif needs.

The goal is to keep WordPress useful while reducing unnecessary weight.

## Core Idea

Motif can run in two possible ways:

1. On top of a full plugin engine like WooCommerce
2. On top of a lightweight WordPress setup using custom post types and custom fields

The second path is for users who want Motif without extra commerce features.

## Why This Matters

WooCommerce is powerful, but not every Motif system needs carts, checkout, orders, shipping, or payment logic.

Some users may only need:

- Intent nodes
- Idea nodes
- Feature nodes
- Action nodes
- Application nodes
- Purpose nodes
- Validation nodes
- Custom fields
- Obsidian export
- RAG-ready data

A lightweight WordPress runtime can support that without unnecessary bloat.

## What Motif Keeps

Motif should keep the useful parts of WordPress:

- Custom post types
- Custom fields
- Taxonomies
- User roles
- REST API
- Admin screens
- Media library when needed
- Permalinks when needed
- Plugin architecture

## What Motif Can Minimize

A lean Motif setup can minimize or disable things that are not needed for the use case.

Examples:

- Default posts if not used
- Default comments if not used
- Unneeded themes
- Unneeded widgets
- Unneeded dashboard panels
- Unneeded block patterns
- Unneeded front-end features
- Unneeded commerce features
- Unneeded public templates

## Lean Runtime Modes

## 1. Full Engine Mode

Use WooCommerce or another plugin as the engine.

Best when the user wants to reuse a strong existing system.

## 2. Motif Native Mode

Use Motif custom post types and custom fields directly.

Best when the user wants a lighter system built around intent, ideas, features, and actions.

## 3. Headless Mode

Use WordPress mainly as an API and admin backend.

Best when another app, AI system, or front-end interface will display the data.

## 4. Obsidian Sync Mode

Use WordPress and Obsidian together.

Best when the user wants notes, graph view, and AI retrieval.

## Lightweight Architecture

```text
WordPress Core
        ↓
Motif Custom Post Types
        ↓
Motif Custom Fields
        ↓
Motif Profiles
        ↓
Motif Graph / API / Obsidian Export
```

## Lean Setup Goal

The Motif runtime should feel like a focused operating space, not a crowded WordPress install.

The admin should show only what the user needs.

Example admin areas:

- Intents
- Ideas
- Features
- Actions
- Applications
- Profiles
- Scenario Flows
- Journal
- Settings

## Why This Supports AI

A smaller system is easier for AI to understand.

If the database only contains Motif objects and useful fields, then indexing, retrieval, chunking, and graph building become cleaner.

## Safety Rule

Motif should remove clutter from the user experience without breaking WordPress core.

It should hide, disable, or avoid unused features rather than dangerously modifying WordPress itself.

## Future Build Ideas

Motif may eventually include:

- Lean install profile
- Admin menu cleanup
- Custom dashboard
- Custom post type registry
- Custom field registry
- Obsidian export
- JSON schema export
- REST API object layer
- RAG index manifest

## Related Notes

- [[Motif]]
- [[Custom Post Types]]
- [[Custom Fields]]
- [[Plugin Concepts]]
