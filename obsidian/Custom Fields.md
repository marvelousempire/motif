---
type: concept
status: active
project: Motif
related:
  - Motif
  - Motif Object Schema
  - Custom Post Types
  - Custom Profile Types
---

# Custom Fields

## Purpose

Custom Fields give Motif a safe way to store the exact data each object needs.

If custom post types define the object container, custom fields define the object's properties.

## Core Idea

Every Motif object should have a clear field schema.

The fields should be light, readable, exportable, and useful for AI retrieval.

## Required Motif Fields

Every Motif object should support these fields:

```yaml
valid_intent: Required intent statement
pipeline_stage: Intent | Idea | Feature | Action | Application | Purpose | Validated Execution
keyword_combos: List of keyword combo tags
status: draft | active | testing | validated | retired
related_nodes: Linked Motif objects
```

## Recommended Motif Fields

```yaml
summary: Short explanation
purpose: Why this object should exist
validated_execution: How success will be checked
parent_intent: Root intent
parent_idea: Related idea
parent_feature: Related feature
profile_type: Active Motif profile
scenario_flow: Related real-life scenario
node_weight: Importance or priority
node_scope: small | medium | large
```

## Field Groups

Motif custom fields can be grouped by purpose.

## 1. Identity Fields

These fields say what the node is.

- name
- type
- profile_type
- status

## 2. Intent Fields

These fields connect the node back to intent.

- valid_intent
- parent_intent
- related_intents
- philosophy_group

## 3. Pipeline Fields

These fields show where the node sits in the pipeline.

- pipeline_stage
- parent_idea
- parent_feature
- parent_action
- parent_application

## 4. Classification Fields

These fields help sorting and retrieval.

- keyword_combos
- tags
- categories
- node_scope
- node_weight

## 5. Validation Fields

These fields prove the work is aligned.

- purpose
- validation_rule
- validated_execution
- validation_status

## 6. AI And RAG Fields

These fields help AI systems use the data.

- summary
- chunk_hint
- embedding_text
- related_notes
- source_reference

## Why Custom Fields Matter

Custom fields let Motif become precise.

Without custom fields, Motif only has names and descriptions.

With custom fields, Motif can understand:

- Why something exists
- What it connects to
- What stage it belongs to
- What tags classify it
- How it should be validated
- How AI should retrieve it

## Example Feature Fields

```yaml
type: feature
name: Report Finisher
valid_intent: Help the user finish reports faster and with less friction.
pipeline_stage: Feature
keyword_combos:
  - FinishReport
  - FinishWriteReport
  - SaveTime
parent_idea: AI-assisted report workflow
purpose: Reduce unfinished work.
validated_execution: The user completes a report without losing context.
status: draft
```

## WordPress Implementation Paths

Motif can support custom fields through:

- Native post meta
- Registered meta fields
- Custom field UI
- REST-exposed fields
- JSON schema files
- Import mapping files
- Obsidian frontmatter

## Key Rule

Custom fields should stay structured but light.

Motif should avoid unnecessary field bloat.

Every field should serve intent, sorting, retrieval, validation, or display.

## Related Notes

- [[Motif]]
- [[Motif Object Schema]]
- [[Custom Post Types]]
- [[Custom Profile Types]]
