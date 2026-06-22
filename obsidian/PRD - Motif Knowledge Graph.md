---
type: prd
status: draft
version: v0.2.0-knowledge-graph
project: Motif
related:
  - Motif
  - RAG Strategy
  - Chunking Strategy
  - Indexing Strategy
  - Semantic Mapping
---

# PRD - Motif Knowledge Graph

## Product Name

Motif Knowledge Graph

## Product Type

Obsidian-first knowledge system for Motif.

## Core Phrase

**Live graph. Live data. Clean retrieval.**

## One-Line Summary

Motif Knowledge Graph turns the Motif repo into an Obsidian-friendly wiki and AI-ready knowledge base so concepts can be linked, chunked, indexed, retrieved, and reused by AI systems.

## Product Vision

Motif should not only be a WordPress and WooCommerce semantic remapping project. It should also be a living knowledge system.

The repo should work like a wiki, a product brain, a documentation vault, and a retrieval layer for AI.

This means every important idea should become a clear Markdown note that links to other notes using Obsidian wiki links.

## Why This Exists

AI systems work better when project knowledge is structured clearly.

Motif needs a system that helps with:

- RAG
- Indexing
- Chunking
- Search
- Retrieval
- Documentation
- Product planning
- Developer onboarding
- Decision tracking
- Concept mapping

Obsidian is useful because it naturally supports Markdown files, wiki links, graph view, backlinks, tags, and small modular notes.

## Main User Problem

The project is growing from a single idea into a system.

Without a knowledge graph, important ideas can become scattered across chat messages, README files, PRDs, issues, code comments, and docs.

The user needs one simple way to keep the project organized so AI can understand it later.

## Proposed Solution

Create an Obsidian-first folder in the repo that acts as the Motif vault.

The folder should contain small linked notes that describe Motif concepts, architecture, mappings, RAG strategy, indexing strategy, chunking strategy, and future product decisions.

## Primary Goals

1. Make Motif readable by humans.
2. Make Motif readable by AI.
3. Make every major concept linkable.
4. Make every major concept retrievable.
5. Make documentation graph-friendly.
6. Make the repo useful as an Obsidian vault.
7. Make future AI assistants understand the project fast.

## Non-Goals

This layer is not meant to replace the WordPress plugin.

This layer is not meant to replace WooCommerce.

This layer is not meant to be a full vector database by itself.

It prepares the knowledge so a vector database, RAG pipeline, or local AI tool can use it cleanly.

## Target Users

### Project Owner

Needs a clear wiki that captures the idea, decisions, and roadmap.

### AI Assistant

Needs clean notes that can be searched, chunked, embedded, and retrieved.

### Developer

Needs project context, architecture, and product rules.

### Obsidian User

Needs graph view, backlinks, and wiki-style navigation.

## Core Workflow

1. A concept is created.
2. The concept becomes a Markdown note.
3. The note gets a clear title.
4. The note links to related notes.
5. The note is small enough to retrieve cleanly.
6. The note can be indexed by AI.
7. The note appears in Obsidian graph view.

## Obsidian Structure

```text
obsidian/
├── README.md
├── Motif.md
├── WooCommerce Engine.md
├── Semantic Mapping.md
├── Idea Profile.md
├── RAG Strategy.md
├── Chunking Strategy.md
├── Indexing Strategy.md
└── PRD - Motif Knowledge Graph.md
```

## Knowledge Model

Motif knowledge should be organized into atomic notes.

An atomic note means one note equals one main concept.

Examples:

- [[Motif]]
- [[Semantic Mapping]]
- [[WooCommerce Engine]]
- [[Idea Profile]]
- [[RAG Strategy]]
- [[Chunking Strategy]]
- [[Indexing Strategy]]

## Linking Rules

Every note should link to at least one other note.

Every core note should link back to [[Motif]].

Every technical note should link to the strategy note it supports.

Every field mapping note should link to [[Semantic Mapping]].

## Frontmatter Rules

Important notes should use YAML frontmatter.

Recommended fields:

```yaml
type: concept
status: draft
version: v0.1.0
project: Motif
related:
  - Motif
  - Semantic Mapping
```

