---
type: repo-guide
status: active
project: Motif
agent: Housekeeper Agent
---

# Repo Transformation Guide

## Purpose

This guide explains how to reorganize another repo into a Motif-style repo.

The goal is to make any project easier to read, maintain, document, search, chunk, index, and use with AI.

## Core Idea

A messy repo can become a structured knowledge repo.

The Housekeeper Agent helps turn scattered files into a clear system.

## Target Structure

```text
project-root/
├── README.md
├── PRD.md
├── docs/
├── obsidian/
│   ├── explainers/
│   └── journal/
├── features/
│   ├── README.md
│   ├── ledger.md
│   └── tickets/
├── agents/
│   └── housekeeper/
├── src/ or plugin/
└── tests/
```

## Step 1: Inspect The Repo

Identify:

- Main README
- Product docs
- Source code
- Tests
- Notes
- Issues
- Planning files
- Duplicates
- Missing docs

## Step 2: Find The Project Core

Answer:

- What is this project?
- Who is it for?
- What does it do?
- What is the main intent?
- What are the major features?

## Step 3: Create The Knowledge Layer

Create:

```text
obsidian/
obsidian/explainers/
obsidian/journal/
```

Move or rewrite conceptual notes into Obsidian-friendly Markdown.

Use wiki-style links when useful.

## Step 4: Create The Feature Ledger

Create:

```text
features/README.md
features/ledger.md
features/tickets/
```

Every feature should get a small ticket.

## Step 5: Create The Agent Folder

Create:

```text
agents/housekeeper/
```

Add persona, operating manual, validation guides, and templates.

## Step 6: Update README

The README should explain:

- What the project is
- Main concept
- Important docs
- Feature ledger
- Agent folder
- Journal
- How to navigate the repo

## Step 7: Validate

Check:

- Are docs linked?
- Are features tracked?
- Is the README useful?
- Can an AI understand the repo quickly?
- Can a human find the important files?

## Migration Rule

Do not destroy old structure too fast.

First add the Motif-style structure.

Then gradually move or link old files into the new structure.

## Related Files

- agent-folder-template.md
- feature-ledger-guide.md
- templates/repo-audit-template.md
