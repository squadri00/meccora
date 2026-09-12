# meccora.com — Deploy Runbook

Same pattern as the Quotaire/Chantley projects: a GitHub repo, a `deploy.sh`
that lives on the server, and a manual `git push` + SSH + `bash deploy.sh`
each time something changes. No CI, no webhook — you stay in control of
when the live site updates.

## One-time setup

### A. Push this repo to GitHub

1. Go to <https://github.com/new>. Create an **empty** repo named
   `meccora-site` under your `squadri00` account — do **not** check
   "Add a README" or `.gitignore` (this repo already has both).
   Public is fine (no secrets or credentials live in this codebase).
2. Copy the URL GitHub gives you, e.g. `https://github.com/squadri00/meccora-site.git`.
3. In a terminal, in this folder (`D:\xampp\htdocs\meccora`):
   ```bash
   git remote add origin https://github.com/squadri00/meccora-site.git
   git push -u origin main
   ```
   First push may pop a browser window asking you to sign in to GitHub —
   that's normal, just approve it.

### B. Connect to the Hostinger server

Two ways — pick whichever is easier:

- **Browser Terminal (easiest, no setup):** hPanel → the meccora.com
  site → **Advanced → SSH Access** → there's a **Browser Terminal**
  button that opens an already-logged-in terminal in a new tab.
- **Your own terminal:** the same SSH Access page shows a line like
  `ssh -p 65002 u123456789@123.45.67.89` — copy it, run it, enter your
  Hostinger password when asked.

### C. Point the live folder at the GitHub repo

Once connected (either terminal), run:

```bash
cd ~/domains/meccora.com/public_html   # confirm this path in File Manager if unsure
git init
git remote add origin https://github.com/squadri00/meccora-site.git
git fetch origin
git reset --hard origin/main
chmod +x deploy.sh
```

`git reset --hard` overwrites tracked files to match the repo (safe here —
the live files already match what was pushed) but does **not** delete
anything on the server that isn't tracked in git.

## Every future update

1. On this PC: commit and `git push` the change (I can do this part when
   I make a fix, or you can).
2. SSH in (Part B above) and run:
   ```bash
   cd ~/domains/meccora.com/public_html
   bash deploy.sh
   ```

`deploy.sh` fetches, hard-resets to `origin/main`, and prints what
changed (or "already up to date").

## Notes

- `archive/` and the leftover `meccora new.zip` are `.gitignore`'d — they
  never get pushed and won't appear on the server through this flow.
- If you ever want *me* to run the SSH steps directly instead of you,
  I generated a dedicated deploy keypair on this machine
  (`~/.ssh/meccora_deploy_ed25519`) — add its public key to hPanel's
  SSH Access page and tell me your SSH host/port/username, and I can
  take over Part B/D going forward. Entirely optional.
