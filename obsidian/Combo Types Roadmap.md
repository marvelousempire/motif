---
type: roadmap
status: active
project: Motif
related:
  - Motif
  - Keyword Combos
  - Intent Pipeline
  - Motif Object Schema
---

# Combo Types Roadmap

## Purpose

Combo Types Roadmap tracks the keyword combo families Motif may support.

Keyword combos help classify ideas, features, tools, objects, actions, applications, and projects.

## Active Combo Types

These combo types are currently active.

## 1. VerbNoun

VerbNoun is the main action combo.

Format:

```text
#VerbNoun
```

Examples:

- `#MakeBread`
- `#OpenDoor`
- `#FinishReport`
- `#BuildApp`
- `#MapIdeas`

Use VerbNoun when the main thing is the action and the target.

## 2. ToolOutcome

ToolOutcome connects a tool to what it produces or enables.

Format:

```text
#ToolOutcome
```

Examples:

- `#PythonAutomate`
- `#WordPressPublish`
- `#ScannerDigitize`
- `#ObsidianOrganize`
- `#WooCommerceMap`

Use ToolOutcome when the main thing is the tool being used.

## 3. PurposeGain

PurposeGain connects purpose to what the user receives, learns, acquires, improves, or keeps.

Format:

```text
#PurposeGain
```

Examples:

- `#LearnSkill`
- `#GainTrust`
- `#AcquireKnowledge`
- `#SaveTime`
- `#IncreaseClarity`

Use PurposeGain when the main thing is value received.

## 4. ObjectIntent

ObjectIntent connects an object to what the object is intended to do.

Format:

```text
#ObjectIntent
```

Examples:

- `#WetVacDry`
- `#WetVacSoak`
- `#ReportInform`
- `#ChecklistVerify`
- `#SpreadsheetOptimize`

Use ObjectIntent when the main thing is a specific object and its intended function.

## Candidate Combo Types

These combo types are not final yet, but they are strong candidates.

## 5. TeamIntent

TeamIntent connects a team, person, role, or group to the intent they serve.

Format:

```text
#TeamIntent
```

Examples:

- `#DesignClarify`
- `#EngineeringBuild`
- `#SupportResolve`
- `#ResearchDiscover`
- `#MarketingAttract`

Use TeamIntent when the main thing is who is doing the work and why.

## 6. GoalObject

GoalObject connects a goal to the object the goal is working on.

Format:

```text
#GoalObject
```

Examples:

- `#FinishReport`
- `#CompleteApplication`
- `#CleanGarage`
- `#PrepareLaunch`

Note: GoalObject can overlap with VerbNoun. It should only become separate if Motif needs a clearer goal-focused classification.

## 7. PurposeResult

PurposeResult connects the reason something exists to the final result it should create.

Format:

```text
#PurposeResult
```

Examples:

- `#EducateConfidence`
- `#OrganizeClarity`
- `#AutomateCompletion`
- `#ProtectSafety`

Note: PurposeResult may overlap with PurposeGain. PurposeGain is more user-received. PurposeResult is more system-produced.

## Recommended Top Three

The strongest three combo types right now are:

1. `#VerbNoun`
2. `#ToolOutcome`
3. `#ObjectIntent`

PurposeGain remains important for value and benefit classification.

## Naming Rule

All keyword combos use PascalCase.

Correct:

```text
#MakeBread
#WetVacDry
#PythonAutomate
```

Incorrect:

```text
#makebread
#make_bread
#Make Bread
#wet-vac-dry
```

## Decision Rule

Choose the combo type based on what matters most:

- If the action matters most, use VerbNoun.
- If the tool matters most, use ToolOutcome.
- If the user gain matters most, use PurposeGain.
- If the object and its intended function matter most, use ObjectIntent.
- If the team or role matters most, consider TeamIntent.

## Related Notes

- [[Motif]]
- [[Keyword Combos]]
- [[Intent Pipeline]]
- [[Motif Object Schema]]
