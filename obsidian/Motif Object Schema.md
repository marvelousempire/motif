---
type: schema
status: active
project: Motif
related:
  - Motif
  - Intent Pipeline
  - Keyword Combos
  - Feature Profile
---

# Motif Object Schema

## Purpose

The Motif Object Schema defines the required fields every Motif object should carry.

This keeps ideas, features, actions, applications, tools, objects, projects, and profiles traceable inside the Motif system.

## Core Rule

Every Motif object must have a valid intent.

Every Motif object should have at least one keyword combo.

## Required Fields

```yaml
type: idea | feature | action | application | tool | object | project | profile
name: Clear object name
valid_intent: Clear sentence explaining what this object is trying to accomplish
pipeline_stage: Intent | Idea | Feature | Action | Application | Purpose | Validated Execution
keyword_combos:
  - VerbNoun
  - ToolOutcome
  - PurposeGain
  - ObjectIntent
status: draft | active | testing | validated | retired
related:
  - Motif
  - Intent Pipeline
```

## Recommended Fields

```yaml
summary: Short explanation of the object
source: Where the object came from
parent_intent: The intent that created this object
parent_idea: The idea this object came from
parent_feature: The feature this object supports
purpose: The reason this object should exist
validated_execution: How execution will be checked against purpose
created_at: Date or timestamp
updated_at: Date or timestamp
owner: Person, team, or system responsible
```

## Field Definitions

### type

Defines what kind of Motif object this is.

Examples:

- idea
- feature
- action
- application
- tool
- object
- project
- profile

### name

The clear name of the object.

Example:

```yaml
name: Report Finisher
```

### valid_intent

The required intent behind the object.

A valid intent explains what the object is trying to accomplish.

Example:

```yaml
valid_intent: Help the user complete reports faster and with less friction.
```

### pipeline_stage

Where the object sits in the Intent Pipeline.

Pipeline:

Intent → Idea → Feature → Action → Application → Purpose → Validated Execution

### keyword_combos

The tags used to classify and retrieve the object.

Example:

```yaml
keyword_combos:
  - FinishReport
  - SaveTime
  - ChecklistVerify
```

### status

The current state of the object.

Suggested values:

- draft
- active
- testing
- validated
- retired

### purpose

The reason the object should exist after the application or implementation becomes clear.

### validated_execution

The test that proves the work matches the purpose.

## Example: Feature Object

```yaml
type: feature
name: Report Finisher
valid_intent: Help the user complete reports faster and with less friction.
pipeline_stage: Feature
keyword_combos:
  - FinishReport
  - SaveTime
  - ChecklistVerify
status: draft
summary: A feature that guides a user through report completion.
parent_intent: Finish reports with less friction.
purpose: Reduce unfinished work and improve completion confidence.
validated_execution: The user can complete a report from draft to final without losing context.
related:
  - Intent Pipeline
  - Keyword Combos
  - Feature Profile
```

## Example: ObjectIntent Object

```yaml
type: object
name: Wet Vac
valid_intent: Remove water from a surface or space.
pipeline_stage: Action
keyword_combos:
  - WetVacDry
  - WetVacSoak
status: active
purpose: Help restore a wet area safely and quickly.
validated_execution: The wet area is dry enough for the next required step.
related:
  - Keyword Combos
  - ObjectIntent
```

## Validation Rule

A Motif object is incomplete if it does not have a valid intent.

A Motif object is weak if it does not have a keyword combo.

A Motif object becomes strong when it can trace:

Intent → Idea → Feature → Action → Application → Purpose → Validated Execution

## Related Notes

- [[Motif]]
- [[Intent Pipeline]]
- [[Keyword Combos]]
- [[Feature Profile]]
