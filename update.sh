# Usage: update.sh <version>

set -eu -o pipefail

version=$1

git checkout upstream-releases
git rm -r phplist
mkdir phplist
wget "https://sourceforge.net/projects/phplist/files/phplist/${version}/phplist-${version}.tgz/download" -O phplist-${version}.tgz
tar xf phplist-${version}.tgz --exclude='*.gitignore' --strip 1  -C phplist
rm phplist-${version}.tgz
git add phplist
git commit -m "phplist-${version}.tgz"
git tag v${version}
git checkout master
git merge v${version}
git tag v${version}-digiges
