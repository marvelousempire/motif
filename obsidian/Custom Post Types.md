---
type: concept
status: active
project: Motif
related:
  - Motif
  - Custom Profile Types
  - Custom Fields
  - Lightweight WordPress Runtime
---

# Custom Post Types

## Purpose

Custom Post Types let Motif create WordPress-native object types without forcing every object to be a normal post or WooCommerce product.

This gives Motif a clean way to create first-class objects like intents, ideas, features, actions, applications, purposes, and validations.

## Core Idea

Motif can use custom post types as storage containers for node-based objects.

Each custom post type can represent a kind of Motif node.

## Possible Motif Custom Post Types

Motif may eventually define custom post types such as:

- motif_intent
- motif_idea
- motif_feature
- motif_action
- motif_application
- motif_purpose
- motif_validation
- motif_profile
- motif_flow
- motif_scenario
- motif_journal

## Why Custom Post Types Matter

Custom post types give Motif:

- WordPress admin screens
- Native permissions
- Search support
- REST API support
- Metadata support
- Taxonomy support
- Import/export compatibility
- Familiar WordPress storage

## Example: motif_intent

```yaml
post_type: motif_intent
label: Intent
plural_label: Intents
purpose: Store the root intent node that other Motif objects connect to.
required_fields:
  - valid_intent
  - intent_strength
  - related_philosophy
```

## Example: motif_feature

```yaml
post_type: motif_feature
label: Feature
plural_label: Features
purpose: Store feature nodes that connect ideas to actions.
required_fields:
  - valid_intent
  - parent_idea
  - keyword_combos
  - validated_execution
```

## Relationship To WooCommerce

Motif does not have to choose only one path.

Motif can support both:

1. WooCommerce remapping
2. Native Motif custom post types

WooCommerce remapping is useful when the user wants to reuse a strong existing engine.

Custom post types are useful when the user wants a lighter, more purpose-built Motif system.

## Relationship To Obsidian

Each custom post type can also map to Obsidian notes.

Example:

```text
motif_feature → obsidian note
motif_intent → obsidian note
motif_scenario → obsidian note
```

This helps Motif support WordPress admin, AI retrieval, and Obsidian graph view at the same time.

## Key Rule

Custom post types should not become heavy by default.

They should stay clean, small, and mapped to the Motif Object Schema.

## Related Notes

- [[Motif]]
- [[Custom Profile Types]]
- [[Custom Fields]]
- [[Motif Object Schema]]
- [[Lightweight WordPress Runtime]]
