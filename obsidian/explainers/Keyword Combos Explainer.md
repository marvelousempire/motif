---
type: explainer
status: active
project: Motif
audience: ages 10 to 25
related:
  - Keyword Combos
  - Intent Pipeline
  - Motif Object Schema
---

# Keyword Combos Explainer

## What Are Keyword Combos?

Keyword Combos are short hashtag labels that help Motif understand what something is really about.

Think of them like smart labels.

They are not just random tags.

They are tiny meaning packages.

A good keyword combo can tell you:

- What is happening
- What tool is being used
- What the user wants to gain
- What object is involved
- What the object is supposed to do
- What the focus is

## Why Motif Uses Them

Motif is a node-based system.

That means every idea, feature, action, application, object, tool, project, and intent can become a node.

But if every node is just sitting there with a long title, it can become hard to sort everything.

Keyword Combos make the nodes easier to understand at a glance.

They help people and AI quickly say:

"Oh, I see what this is doing."

## The Big Rule

Every Motif object should have:

1. A valid intent
2. At least one keyword combo

The valid intent explains the why.

The keyword combo gives the object a quick classification.

## Naming Style

Keyword Combos use PascalCase.

That means:

- Start each word with a capital letter
- Remove spaces
- Keep it readable
- Put a hashtag in front when using it as a tag

Examples:

```text
#MakeBread
#OpenDoor
#FinishReport
#DroneSurveyRoof
#LearnPracticeGuitar
```

Not like this:

```text
#makebread
#make_bread
#Make Bread
#drone-survey-roof
```

## Why This Is Powerful

Imagine you have 500 ideas.

Some are app ideas.

Some are project ideas.

Some are features.

Some are tools.

Some are tasks.

Keyword Combos help sort them without needing a long explanation every time.

A person can see `#FinishReport` and immediately understand the direction.

An AI can see `#PythonAutomate` and understand that Python is the tool and automation is the outcome.

Obsidian can show these tags as part of the graph.

## Current Combo Types

Motif currently has five active keyword combo types:

1. [[VerbNoun Explainer]]
2. [[ToolOutcome Explainer]]
3. [[PurposeGain Explainer]]
4. [[ObjectIntentPurpose Explainer]]
5. [[IntentActivityFocus Explainer]]

## Simple Way To Choose

Use `#VerbNoun` when you want to show an action.

Use `#ToolOutcome` when the tool matters most.

Use `#PurposeGain` when the value received matters most.

Use `#ObjectIntentPurpose` when an object, its action, and its purpose all matter.

Use `#IntentActivityFocus` when you want to show intent, activity, and focus.

## Example Motif Object

```yaml
type: feature
name: Report Finisher
valid_intent: Help the user finish reports faster and with less friction.
pipeline_stage: Feature
keyword_combos:
  - FinishReport
  - SaveTime
  - FinishWriteReport
status: draft
related:
  - Keyword Combos
  - Intent Pipeline
```

## The Main Idea

Keyword Combos let Motif take messy thoughts and give them clean handles.

Those handles help with:

- Sorting
- Searching
- Tagging
- RAG
- Obsidian graph view
- AI memory
- Feature planning
- Product building

## Related Notes

- [[Keyword Combos]]
- [[Intent Pipeline]]
- [[Motif Object Schema]]
- [[Combo Types Roadmap]]
