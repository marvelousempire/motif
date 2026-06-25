---
type: concept
status: active
project: Motif
related:
  - Motif
  - Motif Object Schema
  - Intent Pipeline
  - Custom Post Types
  - Custom Fields
---

# Custom Profile Types

## Purpose

Custom Profile Types define the different lenses Motif can apply to the same underlying engine.

A profile type is not only a design theme.

It is a meaning system.

It tells Motif what the objects should be called, what fields matter, what labels should change, what keyword combos are expected, and what kind of flow the user is building.

## Core Idea

The engine can stay the same while the profile changes.

A WooCommerce product, WordPress post, custom post type, or Motif node can be shown through different profile types.

Example:

```text
Same engine.
Different profile.
Different experience.
```

## Example Profile Types

Motif can support profiles such as:

- Idea Profile
- Feature Profile
- Action Profile
- Application Profile
- Project Profile
- Inventory Profile
- Repair Profile
- Knowledge Profile
- Research Profile
- Service Profile
- Membership Profile
- Intake Profile
- Workflow Profile

## What A Profile Controls

A custom profile type can control:

- Object names
- Menu labels
- Field labels
- Button labels
- Admin language
- Front-end language
- Required fields
- Optional fields
- Keyword combo rules
- Pipeline stage rules
- Scenario flow examples
- Validation rules

## Example: Idea Profile

```yaml
profile_type: idea
object_label: Idea
plural_label: Ideas
required_fields:
  - valid_intent
  - name
  - keyword_combos
pipeline_stage: Idea
common_combos:
  - VerbNoun
  - PurposeGain
```

## Example: Feature Profile

```yaml
profile_type: feature
object_label: Feature
plural_label: Features
required_fields:
  - valid_intent
  - parent_idea
  - keyword_combos
  - validated_execution
pipeline_stage: Feature
common_combos:
  - VerbNoun
  - ToolOutcome
  - IntentActivityFocus
```

## Example: Inventory Profile

```yaml
profile_type: inventory
object_label: Item
plural_label: Items
required_fields:
  - valid_intent
  - item_status
  - location
  - keyword_combos
common_combos:
  - ObjectIntentPurpose
  - ToolOutcome
```

## How This Connects To WordPress

A Motif profile can sit on top of:

- WooCommerce products
- WordPress posts
- Custom post types
- Custom fields
- Imported spreadsheet rows
- Obsidian notes
- Motif nodes

## Key Rule

The profile changes meaning.

The engine keeps structure.

## Why This Matters

Custom Profile Types let Motif become a flexible system instead of one fixed app.

One user can build an idea system.

Another user can build a repair system.

Another user can build an inventory system.

Another user can build a research system.

Motif does not need to become a different plugin every time.

It can use profile types to change the lens.

## Related Notes

- [[Motif]]
- [[Motif Object Schema]]
- [[Feature Profile]]
- [[Custom Post Types]]
- [[Custom Fields]]
