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

## Why This Matters

WooCommerce already provides object storage, metadata, categories, tags, attributes, variations, inventory-like capacity fields, relationships, reviews, workflow actions, REST API support, WordPress admin integration, and a mature plugin ecosystem.

Motif asks: what if those same fields could represent **ideas** instead of products?

## Example Mapping

| WooCommerce Field | Motif Idea Field |
| --- | --- |
| Product | Idea |
| Product Name | Idea Title |
| Full Description | Full Idea Explanation |
| Short Description | Idea Summary |
| SKU | Idea Code / Reference ID |
| Regular Price | Contribution / Access Value / Funding Goal |
| Sale Price | Featured Value / Temporary Value |
| Stock Quantity | Available Slots / Capacity |
| Stock Status | Idea Availability |
| Categories | Idea Categories |
| Tags | Idea Themes |
| Attributes | Idea Traits |
| Variations | Idea Versions / Options |
| Reviews | Feedback |
| Related Products | Related Ideas |
| Upsells | Suggested Next Ideas |
| Cross-sells | Complementary Ideas |
| Add to Cart | Support This Idea / Select Idea / Add to Collection |
| Cart | Collection |
| Checkout | Submit / Support / Reserve / Fund |

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

## Node-Based Engine

Motif is a node-based engine.

Everything is a node.

The smallest meaningful node is intent.

Intent is the microscopic cell of Motif.

A group of related intents can begin forming a larger philosophy.

- [Node Intent Philosophy](obsidian/Node%20Intent%20Philosophy.md)

## Custom Types And Fields

Motif can support both a full plugin-engine mode and a lighter native WordPress mode.

The lighter mode can use custom profile types, custom post types, and custom fields to create a clean Motif system without needing every feature of a heavy plugin stack.

Read more:

- [Custom Profile Types](obsidian/Custom%20Profile%20Types.md)
- [Custom Post Types](obsidian/Custom%20Post%20Types.md)
- [Custom Fields](obsidian/Custom%20Fields.md)
- [Lightweight WordPress Runtime](obsidian/Lightweight%20WordPress%20Runtime.md)

## Plugin-Powered Concepts

Motif can be strengthened by patterns from common WordPress plugin types:

- Translation plugins for changing visible labels
- Language file systems for changing menu labels, button text, field labels, and UI wording
- Field mapping plugins for uploading files and mapping columns into Motif fields
- Shortcode token plugins for displaying or triggering Motif objects and flows with simple tokens

Read more:

- [Plugin Concepts](obsidian/Plugin%20Concepts.md)
- [Language File AI Agent](obsidian/Language%20File%20AI%20Agent.md)

## Scenario Flows

A Scenario Flow is a real-life scene that helps someone understand how Motif could fit into their life before they need a technical explanation.

It helps a person say:

```text
Oh, wait. I can see how I would use that.
```

Read more:

- [Scenario Flows](obsidian/Scenario%20Flows.md)

## Keyword Combo Explainers

Keyword Combos are smart hashtag labels that help Motif classify, sort, search, graph, and retrieve ideas, features, actions, tools, objects, and projects.

Start here:

- [Keyword Combos Explainer](obsidian/explainers/Keyword%20Combos%20Explainer.md)

Current active combo explainers:

- [VerbNoun Explainer](obsidian/explainers/VerbNoun%20Explainer.md)
- [ToolOutcome Explainer](obsidian/explainers/ToolOutcome%20Explainer.md)
- [PurposeGain Explainer](obsidian/explainers/PurposeGain%20Explainer.md)
- [ObjectIntentPurpose Explainer](obsidian/explainers/ObjectIntentPurpose%20Explainer.md)
- [IntentActivityFocus Explainer](obsidian/explainers/IntentActivityFocus%20Explainer.md)

Example tags:

```text
#MakeBread
#PythonAutomate
#SaveTime
#DroneSurveyRoof
#LearnPracticeGuitar
```

## Obsidian Knowledge Layer

