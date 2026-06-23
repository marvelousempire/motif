---
type: framework
status: active
project: Motif
related:
  - Motif
  - Intent Pipeline
  - Semantic Mapping
  - RAG Strategy
---

# Keyword Combos

Keyword Combos are compact labels that classify an idea, feature, action, object, tool, or project.

They are designed to be easy to sort, search, tag, graph, and retrieve.

## Core Rule

Every Motif object should have:

1. A valid intent
2. At least one keyword combo

## Format Rule

Keyword combos should use PascalCase.

That means each word begins with a capital letter and has no spaces.

Examples:

- `#MakeBread`
- `#OpenDoor`
- `#FinishReport`
- `#ResearchThings`
- `#WetVacDry`

## Combo Type 1: VerbNoun

VerbNoun is the most direct action combo.

It combines:

- Verb = the action
- Noun = the target

Format:

```text
#VerbNoun
```

Examples:

- `#MakeBread`
- `#OpenDoor`
- `#FinishReport`
- `#ResearchThings`
- `#CookMeal`
- `#BuildApp`

## Why VerbNoun Works

VerbNoun is clear because it shows what is being done and what it is being done to.

It is useful for actions, tasks, features, workflows, and app ideas.

## Combo Type 2: ToolOutcome

ToolOutcome connects the tool being used to the outcome it helps create.

It combines:

- Tool = the system, object, method, or technology
- Outcome = what the tool produces or enables

Format:

```text
#ToolOutcome
```

Examples:

- `#PythonAutomate`
- `#WordPressPublish`
- `#ScannerDigitize`
- `#HammerBuild`
- `#ObsidianOrganize`
- `#WooCommerceMap`

## Combo Type 3: PurposeGain

PurposeGain connects the reason something exists to what is gained from it.

It combines:

- Purpose = the reason or direction
- Gain = what the user receives, learns, acquires, improves, or keeps

Format:

```text
#PurposeGain
```

Examples:

- `#LearnSkill`
- `#GainTrust`
- `#AcquireKnowledge`
- `#SaveTime`
- `#ReduceWaste`
- `#IncreaseClarity`

## Combo Type 4: ObjectIntent

ObjectIntent connects an object to what the object is intended to do.

It combines:

- Object = the thing, tool, document, system, or item
- Intent = the intended action or effect

Format:

```text
#ObjectIntent
```

Examples:

- `#WetVacDry`
- `#WetVacSoak`
- `#ReportInform`
- `#CameraInspire`
- `#SpreadsheetOptimize`
- `#ChecklistVerify`

## Choosing the Best Combo

Use `#VerbNoun` when the main thing is an action.

Use `#ToolOutcome` when the main thing is the tool being used.

Use `#PurposeGain` when the main thing is the value received.

Use `#ObjectIntent` when the main thing is an object and what it should do.

## Valid Intent Requirement

Every idea, feature, action, application, object, or project should point back to a valid intent.

The valid intent answers:

- Why is this being created?
- What is this trying to accomplish?
- What change should happen?
- What result should this support?

## Example Record

```yaml
type: feature
name: Report Finisher
valid_intent: Help the user complete reports faster and with less friction.
keyword_combos:
  - FinishReport
  - SaveTime
  - ChecklistVerify
pipeline_stage: Feature
related:
  - Intent Pipeline
  - PurposeGain
```

## Related Notes

- [[Motif]]
- [[Intent Pipeline]]
- [[Semantic Mapping]]
- [[RAG Strategy]]
