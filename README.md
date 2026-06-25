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
- [PRD - Motif Knowledge Graph](obsidian/PRD%20-%20Motif%20Knowledge%20Graph.md)

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
- Project
- Case
- Initiative
- Opportunity
- Research Item
- Knowledge Record
- Service
- Membership

Each profile becomes a different lens over the same engine.

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
│   ├── Intent Pipeline.md
│   ├── Keyword Combos.md
│   ├── Motif Object Schema.md
│   └── PRD - Motif Knowledge Graph.md
├── plugin/
│   └── motif.php
└── tests/
    └── README.md
```

## Status

Motif is currently in concept and product-definition stage.

Version: `v0.1.0-concept`
