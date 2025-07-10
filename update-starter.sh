#!/bin/bash

set -e

# Configuration
STARTER_REPO="https://github.com/splitphp/starter.git"
TMP_DIR=".starter_tmp"
PROJECT_DIR=$(pwd)
EXCLUDE_DIRS=("vendor" "modules" "core" ".git") # Directories you don’t want overwritten

echo "🚀 Updating SplitPHP starter files..."
echo "📥 Cloning latest starter from $STARTER_REPO..."

# Step 1: Clone latest version of starter
rm -rf "$TMP_DIR"
git clone --depth=1 "$STARTER_REPO" "$TMP_DIR" > /dev/null

# Step 2: Sync files selectively
echo "🔍 Comparing and copying updated files..."

copy_file() {
    local src="$1"
    local dest="$2"

    if [ ! -f "$src" ]; then
        echo "⚠️  Skipped missing file: $src"
        return
    fi

    if [ ! -f "$dest" ]; then
        echo "➕ New file: $dest"
        cp "$src" "$dest"
    elif ! cmp -s "$src" "$dest"; then
        echo "⚠️  Modified file: $dest"
        echo "   - Backup saved as ${dest}.bak"
        cp "$dest" "${dest}.bak"
        cp "$src" "$dest"
    fi
}

cd "$PROJECT_DIR/$TMP_DIR"
find . -type f ! -path "./.git/*" | while read -r file; do
    skip=false
    for dir in "${EXCLUDE_DIRS[@]}"; do
        if [[ "$file" == ./$dir/* ]]; then
            skip=true
            break
        fi
    done

    if [ "$skip" = false ]; then
        src="$TMP_DIR/$file"
        dest="$PROJECT_DIR/${file#./}"
        mkdir -p "$(dirname "$dest")"
        copy_file "$src" "$dest"
    fi
done

# Step 3: Clean up
cd "$PROJECT_DIR"
rm -rf "$TMP_DIR"

echo "✅ Starter files updated. Review any '.bak' files if needed."
