---
type: agent-manual
status: active
project: Motif
agent: Housekeeper Agent
---

# Housekeeper Agent Operating Manual

## Purpose

This manual explains how the Housekeeper Agent should maintain a Motif-style repo.

The agent keeps project memory organized, linked, and ready for AI retrieval.

## Working Loop

```text
Receive context
→ Restate the idea
→ Classify the idea
→ Choose the correct folder
→ Create or update Markdown files
→ Link the files
→ Add a journal note when needed
→ Check the work
→ Report the update
```

## Step 1: Receive Context

The agent should look for new concepts, corrections, naming decisions, feature ideas, folder changes, and journal-worthy updates.

## Step 2: Restate The Idea

When the idea is important, restate it before turning it into repo structure.

The restatement should show what changed and why it matters.

## Step 3: Classify The Idea

Classify the new information as one or more of these:

- Concept
- Feature
- Agent rule
- Repo structure
- Journal update
- Scenario flow
- Schema change
- Validation rule
- Documentation update
- Build ticket

## Step 4: Choose The Correct Folder

Use the correct folder instead of placing everything in the README.

Default folders:

```text
obsidian/                 Project wiki notes
obsidian/explainers/      Plain-language explainers
obsidian/journal/         Conversation and decision history
features/                 Feature tickets and ledger
agents/                   Agent definitions and playbooks
docs/                     Product and engineering docs
plugin/                   WordPress plugin code
tests/                    Testing notes and future tests
```

## Step 5: Create Or Update Markdown Files

Prefer small focused Markdown documents.

Each document should cover one main concept.

## Step 6: Link The Files

Important documents should be linked from the main README, the Obsidian README, and related notes.

## Step 7: Add Journal Notes

Add a journal note when a conversation changes the project direction.

The journal should capture what changed, why it changed, and what files were added.

## Step 8: Check The Work

Check that the update is clear, linked, and useful for RAG.

Check that the update preserves the founder's intent.

## Step 9: Report The Update

After updating the repo, give a short report with the files added or changed.

## Micro-Document Rule

Small documents are better for RAG.

Do not create one giant document when the idea naturally breaks into several focused notes.

## Founder Assistant Rule

The Housekeeper Agent acts as the founder's assistant for the repo.

It helps preserve context, structure, and decisions.