## Note Types

### Concept Note

Explains one idea.

Example: [[Semantic Mapping]]

### Strategy Note

Explains how Motif should do something.

Example: [[RAG Strategy]]

### Profile Note

Explains a motif profile.

Example: [[Idea Profile]]

### Mapping Note

Explains how fields translate from one meaning to another.

### Decision Note

Captures a product or architecture decision.

### PRD Note

Defines full product requirements.

## RAG Requirements

### RAG-1: Clean Retrieval

Each note must be focused enough that retrieving it gives useful context without unrelated noise.

### RAG-2: Stable Titles

File names should be stable because Obsidian links depend on note names.

### RAG-3: Clear Headings

Each note should use headings that make the content easy to split and understand.

### RAG-4: Related Links

Each note should include related wiki links.

### RAG-5: Plain Language

Notes should be simple and direct so AI systems can understand them quickly.

## Chunking Requirements

### CHUNK-1: One Concept Per Note

Each note should focus on a single concept.

### CHUNK-2: Short Paragraphs

Paragraphs should be short enough to embed and retrieve cleanly.

### CHUNK-3: Tables for Mappings

Field mappings should use Markdown tables.

### CHUNK-4: Avoid Mixed Notes

Do not combine unrelated topics into one note.

### CHUNK-5: Headings as Boundaries

Headings should act as natural chunk boundaries.

## Indexing Requirements

### INDEX-1: Title-Based Indexing

Each note title should be descriptive.

### INDEX-2: Link-Based Indexing

Wiki links should show relationships between concepts.

### INDEX-3: Metadata-Based Indexing

Frontmatter should help identify note type, status, version, and related concepts.

### INDEX-4: Table-Based Indexing

Mapping tables should be structured consistently so they can be parsed.

### INDEX-5: Future Vector Indexing

The Markdown notes should be ready for future vector search.

## Functional Requirements

### FR-1: Obsidian Vault Folder

The repo must include an `obsidian` folder that can be opened as a vault.

### FR-2: Wiki-Style Notes

The vault must use Obsidian-style links.

### FR-3: Knowledge Hub

The vault must include a main Motif note that acts as the entry point.

### FR-4: RAG Strategy Note

The vault must document how Motif should support retrieval augmented generation.

### FR-5: Chunking Strategy Note

The vault must document how notes should be split for AI use.

### FR-6: Indexing Strategy Note

The vault must document how notes should be named, linked, and prepared for search.

### FR-7: PRD Note

The vault must include this PRD as the head-to-toes product definition for the knowledge graph layer.

## Future Features

### Live Graph View

Use Obsidian graph view to show how Motif concepts connect.

### Live Data Notes

Create notes that can be refreshed from project files, GitHub issues, and future structured data.

### AI Context Packs

Create curated groups of notes for AI assistants.

### Chunk Manifest

Create a manifest that lists notes, chunk IDs, headings, and related concepts.

### Index Manifest

Create a manifest that helps AI systems know which files to index first.

### Decision Log

Create a folder for product and architecture decisions.

## Suggested Future Structure

```text
obsidian/
├── 00 - Maps/
├── 01 - Concepts/
├── 02 - Profiles/
├── 03 - RAG/
├── 04 - Architecture/
├── 05 - Decisions/
├── 06 - Roadmap/
└── 99 - Templates/
```

## Acceptance Criteria

The knowledge graph layer is successful when:

- The repo can be opened in Obsidian.
- The graph view shows meaningful links.
- AI can retrieve a focused note for each major concept.
- The PRD explains the system from top to bottom.
- New concepts can be added without breaking the structure.
- Motif can grow as both software and knowledge base.

## Success Metric

A new AI assistant should be able to understand Motif by reading the Obsidian folder first.

## Current Status

The first Obsidian wiki layer exists and includes core notes for Motif, WooCommerce Engine, Semantic Mapping, Idea Profile, RAG Strategy, Chunking Strategy, and Indexing Strategy.

## Related Notes

- [[Motif]]
- [[RAG Strategy]]
- [[Chunking Strategy]]
- [[Indexing Strategy]]
- [[Semantic Mapping]]
- [[Idea Profile]]
