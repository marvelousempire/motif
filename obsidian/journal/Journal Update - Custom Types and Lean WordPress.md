---
type: journal
status: active
project: Motif
related:
  - Custom Profile Types
  - Custom Post Types
  - Custom Fields
  - Lightweight WordPress Runtime
---

# Journal Update - Custom Types and Lean WordPress

## What Was Missing

The repo had strong notes for WooCommerce remapping, the Intent Pipeline, Keyword Combos, Obsidian, RAG, Scenario Flows, and plugin language mapping.

But it was still missing four important pieces:

1. Custom Profile Types
2. Custom Post Types
3. Custom Fields
4. Lightweight WordPress Runtime

## New Direction Captured

Motif should not only remap WooCommerce.

Motif should also support a lighter native WordPress mode.

That means Motif can use custom post types and custom fields to create its own clean object system.

## Why This Matters

WooCommerce is powerful, but it may be more engine than some Motif users need.

A user who only wants intent, ideas, features, actions, applications, purpose, and validation may not need cart, checkout, orders, shipping, or payment logic.

So Motif should support both paths:

```text
Full Engine Mode → Use WooCommerce or another plugin as the base engine.
Motif Native Mode → Use custom post types and custom fields as the base engine.
```

## Custom Profile Types

Custom Profile Types let Motif change the meaning system.

Examples:

- Idea Profile
- Feature Profile
- Inventory Profile
- Project Profile
- Research Profile
- Repair Profile
- Workflow Profile

## Custom Post Types

Custom Post Types let Motif create first-class WordPress objects.

Possible examples:

- motif_intent
- motif_idea
- motif_feature
- motif_action
- motif_application
- motif_purpose
- motif_validation
- motif_profile
- motif_scenario
- motif_journal

## Custom Fields

Custom Fields define the data each object needs.

Required fields should include:

- valid_intent
- pipeline_stage
- keyword_combos
- status
- related_nodes

Recommended fields should include:

- purpose
- validated_execution
- parent_intent
- parent_idea
- parent_feature
- profile_type
- scenario_flow

## Lightweight WordPress Runtime

Motif should be able to run on a lean WordPress setup.

The goal is to keep what Motif needs and minimize what it does not need.

Motif should keep:

- Custom post types
- Custom fields
- Taxonomies
- REST API
- User roles
- Admin screens
- Plugin architecture

Motif can minimize:

- Default posts when unused
- Comments when unused
- Unneeded themes
- Unneeded widgets
- Unneeded dashboard panels
- Unneeded commerce features

## New Notes Added

- [[Custom Profile Types]]
- [[Custom Post Types]]
- [[Custom Fields]]
- [[Lightweight WordPress Runtime]]

## Related Notes

- [[Motif]]
- [[Motif Object Schema]]
- [[Plugin Concepts]]
- [[Language File AI Agent]]
