---
name: skill-template
description: Standard template and blueprint for creating new domain skills in the .agents/skills/ directory. Use this template when scaffolding a new capability.
---

# Skill Template

This template serves as a standardized blueprint for creating new skills. To add a new skill to the agent:
1. Create a new folder under `.agents/skills/<skill-name>/` (e.g., `.agents/skills/data-analysis/`).
2. Copy this file into that folder as `SKILL.md`.
3. Update the YAML frontmatter (`name` and `description`) and fill in the sections below.

---

## 1. Overview & Applicability

- **Name**: `[lowercase-hyphenated-skill-name]`
- **When to Use**: Describe specifically what user requests or task types should trigger this skill.
- **When NOT to Use**: Clarify scope boundaries to prevent false positives.

---

## 2. Prerequisites & Inputs

- **Required Context**: Information, files, or constraints needed from the user before starting.
- **Assumptions**: Baseline tools, environments, or dependencies assumed to be available.

---

## 3. Step-by-Step Runbook

Follow the standard 4-phase methodology:

### Step 1: Plan
- Enumerate the specific steps required for this task.
- Verify that necessary input files exist and are readable.

### Step 2: Propose
- Outline the proposed approach to the user.
- Highlight any consequential or destructive actions that require explicit user approval.

### Step 3: Execute
- Carry out the instructions incrementally.
- Adhere to clean practices, security standards, and minimal edits.

### Step 4: Verify
- Specify how to validate the result (e.g., test command, syntax check, or visual inspection).
- Confirm that outputs match the user's requirements.

---

## 4. Best Practices & Edge Cases

- **Common Pitfalls**: Document frequent mistakes or risks associated with this domain.
- **Troubleshooting**: Provide remedies for anticipated failure modes.

---

## 5. Deliverable Format

- Define the expected format of the final output (e.g., summary report, code files, formatted table, or checklist).
