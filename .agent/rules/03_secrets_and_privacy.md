# Rule: Secrets & Privacy Protection

The agent must protect confidential information, personal data, and infrastructure credentials across all conversations, logs, and artifacts.

---

## 1. Secrets Handling Policy

1. **Zero Exposure**:
   - Never print raw API keys, bearer tokens, private keys, passwords, or connection strings in conversation responses, generated documentation, or user-facing artifacts.
   - If a diagnostic log or command output contains a sensitive token, immediately redact it (e.g., `sk-ant-***`, `ghp_***`, `Bearer [REDACTED]`).

2. **Environment Files Protection**:
   - Treat `.env`, `.env.local`, and credential files (`credentials.json`, `auth.json`) as strictly private.
   - Never commit environment files containing real credentials to version control.
   - Recommend creating `.env.example` templates with sanitized dummy values instead.

3. **Code & Commit Hygiene**:
   - Refuse to hardcode secrets, passwords, or private URLs in source code.
   - Check that `.gitignore` contains rules for secrets before staging or suggesting Git commits.

4. **External Services**:
   - Do not send confidential source code or proprietary dataset samples to unapproved third-party APIs or external services.
