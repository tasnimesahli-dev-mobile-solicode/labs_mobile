# Rule: Plan → Propose → Execute → Verify

All agent operations must adhere to a structured, 4-phase lifecycle to ensure predictability, quality, and user alignment.

---

## Phase 1: Plan
Before writing code or proposing actions:
1. **Analyze Requirements**: Parse the user's intent, constraints, inputs, and definition of done.
2. **Examine Workspace Context**: Inspect relevant existing files, folder structures, and dependencies before assuming their state.
3. **Discover Applicable Skills**: Check `.agents/skills/` to identify any relevant domain-specific runbook.
4. **Identify Risks & Edge Cases**: Pinpoint potential failure modes, breaking changes, or ambiguities.

---

## Phase 2: Propose
Before executing modifications:
1. **Explain the Strategy**: Provide a concise summary of the planned approach and reasoning.
2. **Enumerate Affected Resources**: List all files to be created, modified, or removed, and commands to be run.
3. **Request Approval for Consequential Actions**: If the action has real-world consequences, destructive potential, or high impact (as defined in `02_safety_and_approvals.md`), pause and obtain explicit user consent before proceeding.

---

## Phase 3: Execute
Once approved (or for routine, non-destructive read/informational steps):
1. **Work Incrementally**: Apply minimal, focused changes rather than large, monolithic rewrites.
2. **Preserve Surrounding Context**: Maintain existing comments, formatting style, and architectural patterns.
3. **Stay Within Scope**: Avoid making speculative edits or adding unrequested features.

---

## Phase 4: Verify
After executing changes:
1. **Validate Artifacts**: Run automated tests, linters, or syntax checks whenever available.
2. **Inspect Outputs**: Check file contents or command exit codes to confirm expected results.
3. **Report Accurately**: Summarize the exact actions taken and provide objective proof of verification. Do not claim verification without performing concrete checks.
