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

Keyword combos help classify ideas, features, tools, objects, actions, applications, intents, and projects.

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

## 4. ObjectIntentPurpose

ObjectIntentPurpose connects an object to what it should do and what purpose or focus it serves.

Format:

```text
#ObjectIntentPurpose
```

Examples:

- `#DroneSurveyRoof`
- `#PlannerOrganizeDay`
- `#CameraInspireAudience`
- `#WetVacDryFloor`
- `#ScannerDigitizeReceipts`
- `#ChecklistVerifySteps`

Use ObjectIntentPurpose when the main thing is a specific object, its intended action, and the target or purpose.

## 5. IntentActivityFocus

IntentActivityFocus connects the user's intent, the activity being performed, and the focus of that activity.

Format:

```text
#IntentActivityFocus
```

Examples:

- `#LearnPracticeGuitar`
- `#ImproveBuildWebsite`
- `#FinishWriteReport`
- `#ResearchCompareTools`
- `#OrganizeMapIdeas`
- `#ProtectStoreRecords`

Use IntentActivityFocus when the main thing is the intent, the activity, and where the effort is focused.

## Candidate Combo Types

These combo types are not final yet, but they are strong candidates.

## 6. TeamIntent

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

## 7. GoalObject

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

## 8. PurposeResult

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

## Retired Combo Types

## ObjectIntent

ObjectIntent was the two-part version of ObjectIntentPurpose.

Old format:

```text
#ObjectIntent
```

Old examples:

- `#WetVacDry`
- `#WetVacSoak`
- `#ReportInform`
- `#ChecklistVerify`

Reason retired:

ObjectIntentPurpose gives more detail by showing the object, the intent, and the purpose or focus.

## Recommended Top Three

The strongest three combo types right now are:

1. `#VerbNoun`
2. `#ToolOutcome`
3. `#ObjectIntentPurpose`

PurposeGain and IntentActivityFocus remain important for value and intent classification.

## Naming Rule

All keyword combos use PascalCase.

Correct:

```text
#MakeBread
#WetVacDryFloor
#PythonAutomate
#LearnPracticeGuitar
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
- If the object, its action, and its purpose matter most, use ObjectIntentPurpose.
- If the intent, activity, and focus matter most, use IntentActivityFocus.
- If the team or role matters most, consider TeamIntent.

## Related Notes

- [[Motif]]
- [[Keyword Combos]]
- [[Intent Pipeline]]
- [[Motif Object Schema]]
