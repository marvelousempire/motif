---
type: explainer
status: active
project: Motif
combo_type: ObjectIntentPurpose
related:
  - Keyword Combos
  - Intent Pipeline
---

# ObjectIntentPurpose Explainer

## What It Means

ObjectIntentPurpose is a three-part keyword combo.

It tells us:

- What object is involved
- What that object is supposed to do
- What purpose, target, or focus it serves

This combo replaced the older two-part ObjectIntent combo because it gives a fuller picture.

## Format

```text
#ObjectIntentPurpose
```

## Examples

```text
#DroneSurveyRoof
#PlannerOrganizeDay
#CameraInspireAudience
#WetVacDryFloor
#ScannerDigitizeReceipts
#ChecklistVerifySteps
```

## Real-Life Meaning

Take `#DroneSurveyRoof`.

- Object: Drone
- Intent: Survey
- Purpose or focus: Roof

Take `#WetVacDryFloor`.

- Object: WetVac
- Intent: Dry
- Purpose or focus: Floor

Now the tag tells a full mini-story.

## When To Use It

Use ObjectIntentPurpose when the object matters and you need more than a simple action label.

Good cases:

- A tool has a specific job
- A document has a specific purpose
- A device is being used for a clear target
- A workflow depends on an object doing something specific

## Why It Works In Motif

Motif is node-based.

Objects can be nodes too.

But an object by itself is not enough.

A wet vac is just a wet vac until Motif knows what it is supposed to do and why.

ObjectIntentPurpose turns the object into a meaningful node.

## Example Motif Record

```yaml
type: object
name: Wet Vac
valid_intent: Remove water from a surface or space.
pipeline_stage: Action
keyword_combos:
  - WetVacDryFloor
status: active
purpose: Help restore a wet area safely and quickly.
validated_execution: The floor is dry enough for the next required step.
```

## Related Notes

- [[Keyword Combos Explainer]]
- [[Keyword Combos]]
- [[Intent Pipeline]]
