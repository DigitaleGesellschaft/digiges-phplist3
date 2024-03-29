# Usage: update.sh <version>

set -eu -o pipefail

version=$1

git checkout upstream-releases
git rm -r phplist
rm -rf phplist
mkdir phplist
wget "https://sourceforge.net/projects/phplist/files/phplist/${version}/phplist-${version}.tgz/download" -O phplist-${version}.tgz
tar xf phplist-${version}.tgz --exclude='*.gitignore' --exclude='*.git' --strip 1  -C phplist
rm phplist-${version}.tgz
git add phplist
git commit -m "phplist-${version}.tgz"
git tag v${version}
git checkout main
git merge v${version}
git tag v${version}-digiges
