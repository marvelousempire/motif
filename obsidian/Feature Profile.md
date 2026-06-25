---
type: profile
status: active
project: Motif
related:
  - Motif
  - Intent Pipeline
  - Motif Object Schema
  - Keyword Combos
  - Idea Profile
---

# Feature Profile

## Purpose

Feature Profile defines how Motif treats features as first-class objects.

A feature is the bridge between an idea and an action.

## Pipeline Position

Intent → Idea → **Feature** → Action → Application → Purpose → Validated Execution

## What Is a Feature?

A feature is a capability that makes an idea tangible.

An idea may be broad.

A feature is more specific.

A feature explains what the system should be able to do.

## Feature Rule

Every feature must have:

- A valid intent
- A parent idea or parent intent
- At least one keyword combo
- A clear action path
- A purpose check
- A validated execution check

## Feature Schema

```yaml
type: feature
name: Feature name
valid_intent: What this feature is trying to accomplish
pipeline_stage: Feature
parent_intent: Intent that gave rise to this feature
parent_idea: Idea this feature supports
keyword_combos:
  - VerbNoun
  - PurposeGain
status: draft | active | testing | validated | retired
summary: Short description
purpose: Why this feature should exist
validated_execution: How to know this feature worked
related:
  - Intent Pipeline
  - Keyword Combos
```

## Feature Examples

### Report Finisher

```yaml
type: feature
name: Report Finisher
valid_intent: Help the user finish reports with less friction.
pipeline_stage: Feature
parent_intent: Complete important documents faster.
parent_idea: AI-assisted report workflow.
keyword_combos:
  - FinishReport
  - SaveTime
  - ChecklistVerify
status: draft
summary: A feature that guides a report from draft to finished state.
purpose: Reduce incomplete reports and help the user complete work with confidence.
validated_execution: A user can move from rough notes to final report without losing the thread.
```

### Idea Mapper

```yaml
type: feature
name: Idea Mapper
valid_intent: Help the user convert raw app ideas into structured Motif objects.
pipeline_stage: Feature
parent_intent: Organize ideas into buildable systems.
parent_idea: Motif as a thinking and product organization system.
keyword_combos:
  - MapIdeas
  - OrganizeThoughts
  - IncreaseClarity
status: draft
summary: A feature that turns loose ideas into linked intent, feature, action, and application records.
purpose: Make idea capture safer, faster, and easier to reuse.
validated_execution: A raw idea can become a structured Motif object with intent and keyword combos.
```

### Obsidian Graph Sync

```yaml
type: feature
name: Obsidian Graph Sync
valid_intent: Make Motif knowledge visible as a linked graph.
pipeline_stage: Feature
parent_intent: Help AI and humans understand project relationships.
parent_idea: Motif Knowledge Graph.
keyword_combos:
  - SyncGraph
  - ObsidianOrganize
  - LinkKnowledge
status: draft
summary: A feature that keeps Motif notes graph-ready for Obsidian.
purpose: Help the user see how ideas, features, actions, and applications connect.
validated_execution: New Motif notes appear in the Obsidian graph with meaningful links.
```

## Feature-to-Action Mapping

A feature should create one or more actions.

Example:

Feature: Report Finisher

Actions:

- Collect report notes
- Generate outline
- Draft sections
- Check missing parts
- Finalize report

## Feature-to-Purpose Check

Every feature should be checked against purpose.

Question:

Does this feature help fulfill the purpose, or is it only extra complexity?

## Feature-to-Validation Check

Every feature should have a clear validation test.

Question:

How will we know this feature worked?

## Related Notes

- [[Motif]]
- [[Intent Pipeline]]
- [[Motif Object Schema]]
- [[Keyword Combos]]
- [[Idea Profile]]