Motif includes an Obsidian-friendly wiki layer inside the `obsidian/` folder.

Important notes:

- [Motif Object Schema](obsidian/Motif%20Object%20Schema.md)
- [Intent Pipeline](obsidian/Intent%20Pipeline.md)
- [Keyword Combos](obsidian/Keyword%20Combos.md)
- [Combo Types Roadmap](obsidian/Combo%20Types%20Roadmap.md)
- [Feature Profile](obsidian/Feature%20Profile.md)
- [Custom Profile Types](obsidian/Custom%20Profile%20Types.md)
- [Custom Post Types](obsidian/Custom%20Post%20Types.md)
- [Custom Fields](obsidian/Custom%20Fields.md)
- [Lightweight WordPress Runtime](obsidian/Lightweight%20WordPress%20Runtime.md)
- [Plugin Concepts](obsidian/Plugin%20Concepts.md)
- [Language File AI Agent](obsidian/Language%20File%20AI%20Agent.md)
- [Scenario Flows](obsidian/Scenario%20Flows.md)
- [Node Intent Philosophy](obsidian/Node%20Intent%20Philosophy.md)
- [PRD - Motif Knowledge Graph](obsidian/PRD%20-%20Motif%20Knowledge%20Graph.md)

## Project Journal

Motif now includes a journal layer so the repo can preserve the thinking trail, not only the final polished documents.

Start here:

- [Conversation Journal - Motif Origin](obsidian/journal/Conversation%20Journal%20-%20Motif%20Origin.md)
- [Journal Update - Custom Types and Lean WordPress](obsidian/journal/Journal%20Update%20-%20Custom%20Types%20and%20Lean%20WordPress.md)

The journal should capture:

- What was said
- What was discovered
- What changed
- What concepts are still forming
- What should be added next

## What Motif Preserves

- WooCommerce core database behavior
- Product post type functionality
- WooCommerce APIs
- Existing plugin compatibility where possible
- WordPress admin workflows
- Upgrade safety

## What Motif Transforms

- Admin labels
- Front-end labels
- Button text
- Menu names
- Product wording
- Taxonomy wording
- Email/order wording where appropriate
- Import/export labels where possible
- Optional REST/API aliases

## Product Types as Motifs

Motif may eventually support multiple semantic profiles:

- Idea
- Feature
- Action
- Application
- Project
- Case
- Initiative
- Opportunity
- Research Item
- Knowledge Record
- Inventory
- Repair
- Workflow
- Service
- Membership

Each profile becomes a different lens over the same engine.

## Runtime Modes

Motif can support more than one runtime path:

```text
Full Engine Mode → Use WooCommerce or another plugin as the base engine.
Motif Native Mode → Use custom post types and custom fields as the base engine.
Headless Mode → Use WordPress mainly as an API and admin backend.
Obsidian Sync Mode → Use WordPress and Obsidian together.
```

## Initial Goal

Create a seamless mapping process that can quickly translate WooCommerce's standard product fields into a new conceptual model without changing the original WooCommerce functionality.

## Repository Structure

```text
motif/
├── README.md
├── PRD.md
├── docs/
│   ├── vision.md
│   ├── architecture.md
│   ├── mappings.md
│   └── glossary.md
├── obsidian/
│   ├── explainers/
│   ├── journal/
│   ├── Intent Pipeline.md
│   ├── Keyword Combos.md
│   ├── Motif Object Schema.md
│   ├── Custom Profile Types.md
│   ├── Custom Post Types.md
│   ├── Custom Fields.md
│   ├── Lightweight WordPress Runtime.md
│   ├── Plugin Concepts.md
│   ├── Language File AI Agent.md
│   ├── Scenario Flows.md
│   ├── Node Intent Philosophy.md
│   └── PRD - Motif Knowledge Graph.md
├── plugin/
│   └── motif.php
└── tests/
    └── README.md
```

## Status

Motif is currently in concept and product-definition stage.

Version: `v0.1.0-concept`
