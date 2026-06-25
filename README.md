# Motif

**Change the lens. Keep the engine.**

Motif is a WordPress/WooCommerce semantic remapping project. It keeps WooCommerce's proven product engine underneath while changing the labels, language, and experience so the system can represent something other than products — starting with **Ideas**.

WooCommerce focuses on products. Motif adds a translation layer so a product can be experienced as an idea, project, case, concept, initiative, or another structured object without breaking the underlying WooCommerce functionality.

## Core Concept

Motif does not rewrite WooCommerce.

Motif changes the lens through which WooCommerce is seen.

```text
WooCommerce Engine
        ↓
Semantic Translation Layer
        ↓
Motif Experience
```

## Root Project Files

- [About](ABOUT.md)
- [PRD](PRD.md)
- [License](LICENSE)
- [Repo Manifest](repo-manifest.md)
- [Release Ledger](release-ledger.md)

## Open Source Engine Strategy

Motif uses WordPress, WooCommerce, and other already-built open-source systems because they save precious time and can be privately hosted.

The goal is not to reinvent the wheel.

The goal is to use strong existing engines, keep control, keep private hosting options, and build the Motif layer on top.

Read more:

- [Open Source Engine Strategy](obsidian/Open%20Source%20Engine%20Strategy.md)

## Intent Pipeline

Motif begins with intent.

```text
Intent
→ Idea
→ Feature
→ Action
→ Application
→ Purpose
→ Validated Execution
```

Every Motif object must have a valid intent.

Every Motif object should have at least one keyword combo.

## Housekeeper Agent

Motif includes a Housekeeper Agent system for keeping the repo organized and reusable.

The Housekeeper must track README, ABOUT, PRD, LICENSE, releases, feature tickets, Obsidian notes, journals, docs, plugin code, tests, and repo structure.

Start here:

- [Housekeeper Agent](agents/housekeeper/README.md)
- [Housekeeper Persona](agents/housekeeper/persona.md)
- [Founder Operating Style](agents/housekeeper/founder-operating-style.md)
- [Meticulous Stewardship](agents/housekeeper/meticulous-stewardship.md)
- [Operating Manual](agents/housekeeper/operating-manual.md)
- [Knowledge Sources](agents/housekeeper/knowledge-sources.md)
- [Validation Guide](agents/housekeeper/validation.md)
- [Graceful Validation](agents/housekeeper/graceful-validation.md)
- [Repo Transformation Guide](agents/housekeeper/repo-transformation-guide.md)
- [Agent Folder Template](agents/housekeeper/agent-folder-template.md)
- [Feature Ledger Guide](agents/housekeeper/feature-ledger-guide.md)
- [Housekeeper External Repo Plan](agents/housekeeper/external-repo-plan.md)
- [Housekeeper Source Manifest](agents/housekeeper/housekeeper-source-manifest.md)

## Future Agent-Housekeeper Repo

The Housekeeper system is designed to become its own reusable repo.

Planned repo name:

```text
agent-housekeeper
```

Motif will keep a local project-specific mirror while pointing to the external standard once that repo exists.

## Feature Ledger

Motif tracks buildable work as small Markdown feature tickets.

Start here:

- [Feature Ledger README](features/README.md)
- [Feature Ledger](features/ledger.md)

Starter tickets:

- [FEAT-0001 - Housekeeper Agent](features/tickets/FEAT-0001-housekeeper-agent.md)
- [FEAT-0002 - Feature Ledger](features/tickets/FEAT-0002-feature-ledger.md)
- [FEAT-0003 - Repo Transformation Guide](features/tickets/FEAT-0003-repo-transformation-guide.md)
- [FEAT-0004 - Graceful Validation](features/tickets/FEAT-0004-graceful-validation.md)
- [FEAT-0005 - Memory Log System](features/tickets/FEAT-0005-memory-log-system.md)
- [FEAT-0006 - Meticulous Housekeeper](features/tickets/FEAT-0006-meticulous-housekeeper.md)

## Main Knowledge Links

- [Motif Object Schema](obsidian/Motif%20Object%20Schema.md)
- [Intent Pipeline](obsidian/Intent%20Pipeline.md)
- [Keyword Combos](obsidian/Keyword%20Combos.md)
- [Combo Types Roadmap](obsidian/Combo%20Types%20Roadmap.md)
- [Feature Profile](obsidian/Feature%20Profile.md)
- [Plugin Concepts](obsidian/Plugin%20Concepts.md)
- [Language File AI Agent](obsidian/Language%20File%20AI%20Agent.md)
- [Open Source Engine Strategy](obsidian/Open%20Source%20Engine%20Strategy.md)
- [Scenario Flows](obsidian/Scenario%20Flows.md)
- [Node Intent Philosophy](obsidian/Node%20Intent%20Philosophy.md)
- [Custom Profile Types](obsidian/Custom%20Profile%20Types.md)
- [Custom Post Types](obsidian/Custom%20Post%20Types.md)
- [Custom Fields](obsidian/Custom%20Fields.md)
- [Lightweight WordPress Runtime](obsidian/Lightweight%20WordPress%20Runtime.md)
- [PRD - Motif Knowledge Graph](obsidian/PRD%20-%20Motif%20Knowledge%20Graph.md)

## Project Journal

- [Conversation Journal - Motif Origin](obsidian/journal/Conversation%20Journal%20-%20Motif%20Origin.md)
- [Journal Update - Custom Types and Lean WordPress](obsidian/journal/Journal%20Update%20-%20Custom%20Types%20and%20Lean%20WordPress.md)
- [Journal Update - Housekeeper Agent and Feature Ledger](obsidian/journal/Journal%20Update%20-%20Housekeeper%20Agent%20and%20Feature%20Ledger.md)

## Runtime Modes

```text
Full Engine Mode → Use WooCommerce or another plugin as the base engine.
Motif Native Mode → Use custom post types and custom fields as the base engine.
Headless Mode → Use WordPress mainly as an API and admin backend.
Obsidian Sync Mode → Use WordPress and Obsidian together.
```

## Repository Structure

```text
motif/
├── README.md
├── ABOUT.md
├── PRD.md
├── LICENSE
├── repo-manifest.md
├── release-ledger.md
├── docs/
├── obsidian/
├── agents/
│   └── housekeeper/
├── features/
│   ├── ledger.md
│   └── tickets/
├── plugin/
└── tests/
```

## Status

Motif is currently in concept and product-definition stage.

Version: `v0.1.0-concept`
