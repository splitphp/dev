#!/bin/bash
# Script to sync your fork with the original repository (upstream)
# Exit immediately if any command fails
set -e
# Name of the upstream remote (change if you use a different name)
UPSTREAM_NAME=upstream
# Branch you want to sync (e.g., main or master)
BRANCH=main
echo "Fetching updates from $UPSTREAM_NAME..."
git fetch $UPSTREAM_NAME
echo "Checking out $BRANCH branch..."
git checkout $BRANCH
echo "Merging changes from $UPSTREAM_NAME/$BRANCH into local $BRANCH..."
git merge $UPSTREAM_NAME/$BRANCH
echo "Pushing updates to your fork (origin/$BRANCH)..."
git push origin $BRANCH
echo ":marca_de_verificação_branca: Fork is now up to date with upstream/$BRANCH."