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
├── plugin/
│   └── motif.php
└── tests/
    └── README.md
```

## Status

Motif is currently in concept and product-definition stage.

Version: `v0.1.0-concept`
