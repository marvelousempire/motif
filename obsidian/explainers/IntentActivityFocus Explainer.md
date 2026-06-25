---
type: explainer
status: active
project: Motif
combo_type: IntentActivityFocus
related:
  - Keyword Combos
  - Intent Pipeline
---

# IntentActivityFocus Explainer

## What It Means

IntentActivityFocus is a three-part keyword combo.

It tells us:

- What the user wants to accomplish
- What activity they are doing
- What the activity is focused on

This is useful when the human goal matters more than the object or tool.

## Format

```text
#IntentActivityFocus
```

## Examples

```text
#LearnPracticeGuitar
#ImproveBuildWebsite
#FinishWriteReport
#ResearchCompareTools
#OrganizeMapIdeas
#ProtectStoreRecords
```

## Real-Life Meaning

Take `#LearnPracticeGuitar`.

- Intent: Learn
- Activity: Practice
- Focus: Guitar

Take `#FinishWriteReport`.

- Intent: Finish
- Activity: Write
- Focus: Report

This helps Motif understand the user's real direction.

## When To Use It

Use IntentActivityFocus when the intent is the most important part.

Good cases:

- Learning something
- Improving something
- Finishing something
- Researching something
- Organizing something
- Protecting something

## Why It Works In Motif

Motif begins with intent.

IntentActivityFocus gives intent a structured tag that still shows activity and focus.

This means the node is not just a task.

It is a task with a clear human direction.

## Example Motif Record

```yaml
type: feature
name: Report Writing Guide
valid_intent: Help the user finish a report clearly and safely.
pipeline_stage: Feature
keyword_combos:
  - FinishWriteReport
  - IncreaseClarity
status: draft
purpose: Help the user move from notes to a finished report.
validated_execution: The user completes a report with all required sections.
```

## Related Notes

- [[Keyword Combos Explainer]]
- [[Keyword Combos]]
- [[Intent Pipeline]]
