---
type: concept
status: active
project: Motif
related:
  - Motif
  - Semantic Mapping
  - Motif Object Schema
  - Scenario Flows
---

# Plugin Concepts

## Purpose

This note captures WordPress plugin concepts that can make Motif stronger.

Motif is not just one plugin idea.

Motif can learn from several kinds of WordPress plugins and combine their best patterns into one system.

## Core Plugin Inspirations

## 1. Translation Plugin Pattern

Some WordPress plugins let a user translate labels, words, and phrases across a site.

Motif can use this pattern to change the language of WooCommerce without changing the WooCommerce engine.

Example:

- Product becomes Idea
- Cart becomes Collection
- Reviews become Feedback
- Attributes become Traits

This supports the main Motif phrase:

**Change the lens. Keep the engine.**

## 2. Field Mapping Plugin Pattern

Some plugins let users upload files, match columns, and map those columns into WordPress fields.

Motif can use this pattern so users can upload spreadsheets, CSV files, JSON files, or other structured files and map them into Motif objects.

Example:

A user uploads a spreadsheet with columns like:

```text
Title, Description, Goal, Tool, Status, Category
```

Motif helps map those into:

```text
name, summary, valid_intent, keyword_combos, status, pipeline_stage
```

This turns external data into Motif nodes.

## 3. Shortcode Token Pattern

WordPress shortcodes let users insert powerful behavior using simple tokens.

Motif can use this pattern so a user can reference Motif objects, flows, maps, and fields without writing code.

Example shortcode-style ideas:

```text
[motif_object id="123"]
[motif_flow name="Intent Pipeline"]
[motif_combo tag="#FinishReport"]
[motif_map source="woocommerce" target="idea"]
```

The idea is simple:

A small token can unlock a larger system.

## How These Patterns Work Together

Motif can combine these three plugin patterns:

1. Translation changes the visible language.
2. Field mapping moves outside data into Motif.
3. Shortcode tokens display or trigger Motif structures.

Together, they make Motif more than a label changer.

They make Motif a flexible mapping engine.

## Example User Flow

A user has a CSV file full of ideas.

They upload it into Motif.

Motif asks which columns match the Motif Object Schema.

The user maps:

```text
Idea Name → name
Why → valid_intent
Type → pipeline_stage
Tags → keyword_combos
```

Then Motif creates nodes.

The user can display a node using a shortcode token.

The user can also translate the interface so the system feels like an idea engine instead of a product store.

## Motif Implication

Motif should eventually support:

- Label translation
- Field mapping
- File import
- Shortcode tokens
- Object rendering
- Flow rendering
- Graph-ready data
- Obsidian-ready notes
- AI-ready chunks

## Related Notes

- [[Motif]]
- [[Semantic Mapping]]
- [[Motif Object Schema]]
- [[Scenario Flows]]
- [[Intent Pipeline]]
