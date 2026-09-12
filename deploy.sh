#!/bin/bash
# Runs ON the Hostinger server, in the meccora.com web root.
# Pulls the latest committed code and reports what changed.
set -euo pipefail

echo "==> Deploying meccora.com"
git fetch origin
before=$(git rev-parse HEAD)
git reset --hard origin/main
after=$(git rev-parse HEAD)

if [ "$before" = "$after" ]; then
  echo "==> Already up to date at $(git rev-parse --short HEAD)"
else
  echo "==> Updated $(git rev-parse --short "$before") -> $(git rev-parse --short "$after")"
  git log --oneline "$before..$after"
fi
